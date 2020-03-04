<?php
/* 列表页 */
$_LANG['add_customer'] = 'Add customer service';
$_LANG['customer_list'] = 'Customer service list';
$_LANG['cus_id'] = 'ID';
$_LANG['user_id'] = 'Platform System User Number';
$_LANG['of_username'] = 'Chat system username';
$_LANG['cus_name'] = 'Nama Customer Service';
$_LANG['cus_type'] = 'Customer service type';
$_LANG['cus_enable'] = 'Ketersediaan';
$_LANG['add_time'] = 'Waktu';

/* 添加页 */
$_LANG['notice_user_name'] = 'Select the Administrator for Binding...';

$_LANG['label_user_id'] = 'Admin:';
$_LANG['label_of_username'] = 'Chat system username:';
$_LANG['notice_of_username'] = 'User name when customer service logs in to chat client';
$_LANG['label_cus_name'] = 'Nama CS: ';
$_LANG['notice_cus_name'] = 'Names displayed when customer service chats with users online';
$_LANG['label_cus_type'] = 'Customer service type:';
$_LANG['notice_cus_type'] = 'Customer service represents both pre-sale and after-sale, including both rights. Users can connect to customer service from the front-end product page or order page, while pre-sale is only for non-order page, after-sale is only for order page.';
$_LANG['label_cus_enable'] = 'Ketersediaan:';
$_LANG['label_add_time'] = 'Waktu:';
$_LANG['label_cus_desc'] = 'Remarks:';
$_LANG['label_cus_password'] = 'Password:';
$_LANG['notice_cus_password'] = 'This password is used for customer service personnel to log on to the desktop version of the chat client';
$_LANG['label_cus_repassword'] = 'Konfirmasi password:';



/* 客服类型 */
$_LANG['CUS_TYPE'][0] = 'Customer service';
$_LANG['CUS_TYPE'][1] = 'Pre sale';
$_LANG['CUS_TYPE'][2] = 'After sale';
$_LANG['CUS_ENABLE'][0] = 'Forbidden';
$_LANG['CUS_ENABLE'][1] = 'Available';

/* 错误信息 */
$_LANG['error_user_id_exist'] = 'Administrators have bound customer service information';
$_LANG['error_user_id_null'] = 'Administrator number cannot be empty';
$_LANG['error_of_username_exist'] = 'Administrator number cannot be empty';
$_LANG['error_of_username_binding'] = 'Chat system username is bound to other administrators';
$_LANG['error_create_of_user'] = 'Failed to create chat system user';
$_LANG['error_password_empty'] = 'Chat system user password cannot be empty';
$_LANG['error_of_username_empty'] = 'Chat system username cannot be empty';
$_LANG['error_cus_name_empty'] = 'Customer service name cannot be empty';
$_LANG['error_php_ext_curl_invalid'] = 'Check that the PHP extension php_curl is turned on. If this extension is not turned on, you will not be able to use instant messaging services.';
$_LANG['remove_success'] = 'Successful deletion of customer service information';
$_LANG['remove_fail'] = 'Failed to delete customer service information';
$_LANG['error_of_username_not_admin'] = 'Chat system username cannot be admin';

/* 成功信息 */
$_LANG['add_success'] = 'Successful Addition of Customer Service Information';
$_LANG['edit_success'] = 'Success in Editing Customer Service Information';

$_LANG['back_list'] = 'Return';
$_LANG['continue_add'] = 'Add';
$_LANG['batch_drop_confirm'] = 'Are you sure you want to delete the selected customer service information in batches?';




?>