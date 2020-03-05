<?php

/**
 * 鸿宇多用户商城 管理中心配送方式管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: shipping.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['shipping_name'] = 'Name of distribution mode';
$_LANG['shipping_version'] = 'Plugin version';
$_LANG['shipping_desc'] = 'Description of Distribution Mode';
$_LANG['shipping_author'] = 'Plugin author';
$_LANG['insure'] = 'Insured cost';
$_LANG['support_cod'] = 'Cash on Delivery?';
$_LANG['shipping_area'] = 'Setup area';
$_LANG['shipping_print_edit'] = 'Edit Print Template';
$_LANG['shipping_print_template'] = 'Express Bill Template';
$_LANG['shipping_template_info'] = 'Order template variable description:<br/>{$shop_name}Shop name<br/>{$province}Shop provinces<br/>{$city}Shop city<br/>{$shop_address}Shop address<br/>{$service_phone}Shop contact number<br/>{$order.order_amount}Order amount<br/>{$order.region}Recipient area<br/>{$order.tel}Recipient telephone<br/>{$order.mobile}Recipient Cell Phone<br/>{$order.zipcode}Recipient\'s postcode<br/>{$order.address}receiver\'s address<br/>{$order.consignee}Recipient name<br/>{$order.order_sn}order number';

/* 表单部分 */
$_LANG['shipping_install'] = 'Installation method';
$_LANG['install_succeess'] = 'Delivery method %s successful installation!';
$_LANG['del_lable'] = 'Delete tag';
$_LANG['upload_shipping_bg'] = 'Upload a print order picture';
$_LANG['del_shipping_bg'] = 'Delete print order picture';
$_LANG['save_setting'] = 'Save Settings';
$_LANG['recovery_default'] = 'reset';

/* 快递单部分 */
$_LANG['lable_select_notice'] = '--Select insert tag--';
$_LANG['lable_box']['shop_country'] = 'shop-country';
$_LANG['lable_box']['shop_province'] = 'shop-province';
$_LANG['lable_box']['shop_city'] = 'shop-city';
$_LANG['lable_box']['shop_name'] = 'shop-name';
$_LANG['lable_box']['shop_district'] = 'shop-district / county';
$_LANG['lable_box']['shop_tel'] = 'shop-phone';
$_LANG['lable_box']['shop_address'] = 'shop-address';
$_LANG['lable_box']['customer_country'] = 'Recipient-country';
$_LANG['lable_box']['customer_province'] = 'Recipient-province';
$_LANG['lable_box']['customer_city'] = 'Recipient-City';
$_LANG['lable_box']['customer_district'] = 'Recipient-District/County';
$_LANG['lable_box']['customer_tel'] = 'Recipient-Telephone';
$_LANG['lable_box']['customer_mobel'] = 'Recipient-Phone';
$_LANG['lable_box']['customer_post'] = 'Recipient-Zip Code';
$_LANG['lable_box']['customer_address'] = 'Recipient-Address';
$_LANG['lable_box']['customer_name'] = 'Recipient-Name';
$_LANG['lable_box']['year'] = 'Year-the Day';
$_LANG['lable_box']['months'] = 'Month-the Day';
$_LANG['lable_box']['day'] = 'Date-the day';
$_LANG['lable_box']['order_no'] = 'Order Number-Order';
$_LANG['lable_box']['order_postscript'] = 'Remarks-orders';
$_LANG['lable_box']['order_best_time'] = 'Delivery time-order';
$_LANG['lable_box']['pigeon'] = '√-mark';
//$_LANG['lable_box']['custom_content'] = '自定义内容';

/* 提示信息 */
$_LANG['no_shipping_name'] = 'Sorry, the name of the mode of delivery can not be empty.';
$_LANG['no_shipping_desc'] = 'Sorry, the description of delivery mode can not be empty.';
$_LANG['repeat_shipping_name'] = 'Sorry, there is already a distribution method with the same name.';
$_LANG['uninstall_success'] = 'Delivery mode %s has been successfully unloaded.';
$_LANG['add_shipping_area'] = 'Create a new distribution area for this delivery method';
$_LANG['no_shipping_insure'] = 'Sorry, the insurance price cannot be empty. If you don\'t want to use it, please set it to 0.';
$_LANG['not_support_insure'] = 'The delivery method does not support the insured price, and the insured fee setting fails.';
$_LANG['invalid_insure'] = 'Distribution insurance premium is not a legal price';
$_LANG['no_shipping_install'] = 'Your shipping method has not been installed, you can\'t edit the template yet.';
$_LANG['edit_template_success'] = 'The courier template has been successfully edited.';

/* JS 语言 */
$_LANG['js_languages']['lang_removeconfirm'] = 'Are you sure you want to uninstall this shipping method?';
$_LANG['js_languages']['shipping_area'] = 'Setting area';
$_LANG['js_languages']['upload_falid'] = 'Error: The file type is incorrect. Please upload a file of type "%s"!';
$_LANG['js_languages']['upload_del_falid'] = 'Error: Delete failed!';
$_LANG['js_languages']['upload_del_confirm'] = "Tip: Are you sure to delete the printed order picture?";
$_LANG['js_languages']['no_select_upload'] = "Error: You haven't selected a print sheet image yet. Please use the 'Browse...' button to select!";
$_LANG['js_languages']['no_select_lable'] = "Operation terminated! You did not select any labels.";
$_LANG['js_languages']['no_add_repeat_lable'] = "Operation failed! Duplicate labels are not allowed.";
$_LANG['js_languages']['no_select_lable_del'] = "Delete failed! You did not select any label.";
$_LANG['js_languages']['recovery_default_suer'] = "Are you sure you want to restore the default? When the default is restored, the installation content will be displayed.";
?>