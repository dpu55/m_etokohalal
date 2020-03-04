<?php

/**
 * 鸿宇多用户商城
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: captcha_manage.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['captcha_manage'] = 'Verification code settings';
$_LANG['captcha_note'] = 'Opening the authentication code requires support from the service GD library, while your server does not support GD.';

$_LANG['captcha_setting'] = 'Verification code settings';
$_LANG['captcha_turn_on'] = 'Enable Verification Code';
$_LANG['turn_on_note'] = 'Picture validation code can avoid malicious batch comments or submission of information. It is recommended to open the validation code function. Note: Enabling validation codes can make some operations cumbersome. It is recommended that only when necessary.';
$_LANG['captcha_register'] = 'New user registration';
$_LANG['captcha_login'] = 'User login';
$_LANG['captcha_comment'] = 'Comment';
$_LANG['captcha_admin'] = 'Background Administrator Logon';
$_LANG['captcha_login_fail'] = 'Display authentication code when login fails';
$_LANG['login_fail_note'] = 'Selecting "Yes" will display the authentication code three times after the user fails to log in, and selecting "No" will always display the authentication code at the time of login. Note: This setting is valid only when the user login authentication code is enabled';
$_LANG['captcha_width'] = 'Verification Code Picture Width';
$_LANG['width_note'] = 'Verification code picture width, ranging from40～145 ';
$_LANG['captcha_height'] = 'Verification Code Picture Height';
$_LANG['height_note'] = 'Verification code image height, ranging from 15～50 ';

$_LANG['js_languages']['width_number'] = 'Please enter a number for the width of the picture.!';
$_LANG['js_languages']['proper_width'] = 'Picture widths range from 40 to 145!';
$_LANG['js_languages']['height_number'] = 'Picture Height Please Enter Numbers!';
$_LANG['js_languages']['proper_height'] = 'Picture height should be between 15 and 50!';

$_LANG['save_ok'] = 'Settings saved successfully';
$_LANG['captcha_message'] = 'Message Board';

?>
