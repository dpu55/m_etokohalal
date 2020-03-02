<?php
/*------------------------------------------------------ */
//-- 卡片信息
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = 'Virtual Commodity List';
$_LANG['lab_goods_name'] = 'Nama Produk';
$_LANG['replenish'] = 'Replenishment';
$_LANG['lab_card_id'] = 'ID';
$_LANG['lab_card_sn'] = 'Card serial number';
$_LANG['lab_card_password'] = 'Card password';
$_LANG['lab_end_date'] = 'Up to date of use';
$_LANG['lab_is_saled'] = 'Has it been sold?';
$_LANG['lab_order_sn'] = 'Order ID';
$_LANG['action_success'] = 'Successful operation';
$_LANG['action_fail'] = 'Operation failed';
$_LANG['card'] = 'Card list';

$_LANG['batch_card_add'] = 'Bulk replenishment';
$_LANG['download_file'] = 'Unduh batch csv file ';
$_LANG['separator'] = 'Separator';
$_LANG['uploadfile'] = 'Upload files';
$_LANG['sql_error'] = 'Article %s Information Error:<br /> ';

/* 提示信息 */
$_LANG['replenish_no_goods_id'] = 'Lack of commodity ID parameters, unable to replenish operations';
$_LANG['replenish_no_get_goods_name'] = 'Commodity ID parameter is incorrect, and the name of the commodity can not be obtained.';
$_LANG['drop_card_success'] = 'The record was deleted successfully.';
$_LANG['batch_drop'] = 'Batch deletion';
$_LANG['drop_card_confirm'] = 'Are you sure you want to delete the record?';
$_LANG['card_sn_exist'] = 'Card serial number %s already exists. Please re-enter it.';
$_LANG['go_list'] = 'Return to replenishment list';
$_LANG['continue_add'] = 'Continue replenishment';
$_LANG['uploadfile_fail'] = 'File upload failed';
$_LANG['batch_card_add_ok'] = 'The %s replenishment information has been successfully added';

$_LANG['js_languages']['no_card_sn'] = 'The serial number and password of the card cannot be empty.';
$_LANG['js_languages']['separator_not_null'] = 'Separation symbols cannot be empty.';
$_LANG['js_languages']['uploadfile_not_null'] = 'Please select the file to upload.';

$_LANG['use_help'] ='Instruksi penggunaan:'.
'<ol>'.
'<li> Upload file should be CSV file <br/>The CSV file is listed as the serial number of the card, the password of the card and the deadline of the use of the card. <br / > '.
'(Create CSV file with EXCEL: fill in the data in the order of card number, card password and deadline in EXCEL, and save it as CSV file directly after completion)'.
'<li> password, and deadline can be empty, the deadline format is 2006-11-6 or 2006/11/6'.
'<li> card number, card password and deadline should not use Chinese </li>'.
'</ol>';

/*------------------------------------------------------ */
//-- 改变加密串
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = 'Change the encryption string';
$_LANG['user_guide'] = 'Instruksi penggunaan:'.
'<ol>'.
'<li> Encryption string is used to encrypt the card number and password of virtual card commodities</li>'.
'<li> Encrypted string is stored in file data/config.php, and the corresponding constant is AUTH_KEY</li>'.
'<li> If you want to change the encrypted string, enter the original encrypted string and the new encrypted string in the text box below, click</ol>';

$_LANG['label_old_string'] = 'Original encryption string';
$_LANG['label_new_string'] = 'New encryption string';

$_LANG['invalid_old_string'] = 'The original encryption string is incorrect';
$_LANG['invalid_new_string'] = 'Incorrect new encryption string';
$_LANG['change_key_ok'] = 'Successful change of encrypted string';
$_LANG['same_string'] = 'The new encryption string is the same as the original one.';

$_LANG['update_log'] = 'Update record';
$_LANG['old_stat'] = 'A total of %s was recorded. The records encrypted with new strings have %s, the records encrypted with original strings (to be updated) have %s, and the records encrypted with unknown strings have %s.';
$_LANG['new_stat'] = 'After updating </strong>, there are %s records encrypted by new string and %s records encrypted by unknown string.';
$_LANG['update_error'] = 'Errors occurred during the update process:%s';
$_LANG['js_languages']['updating_info'] = '<strong> is updating </strong> (100 records at a time)';
$_LANG['js_languages']['updated_info'] = '<strong>已更新</strong><span id=\“updated\”>0<span>条记录。';
?>