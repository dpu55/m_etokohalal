<?php
$_LANG['shipping_name'] = 'Nama Ekspedisi';
$_LANG['shipping_version'] = 'Plugin version';
$_LANG['shipping_desc'] = 'Deskripsi ekspedisi pengiriman';
$_LANG['shipping_author'] = 'Plugin author';
$_LANG['insure'] = 'Asuransi';
$_LANG['support_cod'] = 'COD';

$_LANG['support_pickup'] = 'Store self mention?';

$_LANG['shipping_area'] = 'Set area';
$_LANG['shipping_pups'] = 'Self-lifting point management';
$_LANG['shipping_print_edit'] = 'Edit Print Template';
$_LANG['shipping_print_template'] = 'Express Bill Template';
$_LANG['shipping_template_info'] = 'Order template variable description:<br/>{$shop_name}Shop name<br/>{$province}Shop provinces<br/>{$city}Shop city<br/>{$shop_address}Shop address<br/>{$service_phone}Shop contact number<br/>{$order.order_amount}Order amount<br/>{$order.region}Recipient area<br/>{$order.tel}Recipient telephone<br/>{$order.mobile}Recipient Cell Phone<br/>{$order.zipcode}Recipients postcode<br/>{$order.address}receivers address<br/>{$order.consignee}Recipient name<br/>{$order.order_sn}order number';

/* 表单部分 */
$_LANG['shipping_install'] = 'Install shipping method';
$_LANG['install_succeess'] = 'Shipping method %s installation success!';
$_LANG['del_lable'] = 'Delete tag';
$_LANG['upload_shipping_bg'] = 'Upload Print List Pictures';
$_LANG['del_shipping_bg'] = 'Delete Print List Pictures';
$_LANG['save_setting'] = 'Save settings';
$_LANG['recovery_default'] = 'Restore default';

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
$_LANG['is_default_show'] = 'Distribution mode %s has been successfully set up.';
$_LANG['add_shipping_area'] = 'New Distribution Area for the Distribution Mode';
$_LANG['no_shipping_insure'] = 'Sorry, the premium cannot be empty. If you do not want to use it, please set it to 0.';
$_LANG['not_support_insure'] = 'The distribution mode does not support the insured price, and the insured cost settings fail.';
$_LANG['invalid_insure'] = 'Distribution insurance cost is not a legal price';
$_LANG['no_shipping_install'] = 'Your delivery mode has not been installed yet, so you cannot edit the template yet.';
$_LANG['edit_template_success'] = 'Express template has been successfully edited.';

/* JS 语言 */
$_LANG['js_languages']['lang_isdefaultshowconfirm'] = 'After setting up successfully, the distribution mode chosen by the front-end user and all the installed distribution mode will be synchronized with the freight and distribution area of this distribution mode. Are you sure you want to set it up?';
$_LANG['js_languages']['lang_removeconfirm'] = 'Are you sure you want to uninstall the delivery method?';
$_LANG['js_languages']['shipping_area'] = 'Setup area';
$_LANG['js_languages']['upload_falid'] = 'Error: The file type is incorrect. Please upload the file of type!';
$_LANG['js_languages']['upload_del_falid'] = 'Error: Delete failed!';
$_LANG['js_languages']['upload_del_confirm'] = "Tip: Are you sure you want to delete the print list?";
$_LANG['js_languages']['no_select_upload'] = 'Error: You have not selected a print sheet image yet. Please use the Browse... button to select!';
$_LANG['js_languages']['no_select_lable'] = "Operation terminated! You did not select any labels.";
$_LANG['js_languages']['no_add_repeat_lable'] = "Operation failed! Duplicate labels are not allowed.";
$_LANG['js_languages']['no_select_lable_del'] = "Delete failed! You did not select any label.";
$_LANG['js_languages']['recovery_default_suer'] = "Are you sure you want to restore the default? When the default is restored, the installation content will be displayed.";
?>