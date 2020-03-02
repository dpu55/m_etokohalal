<?php
define('IN_ECS',true);
require(dirname(__FILE__) . '/includes/init.php');

$act = empty($_REQUEST['act']) ? '' : trim($_REQUEST['act']);
if(empty($act))
{
	die('Hacking alert');
}
if($act == 'basic_setting'){
	admin_priv('basic_setting');
	$basic_setting = get_basic_setting();
	$name = array('menu_per_row'=>$_LANG['x_118'],'goods_per_row'=>$_LANG['x_119'],'android_app_version'=>$_LANG['x_120'],'ios_app_version'=>$_LANG['x_121'],'phone_login'=>$_LANG['x_122'],'app_template'=>$_LANG['x_123']);
	$desc = array('menu_per_row'=>$_LANG['x_118'],'goods_per_row'=>$_LANG['x_119'],'android_app_version'=>$_LANG['x_120'],'ios_app_version'=>$_LANG['x_121'],'phone_login'=>$_LANG['x_122']);
	$option = array('0'=>$_LANG['x_107'],'1'=>$_LANG['x_106']);
	foreach($basic_setting as $key => $item){
		$item['name'] = $name[$item['code']];
		$item['desc'] = $desc[$item['code']];
		if ($item['store_range'])
		{
			$item['store_options'] = explode(',', $item['store_range']);

			foreach ($item['store_options'] as $k => $v)
			{
				$item['display_options'][$k] = $option[$k];
			}
		}
		$basic_setting[$key] = $item;
	}
	
	$smarty->assign('basic_setting',$basic_setting);
	$smarty->display('app_basic_setting.htm');
}
else if($act == 'save_basic_setting'){
	admin_priv('basic_setting');
	$value = $_POST['value'];
	foreach($value as $key => $val){
		//更新设置
		if(!update_configure($key, $val))
		{
			sys_msg($_LANG['x_126'], 1);
		}
	}
	/* 记录日志 */
	admin_log('', 'edit', 'shop_config');

	/* 清除缓存 */
	clear_all_files();
	
	$_CFG = load_config();

	sys_msg($_LANG['attradd_succed'], 0);
}
else if($act == 'guide_picture')
{
	admin_priv('guide_picture');
	$guide_picture = $db->getOne('SELECT value FROM '.$ecs->table('shop_config').' WHERE code="guide_picture"');
	$guide_picture = unserialize($guide_picture);
	$url = $ecs->url();
	$url = substr($url,0,-7);
	foreach($guide_picture as $key=>$val){
		$guide_picture[$key] = $url.$val;
	}
	$smarty->assign('rand',rand());
	$smarty->assign('guide_picture',$guide_picture);
	$smarty->display('app_guide_picture.htm');
}
else if($act == 'save_guide_picture')
{
	admin_priv('guide_picture');
	$proper_type = array('image/jpeg','image/png','image/gif','image/jpg');
	$max_size = '307200';
	$guide_picture = $_FILES['guide_picture'];
	$name = $guide_picture['name'];
	$type = $guide_picture['type'];
	$tmp_name = $guide_picture['tmp_name'];
	$error = $guide_picture['error'];
	$size = $guide_picture['size'];
	$value = array();
	$i = 0;
	$tmp_root_path = substr(ROOT_PATH,0,-7);
	foreach($tmp_name as $key => $val)
	{
		if(!empty($val))
		{
			$info = pathinfo($name[$key]);  
			$ext = $info['extension']; 
			$file_name = 'guide_picture_'.$i.'.'.$ext;
			$value[$i] = 'app/images/'.$file_name;
			if(!move_uploaded_file($val,$tmp_root_path.'app/images/'.$file_name))
			{
				sys_msg($_LANG['x_126'],1,array(array('text'=>$_LANG['x_127'],'href'=>'app_manage.php?act=guide_picture')));
			}
			$i ++;
		}
	}
	$sql = 'UPDATE '.$ecs->table('shop_config').' SET value=\''.serialize($value).'\' WHERE code="guide_picture"';
	if($db->query($sql))
	{
		sys_msg($_LANG['attradd_succed'],0,array(array('text'=>$_LANG['x_127'],'href'=>'app_manage.php?act=guide_picture')));
	}
	else{
		sys_msg($_LANG['x_126'],1,array(array('text'=>$_LANG['x_127'],'href'=>'app_manage.php?act=guide_picture')));
	}
}
else if($act == 'menu_setting')
{
	admin_priv('menu_setting');
	$menu_list = get_menu_list();
	$url = $ecs->url();
	$url = substr($url,0,-7);
	$smarty->assign('url',$url);
	$smarty->assign('rand',rand());
	$smarty->assign('menu_list',$menu_list);
	$smarty->assign('full_page',    1);
	$smarty->assign('action_link',  array('text' => $_LANG['x_40'], 'href'=>'app_manage.php?act=add_menu'));
	$smarty->display('app_menu_list.htm');
}
else if($act == 'add_menu')
{
	admin_priv('menu_setting');
	$menu = array();
	$menu['id'] = -1;
	$menu['type'] = 'link';
	$smarty->assign('menu',$menu);
	
	$cat_list = cat_list(0, 0, true);
	$article_cat = article_cat_list(0, 0, true);
	$brand_list = get_brand_options();
	$page_list = get_page_options();
	
	$link_type = get_link_type();
	$link_type['goods_cat']['options'] = $cat_list;
	// $link_type['article_cat']['options'] = $article_cat;
	$link_type['brand']['options'] = $brand_list;
	$link_type['page']['options'] = $page_list;
	$link_type['phone']['value'] = $_CFG['service_phone'];
	$smarty->assign('link_type',$link_type);
	$smarty->assign('action_link',  array('text' =>$_LANG['x_39'], 'href'=>'app_manage.php?act=menu_setting'));
	$smarty->display('app_menu_info.htm');
}
else if($act == 'edit_menu'){
	admin_priv('menu_setting');
	$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$menu_list = get_menu_list();
	$menu = $menu_list[$id];
	$menu['id'] = $id;
	$url = $ecs->url();
	$url = substr($url,0,-7);
	$smarty->assign('url',$url);
	$smarty->assign('menu',$menu);
	
	$selected_cat = '0';
	$selected_article_cat = '0';
	$selected_brand = '0';
	$selected_page = '';
	if($menu['type'] == 'brand')
	{
		$selected_brand = $menu['link'];
	}
	if($menu['type'] == 'goods_cat')
	{
		$selected_cat = $menu['link'];
	}
	if($menu['type'] == 'article_cat')
	{
		$selected_article_cat = $menu['link'];
	}
	if($menu['type'] == 'page')
	{
		$selected_page = $menu['link'];
	}
	$cat_list = cat_list(0, $selected_cat, true);
	// $article_cat = article_cat_list(0, $selected_article_cat, true);
	$brand_list = get_brand_options($selected_brand);
	$page_list = get_page_options($selected_page);
	
	$link_type = get_link_type();
	$link_type['goods_cat']['options'] = $cat_list;
	$link_type['article_cat']['options'] = $article_cat;
	$link_type['brand']['options'] = $brand_list;
	$link_type['page']['options'] = $page_list;
	$smarty->assign('rand',rand());
	$smarty->assign('link_type',$link_type);
	$smarty->assign('action_link',  array('text' => $_LANG['x_39'], 'href'=>'app_manage.php?act=menu_setting'));
	$smarty->display('app_menu_info.htm');
}
else if($act == 'save_menu')
{
	admin_priv('menu_setting');
	$id = !isset($_REQUEST['id']) ? -1 : intval($_REQUEST['id']);
	$name = empty($_REQUEST['name']) ? '' : trim($_REQUEST['name']);
	$type = empty($_REQUEST['type']) ? '' : trim($_REQUEST['type']);
	$value = empty($_REQUEST['value']) ? array() : $_REQUEST['value'];
	$order = empty($_REQUEST['order']) ? '0' : trim($_REQUEST['order']);
	$link = $value[$type];
	$image = $_FILES['image'];
	$menu_list = get_menu_list();
	$menu = $id >= 0 ? $menu_list[$id] : array();
	if($id == -1)
	{
		$id = max(array_keys($menu_list)) + 1;
	}
	if(empty($name))
	{
		sys_msg($_LANG['x_128'],1);
	}
	if(empty($menu['image']) && empty($image['tmp_name']))
	{
		sys_msg($_LANG['x_129'],1);
	}
	
	if(empty($link))
	{
		sys_msg($_LANG['x_130'],1);
	}
	
	if($order < 0)
	{
		sys_msg($_LANG['x_131'],1);
	}
	
	
	if(!empty($image['tmp_name'])){
		$tmp_root_path = substr(ROOT_PATH,0,-7);
		$info = pathinfo($image['name']);  
		$ext = $info['extension']; 
		$file_name = 'menu_'.$id.'.'.$ext;
		if(!move_uploaded_file($image['tmp_name'],$tmp_root_path.'app/images/'.$file_name))
		{
			sys_msg($_LANG['x_132'],1);
		}
		$menu['image'] = 'app/images/'.$file_name;
	}
	$menu['name'] = $name;
	$menu['type'] = $type;
	$menu['link'] = $link;
	$menu['order'] = $order;
	$menu_list[$id] = $menu;
	if(save_menu_list($menu_list))
	{
		sys_msg($_LANG['attradd_succed'],0,array(array('text'=>$_LANG['x_133'],'href'=>'app_manage.php?act=menu_setting')));
	}
	else{
		sys_msg($_LANG['x_126'],1,array(array('text'=>$_LANG['x_133'],'href'=>'app_manage.php?act=menu_setting')));
	}
}
else if($act == 'delete_menu'){
	admin_priv('menu_setting');
	$id = intval($_REQUEST['id']);
	
	$menu_list = get_menu_list();
	$menu = $menu_list[$id];
	$image = $menu['image'];
	unset($menu_list[$id]);
	if(save_menu_list($menu_list))
	{
		$tmp_root_path = substr(ROOT_PATH,0,-7);
		$menu_image_file = $tmp_root_path.$image;
		unlink($menu_image_file);
		sys_msg($_LANG['attradd_succed'],0,array(array('text'=>$_LANG['x_133'],'href'=>'app_manage.php?act=menu_setting')));
	}
	else{
		sys_msg($_LANG['x_126'],1,array(array('text'=>$_LANG['x_133'],'href'=>'app_manage.php?act=menu_setting')));
	}
}
else if($act == 'template_setting')
{
	admin_priv('template_setting');
	$template_setting = get_template_setting();
	$protected_type = get_protected_type();
	foreach($template_setting as $key => $val){
		$template_setting[$key]['id'] = $key;
		if(in_array($key,$protected_type)){
			$template_setting[$key]['editable'] = false;
		}
		else{
			
			$template_setting[$key]['editable'] = true;
		}
	}
	$smarty->assign('template_setting',$template_setting);
	$cat_list = cat_list(0, 0, false);
	foreach($cat_list as $key => $val)
	{
		$val['cat_name'] = str_repeat('&nbsp;',$val['level'] * 4).$val['cat_name'];
		$cat_list[$key] = $val;
	}
	$article_cat_list = article_cat_list(0,0,false);
	foreach($article_cat_list as $key => $val)
	{
		$val['cat_name'] = str_repeat('&nbsp;',$val['level'] * 4).$val['cat_name'];
		$article_cat_list[$key] = $val;
	}
	$smarty->assign('action_link',  array('text' => $_LANG['x_134'], 'href'=>'app_manage.php?act=add_template'));
	$smarty->assign('cat_list',          $cat_list);
	$smarty->assign('cat_options',          cat_list(0, 0, true));
	$smarty->assign('brand_list',         get_brand_list());
	$smarty->assign('ad_list',   get_position_list());
	$smarty->assign('article_cat_list',$article_cat_list);
	$smarty->display('app_template_setting.htm');
}
else if($act == 'save_template_setting')
{
	admin_priv('template_setting');
	$setting = $_POST['setting'];
	$template_setting = get_template_setting();
	foreach($template_setting as $key => $val)
	{
		$val['order'] = $setting[$key]['order'];
		$val['number'] = $setting[$key]['number'];
		$val['show'] = $setting[$key]['show'];
		$val['value'] = $setting[$key]['value'];
		$template_setting[$key] = $val;
	}
	if(save_template_setting($template_setting)){
		sys_msg($_LANG['attradd_succed'],0,array(array('text'=>$_LANG['x_133'],'href'=>'app_manage.php?act=template_setting')));
	}
	else{
		sys_msg($_LANG['x_126'],1,array(array('text'=>$_LANG['x_133'],'href'=>'app_manage.php?act=template_setting')));
	}
}
else if($act == 'add_template'){
	admin_priv('template_setting');
	$default_value = get_default_value();
	$protected_type = get_protected_type();
	foreach($protected_type as $key){
		$default_value[$key]['editable'] = "false";
	}
	$smarty->assign('default_value',$default_value);
	$template_type = get_template_type();
	$smarty->assign('template_type',$template_type);
	$smarty->assign('action_link',  array('text' => $_LANG['x_135'], 'href'=>'app_manage.php?act=template_setting'));
	$smarty->display('app_add_template.htm');
}
else if($act == 'edit_template'){
	admin_priv('template_setting');
	$id = trim($_REQUEST['id']);
	if(empty($id)){
		sys_msg($_LANG['x_136'],1);
	}
	$template_setting = get_template_setting();
	$exist_keys = array_keys($template_setting);
	if(!in_array($id,$exist_keys)){
		sys_msg($_LANG['x_137'],1);
	}
	$smarty->assign('prev_id',$id);
	$default_value = get_default_value();
	$protected_type = get_protected_type();
	foreach($protected_type as $key){
		$default_value[$key]['editable'] = "false";
	}
	$smarty->assign('default_value',$default_value);
	$template_type = get_template_type();
	$smarty->assign('template_type',$template_type);
	$template = $template_setting[$id];
	
	$protected_type = get_protected_type();
	if(in_array($id,$protected_type)){
		sys_msg($_LANG['x_138'],1);
	}
	else{
		$template['editable'] = true;
	}
	$template['id'] = $id;
	$smarty->assign('template',$template);
	$smarty->assign('action_link',  array('text' =>$_LANG['x_135'], 'href'=>'app_manage.php?act=template_setting'));
	$smarty->display('app_add_template.htm');
}
else if($act == 'save_template'){
	admin_priv('template_setting');
	$id = trim($_REQUEST['id']);
	if(empty($id)){
		sys_msg($_LANG['x_136'],1);
	}
	$prev_id = trim($_REQUEST['prev_id']);
	$template_setting = get_template_setting();
	if(!empty($prev_id) && isset($template_setting[$prev_id])){
		$template_item = $template_setting[$prev_id];
		unset($template_setting[$prev_id]);
	}
	else{
		$exist_keys = array_keys($template_setting);
		if(in_array($id,$exist_keys)){
			sys_msg($_LANG['x_139']." $id ".$_LANG['x_140'],1);
		}
	}
	$name = trim($_REQUEST['name']);
	$order = trim($_REQUEST['order']);
	$number = trim($_REQUEST['number']);
	$show = trim($_REQUEST['show']);
	$type = trim($_REQUEST['type']);
	
	$template_item['name'] = $name;
	$template_item['order'] = $order;
	$template_item['number'] = $number;
	$template_item['show'] = $show;
	$template_item['type'] = $type;
	$template_item['value'] = NULL;
	$template_setting[$id] = $template_item;
	
	$success_link = array(array('text'=>$_LANG['x_141'],'href'=>'app_manage.php?act=template_setting'));
	$fail_link = array(array('text'=>$_LANG['x_141'],'href'=>'app_manage.php?act=template_setting'));
	if(empty($prev_id)){
		$success_link[] = array('text'=>$_LANG['x_142'],'href'=>'app_manage.php?act=add_template');
		$fail_link[] = array('text'=>$_LANG['x_143'],'href'=>'app_manage.php?act=add_template');
	}
	else{
		$fail_link[] = array('text'=>$_LANG['x_144'],'href'=>'app_manage.php?act=edit_template&id='.$prev_id);
	}
	if(save_template_setting($template_setting)){
		sys_msg($_LANG['attradd_succed'],0,$success_link);
	}
	else{
		sys_msg($_LANG['x_126'],1,$fail_link);
	}
}
else if($act == 'delete_template'){
	admin_priv('template_setting');
	$id = trim($_REQUEST['id']);
	if(empty($id)){
		sys_msg($_LANG['x_136'],1);
	}
	$template_setting = get_template_setting();
	$exist_keys = array_keys($template_setting);
	if(!in_array($id,$exist_keys)){
		sys_msg($_LANG['x_145'],1);
	}
	unset($template_setting[$id]);
	
	if(save_template_setting($template_setting)){
		sys_msg($_LANG['attradd_succed'],0,array(array('text'=>$_LANG['x_141'],'href'=>'app_manage.php?act=template_setting')));
	}
	else{
		sys_msg($_LANG['x_126'],1,array(array('text'=>$_LANG['x_141'],'href'=>'app_manage.php?act=template_setting')));
	}
}

function get_default_value(){
	return array(
	'menu'=>array('name'=>$_LANG['x_39'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'promote_goods'=>array('name'=>$_LANG['x_146'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'new_goods'=>array('name'=>$_LANG['x_147'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'hot_goods'=>array('name'=>$_LANG['x_148'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'goods_cat'=>array('name'=>$_LANG['x_149'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'goods_brand'=>array('name'=>$_LANG['x_150'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'best_goods'=>array('name'=>$_LANG['x_151'],'order'=>'0','number'=>'12','show'=>'on','value'=>NULL),
	'article'=>array('name'=>$_LANG['03_article_list'],'order'=>'0','number'=>'3','show'=>'on','value'=>NULL),
	'ad'=>array('name'=>$_LANG['ad_position'],'order'=>'0','number'=>'3','show'=>'on','value'=>NULL));
}

function get_protected_type(){
	return array('menu','best_goods','new_goods','hot_goods','promote_goods');
}

function get_template_type(){
	return array(
	'menu'=>array('type'=>'menu','name'=>$_LANG['x_39']),
	'best_goods'=>array('type'=>'best_goods','name'=>$_LANG['x_151']),
	'new_goods'=>array('type'=>'new_goods','name'=>$_LANG['x_147']),
	'hot_goods'=>array('type'=>'hot_goods','name'=>$_LANG['x_148']),
	'promote_goods'=>array('type'=>'promote_goods','name'=>$_LANG['x_146']),
	'goods_cat'=>array('type'=>'goods_cat','name'=>$_LANG['x_149']),
	'goods_brand'=>array('type'=>'goods_brand','name'=>$_LANG['x_150']),
	'ad'=>array('type'=>'ad','name'=>$_LANG['ad_position']),
	'article'=>array('type'=>'article','name'=>$_LANG['03_article_list']),
	'custom'=>array('type'=>'custom','name'=>$_LANG['x_1']));
}

function get_menu_list(){
	global $db,$ecs;
	$sql = 'SELECT value FROM '.$ecs->table('shop_config').' WHERE code="menu_setting" ';
	$menu_list = $db->getOne($sql);
	if(empty($menu_list))
	{
		return array();
	}
	else{
		$menu_list = unserialize($menu_list);
		return $menu_list;
	}
}

function save_menu_list($menu_list){
	global $db,$ecs;
	$sql = 'UPDATE '.$ecs->table('shop_config').' SET value=\''.serialize($menu_list).'\' WHERE code="menu_setting"';
	if($db->query($sql))
	{
		return true;
	}
	else{
		return false;
	}
}

function get_link_type(){
	return array(
	'link'=>array('type'=>'link','name'=>$_LANG['x_152']),
	'appurl'=>array('type'=>'appurl','name'=>$_LANG['x_153']),
	'page'=>array('type'=>'page','name'=>$_LANG['x_154']),
	'goods'=>array('type'=>'goods','name'=>$_LANG['x_155']),
	'goods_cat'=>array('type'=>'goods_cat','name'=>$_LANG['03_category_list']),
	'supplier'=>array('type'=>'supplier','name'=>$_LANG['x_159']),
	'article'=>array('type'=>'article','name'=>$_LANG['x_160']),
	'article_cat'=>array('type'=>'article_cat','name'=>$_LANG['02_articlecat_list']),
	'brand'=>array('type'=>'brand','name'=>$_LANG['06_goods_brand_list']),
	'phone'=>array('type'=>'phone','name'=>$_LANG['x_161']),
	'custom'=>array('type'=>'custom','name'=>$_LANG['x_162']));
}

function get_page_options($selected_page){
	$page_list = array(
			array('title'=>$_LANG['x_163'],'page'=>'stores'),
			array('title'=>$_LANG['x_164'],'page'=>'brand_list'),
			array('title'=>$_LANG['x_165'],'page'=>'promote_list'),
			array('title'=>$_LANG['12_favourable'],'page'=>'activity'),
			array('title'=>$_LANG['x_166'],'page'=>'user_follow_shop'),
			array('title'=>$_LANG['x_167'],'page'=>'user_collection_list'),
			array('title'=>$_LANG['x_168'],'page'=>'user_account'),
			array('title'=>$_LANG['x_169'],'page'=>'article_cat'),
			array('title'=>$_LANG['x_170'],'page'=>'exclusive'),
			array('title'=>$_LANG['x_171'],'page'=>'chat'));
	$options = '';
	foreach($page_list as $val)
	{
		$title = $val['title'];
		$page = $val['page'];
		if($val['page'] == $selected_page)
		{
			$options .= "<option value='$page' selected='selected'>$title</option>";
		}
		else{
			$options .= "<option value='$page'>$title</option>";
		}
	}
	return $options;
}

function get_brand_options($selected_brand){
	$brand_list = get_brand_list();
	$options = '';
	foreach($brand_list as $brand_id=>$brand_name)
	{
		if($selected_brand == $brand_id)
		{
			$options .= "<option value='$brand_id' selected='selected'>$brand_name</option>";
		}
		else{
			$options .= "<option value='$brand_id'>$brand_name</option>";
		}
	}
	return $options;
}

function get_template_setting(){
	global $db,$ecs;
	$sql = 'SELECT value FROM '.$ecs->table('shop_config').' WHERE code="template_setting"';
	$result = $db->getOne($sql);
	$result = unserialize($result);
	return $result;
}

function save_template_setting($template_setting){
	global $db,$ecs;
	
	$template = $db->getOne('SELECT value FROM '.$ecs->table('shop_config').' WHERE code="app_template"');
	if(empty($template)){
		$template = 'default';
	}
	$tmp_root_path = substr(ROOT_PATH,0,-7);
	$template_file = $tmp_root_path.'app/themes/'.$template.'/index.dwt';
	
	$copy_template = array('goods_brand','goods_cat','article');
	foreach($copy_template as $key){
		$tmp_file_path = $tmp_root_path.'app/themes/'.$template."/library/index_$key.lib";
		if(!file_exists($tmp_file_path)){
			sys_msg($tmp_file_path.$_LANG['x_158'],1);
		}
		$copy_template[$key]['content'] = file_get_contents($tmp_file_path);
	}
	
	uasort($template_setting,'compare_order');
	foreach($template_setting as $key=>$val)
	{
		if($val['show'] == 'on'){
			$template_content .= "{include file='library/index_$key.lib'}".PHP_EOL;
		}
		if(in_array($val['type'],$copy_template)){
			$tmp_template_content = str_replace("$$val[type]","$$key",$copy_template[$val['type']]['content']);
			$tmp_template_name = $tmp_root_path.'app/themes/'.$template."/library/index_$key.lib";
			if(!file_put_contents($tmp_template_name,$tmp_template_content)){
				sys_msg($_LANG['x_156'].' '.$tmp_template_name.$_LANG['x_157'],1);
			}
		}
	}
	
	$result = file_put_contents($template_file,$template_content);
	if((empty($template_content) && $result == 0) || (!empty($template_content) && $result > 0)){
		$serialized_setting = serialize($template_setting);
		$sql = 'UPDATE '.$ecs->table('shop_config').' SET value=\''.$serialized_setting.'\' WHERE code="template_setting"';
		$result = $db->query($sql);
	}
	return $result;
}

function get_basic_setting(){
	global $db,$ecs;
	$sql = 'SELECT * FROM '.$ecs->table('shop_config').' WHERE parent_id="12" AND type !="manual"';
	$result = $db->getAll($sql);
	return $result;
}

function update_configure($key, $val='')
{
    if (!empty($key))
    {
        $sql = "UPDATE " . $GLOBALS['ecs']->table('shop_config') . " SET value='$val' WHERE code='$key'";

        return $GLOBALS['db']->query($sql);
    }

    return true;
}

/**
 * 根据数组的order进行排序
 * 用于菜单或模板排序
 */
function compare_order($a,$b){
	if($a['order'] == $b['order'])
	{
		return 0;
	}
	else if($a['order'] < $b['order'])
	{
		return -1;
	}
	else{
		return 1;
	}
}