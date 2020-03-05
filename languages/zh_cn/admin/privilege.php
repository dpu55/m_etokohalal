<?php

/**
 * 鸿宇多用户商城 管理中心权限管理模块语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: privilege.php 17217 2016-01-19 06:29:08Z derek $
*/

/* 字段信息 */
$_LANG['user_id'] = 'number';
$_LANG['user_name'] = 'User name';
$_LANG['email'] = 'Email address';
$_LANG['password'] = 'password';
$_LANG['join_time'] = 'Adding time';
$_LANG['last_time'] = 'Last logon time';
$_LANG['last_ip'] = 'Last accessed IP';
$_LANG['action_list'] = 'Operation authority';
$_LANG['nav_list'] = 'Navigation bar';
$_LANG['language'] = 'Language used';

$_LANG['allot_priv'] = 'Assign authority';
$_LANG['allot_list'] = 'Permission list';
$_LANG['go_allot_priv'] = 'Setting Administrator Rights';

$_LANG['view_log'] = 'view log';

$_LANG['back_home'] = 'Back to home page';
$_LANG['forget_pwd'] = 'Have you forgotten your password?';
$_LANG['get_new_pwd'] = 'Retrieve Administrator Password';
$_LANG['pwd_confirm'] = 'Confirm password';
$_LANG['new_password'] = 'new password';
$_LANG['old_password'] = 'old password';
$_LANG['agency'] = 'Responsible Office';
$_LANG['self_nav'] = 'Personal navigation';
$_LANG['all_menus'] = 'All menus';
$_LANG['add_nav'] = 'increase';
$_LANG['remove_nav'] = 'remove';
$_LANG['move_up'] = 'Move upward';
$_LANG['move_down'] = 'Move down';
$_LANG['continue_add'] = 'Continue to add administrators';
$_LANG['back_list'] = 'Return to Administrator List';
$_LANG['select_role'] = 'Role selection';
$_LANG['select_please'] = 'Please choose...';

$_LANG['admin_edit'] = 'Editorial Administrator';
$_LANG['edit_pwd'] = 'Change Password';

$_LANG['back_admin_list'] = 'Return to Administrator List';

/* 提示信息 */
$_LANG['js_languages']['user_name_empty'] = 'Administrator username cannot be empty!';
$_LANG['js_languages']['password_invaild'] = 'The password must contain both letters and numbers and must not be less than 6!';
$_LANG['js_languages']['email_empty'] = 'Email address cannot be empty!';
$_LANG['js_languages']['email_error'] = 'The email address format is incorrect!';
$_LANG['js_languages']['password_error'] = 'The passwords entered twice are inconsistent!';
$_LANG['js_languages']['captcha_empty'] = 'You did not enter a verification code!';
$_LANG['action_succeed'] = 'Successful operation!';
$_LANG['edit_profile_succeed'] = 'You have successfully modified your personal account information!';
$_LANG['edit_password_succeed'] = 'You have successfully modified your password, so you must log in again!';
$_LANG['user_name_exist'] = 'This admin already exists!';
$_LANG['email_exist'] = 'Email address already exists!';
$_LANG['captcha_error'] = 'your verification code is not correct.';
$_LANG['login_faild'] = 'The account information you entered is incorrect.';
$_LANG['login_disable'] = 'The account you entered is temporarily unavailable.';
$_LANG['user_name_drop'] = 'Has been successfully deleted!';
$_LANG['pwd_error'] = 'The old password entered is incorrect!';
$_LANG['old_password_empty'] = 'If you want to change your password, you must first enter your old password!';
$_LANG['edit_admininfo_error'] = 'Only edit your own profile!';
$_LANG['edit_admininfo_cannot'] = 'You can\'t do anything with this administrator\'s permission!';
$_LANG['edit_remove_cannot'] = 'You cannot delete the demo administrator!';
$_LANG['remove_self_cannot'] = 'You cannot delete yourself!';
$_LANG['remove_cannot'] = 'You cannot delete this administrator!';

$_LANG['modif_info'] = 'Edit profile';
$_LANG['edit_navi'] = 'Set up personal navigation';

/* 帮助信息 */
$_LANG['password_notic'] = 'If you want to change the password, please fill in the old password first, if left blank, the password remains unchanged.';
$_LANG['email_notic'] = 'Enter the administrator\'s email address, which must be in email format';
$_LANG['confirm_notic'] = 'Enter the administrator\'s confirmation password. The two inputs must be the same.';

/* 登录表单 */
$_LANG['label_username'] = 'username：';
$_LANG['label_password'] = 'password：';
$_LANG['label_captcha'] = 'captcha：';
$_LANG['click_for_another'] = 'Invisibility? Click to replace another validation code.';
$_LANG['signin_now'] = 'Access to Management Center';
$_LANG['remember'] = 'Please save my login information this time.';
?>