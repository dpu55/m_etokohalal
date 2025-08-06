<?php

if (!defined('IN_ECS')) {

    die('Hacking attempt');

}

error_reporting(E_ALL);

if (__FILE__ == '') {

    die('Fatal error code: 0');

}
// added by wandi
$img_url = 'https://eth.dpu21.com/';

/* 取得当前ecshop所在的根目录 */

define('ROOT_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));
/*
define('TOKEN', "leileiceshi");

define('ROOT_PATH_WAP', str_replace('https://m.etokohalal.com', '', ROOT_PATH));

if (!file_exists(ROOT_PATH . 'data/install.lock') && !file_exists(ROOT_PATH . 'includes/install.lock') && !defined('NO_CHECK_INSTALL')) {

    header("Location: ./install/index.php\n");

    exit;

}
*/
/* 初始化设置 */

@ini_set('memory_limit', '64M');

@ini_set('session.cache_expire', 180);

@ini_set('session.use_trans_sid', 0);

@ini_set('session.use_cookies', 1);

@ini_set('session.auto_start', 0);

@ini_set('display_errors', 0);

if (DIRECTORY_SEPARATOR == '\\') {

    @ini_set('include_path', '.;' . ROOT_PATH);

} else {

    @ini_set('include_path', '.:' . ROOT_PATH);

}

require ROOT_PATH . 'data/config.php';

if (defined('DEBUG_MODE') == false) {

    define('DEBUG_MODE', 0);

}

if (PHP_VERSION >= '5.1' && !empty($timezone)) {

    date_default_timezone_set($timezone);

}

$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];

if ('/' == substr($php_self, -1)) {

    $php_self .= 'index.php';

}

define('PHP_SELF', $php_self);

require ROOT_PATH . 'includes/inc_constant.php';

require ROOT_PATH . 'includes/cls_ecshop.php';

require ROOT_PATH . 'includes/cls_error.php';

require ROOT_PATH . 'includes/lib_time.php';

require ROOT_PATH . 'includes/lib_base.php';

require ROOT_PATH . 'includes/lib_common.php';

require ROOT_PATH . 'includes/lib_main.php';

require ROOT_PATH . 'includes/lib_insert.php';

require ROOT_PATH . 'includes/lib_goods.php';

require ROOT_PATH . 'includes/lib_article.php';

/* 对用户传入的变量进行转义操作。*/

if (!get_magic_quotes_gpc()) {

    if (!empty($_GET)) {

        $_GET = addslashes_deep($_GET);

    }

    if (!empty($_POST)) {

        $_POST = addslashes_deep($_POST);

    }

    $_COOKIE = addslashes_deep($_COOKIE);

    $_REQUEST = addslashes_deep($_REQUEST);

}

/* 创建 ECSHOP 对象 */

$ecs = new ECS($db_name, $prefix);

define('DATA_DIR', $ecs->data_dir());

define('IMAGE_DIR', $ecs->image_dir());

/* 初始化数据库类 */

require ROOT_PATH . 'includes/cls_mysql.php';

$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);

$db->set_disable_cache_tables(array($ecs->table('sessions'), $ecs->table('sessions_data'), $ecs->table('cart')));

$db_host = $db_user = $db_pass = $db_name = NULL;

/* 创建错误处理对象 */

$err = new ecs_error('message.dwt');

/* 载入系统参数 */

$_CFG = load_config();

/* 载入语言文件 */

//jack add

if (!empty($_REQUEST['lang'])) {

    $_SESSION['lang'] = $_REQUEST['lang'];

}

if (!empty($_SESSION['lang'])) {

    switch ($_SESSION['lang']) {

        case 'zh_cn':

            $_CFG['lang'] = "zh_cn";

            break;

        case 'zh_cn':

            $_CFG['lang'] = "zh_cn";

            break;

    }

} else {

    $_CFG['lang'] = "zh_cn";

    $_SESSION['lang'] = $_CFG['lang'];

}

require ROOT_PATH . 'languages/' . $_CFG['lang'] . '/common.php';

if ($_CFG['shop_closed'] == 1) {

    /* 商店关闭了，输出关闭的消息 */

    header('Content-type: text/html; charset=' . EC_CHARSET);

    die('<div style="margin: 150px; text-align: center; font-size: 14px"><p>' . $_LANG['shop_closed'] . '</p><p>' . $_CFG['close_comment'] . '</p></div>');

}

if (is_spider()) {

    /* 如果是蜘蛛的访问，那么默认为访客方式，并且不记录到日志中 */

    if (!defined('INIT_NO_USERS')) {

        define('INIT_NO_USERS', true);

        /* 整合UC后，如果是蜘蛛访问，初始化UC需要的常量 */

        if ($_CFG['integrate_code'] == 'ucenter') {

            $user =& init_users();

        }

    }

    $_SESSION = array();

    $_SESSION['user_id'] = 0;

    $_SESSION['user_name'] = '';

    $_SESSION['email'] = '';

    $_SESSION['user_rank'] = 0;

    $_SESSION['discount'] = 1.0;

}

if (!defined('INIT_NO_USERS')) {

    /* 初始化session */

    include ROOT_PATH . 'includes/cls_session.php';

    $sess = new cls_session($db, $ecs->table('sessions'), $ecs->table('sessions_data'));

    define('SESS_ID', $sess->get_session_id());

}

if (isset($_SERVER['PHP_SELF'])) {

    $_SERVER['PHP_SELF'] = htmlspecialchars($_SERVER['PHP_SELF']);

}

if (!defined('INIT_NO_USERS')) {

    /* 会员信息 */

    $user =& init_users();

    if (!isset($_SESSION['user_id'])) {

        /* 获取投放站点的名称 */

        $site_name = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : addslashes($_LANG['self_site']);

        $from_ad = !empty($_GET['ad_id']) ? intval($_GET['ad_id']) : 0;

        $_SESSION['from_ad'] = $from_ad;

        // 用户点击的广告ID

        $_SESSION['referer'] = stripslashes($site_name);

        // 用户来源

        unset($site_name);

        if (!defined('INGORE_VISIT_STATS')) {

            visit_stats();

        }

    }

    if (empty($_SESSION['user_id'])) {

        if ($user->get_cookie()) {

            /* 如果会员已经登录并且还没有获得会员的帐户余额、积分以及优惠券 */

            if ($_SESSION['user_id'] > 0) {

                update_user_info();

            }

        } else {

            $_SESSION['user_id'] = 0;

            $_SESSION['user_name'] = '';

            $_SESSION['email'] = '';

            $_SESSION['user_rank'] = 0;

            $_SESSION['discount'] = 1.0;

            if (!isset($_SESSION['login_fail'])) {

                $_SESSION['login_fail'] = 0;

            }

        }

    }

    /* 设置推荐会员 */

    if (isset($_GET['u'])) {

        set_affiliate();

    }

    /* session 不存在，检查cookie */

    if (!empty($_COOKIE['ECS']['user_id']) && !empty($_COOKIE['ECS']['password'])) {

        // 找到了cookie, 验证cookie信息

        $sql = 'SELECT user_id, user_name, password ' . ' FROM ' . $ecs->table('users') . " WHERE user_id = '" . intval($_COOKIE['ECS']['user_id']) . "' AND password = '" . $_COOKIE['ECS']['password'] . "'";

        $row = $db->GetRow($sql);

        if (!$row) {

            // 没有找到这个记录

            $time = time() - 3600;

            setcookie("ECS[user_id]", '', $time, '/');

            setcookie("ECS[password]", '', $time, '/');

        } else {

            $_SESSION['user_id'] = $row['user_id'];

            $_SESSION['user_name'] = $row['user_name'];

            update_user_info();

        }

    }

    if (isset($smarty)) {

        $smarty->assign('ecs_session', $_SESSION);

    }

}

if ((DEBUG_MODE & 1) == 1) {

    error_reporting(E_ALL);

} else {

    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

}

if ((DEBUG_MODE & 4) == 4) {

    include ROOT_PATH . 'includes/lib.debug.php';

}

if (preg_match('/MicroMessenger/i', $_SERVER['HTTP_USER_AGENT'])) {

    if (!isset($_SESSION["openid"]) || empty($_SESSION["openid"])) {

        //openid为空

        if (isset($_COOKIE["openid"]) && !empty($_COOKIE["openid"])) {

            $_SESSION["openid"] = $_COOKIE["openid"];

        } else {

            include_once ROOT_PATH . 'includes/modules/payment/wxpay.php';

            $payObj = new wxpay();

            $payObj->getOpenId();

        }

    }

}

/* 判断是否支持 Gzip 模式 */

if (!defined('INIT_NO_SMARTY') && gzip_enabled()) {

    ob_start('ob_gzhandler');

} else {

    ob_start();

}

/*hongyuvip.com mobile start*/

if (!defined('INIT_NO_SMARTY')) {

    header('Cache-control: private');

    header('Content-type: text/html; charset=' . EC_CHARSET);

    /* 创建 Smarty 对象。*/

    require ROOT_PATH . 'includes/cls_template.php';

    $smarty = new cls_template();

    $smarty->cache_lifetime = $_CFG['cache_time'];

    $ua = strtolower($_SERVER['HTTP_USER_AGENT']);

    $uachar = "/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|mobile)/i";

    if (($ua == '' || preg_match($uachar, $ua)) && !strpos(strtolower($_SERVER['REQUEST_URI']), 'wap')) {

        $smarty->template_dir = ROOT_PATH . 'themesmobile/68ecshopcom_mobile';

        $smarty->cache_dir = ROOT_PATH . 'temp/caches';

        $smarty->compile_dir = ROOT_PATH . 'temp/compiled';

    } else {

        $smarty->template_dir = ROOT_PATH . 'themesmobile/68ecshopcom_mobile';

        $smarty->cache_dir = ROOT_PATH . 'temp/caches';

        $smarty->compile_dir = ROOT_PATH . 'temp/compiled';

    }

    if ((DEBUG_MODE & 2) == 2) {

        $smarty->direct_output = true;

        $smarty->force_compile = true;

    } else {

        $smarty->direct_output = false;

        $smarty->force_compile = false;

    }

    $smarty->assign('lang', $_LANG);

    $smarty->assign('ecs_charset', EC_CHARSET);

    if (($ua == '' || preg_match($uachar, $ua)) && !strpos(strtolower($_SERVER['REQUEST_URI']), 'wap')) {

        if (!empty($_CFG['stylename'])) {

            $smarty->assign('ecs_css_path', 'themesmobile/' . $_CFG['template'] . '/style_' . $_CFG['stylename'] . '.css');

        } else {

            $smarty->assign('ecs_css_path', 'themesmobile/' . $_CFG['template'] . '/style.css');

        }

    } else {

        if (!empty($_CFG['stylename'])) {

            $smarty->assign('ecs_css_path', 'themesmobile/' . $_CFG['template'] . '/style_' . $_CFG['stylename'] . '.css');

        } else {

            $smarty->assign('ecs_css_path', 'themesmobile/' . $_CFG['template'] . '/style.css');

        }

    }

}

//jack add mobile
$pre_mobile_select = array(
    /* array('code'=>'60','name'=>'MALAYSIA'),
    array('code'=>'852','name'=>'HONG KONG'),
    array('code'=>'86','name'=>'CHINA'),
    array('code'=>'66','name'=>'THAILAND'),
    array('code'=>'84','name'=>'VIETNAM'),
    array('code'=>'65','name'=>'SINGAPORE'),
    array('code'=>'886','name'=>'TAIWAN'), */
    array('code'=>'62','name'=>'INDONESIA'),
    /* array('code'=>'1','name'=>'UNITED STATES'),
    array('code'=>'93','name'=>'AFGHANISTAN'),
    array('code'=>'355','name'=>'ALBANIA'),
    array('code'=>'213','name'=>'ALGERIA'),
    array('code'=>'16 84','name'=>'AMERICAN SAMOA'),
    array('code'=>'376','name'=>'ANDORRA'),
    array('code'=>'244','name'=>'ANGOLA'),
    array('code'=>'1 264','name'=>'ANQUILLA'),
    array('code'=>'672','name'=>'ANTARCTICA'),
    array('code'=>'1 268','name'=>'ANTIQUAN AND BARBUDA'),
    array('code'=>'54','name'=>'ARGENTINA'),
    array('code'=>'61','name'=>'AUSTRALIA'),
    array('code'=>'374','name'=>'ARMENIA'),
    array('code'=>'297','name'=>'ARUBA'),
    array('code'=>'43','name'=>'AUSTRIA'),
    array('code'=>'994','name'=>'AZERBAIJAN'),
    array('code'=>'1 242','name'=>'BAHAMAS'),
    array('code'=>'973','name'=>'BAHRAIN'),
    array('code'=>'880','name'=>'BANGLADESH'),
    array('code'=>'1 246','name'=>'BARBADOS'),
    array('code'=>'375','name'=>'BELARUS'),
    array('code'=>'32','name'=>'BELGIUM'),
    array('code'=>'501','name'=>'BELIZE'),
    array('code'=>'229','name'=>'BENIN'),
    array('code'=>'1 441','name'=>'BERMUDA'),
    array('code'=>'975','name'=>'BHUTAN'),
    array('code'=>'591','name'=>'BOLIVIA'),
    array('code'=>'387','name'=>'BOSNIA AND RZGOVINA'),
    array('code'=>'267','name'=>'BOTSW ANA'),
    array('code'=>'55','name'=>'BRAZIL'),
    array('code'=>'1 284','name'=>'BRITISH VIRGIN ISLAND'),
    array('code'=>'673','name'=>'BRUNEI'),
    array('code'=>'359','name'=>'BULGARIA'),
    array('code'=>'226','name'=>'BURKINA FASO'),
    array('code'=>'95','name'=>'BURMA'),
    array('code'=>'257','name'=>'BURUNDI'),
    array('code'=>'855','name'=>'CAMBODIA'),
    array('code'=>'237','name'=>'CAMEROON'),
    array('code'=>'1','name'=>'CANADA'),
    array('code'=>'238','name'=>'CAPE VERDE'),
    array('code'=>'1 345','name'=>'CAYMAN ISLAND'),
    array('code'=>'236','name'=>'CENTRAL AFRICAN REPUBLIC'),
    array('code'=>'235','name'=>'CHAD'),
    array('code'=>'56','name'=>'CHILE'),
    array('code'=>'61','name'=>'CHRISTMAS ISLAND'),
    array('code'=>'61','name'=>'COCOS ISLAND'),
    array('code'=>'57','name'=>'COLOMBIA'),
    array('code'=>'269','name'=>'COMOROS'),
    array('code'=>'682','name'=>'COOK ISLAND'),
    array('code'=>'506','name'=>'COSTARICA'),
    array('code'=>'385','name'=>'CROATIA'),
    array('code'=>'53','name'=>'CUBA'),
    array('code'=>'357','name'=>'CYPRUS'),
    array('code'=>'420','name'=>'CZECH REPUBLIC'),
    array('code'=>'243','name'=>'DEMOCRATIC REPUBLIC OF THE '),
    array('code'=>'253','name'=>'DJIBOUTI'),
    array('code'=>'1 767','name'=>'DOMINICA'),
    array('code'=>'1 809','name'=>'DOMINICAN REPUBLIC'),
    array('code'=>'593','name'=>'ECUADOR'),
    array('code'=>'20','name'=>'EGYPT'),
    array('code'=>'503','name'=>'ELSAVADOR'),
    array('code'=>'240','name'=>'EQUATORIAL GUINEA'),
    array('code'=>'291','name'=>'ERITREA'),
    array('code'=>'372','name'=>'ESTONIA'),
    array('code'=>'251','name'=>'ETHIOPIA'),
    array('code'=>'500','name'=>'FALKLAND ISLAND'),
    array('code'=>'298','name'=>'FAROE ISLAND'),
    array('code'=>'679','name'=>'FIJI'),
    array('code'=>'358','name'=>'FINLAND'),
    array('code'=>'33','name'=>'FRANCE'),
    array('code'=>'689','name'=>'FRENCH POLYNESIA'),
    array('code'=>'241','name'=>'GABON'),
    array('code'=>'220','name'=>'GAMBIA'),
    array('code'=>'995','name'=>'GEORGIA'),
    array('code'=>'49','name'=>'GERMANY'),
    array('code'=>'233','name'=>'GHANA'),
    array('code'=>'350','name'=>'GIBRALTAR'),
    array('code'=>'30','name'=>'GREECE'),
    array('code'=>'299','name'=>'GREENLAND'),
    array('code'=>'1 473','name'=>'GRENADA'),
    array('code'=>'1 671','name'=>'GUAM'),
    array('code'=>'502','name'=>'GUATEMALA'),
    array('code'=>'224','name'=>'GUINEA'),
    array('code'=>'245','name'=>'GUINEA-BISSAU'),
    array('code'=>'592','name'=>'GUYANA'),
    array('code'=>'509','name'=>'HAITI'),
    array('code'=>'39','name'=>'HOLY SEE (VATICAN CITY)'),
    array('code'=>'504','name'=>'HONDURAS'),
    array('code'=>'36','name'=>'HUNGARY'),
    array('code'=>'354','name'=>'ICELAND'),
    array('code'=>'91','name'=>'INDIA'),
    array('code'=>'98','name'=>'IRAN'),
    array('code'=>'964','name'=>'IRAQ'),
    array('code'=>'353','name'=>'IRELAND'),
    array('code'=>'44','name'=>'ISLE OF MAN'),
    array('code'=>'972','name'=>'ISRAEL'),
    array('code'=>'39','name'=>'ITALY'),
    array('code'=>'225','name'=>'IVORY COAST'),
    array('code'=>'1 876','name'=>'JAMAICA'),
    array('code'=>'81','name'=>'JAPAN'),
    array('code'=>'','name'=>'JERSEY'),
    array('code'=>'962','name'=>'JORDAN'),
    array('code'=>'7','name'=>'KAZAKHASTAN'),
    array('code'=>'254','name'=>'KENYA'),
    array('code'=>'686','name'=>'KIRIBATI'),
    array('code'=>'965','name'=>'KUWAIT'),
    array('code'=>'996','name'=>'KYRGYSTAN'),
    array('code'=>'856','name'=>'LAOS'),
    array('code'=>'371','name'=>'LATVIA'),
    array('code'=>'961','name'=>'LEBANON'),
    array('code'=>'266','name'=>'LESOTHO'),
    array('code'=>'231','name'=>'LIBERIA'),
    array('code'=>'218','name'=>'LIBYA'),
    array('code'=>'423','name'=>'LIECHTENSTEIN'),
    array('code'=>'370','name'=>'LITHUANIA'),
    array('code'=>'352','name'=>'LUXEMBURG'),
    array('code'=>'853','name'=>'MACAU'),
    array('code'=>'389','name'=>'MACEDONIA'),
    array('code'=>'261','name'=>'MADAGASKAR'),
    array('code'=>'265','name'=>'MALAWI'),
    array('code'=>'960','name'=>'MALDIVES'),
    array('code'=>'223','name'=>'MALI'),
    array('code'=>'356','name'=>'MALTA'),
    array('code'=>'692','name'=>'MARSHALL ISLANDS'),
    array('code'=>'222','name'=>'MAURITANIA'),
    array('code'=>'230','name'=>'MAURITIUS'),
    array('code'=>'262','name'=>'MAYOTE'),
    array('code'=>'52','name'=>'MEXICO'),
    array('code'=>'691','name'=>'MICRONESIA'),
    array('code'=>'373','name'=>'MOLDOVA'),
    array('code'=>'377','name'=>'MONACO'),
    array('code'=>'976','name'=>'MONGOLIA'),
    array('code'=>'382','name'=>'MONTENEGRO'),
    array('code'=>'1 664','name'=>'MONTSERRAT'),
    array('code'=>'212','name'=>'MORROCO'),
    array('code'=>'258','name'=>'MOZAMBIQUE'),
    array('code'=>'264','name'=>'NAMIBIA'),
    array('code'=>'674','name'=>'NAURU'),
    array('code'=>'977','name'=>'NEPAL'),
    array('code'=>'31','name'=>'NETHERLANDS'),
    array('code'=>'599','name'=>'NETHERLANDS ANTILLES'),
    array('code'=>'687','name'=>'NEW CALEDONIA'),
    array('code'=>'64','name'=>'NEW ZEALAND'),
    array('code'=>'505','name'=>'NICARAGUA'),
    array('code'=>'227','name'=>'NIGER'),
    array('code'=>'234','name'=>'NIGERIA'),
    array('code'=>'683','name'=>'NIUE'),
    array('code'=>'672','name'=>'NORFOLK ISLANDS'),
    array('code'=>'850','name'=>'NORTH KOREA'),
    array('code'=>'1 670','name'=>'NORTHERN MARIANA ISLANDS'),
    array('code'=>'47','name'=>'NORWAY'),
    array('code'=>'968','name'=>'OMAN'),
    array('code'=>'92','name'=>'PAKISTAN'),
    array('code'=>'680','name'=>'PALAU'),
    array('code'=>'507','name'=>'PANAMA'),
    array('code'=>'675','name'=>'PAPUA NEW GUINEA'),
    array('code'=>'595','name'=>'PARAGUAY'),
    array('code'=>'51','name'=>'PERU'),
    array('code'=>'63','name'=>'PHILIPPINES'),
    array('code'=>'870','name'=>'PITCAIRN ISLANDS'),
    array('code'=>'48','name'=>'POLAND'),
    array('code'=>'351','name'=>'PORTUGAL'),
    array('code'=>'1','name'=>'PUERTORICO'),
    array('code'=>'974','name'=>'QATAR'),
    array('code'=>'242','name'=>'REPUBLIC OF CONGO'),
    array('code'=>'40','name'=>'ROMANIA'),
    array('code'=>'7','name'=>'RUSSIA'),
    array('code'=>'250','name'=>'RWANDA'),
    array('code'=>'590','name'=>'SAINT BARTHELEMY'),
    array('code'=>'290','name'=>'SAINT HELENA'),
    array('code'=>'1 869','name'=>'SAINT KITTS AND NEVIS'),
    array('code'=>'1 758','name'=>'SAINT LUCIA'),
    array('code'=>'1 599','name'=>'SAINT MARTIN'),
    array('code'=>'508','name'=>'SAINT PIERRE AND MIQUELON'),
    array('code'=>'1 784','name'=>'SAINT VINCENT AND THE '),
    array('code'=>'685','name'=>'SAMOA'),
    array('code'=>'378','name'=>'SAN MARINO'),
    array('code'=>'239','name'=>'SAO TOME AND PRINCIPE'),
    array('code'=>'966','name'=>'SAUDI ARABIA'),
    array('code'=>'221','name'=>'SENEGAL'),
    array('code'=>'381','name'=>'SERBIA'),
    array('code'=>'248','name'=>'SEYCHELLES'),
    array('code'=>'232','name'=>'SIERRA LEONE'),
    array('code'=>'421','name'=>'SLOVAKIA'),
    array('code'=>'386','name'=>'SLOVENIA'),
    array('code'=>'677','name'=>'SOLOMON ISLANDS'),
    array('code'=>'252','name'=>'SOMALIA'),
    array('code'=>'27','name'=>'SOUTH AFRICA'),
    array('code'=>'82','name'=>'SOUTH KOREA'),
    array('code'=>'34','name'=>'SPAIN'),
    array('code'=>'94','name'=>'SRILANKA'),
    array('code'=>'249','name'=>'SUDAN'),
    array('code'=>'597','name'=>'SURINAME'),
    array('code'=>'','name'=>'SVALBARD'),
    array('code'=>'268','name'=>'SWAZILAND'),
    array('code'=>'46','name'=>'SWEDEN'),
    array('code'=>'41','name'=>'SWITZERLAND'),
    array('code'=>'963','name'=>'SYRIA'),
    array('code'=>'992','name'=>'TAJIKISTAN'),
    array('code'=>'255','name'=>'TANZANIA'),
    array('code'=>'670','name'=>'TIMOR-LESTE'),
    array('code'=>'228','name'=>'TOGO'),
    array('code'=>'690','name'=>'TOKELAU'),
    array('code'=>'676','name'=>'TONGA'),
    array('code'=>'1 868','name'=>'TRINIDAD AND TOBAGO'),
    array('code'=>'216','name'=>'TUNISIA'),
    array('code'=>'90','name'=>'TURKEY'),
    array('code'=>'993','name'=>'TURKMENISTAN'),
    array('code'=>'1 649','name'=>'TURKS AND CAICOS ISLANDS'),
    array('code'=>'688','name'=>'TUVALU'),
    array('code'=>'256','name'=>'UGANDA'),
    array('code'=>'380','name'=>'UKRAINE'),
    array('code'=>'971','name'=>'UNITED EMIRAT ARAB'),
    array('code'=>'44','name'=>'UNITED KINGDOM'),
    array('code'=>'598','name'=>'URUGUAY'),
    array('code'=>'1 340','name'=>'US VIRGIN ISLANDS'),
    array('code'=>'998','name'=>'UZBEKISTAN'),
    array('code'=>'678','name'=>'VANUATU'),
    array('code'=>'58','name'=>'VENEZUELA'),
    array('code'=>'681','name'=>'WALLS AND FUTUNA'),
    array('code'=>'967','name'=>'YEMEN'),
    array('code'=>'260','name'=>'ZAMBIA'),
    array('code'=>'263','name'=>'ZIMBABWE') */
);
//end