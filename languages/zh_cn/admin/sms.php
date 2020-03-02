<?php
/* 导航条 */
$_LANG['register_sms'] = 'Register or enable SMS accounts';

/* 注册和启用短信功能 */
$_LANG['email'] = 'Email';
$_LANG['password'] = 'Password';
$_LANG['domain'] = 'Domain';
$_LANG['register_new'] = 'Register a new account';
$_LANG['error_tips'] = 'Please contact QQ: 394263347';
$_LANG['enable_old'] = 'Enabling existing accounts';

/* 短信特服信息 */
$_LANG['sms_user_name'] = 'User name:';
$_LANG['sms_password'] = 'Password:';
$_LANG['sms_domain'] = 'Domain:';
$_LANG['sms_num'] = 'Short message service number:';
$_LANG['sms_count'] = 'Number of messages sent:';
$_LANG['sms_total_money'] = 'Total impulse value:';
$_LANG['sms_balance'] = 'Balance:';
$_LANG['sms_last_request'] = 'Last request time:';
$_LANG['disable'] = 'Cancellation of short message service';

/* 发送短信 */
$_LANG['phone'] = 'Receive mobile phone number';
$_LANG['user_rand'] = 'Sending Short Messages at User Level';
$_LANG['phone_notice'] = 'Multiple cell phone numbers are separated by half-horn commas';
$_LANG['msg'] = 'Message content';
$_LANG['msg_notice'] = 'Maximum 70 characters';
$_LANG['send_date'] = 'Timed Delivery Time';
$_LANG['send_date_notice'] = 'The format is YYYY-MM-DD HH:ii. Null means send immediately.';
$_LANG['back_send_history'] = 'Returns the Send History List';
$_LANG['back_charge_history'] = 'Returns a recharge history list';

/* 记录查询界面 */
$_LANG['start_date'] = 'Start date';
$_LANG['date_notice'] = 'The format is YYYY-MM-DD. It can be empty.';
$_LANG['end_date'] = 'End date';
$_LANG['page_size'] = 'Number of pages displayed';
$_LANG['page_size_notice'] = 'Can be empty, indicating that 20 records are displayed per page';
$_LANG['page'] = 'pages';
$_LANG['page_notice'] = 'Can be empty, showing 1 page';
$_LANG['charge'] = 'Please enter the amount you want to recharge.';

/* 动作确认信息 */
$_LANG['history_query_error'] = 'Sorry, there was an error in the query process.';
$_LANG['enable_ok'] = 'Congratulations, you have successfully launched the SMS service!';
$_LANG['enable_error'] = 'Sorry, you failed to enable SMS service.';
$_LANG['disable_ok'] = 'You have successfully cancelled the SMS service.';
$_LANG['disable_error'] = 'The cancellation of short message service failed.';
$_LANG['register_ok'] = 'Congratulations, you have successfully registered for SMS service!';
$_LANG['register_error'] = 'Sorry, you failed to register for SMS service.';
$_LANG['send_ok'] = 'Congratulations, your message has been successfully sent!';
$_LANG['send_error'] = 'Sorry, there was an error in sending a short message.';
$_LANG['error_no'] = 'Error identification';
$_LANG['error_msg'] = 'Wrong description';
$_LANG['empty_info'] = 'Your SMS service information is empty.';

/* 充值记录 */
$_LANG['order_id'] = 'Order Id';
$_LANG['money'] = 'Recharge amount';
$_LANG['log_date'] = 'Recharge date';

/* 发送记录 */
$_LANG['sent_phones'] = 'Send mobile phone number';
$_LANG['content'] = 'Send content';
$_LANG['charge_num'] = 'Billing count';
$_LANG['sent_date'] = 'Sending date';
$_LANG['send_status'] = 'Sending status';
$_LANG['status'][0] = 'Fail';
$_LANG['status'][1] = 'Success';
$_LANG['user_list'] = 'Semua Member';
$_LANG['please_select'] = 'Please select membership level';

/* 提示 */
$_LANG['test_now'] = '<span style="color:red;"></span>';
$_LANG['msg_price'] = '<span style="color:green;">SMS 0.1 yuan per message(RMB)</span>';

/* API返回的错误信息 */
//--注册
$_LANG['api_errors']['register'][1] = 'Domain name cannot be empty.';
$_LANG['api_errors']['register'][2] = 'The mailbox is incorrectly filled in.';
$_LANG['api_errors']['register'][3] = 'The username already exists.';
$_LANG['api_errors']['register'][4] = 'Unknown error.';
$_LANG['api_errors']['register'][5] = 'Interface error.';
//--获取余额
$_LANG['api_errors']['get_balance'][1] = 'The username password is incorrect.';
$_LANG['api_errors']['get_balance'][2] = 'Users are disabled.';
//--发送短信
$_LANG['api_errors']['send'][1] = 'The username password is incorrect.';
$_LANG['api_errors']['send'][2] = 'Text messages are too long.';
$_LANG['api_errors']['send'][3] = 'The sending date should be greater than the current time.';
$_LANG['api_errors']['send'][4] = 'The wrong number.';
$_LANG['api_errors']['send'][5] = 'The account balance is insufficient.';
$_LANG['api_errors']['send'][6] = 'The account has been suspended.';
$_LANG['api_errors']['send'][7] = 'Interface error.';
//--历史记录
$_LANG['api_errors']['get_history'][1] = 'The username password is incorrect.';
$_LANG['api_errors']['get_history'][2] = 'No records were found.';
//--用户验证
$_LANG['api_errors']['auth'][1] = 'Password error.';
$_LANG['api_errors']['auth'][2] = 'Users do not exist.';

/* 用户服务器检测到的错误信息 */
$_LANG['server_errors'][1] = 'Registration information is invalid.';//ERROR_INVALID_REGISTER_INFO
$_LANG['server_errors'][2] = 'Enabling information is invalid.';//ERROR_INVALID_ENABLE_INFO
$_LANG['server_errors'][3] = 'The message was sent incorrectly.';//ERROR_INVALID_SEND_INFO
$_LANG['server_errors'][4] = 'The inquiry information is incorrect.';//ERROR_INVALID_HISTORY_QUERY
$_LANG['server_errors'][5] = 'Invalid identity information.';//ERROR_INVALID_PASSPORT
$_LANG['server_errors'][6] = 'URL wrong.';//ERROR_INVALID_URL
$_LANG['server_errors'][7] = 'The HTTP response volume is empty.';//ERROR_EMPTY_RESPONSE
$_LANG['server_errors'][8] = 'Invalid XML file.';//ERROR_INVALID_XML_FILE
$_LANG['server_errors'][9] = 'Invalid node name.';//ERROR_INVALID_NODE_NAME
$_LANG['server_errors'][10] = 'Storage failed.';//ERROR_CANT_STORE
$_LANG['server_errors'][11] = 'The SMS function has not been activated yet.';//ERROR_INVALID_PASSPORT

/* 客户端JS语言项 */
//--注册或启用
$_LANG['js_languages']['password_empty_error'] = 'Password cannot be empty.';
$_LANG['js_languages']['username_empty_error'] = 'User name cannot be empty.';
$_LANG['js_languages']['username_format_error'] = 'The user name format is incorrect.';
$_LANG['js_languages']['domain_empty_error'] = 'Domain name cannot be empty.';
$_LANG['js_languages']['domain_format_error'] = 'The format of the domain name is incorrect.';
$_LANG['js_languages']['send_empty_error'] = 'Send mobile phone number and send grade at least one item!';
//--发送
$_LANG['js_languages']['phone_empty_error'] = 'Please fill in your cell phone number.';
$_LANG['js_languages']['phone_format_error'] = 'The phone number is not in the right format.';
$_LANG['js_languages']['msg_empty_error'] = 'Please fill in the message.';
$_LANG['js_languages']['send_date_format_error'] = 'The timing of sending is not in the right format.';
//--历史记录
$_LANG['js_languages']['start_date_format_error'] = 'The start date is not in the right format.';
$_LANG['js_languages']['end_date_format_error'] = 'The end date is not in the right format.';
//--充值
$_LANG['js_languages']['money_empty_error'] = 'Please enter the amount you want to recharge.';
$_LANG['js_languages']['money_format_error'] = 'The amount format is incorrect.';

?>