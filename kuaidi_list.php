<?php
/**
 * 查询物流信息
 */
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
include_once (ROOT_PATH . 'includes/lib_order.php');
include_once(ROOT_PATH . 'kuaidi/kuaidi.php');

if($_SESSION['user_id'] == 0)
{
	show_message($_LANG['m_637'],$_LANG['m_638'],'user.php'); 
}
else
{
	$user_id = $_SESSION['user_id']; 
}

$order_id = intval($_REQUEST['order_id']);

if($order_id > 0)
{
	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$order_id' AND user_id = '$user_id'";
	$count = $GLOBALS['db']->getOne($sql);
	if($count > 0)
	{
		 $sql = "SELECT order_id,shipping_name, order_sn, shipping_status, invoice_no FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$order_id'";
		 $order = $GLOBALS['db']->getRow($sql);
                 switch ($order['shipping_status']){
                     case 0 :
                     $order['shipping_status'] = $_LANG['m_639'];
                        break;
                     case 1 :
                     $order['shipping_status'] = $_LANG['m_640'];
                         break;
                     case 2 :
                     $order['shipping_status'] = $_LANG['m_641'];
                         break;
                     case 3 :
                     $order['shipping_status'] = $_LANG['m_642'];
                         break;
                     case 4 :
                     $order['shipping_status'] = $_LANG['m_643'];
                         break;
                     case 5 :
                     $order['shipping_status'] = $_LANG['m_644'];
                         break;
                     case 6 :
                     $order['shipping_status'] = $_LANG['m_645'];
                         break;
                                  
                 }
                 //获取订单中的商品
               $goods_list = order_goods($order['order_id']);
               $smarty->assign('goods_list',$goods_list);
		 $kuaidi = new Express();
		 $result = $kuaidi->getorder($order['shipping_name'],$order['invoice_no']);
		 $smarty->assign('order',$order);
		 $smarty->assign('kuaidi_list',$result['data']);
	} 
	else
	{
		show_message($_LANG['m_646']); 
	}
}
else
{
	Header("Location: index.php\n"); 
}

$smarty->display('kuaidi_list.dwt');

?>