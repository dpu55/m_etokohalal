<?php


define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(dirname(__FILE__) . '/includes/lib_v_user.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

if($_CFG['is_distrib'] == 0)
{
	show_message($_LANG['m_670'],$_LANG['back_home'],'index.php'); 
}

if($_SESSION['user_id'] == 0)
{
	ecs_header("Location: ./\n");
    exit;	 
}

$is_distribor = is_distribor($_SESSION['user_id']);
if($is_distribor != 1)
{
	show_message($_LANG['m_671'],$_LANG['back_home'],'index.php');
	exit;
}

if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'act_tixian')
{
	$tixian = array(
            'deposit_money' => empty($_POST['deposit_money']) ? '' : $_POST['deposit_money'],
            'real_name'     => empty($_POST['real_name']) ? '' : compile_str(trim($_POST['real_name'])),
            'account_name'  => empty($_POST['account_name']) ? '' : compile_str($_POST['account_name']),
            'bank_account'  => empty($_POST['bank_account']) ? '' : compile_str($_POST['bank_account']),
            'phone'         => empty($_POST['phone']) ? '' : compile_str(trim($_POST['phone'])),
            'remark'        => empty($_POST['remark']) ? '' : compile_str(trim($_POST['remark'])),
            'add_time'      => gmtime(),
            'user_id'       => $_SESSION['user_id'],
            'status'        => 0,
        );
	if($tixian['deposit_money'] <= 0)
	{
		show_message($_LANG['m_677']); 
	}
	if($tixian['real_name'] == '' || $tixian['account_name'] == '' || $tixian['bank_account'] == '')
	{
		show_message($_LANG['m_678']); 
	}
	if(!is_telephone($tixian['phone']))
	{
		show_message('Incorrect format of mobile phone number'); 
	}
	$user_money = get_user_money_by_user_id($_SESSION['user_id']); 
	if($tixian['deposit_money'] > $user_money)
	{
		show_message($_LANG['m_679']);
	}
	$GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('deposit'), $tixian, 'INSERT');
	$error_no = $GLOBALS['db']->errno();
    if ($error_no > 0)
    {
        show_message($GLOBALS['db']->errorMsg());
    }
	else
	{
		//提现申请提交成功后，把信息提交到用户提现信息表中
		$sql = "INSERT INTO " . $GLOBALS['ecs']->table('deposit') . "(`real_name`,`account_name`,`bank_account`,`phone`,`remark`,`user_id`) values('".$tixian['real_name']."','".$tixian['account_name']."','".$tixian['bank_account']."','".$tixian['phone']."','".$tixian['remark']."','" . $_SESSION['user_id'] . "')";
		$GLOBALS['db']->query($sql);
		show_message($_LANG['m_680'],$_LANG['m_673'],'v_user.php');
	}
}

$count = get_deposit_count($_SESSION['user_id']);
if($count > 0)
{
	$smarty->assign('deposit_list',get_all_deposit_by_user_id($_SESSION['user_id']));
	$tpl = "v_user_tixiantwo.dwt";
}
else
{
	$tpl = "v_user_tixian.dwt";
}


if (!$smarty->is_cached('$tpl', $cache_id))
{
    assign_template();

    $position = assign_ur_here();
    $smarty->assign('page_title',      $position['title']);    // 页面标题
    $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置

    /* meta information */
    $smarty->assign('keywords',        htmlspecialchars($_CFG['shop_keywords']));
    $smarty->assign('description',     htmlspecialchars($_CFG['shop_desc']));
	
	$user_money = get_user_money_by_user_id($_SESSION['user_id']); //用户余额
	$smarty->assign('user_money',$user_money);
	$smarty->assign('user_id',$_SESSION['user_id']);
}
$smarty->display($tpl, $cache_id);

//用户是否有提现信息
function get_deposit_count($user_id)
{
	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('deposit') . " WHERE user_id = '$user_id'";
	return $GLOBALS['db']->getOne($sql);
}

//获取所有提现信息
function get_all_deposit_by_user_id($user_id)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('deposit') . " WHERE user_id = '$user_id'";
	$list = $GLOBALS['db']->getAll($sql);
	$arr = array();
	foreach($list as $key => $val)
	{
		$arr[$key]['id'] = $val['id'];
		$arr[$key]['real_name'] = $val['real_name'];
		$arr[$key]['account_name'] = $val['account_name'];
		$arr[$key]['bank_account'] = $val['bank_account'];
		$arr[$key]['phone'] = $val['phone'];
		$arr[$key]['remark'] = $val['remark'];
	}
	return $arr;
}

function is_telephone($phone)
{
		$chars = "/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$/";
		if (preg_match($chars, $phone)){
		return true;
		}
}

?>