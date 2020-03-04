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
 * $Id: database.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['db_manage'] = 'Database Management';
$_LANG['start_backup'] = 'Start backup';
$_LANG['backup_name'] = 'Backup name';
$_LANG['backup_time'] = 'Backup time';
$_LANG['backup_size'] = 'Backup size';
$_LANG['restore'] = 'Restore backup';
$_LANG['restore_ok'] = 'recovery was successful';
$_LANG['download'] = 'Download';
$_LANG['restored'] = 'Backup has been restored';
$_LANG['upload_sql'] = 'Upload backup files';

$_LANG['table'] = 'Data sheet';
$_LANG['type'] = 'Data table type';
$_LANG['rec_num'] = 'Record number';
$_LANG['rec_size'] = 'Data';
$_LANG['rec_chip'] = 'Fragment';
$_LANG['start_optimize'] = 'Begin data table optimization';
$_LANG['chip_count'] = 'Total fragmentation';
$_LANG['charset'] = 'Character set';
$_LANG['status'] = 'State';

$_LANG['backup_type'] ='Backup type';
$_LANG['full_backup'] ='Full backup';
$_LANG['full_backup_note'] ='Back up all tables in the database';
$_LANG['stand_backup'] ='Standard backup (recommended)';
$_LANG['stand_backup_note'] ='Back up common data tables';
$_LANG['min_backup'] ='Minimum backup';
$_LANG['min_backup_note'] ='Include merchandise list, order list, user list only';
$_LANG['custom_backup'] ='Custom Backup';
$_LANG['custom_backup_note'] ='Backup tables according to your choice';

$_LANG['option'] = 'Other options';
$_LANG['ext_insert'] = 'Using(Extended Insert)Extended Insertion';
$_LANG['is_pack'] = 'Whether to pack backup data';
$_LANG['notice_is_pack'] = 'Packing can reduce the backup size, but you need to decompress the backup before uploading it to restore the backup.';
$_LANG['vol_size'] = 'Split backup - File Length Limitation(kb)';
$_LANG['sql_name'] = 'Backup File Name';
$_LANG['backup_failure'] = 'Backup error';

$_LANG['sqlfile'] = 'Local sql file';
$_LANG['update_table_pre'] = 'Change table prefix';
$_LANG['old_table_pre'] = 'Original table prefix';
$_LANG['new_table_pre'] = 'New table prefix';
$_LANG['use_new_pre'] = 'Use new table prefixes';
$_LANG['notice_use_new_pre'] = 'Only when all backups are restored can you choose Yes, otherwise tables without backups will not be available.<br />You can also modify it manually. data/config.php the $prefix variable in the table determines which table prefix to use $prefix variable in the table determines which table prefix to use';$_LANG['upload_and_exe'] = 'Upload and execute sql  files';

/* 提示信息 */
$_LANG['fail_get_tables'] = 'Failed to retrieve backup tables';
$_LANG['fail_open_file'] = 'Failed to open the file';
$_LANG['fail_remove'] = 'File deletion failed';
$_LANG['fail_get_content'] = 'Failed to retrieve table contents';
$_LANG['fail_upload'] = 'File upload failed';
$_LANG['fail_upload_move'] = 'File upload movement failed';
$_LANG['unrecognize_version'] = 'ECShop version of backup sql cannot be recognized';
$_LANG['unrecognize_mysql_version'] = 'Unable to identify mysql version of backup sql';
$_LANG['mysql_version_error'] = 'The current version of mysql %s is different from the backup version of mysql %s Are you sure you want to import the backup file?';
$_LANG['confirm_ver'] = 'Yes, confirm the import';
$_LANG['unconfirm_ver'] = 'No, cancel the import';
$_LANG['version_error'] = 'ECShop current version %s is different from backup data version %s, backup recovery fails';
$_LANG['not_sql_file'] = 'It doesn\'t seem that the file you uploaded is sql file. If the file is SQL file, please change the file extension to. sql.';
$_LANG['sqlfile_error'] = 'Error execution of SQL file you uploaded, backup recovery failed';
$_LANG['restore_success'] = 'Recovery was successful';
$_LANG['fail_optimize'] = 'Failure to optimize data table %s ';
$_LANG['optimize_ok'] = 'Successful data table optimization, debris clearance %d';
$_LANG['restore_confirm'] = 'Restoring the database clears all existing content. Are you sure you want to restore it?';
$_LANG['fail_import'] = 'Data Import Failure';
$_LANG['no_file'] = 'File does not exist';
$_LANG['not_support_zip_format'] = 'The server does not support zip format. Please decompress the file and upload it.';

/* js */
$_LANG['js_languages']['remove_confirm'] = 'Are you sure you want to delete the backup?';
$_LANG['js_languages']['lang_remove'] = 'Remove';
$_LANG['js_languages']['lang_restore'] = 'Restore backup';
$_LANG['js_languages']['lang_download'] = 'Download';
$_LANG['js_languages']['sql_name_not_null'] = 'File name cannot be empty';
$_LANG['js_languages']['vol_size_not_null'] = 'Please fill in the backup size';

/* 数据备份 */
$_LANG['backup_title'] = 'The data file %s  was created successfully and the program will continue automatically.';
$_LANG['backup_notice'] = 'If your browser does not automatically jump, click here';
$_LANG['backup_success'] = 'Backup success';

$_LANG['name'] = 'File name';
$_LANG['ver'] = 'Edition';
$_LANG['add_time'] = 'Time';
$_LANG['file_size'] = 'Size';
$_LANG['empty_upload'] = 'You uploaded an empty file';
$_LANG['fail_write_file'] = 'Backup %scannot be written';
$_LANG['vol'] = 'Vol';
$_LANG['import'] = 'Import';
$_LANG['server_sql'] = 'Backup files on the server';
$_LANG['submit_remove'] = 'Delete';
$_LANG['remove_success'] = 'Delete successful';
$_LANG['confirm_import'] = 'Importing one volume may result in incomplete data, whether to import other volume data together or not';
$_LANG['also_continue'] = 'Yes, I need to import other volume data.';

$_LANG['dir_priv'] = 'The directory %s permission has the following problems：';
$_LANG['dir_not_exist'] = 'The directory %s don\'t exit, please create it manually';
$_LANG['cannot_read'] = 'unreadable';
$_LANG['cannot_write'] = 'Not to write';
$_LANG['cannot_add'] = 'Additional data';
$_LANG['cannot_modify'] = 'Cannot modify files';

$_LANG['confirm_remove'] = 'Are you sure you want to delete the selected data?';

?>