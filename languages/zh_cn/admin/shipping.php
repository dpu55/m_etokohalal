<?php
$_LANG['shipping_name'] = 'Nama Ekspedisi';
$_LANG['shipping_version'] = 'Plugin version';
$_LANG['shipping_desc'] = 'Deskripsi ekspedisi pengiriman';
$_LANG['shipping_author'] = 'Plugin author';
$_LANG['insure'] = 'Asuransi';
$_LANG['support_cod'] = 'COD';
/* 代码增加_start   By bbs.hongyuvip.com */
$_LANG['support_pickup'] = 'Store self mention?';
/* 代码增加_send   By bbs.hongyuvip.com */
$_LANG['shipping_area'] = 'Set area';
$_LANG['shipping_pups'] = 'Self-lifting point management';
$_LANG['shipping_print_edit'] = 'Edit Print Template';
$_LANG['shipping_print_template'] = 'Express Bill Template';
$_LANG['shipping_template_info'] = 'The order template variable specifies: <br/>{shop_name} denotes the shop name <br/>{province} denotes the province where the shop belongs <br/>{city} denotes the city where the shop belongs <br/>{shop_address} denotes the shop address <br/>{service_phone} denotes the shop contact telephone <br/>{$order.amount} denotes the order amount <br/>{order.number} denotes the recipient area <br/> {order.tel denotes the recipient area <br/>.{$ Order.mobile} denotes the recipients mobile phone <br/> {order.zipcode} denotes the recipients postal code <br/> {order.address} denotes the recipients detailed address <br/> {order.consignee} denotes the recipients name <br/> {order.sn denotes the order number.';

/* 表单部分 */
$_LANG['shipping_install'] = 'Install shipping method';
$_LANG['install_succeess'] = 'Shipping method %s installation success!';
$_LANG['del_lable'] = 'Delete tag';
$_LANG['upload_shipping_bg'] = 'Upload Print List Pictures';
$_LANG['del_shipping_bg'] = 'Delete Print List Pictures';
$_LANG['save_setting'] = 'Save settings';
$_LANG['recovery_default'] = 'Restore default';

/* 快递单部分 */
$_LANG['lable_select_notice'] = '--Select Insert Tag--';
$_LANG['lable_box']['shop_country'] = 'Online Shop - Country';
$_LANG['lable_box']['shop_province'] = 'Online Shop - State';
$_LANG['lable_box']['shop_city'] = 'Online Shop - City';
$_LANG['lable_box']['shop_name'] = 'Online Shop - name';
$_LANG['lable_box']['shop_district'] = 'Online Shop - Area';
$_LANG['lable_box']['shop_tel'] = 'Online Shop - Contact phone';
$_LANG['lable_box']['shop_address'] = 'Online Shop - Address';
$_LANG['lable_box']['customer_country'] = 'Recipient-country';
$_LANG['lable_box']['customer_province'] = 'Recipient-state';
$_LANG['lable_box']['customer_city'] = 'Recipient-city';
$_LANG['lable_box']['customer_district'] = 'Recipient-area';
$_LANG['lable_box']['customer_tel'] = 'Recipient-phone';
$_LANG['lable_box']['customer_mobel'] = 'Recipient-mobile';
$_LANG['lable_box']['customer_post'] = 'Recipient-Kode Pos';
$_LANG['lable_box']['customer_address'] = 'Recipient-address';
$_LANG['lable_box']['customer_name'] = 'Recipient-name';
$_LANG['lable_box']['year'] = 'Year - Date of the Day';
$_LANG['lable_box']['months'] = 'Month - Date of the Day';
$_LANG['lable_box']['day'] = 'day-Date';
$_LANG['lable_box']['order_no'] = 'Order ID-Orders';
$_LANG['lable_box']['order_postscript'] = 'Note-Orders';
$_LANG['lable_box']['order_best_time'] = 'Delivery time-Orders';
$_LANG['lable_box']['pigeon'] = '√-Check mark';
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