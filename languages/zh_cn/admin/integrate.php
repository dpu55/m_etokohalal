<?php
$_LANG['integrate_name'] = 'Name';
$_LANG['integrate_version'] = 'Versi';
$_LANG['integrate_author'] = 'Author';

/* 插件列表 */
$_LANG['update_success'] = 'Setting up member data integration plug-in has been successful.';
$_LANG['install_confirm'] = 'Are you sure you want to install the member data integration plug-in?';
$_LANG['need_not_setup'] = 'When you use the ECSHOP membership system, there is no need to set it up.';
$_LANG['different_domain'] = 'The integration object you set is not in the same domain as ECSHOP. <br/> You will only be able to share the membership data of the system, but you will not be able to log in at the same time.';
$_LANG['points_set'] = 'Integral Exchange Settings';
$_LANG['view_user_list'] = 'View forum users';
$_LANG['view_install_log'] = 'View Installation Log';

$_LANG['integrate_setup'] = 'Setting up Membership Data Integration Plug-in';
$_LANG['continue_sync'] = 'Continue to synchronize membership data';
$_LANG['go_userslist'] = 'Return to membership account list';
$_LANG['user_help'] = '<pre>
Usage method:
1: If you need to integrate other user systems, you can install appropriate version number plug-ins for integration.
2: If the integrated user system needs to be replaced, the integration can be completed by installing the target plug-in directly, and the last integrated plug-in can be automatically uninstalled.
3: If you do not need to integrate any user systems, Please choose to install ECSHOP plug-ins, you can uninstall all integration plug-ins.
                           </pre>';

/* 查看安装日志 */
$_LANG['lost_install_log'] = 'No installation log found';
$_LANG['empty_install_log'] = 'Installation log is empty';

/* 表单相关语言项 */
$_LANG['db_notice'] = 'Clicking on <font color=" 000000"> Next step </font> will guide you to synchronize mall user data to the integration forum. If you do not need to synchronize data, click "<font color="#000000"> to save configuration information directly </font>"';
$_LANG['lable_db_host']='Database server host name:';
$_LANG['lable_db_name']='Database name:';
$_LANG['lable_db_chartset']='Database character set:';
$_LANG['lable_is_latin1']='whether it is Latin1 encoding';
$_LANG['lable_db_user']='Database account:';
$_LANG['lable_db_pass']='Database password:';
$_LANG['lable_prefix']='data table prefix:';
$_LANG['lable_url']='The complete URL of the integrated system:';

/* 表单相关语言项(discus5x) */
$_LANG['cookie_prefix']='COOKIE prefix:';
$_LANG['cookie_salt']='COOKIE encryption string:';
$_LANG['button_next']='next';
$_LANG['button_force_save_config']='save configuration information directly';
$_LANG['save_confirm']='Are you sure you want to save configuration information directly? ';
$_LANG['button_save_config']='save configuration information';
$_LANG['error_db_msg']='incorrect database address, user or password';
$_LANG['error_db_exist']='Database does not exist';
$_LANG['error_table_exist']='Integration Forum key data sheet does not exist, the information you filled in is incorrect';
$_LANG['notice_latin1']='This option may cause Chinese username to be unavailable when it is filled in incorrectly';
$_LANG['error_not_latin1']='Integrated database detection is not Latin1 encoding! Please re-select';
$_LANG['error_is_latin1']='integrated database detected lantin1 encoding! Please re-select';
$_LANG['invalid_db_charset']='The integrated database detected a %s character set, not a %s character set';
$_LANG['error_latin1']='The integration information you fill in will lead to serious errors and will not be able to complete the integration';

/* 检查同名用户 */
$_LANG['conflict_username_check']='Check if Mall users and Integration Forum users have renames';
$_LANG['check_notice']='This page will check whether the existing users and forum users in the mall have renames. Click "Before checking", Please choose a default processing method for the users with renames in the mall'.
$_LANG['default_method']='If you detect duplicate users in the mall, please select a default processing method for these users';
$_LANG['shop_user_total']='Mall has %s users to be checked';
$_LANG['lable_size']='Number of users checked each time';
$_LANG['start_check']='Start checking';
$_LANG['next']='next';
$_LANG['checking']='Checking... (Please do not close the browser)';
$_LANG['notice']='Checked %s/%s';
$_LANG['check_complete']='check completed';

/* 同名用户处理 */
$_LANG['conflict_username_modify']='Mall Named User List';
$_LANG['modify_notice']='lists all the duplicate users and processing methods of the malls and forums below. If you have confirmed all the operations, please click "Start Integration". You need to click the button "Save the page changes" to change the operation of the renamed user to take effect. ';
$_LANG['page_default_method']='Default processing method for renamed users in this page';
$_LANG['lable_rename']='Mall rename user plus suffix';
$_LANG['lable_delete']='Delete duplicate users and related data of malls';
$_LANG['lable_ignore']='Reserve the retail users with the same name, and the forum users with the same name will be regarded as the same user';
$_LANG['short_rename']='Mall user renamed';
$_LANG['short_delete']='delete mall users';
$_LANG['short_ignore']='Keep Mall Users';
$_LANG['user_name']='mall user name';
$_LANG['email']='email';
$_LANG['reg_date']='registration date';
$_LANG['all_user']='All mall renamed users';
$_LANG['error_user']='Mall user who needs to re-select operation';
$_LANG['rename_user']='Mall users who need to be renamed';
$_LANG['delete_user']='Mall users that need to be deleted';
$_LANG['ignore_user']='Mall users that need to be retained';

$_LANG['submit_modify'] = 'Save changes to this page';
$_LANG['button_confirm_next'] = 'Start integration';


/* 用户同步 */
$_LANG['user_sync']='Synchronize mall data to forum and complete integration';
$_LANG['button_pre']='last step';
$_LANG['task_name']='task name';
$_LANG['task_status']='task status';
$_LANG['task_del']='%s number of mall users to be deleted';
$_LANG['task_rename']='%s Mall users need to rename';
$_LANG['task_sync']='%s Mall users need to synchronize to the forum';
$_LANG['task_save']='Save configuration information and complete integration';
$_LANG['task_uncomplete']='incomplete';
$_LANG['task_run']='In execution (%s/%S)';
$_LANG['task_complete']='Lengkap';
$_LANG['start_task']='Start task';
$_LANG['sync_status']='synchronized %s/%s';
$_LANG['sync_size']='Number of users per process';
$_LANG['sync_ok']='Congratulations. Successful integration';
$_LANG['save_ok'] = 'Save success';

/* 积分设置 */
$_LANG ['no_points']='No convertible points were detected in the forum';
$_LANG['bbs']='Forum';
$_LANG['shop_pay_points']='shopping mall consumption integral';
$_LANG['shop_rank_points']='Mall Grade Integral';
$_LANG['add_rule']='New rule';
$_LANG['modify']='modify';
$_LANG['rule_name']='exchange rule';
$_LANG['rule_rate']='conversion ratio';

/* JS语言项 */
$_LANG['js_languages']['no_host']='The database server host name cannot be empty. ';
$_LANG['js_languages']['no_user']='The database account cannot be empty. ';
$_LANG['js_languages']['no_name']='The database name cannot be empty. ';
$_LANG['js_languages']['no_integration_url']='Please enter the complete URL of the integration object';
$_LANG['js_languages']['install_confirm']='Please do not change integration objects at will while the system is running. \ Are you sure you want to install the member data integration plug-in? ';
$_LANG['js_languages']['num_invalid']='The number of records of synchronized data is not an integer';
$_LANG['js_languages']['start_invalid']='The starting position of synchronized data is not an integer';
$_LANG['js_languages']['sync_confirm']='Synchronizing membership data will rebuild the target data table. Please backup your data before performing synchronization. \ Are you sure you want to start synchronizing membership data? ';
$_LANG['cookie_prefix_notice']='UTF8 version cookie prefix defaults to xnW_ and GB2312/GBK version cookie prefix defaults to KD9_. ';
$_LANG['js_languages']['no_method']='Please choose a default processing method';
$_LANG['js_languages']['rate_not_null']='The ratio cannot be empty';
$_LANG['js_languages']['rate_not_int']='Ratio can only fill in integers';
$_LANG['js_languages']['rate_invailed']='You filled in an invalid ratio';
$_LANG['js_languages']['user_importing']='Importing users into UCenter...';

/* UCenter设置语言项 */
$_LANG['ucenter_tab_base'] = 'Basic setup';
$_LANG['ucenter_tab_show'] = 'Display settings';
$_LANG['ucenter_lab_id'] = 'UCenter Application of ID:';
$_LANG['ucenter_lab_key'] = 'UCenter Communication key:';
$_LANG['ucenter_lab_url'] = 'UCenter Access address:';
$_LANG['ucenter_lab_ip'] = 'UCenter IP address:';
$_LANG['ucenter_lab_connect'] = 'UCenter Connection mode:';
$_LANG['ucenter_lab_db_host'] = 'UCenter database server:';
$_LANG['ucenter_lab_db_user'] = 'UCenter Database username:';
$_LANG['ucenter_lab_db_pass'] = 'UCenter Database password:';
$_LANG['ucenter_lab_db_name'] = 'UCenter Database name:';
$_LANG['ucenter_lab_db_pre'] = 'UCenter Table Prefix:';
$_LANG['ucenter_lab_tag_number'] = 'TAG Display Quantity:';
$_LANG['ucenter_lab_credit_0'] = 'Name of Grade Integral:';
$_LANG['ucenter_lab_credit_1'] = 'Name of Consumption Integral:';
$_LANG['ucenter_opt_database'] = 'Database mode';
$_LANG['ucenter_opt_interface'] = 'Interface mode';

$_LANG['ucenter_notice_id'] = 'This value is the application ID of the current store in UCenter. Please do not change it in general.';
$_LANG['ucenter_notice_key'] = 'Communication keys are used to encrypt information transmitted between ECShop and UCenter. They can contain any letters and numbers. Please set the same communication keys between UCenter and ECShop to ensure that the two systems can communicate normally.';
$_LANG['ucenter_notice_url'] = 'This value will be initialized after you install UCenter. If your UCenter address or directory changes, modify this item. In general, please do not change it, such as: http://www.sitename.com/uc_server.';
$_LANG['ucenter_notice_ip'] = 'If your server cannot access UCenter through domain name, you can enter the IP address of UCenter server.';
$_LANG['ucenter_notice_connect'] = 'Please choose the appropriate connection mode according to your server network environment';
$_LANG['ucenter_notice_db_host'] = 'It can be either a local or a remote database server. If MySQL port is not the default 3306, please fill in the following form: 127.0.0.1:6033';
$_LANG['uc_notice_ip'] = 'There is something wrong with the connection. Please fill in the IP address of the server. If your UC and ECShop are installed on the same server, we suggest you try to fill in 127.0.0.1.';

$_LANG['uc_lab_url'] = 'UCenter URL:';
$_LANG['uc_lab_pass'] = 'UCenter Founder Code:';
$_LANG['uc_lab_ip'] = 'UCenter IP:';

$_LANG['uc_msg_verify_failur'] = 'Validation failed';
$_LANG['uc_msg_password_wrong'] = 'Founder password error';
$_LANG['uc_msg_data_error'] = 'Installation data error';

$_LANG['ucenter_import_username'] = 'Membership data imported to UCenter';
$_LANG['uc_import_notice'] = 'Reminder: Please pause all applications (such as Discuz!, SupeSite, etc.) before importing membership data.';
$_LANG['uc_members_merge'] = 'Membership merger';
$_LANG['user_startid_intro'] = '<p> This initial membership ID is %s. Members whose original ID is 888 will be changed to %s + 888. </p>';
$_LANG['uc_members_merge_way1'] = 'Force the same user with the same UC username and password';
$_LANG['uc_members_merge_way2'] = 'Users with the same UC username and password are not imported into UC users';
$_LANG['start_import'] = 'Start import';
$_LANG['import_user_success'] = 'Successfully imported membership data to UCenter';
$_LANG['uc_points'] = 'UCenter Integral Exchange Settings need to be done in the UCenter management background.';
$_LANG['uc_set_credits'] = 'Setting up Integral Exchange Scheme';
$_LANG['uc_client_not_exists'] = 'The uc_client directory does not exist. Please upload the uc_client directory to the root directory of the mall and then integrate it.';
$_LANG['uc_client_not_write'] = 'The uc_client/data directory is not writable. Please set the uc_client/data directory permission to 777 first.';
$_LANG['uc_lang']['credits'][0][0] = 'Rank integral';
$_LANG['uc_lang']['credits'][0][1] = '';
$_LANG['uc_lang']['credits'][1][0] = 'Consumption points';
$_LANG['uc_lang']['credits'][1][1] = '';
$_LANG['uc_lang']['exchange'] = 'UCenter Integral Conversion';

?>