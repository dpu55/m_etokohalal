<?php

/**
 * 鸿宇多用户商城 红包类型/红包管理程序
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: bonus.php 17217 2016-01-19 06:29:08Z derek $
*/
/* 红包类型字段信息 */
$_LANG['bonus_type'] = 'Red envelope type';
$_LANG['bonus_list'] = 'List of red packets';
$_LANG['type_name'] = 'Type name';
$_LANG['type_money'] = 'Amount of red envelope';
$_LANG['min_goods_amount'] = 'Minimum order amount';
$_LANG['notice_min_goods_amount'] = 'The red envelope can only be used if the total amount of goods reaches that amount.';
$_LANG['min_amount'] = 'Order lower limit';
$_LANG['max_amount'] = 'Order ceiling';
$_LANG['send_startdate'] = 'Starting date of issuance';
$_LANG['send_enddate'] = 'End date of issuance';

$_LANG['use_startdate'] = 'Use start date';
$_LANG['use_enddate'] = 'End date of use';
$_LANG['send_count'] = 'Quantity issued';
$_LANG['use_count'] = 'Usage quantity';
$_LANG['send_method'] = 'How to distribute this type of red envelope';
$_LANG['send_type'] = 'Distribution type';
$_LANG['param'] = 'Parameter';
$_LANG['no_use'] = 'Not used';
$_LANG['yuan'] = 'RMB';
$_LANG['user_list'] = 'Membership list';
$_LANG['type_name_empty'] = 'Red envelope type name cannot be empty！';
$_LANG['type_money_empty'] = 'The amount of red envelope should not be empty！';
$_LANG['min_amount_empty'] = 'Orders of red envelope type cannot be empty！';
$_LANG['max_amount_empty'] = 'Order cap of red envelope type cannot be empty！';
$_LANG['send_count_empty'] = 'The number of red envelopes can not be empty！';

$_LANG['send_by'][SEND_BY_USER] = 'Distribution by user';
$_LANG['send_by'][SEND_BY_GOODS] = 'Distribution by product';
$_LANG['send'] = '发放';
$_LANG['send_by'][SEND_BY_ORDER] = 'Distribution by order amount';
$_LANG['send_by'][SEND_BY_PRINT] = 'Off-line red envelopes';
$_LANG['report_form'] = 'Report form';
$_LANG['bonus_excel_file'] = 'Offline Red Pack Information List';

$_LANG['goods_cat'] = 'Choosing Category of Products';
$_LANG['goods_brand'] = 'Product brand';
$_LANG['goods_key'] = 'Product keywords';
$_LANG['all_goods'] = 'Optional product';
$_LANG['send_bouns_goods'] = 'Goods for this type of red envelope';
$_LANG['remove_bouns'] = 'Remove red packets';
$_LANG['all_remove_bouns'] = 'remove all';
$_LANG['goods_already_bouns'] = 'Other types of red envelopes have been distributed.!';
$_LANG['send_user_empty'] = 'You have not selected the members who need to distribute red envelopes. Please return.!';
$_LANG['batch_drop_success'] = 'Successful deletion of %d Successful deletion of';
$_LANG['sendbonus_count'] = 'A total  %d red envelopes were sent.';
$_LANG['send_bouns_error'] = 'Error sending membership red envelope, please return to retry!';
$_LANG['no_select_bonus'] = 'You did not select the user red envelope to delete';
$_LANG['bonustype_edit'] = 'Editing Red Packet Type';
$_LANG['bonustype_view'] = 'View details';
$_LANG['drop_bonus'] = 'Delete red packets';
$_LANG['send_bonus'] = 'Issue red packets';
$_LANG['continus_add'] = 'Continue to add red envelope types';
$_LANG['back_list'] = 'Returns a list of red envelope types';
$_LANG['continue_add'] = 'Continue to add red envelopes';
$_LANG['back_bonus_list'] = 'Return to the Red Pack List';
$_LANG['validated_email'] = 'Only red envelopes are issued to users who have passed email validation';

/* 提示信息 */
$_LANG['attradd_succed'] = 'Successful operation!';
$_LANG['js_languages']['type_name_empty'] = 'Please enter the red envelope type name!';
$_LANG['js_languages']['type_money_empty'] = 'Please enter the price of red envelope type!';
$_LANG['js_languages']['order_money_empty'] = 'Please enter the order amount!';
$_LANG['js_languages']['type_money_isnumber'] = 'Type amount must be in digital format!';
$_LANG['js_languages']['order_money_isnumber'] = 'Order amount must be in digital format!';
$_LANG['js_languages']['bonus_sn_empty'] = 'Order amount must be in digital format!';
$_LANG['js_languages']['bonus_sn_number'] = 'The serial number of the red envelope must be a number!';
$_LANG['send_count_error'] = 'The number of red envelopes issued must be an integer!';
$_LANG['js_languages']['bonus_sum_empty'] = 'Please enter the number of red packets you want to issue!';
$_LANG['js_languages']['bonus_sum_number'] = 'The number of red envelopes issued must be an integer!';
$_LANG['js_languages']['bonus_type_empty'] = 'Please choose the type and amount of red envelope!';
$_LANG['js_languages']['user_rank_empty'] = 'You did not specify membership level!';
$_LANG['js_languages']['user_name_empty'] = 'You need to choose at least one member!';
$_LANG['js_languages']['invalid_min_amount'] = 'Please enter the lower order limit (number greater than 0)';
$_LANG['js_languages']['send_start_lt_end'] = 'The start date of red envelope issuance should not be greater than the end date';
$_LANG['js_languages']['use_start_lt_end'] = 'The start date of red envelope use should not be greater than the end date';

$_LANG['order_money_notic'] = 'As long as the order amount reaches that value, a red envelope will be issued to the user.';
$_LANG['type_money_notic'] = 'The amount that this type of red envelope can offset';
$_LANG['send_startdate_notic'] = 'This type of red envelope can only be issued if the current time is between the start date and the deadline.';
$_LANG['use_startdate_notic'] = 'This type of red envelope can only be used if the current time is between the start date and the deadline.';
$_LANG['type_name_exist'] = 'This type of name already exists!';
$_LANG['type_money_error'] = 'The amount must be numeric and not less than 0. !javascript:void(0);';
$_LANG['bonus_sn_notic'] = 'Tip: The red envelope serial number is composed of six-digit serial number seeds plus four random digits.';
$_LANG['creat_bonus'] = 'Generated ';
$_LANG['creat_bonus_num'] = ' Red envelope serial number';
$_LANG['bonus_sn_error'] = 'The red envelope serial number must be a number!';
$_LANG['send_user_notice'] = 'When issuing a red envelope to a specified user, please enter a user name here, separated by commas (,)<br/>ect:liry, wjz, zwj';

/* 红包信息字段 */
$_LANG['bonus_id'] = 'Number';
$_LANG['bonus_type_id'] = 'Type amount';
$_LANG['send_bonus_count'] = 'Number of red packets';
$_LANG['start_bonus_sn'] = 'Initial serial number';
$_LANG['bonus_sn'] = 'Red envelope serial number';
$_LANG['user_id'] = 'Use member';
$_LANG['used_time'] = 'Use time';
$_LANG['order_id'] = 'Order number';
$_LANG['send_mail'] = 'Send emails';
$_LANG['emailed'] = 'Mail notification';
$_LANG['mail_status'][BONUS_NOT_MAIL] = 'Unissued';
$_LANG['mail_status'][BONUS_MAIL_FAIL] = 'Failure';
$_LANG['mail_status'][BONUS_MAIL_SUCCEED] = 'Successful';

$_LANG['sendtouser'] = 'Distribution of red envelopes to designated users';
$_LANG['senduserrank'] = 'Distribution of red envelopes according to user level';
$_LANG['userrank'] = 'User level';
$_LANG['select_rank'] = 'Selection of membership level...';
$_LANG['keywords'] = 'Keyword：';
$_LANG['userlist'] = 'Membership list：';
$_LANG['send_to_user'] = 'Distribution of red envelopes to the following users';
$_LANG['search_users'] = 'Search member';
$_LANG['confirm_send_bonus'] = 'Red Definition Send Packet';
$_LANG['bonus_not_exist'] = 'Red Definition Send Packet';
$_LANG['success_send_mail'] = '%d An email has been added to the mailing list';
$_LANG['send_continue'] = 'Continue to distribute red envelopes';
?>