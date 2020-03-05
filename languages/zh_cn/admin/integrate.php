<?php

/**
 * 鸿宇多用户商城 管理中心会员数据整合插件管理程序语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: integrate.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['integrate_name'] = 'Name';
$_LANG['integrate_version'] = 'Edition';
$_LANG['integrate_author'] = 'Author';

/* 插件列表 */
$_LANG['update_success'] = 'Setting up member data integration plug-in has been successful.';
$_LANG['install_confirm'] = 'Are you sure you want to install the member data integration plug-in?';
$_LANG['need_not_setup'] = 'When you use the ECSHOP membership system, there is no need to set it up.';
$_LANG['different_domain'] = 'The integration object you set is not in the same domain as ECSHOP.<br />You will only be able to share the membership data of the system, but you will not be able to log in at the same time.';
$_LANG['points_set'] = 'Integral Exchange Settings';
$_LANG['view_user_list'] = 'View forum users';
$_LANG['view_install_log'] = 'View Installation Log';

$_LANG['integrate_setup'] = 'Setting up Membership Data Integration Plug-in';
$_LANG['continue_sync'] = 'Continue to synchronize membership data';
$_LANG['go_userslist'] = 'Return to membership account list';
$_LANG['user_help'] = '<pre>
Usage method：
         1:If you need to integrate other user systems, you can install the appropriate version number plug-ins for integration.
         2:If the integrated user system needs to be replaced, the integration can be completed by installing the target plug-in directly, and the last integrated plug-in can be automatically uninstalled.
         3:If you do not need to integrate any user systems, please choose to install ECSHOP plug-ins, you can uninstall all integration plug-ins.
                           </pre>';

/* 查看安装日志 */
$_LANG['lost_install_log'] = 'No installation log found';
$_LANG['empty_install_log'] = 'Installation log is empty';

/* 表单相关语言项 */
$_LANG['db_notice'] = 'Click“<font color="#000000">next step</font>”It will guide you to synchronize the user data of the mall to the integration forum.If you do not need to synchronize data, Click“<font color="#000000">Save configuration information directly</font>”';

$_LANG['lable_db_host'] = 'Database Server Host Name：';
$_LANG['lable_db_name'] = 'Database name：';
$_LANG['lable_db_chartset'] = 'Database Character Set：';
$_LANG['lable_is_latin1'] = 'Is it Latin1 encoding?';
$_LANG['lable_db_user'] = 'Database Account：';
$_LANG['lable_db_pass'] = 'Database password：';
$_LANG['lable_prefix'] = 'Table Prefix：';
$_LANG['lable_url'] = 'Complete URL of the integrated system：';
/* 表单相关语言项(discus5x) */
$_LANG['cookie_prefix']          = 'COOKIEprefix：';
$_LANG['cookie_salt']          = 'COOKIE Encrypted string：';
$_LANG['button_next'] = 'next step';
$_LANG['button_force_save_config'] = 'Save configuration information directly';
$_LANG['save_confirm'] = 'Are you sure you want to save configuration information directly?';
$_LANG['button_save_config'] = 'Save configuration information';

$_LANG['error_db_msg'] = 'Incorrect database address, user or password';
$_LANG['error_db_exist'] = 'The database does not exist';
$_LANG['error_table_exist'] = 'The key data sheet of the Integration Forum does not exist. The information you filled in is incorrect.';

$_LANG['notice_latin1'] = 'When this option is filled in incorrectly, it may cause Chinese username to be unavailable.';
$_LANG['error_not_latin1'] = 'Integrated database detection is not Latin1 encoding! Please re-select';
$_LANG['error_is_latin1'] = 'Integrated database detection is lantin1 encoding! Please re-select';
$_LANG['invalid_db_charset'] = 'The integrated database detected that the%s  character set was not the%s character set.';
$_LANG['error_latin1'] = 'The integration information you fill in will lead to serious errors and will not be able to complete the integration.';

/* 检查同名用户 */
$_LANG['conflict_username_check'] = 'Check if Mall users and Integrated Forum users have duplicate names';
$_LANG['check_notice'] = 'This page will check whether the existing users and forum users in the mall have renames. Click "Before Checking", please choose a default processing method for the users with renames in the mall.';
$_LANG['default_method'] = 'If you detect duplicate users in the mall, select a default processing method for these users';
$_LANG['shop_user_total'] = 'The mall has a total of %s users to be checked';
$_LANG['lable_size'] = 'Check the number of users at a time';
$_LANG['start_check'] = 'Start checking';
$_LANG['next'] = 'next step';
$_LANG['checking'] = 'Checking... (Please don\'t close the browser)';
$_LANG['notice'] = 'Have checked %s / %s ';
$_LANG['check_complete'] = 'Inspection completed';

/* 同名用户处理 */
$_LANG['conflict_username_modify'] = 'Mall Name User List';
$_LANG['modify_notice'] = 'Following is a list of all retail stores and forums with duplicate names of users and processing methods. If you have confirmed all the operations, please click "Start Integration". You need to click the button "Save the page changes" to change the operation of the renamed user to take effect.';
$_LANG['page_default_method'] = 'Default processing method for renamed users in this page';
$_LANG['lable_rename'] = 'Mall duplicate users with suffixes';
$_LANG['lable_delete'] = 'Delete duplicate users and related data in malls';
$_LANG['lable_ignore'] = 'Retain the same name user in the mall, and the same name user in the forum will be regarded as the same user.';
$_LANG['short_rename'] = 'Mall users renamed';
$_LANG['short_delete'] = 'Delete Mall Users';
$_LANG['short_ignore'] = 'Retain Mall Users';
$_LANG['user_name'] = 'Mall User Name';
$_LANG['email'] = 'email';
$_LANG['reg_date'] = 'Registration date';
$_LANG['all_user'] = 'All retail users';
$_LANG['error_user'] = 'Mall users who need to re-select operations';
$_LANG['rename_user'] = 'Shopping Mall Users Need to Rename';
$_LANG['delete_user'] = 'Mall users need to be deleted';
$_LANG['ignore_user'] = 'Mall users need to be retained';

$_LANG['submit_modify'] = 'Save changes to this page';
$_LANG['button_confirm_next'] = 'Start integration';


/* 用户同步 */
$_LANG['user_sync'] = 'Synchronize Mall Data to Forum and Complete Integration';
$_LANG['button_pre'] = 'last step';
$_LANG['task_name'] = 'Task name';
$_LANG['task_status'] = 'Task status';
$_LANG['task_del'] = 'Number of users in %s malls to be deleted';
$_LANG['task_rename'] = 'Number of users in %s malls to be rename';
$_LANG['task_sync'] = '%s mall users need to synchronize to the Forum';
$_LANG['task_save'] = 'Save configuration information and complete integration';
$_LANG['task_uncomplete'] = 'Uncomplete';
$_LANG['task_run'] = 'In execution (%s / %s)';
$_LANG['task_complete'] = 'Complete';
$_LANG['start_task'] = 'Start task';
$_LANG['sync_status'] = 'Already synchronized %s / %s';
$_LANG['sync_size'] = 'Number of users processed at a time';
$_LANG['sync_ok'] = 'Congratulations. Integration success';


$_LANG['save_ok'] = 'Save successfully';

/* 积分设置 */
$_LANG['no_points'] = 'No convertible points were detected in the forum.';
$_LANG['bbs'] = 'forum';
$_LANG['shop_pay_points'] = 'Consumption Integral of Mall';
$_LANG['shop_rank_points'] = 'Grade Integral of Mall';
$_LANG['add_rule'] = ' Add new rules';
$_LANG['modify'] = 'Modify';
$_LANG['rule_name'] = 'Exchange rules';
$_LANG['rule_rate'] = 'subscription ratio';

/* JS语言项 */
$_LANG['js_languages']['no_host'] = 'The database server host name cannot be empty.';
$_LANG['js_languages']['no_user'] = 'The database account cannot be empty.';
$_LANG['js_languages']['no_name'] = 'The database name cannot be empty.';
$_LANG['js_languages']['no_integrate_url'] = 'Enter the integrity of the integration object URL';
$_LANG['js_languages']['install_confirm'] = 'Please do not change the integration object at will in the system operation. \r\nAre you sure you want to install the member data integration plug-in?';
$_LANG['js_languages']['num_invalid'] = 'The number of records of synchronized data is not an integer';
$_LANG['js_languages']['start_invalid'] = 'The starting position of synchronous data is not an integer';
$_LANG['js_languages']['sync_confirm'] = 'Synchronizing membership data will rebuild the target data table. Please backup your data before performing synchronization.\r\n Are you sure you want to start synchronizing membership data?';

$_LANG['cookie_prefix_notice'] = 'UTF8 versions cookie the prefix defaults toxnW_，GB2312/GBK versions cookieThe prefix defaults toKD9_.';

$_LANG['js_languages']['no_method'] = 'Choose a default processing method';

$_LANG['js_languages']['rate_not_null'] = 'Proportion cannot be empty';
$_LANG['js_languages']['rate_not_int'] = 'Proportion can only be filled in integers';
$_LANG['js_languages']['rate_invailed'] = 'You filled in an invalid ratio.';
$_LANG['js_languages']['user_importing'] = 'Importing users into UCenter...';

/* UCenter设置语言项 */
$_LANG['ucenter_tab_base'] = 'Basic setup';
$_LANG['ucenter_tab_show'] = 'Display settings';
$_LANG['ucenter_lab_id'] = 'UCenter Application of ID:';
$_LANG['ucenter_lab_key'] = 'UCenter Communication key:';
$_LANG['ucenter_lab_url'] = 'UCenter Access address:';
$_LANG['ucenter_lab_ip'] = 'UCenter IP address:';
$_LANG['ucenter_lab_connect'] = 'UCenter Connection mode:';
$_LANG['ucenter_lab_db_host'] = 'UCenter Database server:';
$_LANG['ucenter_lab_db_user'] = 'UCenter Database username:';
$_LANG['ucenter_lab_db_pass'] = 'UCenter Database password:';
$_LANG['ucenter_lab_db_name'] = 'UCenter Database name:';
$_LANG['ucenter_lab_db_pre'] = 'UCenter Table Prefix:';
$_LANG['ucenter_lab_tag_number'] = 'TAG Label Display Quantity:';
$_LANG['ucenter_lab_credit_0'] = 'Name of Grade Integral:';
$_LANG['ucenter_lab_credit_1'] = 'Name of Consumption Integral:';
$_LANG['ucenter_opt_database'] = 'Database mode';
$_LANG['ucenter_opt_interface'] = 'Interface mode';

$_LANG['ucenter_notice_id'] = 'This value is the application ID of the current store in UCenter. Please do not change it in general.';
$_LANG['ucenter_notice_key'] = 'Communication key is used to encrypt information between UCenter and ECShop. It can contain any letters and numbers. Please set the same communication key between UCenter and ECShop to ensure that the two systems can communicate normally.';
$_LANG['ucenter_notice_url'] = 'This value will be initialized after you install UCenter. If your UCenter address or directory changes, modify this value. In general, please do not change such as: http://www.sitename.com/uc_server (Last but not least"/")';
$_LANG['ucenter_notice_ip'] = 'If your server can\'t access UCenter through domain name, you can enter the IP address of UCenter server.';
$_LANG['ucenter_notice_connect'] = 'Please choose the appropriate connection mode according to your server network environment';
$_LANG['ucenter_notice_db_host'] = 'It can be either a local or a remote database server. If MySQL port is not the default 3306, please fill in the following form:127.0.0.1:6033';
$_LANG['uc_notice_ip'] = 'There is something wrong with the connection. Please fill in the IP address of the server. If your UC and ECShop are installed on the same server, we suggest you try to fill in the IP address. 127.0.0.1';

$_LANG['uc_lab_url'] = 'UCenter of URL:';
$_LANG['uc_lab_pass'] = 'UCenter Founder Code:';
$_LANG['uc_lab_ip'] = 'UCenter of IP:';

$_LANG['uc_msg_verify_failur'] = 'Validation failed';
$_LANG['uc_msg_password_wrong'] = 'Founder password error';
$_LANG['uc_msg_data_error'] = 'Installation data error';

$_LANG['ucenter_import_username'] = 'Membership data imported to UCenter';
$_LANG['uc_import_notice'] = 'Reminder: Please suspend all applications before importing Member data(such as Discuz!, SupeSite ect)';
$_LANG['uc_members_merge'] = 'Membership merger';
$_LANG['user_startid_intro'] = '<p>This initial membership ID is% s. If the original ID is 888, the membership will be changed to %s+888 Value。</p>';
$_LANG['uc_members_merge_way1'] = 'Force the same user with the same UC username and password';
$_LANG['uc_members_merge_way2'] = 'Users with the same UC username and password are not imported into UC users';
$_LANG['start_import'] = 'Start importing';
$_LANG['import_user_success'] = 'Successfully imported membership data to UCenter';
$_LANG['uc_points'] = 'UCenterpoints exchange settings need to be done in the UCenter management background';
$_LANG['uc_set_credits'] = 'Setting up Integral Exchange Scheme';
$_LANG['uc_client_not_exists'] = 'uc_client the directory does not exist. Please upload the uc_client directory to the root directory of the mall and then integrate it.';
$_LANG['uc_client_not_write'] = 'uc_client/data the directory is not writable. Please set the uc_client/data directory permission to777';
$_LANG['uc_lang']['credits'][0][0] = 'Rank integral';
$_LANG['uc_lang']['credits'][0][1] = '';
$_LANG['uc_lang']['credits'][1][0] = 'Consumption points';
$_LANG['uc_lang']['credits'][1][1] = '';
$_LANG['uc_lang']['exchange'] = 'UCenter exchange';

?>