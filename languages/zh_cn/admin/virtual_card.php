<?php

/**
 * 鸿宇多用户商城 虚拟卡管理
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: virtual_card.php 17217 2016-01-19 06:29:08Z derek $
*/

/*------------------------------------------------------ */
//-- 卡片信息
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = 'Virtual goods list';
$_LANG['lab_goods_name'] = 'product name';
$_LANG['replenish'] = 'Replenishment';
$_LANG['lab_card_id'] = 'Numbering';
$_LANG['lab_card_sn'] = 'Card serial number';
$_LANG['lab_card_password'] = 'Card password';
$_LANG['lab_end_date'] = 'As of date of use';
$_LANG['lab_is_saled'] = 'Has it been sold?';
$_LANG['lab_order_sn'] = 'order number';
$_LANG['action_success'] = 'Successful operation';
$_LANG['action_fail'] = 'operation failed';
$_LANG['card'] = 'Card list';

$_LANG['batch_card_add'] = 'Bulk replenishment';
$_LANG['download_file'] = 'Download batch CSV files';
$_LANG['separator'] = 'Separator';
$_LANG['uploadfile'] = 'Upload files';
$_LANG['sql_error'] = 'Error in message %s ：<br/> ';

/* 提示信息 */
$_LANG['replenish_no_goods_id'] = 'Missing item ID parameter, unable to replenish operation';
$_LANG['replenish_no_get_goods_name'] = 'The product ID parameter is incorrect, and the product name cannot be obtained.';
$_LANG['drop_card_success'] = 'The record has been successfully deleted';
$_LANG['batch_drop'] = 'batch deletion';
$_LANG['drop_card_confirm'] = 'Are you sure you want to delete this record?';
$_LANG['card_sn_exist'] = 'Card serial number %s already exists, please re-enter';
$_LANG['go_list'] = 'Return to the replenishment list';
$_LANG['continue_add'] = 'Continue to replenish';
$_LANG['uploadfile_fail'] = 'File upload failed';
$_LANG['batch_card_add_ok'] = 'The %s replenishment information has been successfully added';

$_LANG['js_languages']['no_card_sn'] = 'The serial number and password of the card cannot be empty.';
$_LANG['js_languages']['separator_not_null'] = 'Separation symbols cannot be empty.';
$_LANG['js_languages']['uploadfile_not_null'] = 'Please select the file to upload.';

$_LANG['use_help'] = 'Instructions：' .
        '<ol>' .
          '<li>Upload files should be CSV files<br/>' .
              'CSV files are listed as the first card serial number, the second card password, and the third as the deadline for use.<br/>'.
              '(The method of creating CSV file with EXCEL: fill in the data in the order of card number, card password and deadline in EXCEL, and save it as CSV file directly after completion)'.
          '<li>Passwords, and deadlines can be null, in the format of 2006-11-6 or 2006/11/6'.
          '<li>Do not use Chinese in card number, card password and deadline</li>' .
        '</ol>';

/*------------------------------------------------------ */
//-- 改变加密串
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = 'Change the encryption string';
$_LANG['user_guide'] = 'Instructions：' .
        '<ol>' .
          '<li>Encryption string is used to encrypt the card number and password of virtual card goods.</li>' .
          '<li>The encrypted string is stored in the file data/config.php, and the corresponding constant is AUTH_KEY.</li>' .
          '<li>If you want to change the encrypted string, enter the original encrypted string and the new encrypted string in the text box below, then click the OK button.</li>' .
        '</ol>';
$_LANG['label_old_string'] = 'Original encryption string';
$_LANG['label_new_string'] = 'New encryption string';

$_LANG['invalid_old_string'] = 'The original encryption string is incorrect';
$_LANG['invalid_new_string'] = 'Incorrect new encryption string';
$_LANG['change_key_ok'] = 'Successful change of encrypted string';
$_LANG['same_string'] = 'The new encryption string is the same as the original one.';

$_LANG['update_log'] = 'Update record';
$_LANG['old_stat'] = 'A total of %s was recorded. The records encrypted with the new string have %s bars,The records encrypted with the original string (to be updated) have %s bars,Records encrypted with unknown strings have %s bars.';
$_LANG['new_stat'] = '<strong>Update completed</strong>，There are now %s bars for records encrypted with new strings,Records encrypted with unknown strings have %s bars.';
$_LANG['update_error'] = 'Errors in the update process：%s';
$_LANG['js_languages']['updating_info'] = '<strong>Updating</strong>(100 records at a time)';
$_LANG['js_languages']['updated_info'] = '<strong>Updated</strong> <span id=\"updated\">0</span> records。';
?>