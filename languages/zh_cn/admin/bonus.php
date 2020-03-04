<?php
/* 红包类型字段信息 */
$_LANG['bonus_type'] = 'Bonus type';
$_LANG['bonus_list'] = 'List of bonus';
$_LANG['type_name'] = 'Type name';
$_LANG['type_money'] = 'Amount of bonus;
$_LANG['min_goods_amount'] = 'Minimum order amount';
$_LANG['notice_min_goods_amount'] = 'The voucher can only be used if the total amount of goods reaches that amount.';
$_LANG['min_amount'] = 'Order minimum';
$_LANG['max_amount'] = 'Order maximum';
$_LANG['send_startdate'] = 'Starting date of issuance';
$_LANG['send_enddate'] = 'End date of issuance';

$_LANG['use_startdate'] = 'Use start date';
$_LANG['use_enddate'] = 'End date of use';
$_LANG['send_count'] = 'Quantity issued';
$_LANG['use_count'] = 'Usage quantity';
$_LANG['send_method'] = 'How to distribute this type of voucher';
$_LANG['send_type'] = 'Distribution type';
$_LANG['param'] = 'Parameter';
$_LANG['no_use'] = 'Not used';
$_LANG['yuan'] = ' rupiah';
$_LANG['user_list'] = 'Membership list';
$_LANG['type_name_empty'] = 'Voucher type name cannot be empty!';
$_LANG['type_money_empty'] = 'The amount of voucher cannot be empty!';
$_LANG['min_amount_empty'] = 'Voucher min. orders cannot be empty!';
$_LANG['max_amount_empty'] = 'Voucher max. order cannot be empty!';
$_LANG['send_count_empty'] = 'The number of voucher can not be empty!';

$_LANG['send_by'][SEND_BY_USER] = 'Distribution by user';
$_LANG['send_by'][SEND_BY_GOODS] = 'Distribution by product';
$_LANG['send'] = '发放';
$_LANG['send_by'][SEND_BY_ORDER] = 'Distribution by order amount';
$_LANG['send_by'][SEND_BY_PRINT] = 'Off-line vouchers';
$_LANG['send_by'][SEND_BY_REGISTER] = 'Distribution by Registered Users';
$_LANG['send_by'][SEND_BY_ONLINE] = 'voucher on-line';
$_LANG['bonus_img'] = 'Red Packet Pictures Released Online';
$_LANG['user_bonus_max'] = 'Upper limit of voucher on line for users';

$_LANG['report_form'] = 'Report form';
$_LANG['send'] = 'Grant';
$_LANG['bonus_excel_file'] = 'Offline Red Pack Information List';

$_LANG['goods_cat'] = 'Choosing Category of Products';
$_LANG['goods_brand'] = 'Product brand';
$_LANG['goods_key'] = 'Product keywords';
$_LANG['all_goods'] = 'Optional product';
$_LANG['send_bouns_goods'] = 'Goods for this type of voucher';
$_LANG['remove_bouns'] = 'Remove voucher';
$_LANG['all_remove_bouns'] = 'remove all';
$_LANG['goods_already_bouns'] = 'Other types of vouchers have been distributed.!';
$_LANG['send_user_empty'] = 'You have not selected the members who need to distribute vouchers. Please return.!';
$_LANG['batch_drop_success'] = 'Successfully deleted %d user voucher';
$_LANG['sendbonus_count'] = 'A total of %d voucher.';
$_LANG['send_bouns_error'] = 'Error sending membership voucher, please return to retry!';
$_LANG['no_select_bonus'] = 'You did not select the user voucher to delete';
$_LANG['bonustype_edit'] = 'Editing Red Packet Type';
$_LANG['bonustype_view'] = 'View details';
$_LANG['drop_bonus'] = 'Delete voucher';
$_LANG['send_bonus'] = 'Send voucher';
$_LANG['continus_add'] = 'Continue to add voucher types';
$_LANG['back_list'] = 'Returns a list of voucher types';
$_LANG['continue_add'] = 'Continue to add vouchers';
$_LANG['back_bonus_list'] = 'Return to the Red Pack List';
$_LANG['validated_email'] = 'Only vouchers are issued to users who have passed email validation';

/* 提示信息 */
$_LANG['attradd_succed'] = 'Successful operation!';
$_LANG['js_languages']['type_name_empty'] = 'Please enter the voucher type name!';
$_LANG['js_languages']['type_money_empty'] = 'Please enter the price of voucher type!';
$_LANG['js_languages']['order_money_empty'] = 'Please enter the order amount!';
$_LANG['js_languages']['type_money_isnumber'] = 'Type amount must be in digital format!';
$_LANG['js_languages']['order_money_isnumber'] = 'Order amount must be in digital format!';
$_LANG['js_languages']['bonus_sn_empty'] = 'Please enter the serial number of the voucher.';
$_LANG['js_languages']['bonus_sn_number'] = 'The serial number of the voucher must be a number.!';
$_LANG['send_count_error'] = 'The number of vouchers issued must be an integer!';
$_LANG['js_languages']['bonus_sum_empty'] = 'Please enter the number of voucher you want to issue.';
$_LANG['js_languages']['bonus_sum_number'] = 'The number of vouchers issued must be an integer!';
$_LANG['js_languages']['bonus_type_empty'] = 'Please choose the type and amount of voucher.';
$_LANG['js_languages']['user_rank_empty'] = 'You do not specify membership level!';
$_LANG['js_languages']['user_name_empty'] = 'You need to choose at least one member.';
$_LANG['js_languages']['invalid_min_amount'] = 'Please enter the lower order limit (number greater than 0)';
$_LANG['js_languages']['send_start_lt_end'] = 'The start date of voucher issuance should not be greater than the end date';
$_LANG['js_languages']['use_start_lt_end'] = 'The start date of voucher use should not be greater than the end date';

$_LANG['bonus_type4_notic'] = 'Optimum size of picture 1210px*100px';
$_LANG['bonus_type4_max_notic'] = 'This setup is only valid for online vouchers. It is the number of vouchers that users can receive online.';

$_LANG['order_money_notic'] = 'As long as the order amount reaches that value, a voucher will be issued to the user.';
$_LANG['type_money_notic'] = 'The amount that this type of voucher can offset';
$_LANG['send_startdate_notic'] = 'This type of voucher can only be issued if the current time is between the start date and the deadline.';
$_LANG['use_startdate_notic'] = 'This type of voucher can only be used if the current time is between the start date and the deadline.';
$_LANG['type_name_exist'] = 'This type of name already exists!';
$_LANG['type_money_error'] = 'The amount must be numeric and not less than 0. !javascript:void(0);';
$_LANG['bonus_sn_notic'] = 'Tip: The voucher serial number is composed of six-digit serial number seeds plus four random digits.';
$_LANG['creat_bonus'] = 'Generated ';
$_LANG['creat_bonus_num'] = ' voucher serial number';
$_LANG['bonus_sn_error'] = 'The voucher serial number must be a number!';
$_LANG['send_user_notice'] = 'When issuing a voucher to a specified user, please enter a user name here, and separate <br/> between multiple users by comma (,). For example:liry, wjz, zwj';

/* 红包信息字段 */
$_LANG['bonus_id'] = 'ID';
$_LANG['bonus_type_id'] = 'Type amount';
$_LANG['send_bonus_count'] = 'Number of voucher';
$_LANG['start_bonus_sn'] = 'Initial serial number';
$_LANG['bonus_sn'] = 'voucher serial number';
$_LANG['user_id'] = 'User ID';
$_LANG['used_time'] = 'Use time';
$_LANG['order_id'] = 'Order number';
$_LANG['send_mail'] = 'Send emails';
$_LANG['emailed'] = 'Mail notification';
$_LANG['mail_status'][BONUS_NOT_MAIL] = 'Unissued';
$_LANG['mail_status'][BONUS_MAIL_FAIL] = 'Failure';
$_LANG['mail_status'][BONUS_MAIL_SUCCEED] = 'Successful';

$_LANG['sendtouser'] = 'Distribution of vouchers to designated users';
$_LANG['senduserrank'] = 'Distribution of vouchers according to user level';
$_LANG['userrank'] = 'User level';
$_LANG['select_rank'] = 'Selection of membership level...';
$_LANG['keywords'] = 'Keyword：';
$_LANG['userlist'] = 'Membership list：';
$_LANG['send_to_user'] = 'Distribution of vouchers to the following users';
$_LANG['search_users'] = 'Search member';
$_LANG['confirm_send_bonus'] = 'Determine to send voucher';
$_LANG['bonus_not_exist'] = 'The voucher does not exist';
$_LANG['success_send_mail'] = '%d email has been added to the mailing list';
$_LANG['send_continue'] = 'Continue to distribute vouchers';
?>