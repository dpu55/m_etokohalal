<?php
/* 添加页 */
$_LANG['label_chat_server_ip'] = 'Chat server IP address:';
$_LANG['label_chat_server_port'] = 'Chat server port number:';
$_LANG['label_chat_http_bind_port'] = 'HTTP-BIND port:';
$_LANG['label_chat_server_admin_username'] = 'Chat server administrator login account:';
$_LANG['label_chat_server_admin_password'] = 'Chat server administrator login password:';
$_LANG['label_chat_server_admin_repassword'] = 'Konfirmasi password:';
$_LANG['notice_cus_type'] = 'Customer service represents both pre-sale and after-sale, including both rights. Users can connect to customer service from the front-end product page or order page, while pre-sale is only for non-order page, after-sale is only for order page.';
$_LANG['label_cus_enable'] = 'Ketersediaan:';
$_LANG['label_add_time'] = 'Creation time:';
$_LANG['label_cus_desc'] = 'Remarks:';
$_LANG['label_cus_password'] = 'Password:';
$_LANG['notice_cus_password'] = 'This password is used for customer service personnel to log on to the desktop version of the chat client';
$_LANG['label_cus_repassword'] = 'Konfirmasi password:';
$_LANG['label_chat_server_timout'] = 'The expiration time of the session after the user stops chatting';
$_LANG['visit_openfire'] = 'Accessing Chat Service System';



/* 客服类型 */
$_LANG['CUS_TYPE'][0] = 'Customer service';
$_LANG['CUS_TYPE'][1] = 'Pre sale';
$_LANG['CUS_TYPE'][2] = 'After sale';
$_LANG['CUS_ENABLE'][0] = 'forbidden';
$_LANG['CUS_ENABLE'][1] = 'available';

/* 错误信息 */
$_LANG['error_user_id_exist'] = 'Administrators have bound customer service information';
$_LANG['error_user_id_null'] = 'Administrator number cannot be empty';
$_LANG['error_of_username_exist'] = 'Chat system username already exists';
$_LANG['error_of_username_binding'] = 'Chat system username is bound to other administrators';
$_LANG['error_create_of_user'] = 'Failed to create chat system user';
$_LANG['error_password_empty'] = 'Chat system user password cannot be empty';
$_LANG['error_of_username_empty'] = 'Chat system username cannot be empty';
$_LANG['error_cus_name_empty'] = 'Customer service name cannot be empty';
$_LANG['error_php_ext_curl_invalid'] = 'Check that the PHP extension php_curl is turned on. If this extension is not turned on, you will not be able to use instant messaging services.';

/* 成功信息 */
$_LANG['add_success'] = 'Successful Addition of Customer Service Information';
$_LANG['edit_success'] = 'Success in Editing Customer Service Information';


?>