<?php
$_LANG['confirm_convert'] = 'Note: Executing the conversion program will cause the loss of existing data, please think twice!!!';
$_LANG['backup_data'] = 'If the existing data may be of value to you, please do a good backup first.';
$_LANG['backup'] = 'Backup now';
$_LANG['select_system'] = 'Please select the system you want to convert:';
$_LANG['note_select_system'] = 'Please select';
$_LANG['select_charset'] = 'Select the character set for the system you want to convert:';
$_LANG['note_select_charset'] = '(If your system is not using the UTF-8 character set, the conversion may take a long time)';
$_LANG['dir_notes'] = 'Note that the root directory path of the original mall should use the path relative to the admin directory. <br/> For example, if the original mall directory is shop in the root directory, and ECSHOP is shop in the root directory, the path is. / shop.';
$_LANG['your_config'] = 'Please set up the configuration information of the original system:';
$_LANG['your_host'] = 'Host name or address:';
$_LANG['your_user'] = 'Login Account:';
$_LANG['your_pass'] = 'Login Password:';
$_LANG['your_db'] = 'Database Name';
$_LANG['your_prefix'] = 'Database table prefix:';
$_LANG['your_path'] = 'The original Mall Root Catalogue:';
$_LANG['convert'] = 'Conversion data';
$_LANG['remark'] = 'Remarks:';
$_LANG['remark_info'] = '<ul>'.
'<li> For special items, you need to edit their original price (our stores price) and promotion period; </li>'.
'<li> Please reset the watermarking; </li>'.
'<li> Please reset the advertisement; </li>'.
'<li> Please reset the distribution mode; </li>'.
'<li> Please reset the payment method; </li>'.
'<li> Please transfer the goods that did not belong to the final classification to the final classification; </li>'.
'</ul>';

$_LANG['connect_db_error'] = 'Unable to connect to the database, please check the configuration information.';
$_LANG['table_error'] = 'Lack of necessary tables %s, please check the configuration information.';
$_LANG['dir_error'] = 'Lack of necessary directories %s, please check the configuration information.';
$_LANG['dir_not_readable'] = 'Directory unreadable %s';
$_LANG['dir_not_writable'] = 'Directory not writable %s';
$_LANG['file_not_readable'] = 'Document unreadable %s';
$_LANG['js_languages']['check_your_db'] = 'Checking the database of your system...';
$_LANG['js_languages']['act_ok'] = 'Congratulations on your successful operation!';

$_LANG['js_languages']['no_system'] = 'No conversion program is available';
$_LANG['js_languages']['host_not_null'] = 'Host name or address cannot be empty';
$_LANG['js_languages']['db_not_null'] = 'The database name cannot be empty';
$_LANG['js_languages']['user_not_null'] = 'The login account cannot be empty';
$_LANG['js_languages']['path_not_null'] = 'The original Mall Root Catalogue cannot be empty';
?>