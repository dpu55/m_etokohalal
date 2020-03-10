<?php

/**
 * 鸿宇多用户商城 转换程序语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: convert.php 17217 2016-01-19 06:29:08Z derek $
 */

$_LANG['confirm_convert'] = 'Note: Executing the conversion program will result in loss of existing data. Please think twice！！！';
$_LANG['backup_data'] = 'If the existing data may be of value to you, please do a good backup first.';
$_LANG['backup'] = 'Backup now';
$_LANG['select_system'] = 'Please select the system you want to convert：';
$_LANG['note_select_system'] = '（If your system is not in the list on the left, you can go to<a href="http://bbs.hongyuvip.com" target="_blank"><strong>Our website</strong></a>Ask for help）';
$_LANG['select_charset'] = 'Select the character set for the system you want to convert：';
$_LANG['note_select_charset'] = '（If your system does not use UTF-8 character sets, conversion may take a long time.）';
$_LANG['dir_notes'] = 'Note that the root directory path of the original mall should use the path relative to the admin directory.<br/>For example, the original mall directory is shop under the root directory, while ecshop is under the root directory, the path is../shop';
$_LANG['your_config'] = 'Please set up the configuration information of the original system.：';
$_LANG['your_host'] = 'Host name or address：';
$_LANG['your_user'] = 'Login number：';
$_LANG['your_pass'] = 'Login password：';
$_LANG['your_db'] = 'Database name：';
$_LANG['your_prefix'] = 'Database table prefix：';
$_LANG['your_path'] = 'Origin Mall Root Catalogue：';
$_LANG['convert'] = 'Conversion data';
$_LANG['remark'] = 'Remarks：';
$_LANG['remark_info'] = '<ul>' .
        '<li>For bargain items, you need to edit their original price (our price) and promotion period；</li>' .
        '<li>Please reset the watermarking；</li>' .
        '<li>Please reset the advertisement；</li>' .
        '<li>Please reset the distribution mode；</li>' .
        '<li>Please reset the payment method；</li>' .
        '<li>Please transfer the goods that did not belong to the final category to the final category.；</li>' .
        '</ul>';

$_LANG['connect_db_error'] = 'Unable to connect to the database, please check the configuration information.';
$_LANG['table_error'] = 'Lack of necessary tables %s ，Please check the configuration information.';
$_LANG['dir_error'] = 'Lack of necessary directories %s ，Please check the configuration information.';
$_LANG['dir_not_readable'] = 'Catalogue unreadable %s';
$_LANG['dir_not_wPlease reset the advertisementritable'] = 'Directory not writable %s';
$_LANG['file_not_readable'] = 'Document unreadable %s';
$_LANG['js_languages']['check_your_db'] = 'Checking the database of your system...';
$_LANG['js_languages']['act_ok'] = 'Congratulations on your successful operation！';

$_LANG['js_languages']['no_system'] = 'No conversion program is available';
$_LANG['js_languages']['host_not_null'] = 'Host name or address cannot be empty';
$_LANG['js_languages']['db_not_null'] = 'The database name cannot be empty';
$_LANG['js_languages']['user_not_null'] = 'The login account cannot be empty';
$_LANG['js_languages']['path_not_null'] = 'The original Mall Root Catalogue cannot be empty';
?>