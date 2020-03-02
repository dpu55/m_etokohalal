<?php
/* 红包类型字段信息 */
$_LANG['bonus_type'] = 'Tipe Promosi';
$_LANG['bonus_list'] = 'List of red packets';
$_LANG['type_name'] = 'Tipe Promosi';
$_LANG['type_money'] = 'Nilai promosi';
$_LANG['min_goods_amount'] = 'Minimum order amount';
$_LANG['notice_min_goods_amount'] = 'The red envelope can only be used if the total amount of goods reaches that amount.';
$_LANG['min_amount'] = 'Harga batas bawah';
$_LANG['max_amount'] = 'Order ceiling';
$_LANG['send_startdate'] = 'Tanggal mulai penerbitan';
$_LANG['send_enddate'] = 'Tanggal berakhir penerbitan';

$_LANG['use_startdate'] = 'Tanggal mulai penggunaan';
$_LANG['use_enddate'] = 'Tanggal berakhir penggunaan ';
$_LANG['send_count'] = 'Kuantitas produk';
$_LANG['use_count'] = 'Jumlah penggunaantity';
$_LANG['send_method'] = 'Distribusi promosi';
$_LANG['send_type'] = 'Tipe Distiribusi';
$_LANG['param'] = 'parameter';
$_LANG['no_use'] = 'not used';
$_LANG['yuan'] = 'element';
$_LANG['user_list'] = 'List Keanggotaan';
$_LANG['type_name_empty'] = 'Red envelope type name cannot be empty!';
$_LANG['type_money_empty'] = 'The amount of red envelope can not be empty!';
$_LANG['min_amount_empty'] = 'Red envelope type orders can not be empty!';
$_LANG['max_amount_empty'] = 'Red envelope type order cap can not be empty!';
$_LANG['send_count_empty'] = 'The number of red envelopes can not be empty!';

$_LANG['send_by'][SEND_BY_USER] = 'Distribusi oleh pengguna';
$_LANG['send_by'][SEND_BY_GOODS] = 'Distribusi oleh produk';
$_LANG['send_by'][SEND_BY_ORDER] = 'Distribusi berdasarkan jumlah pesanan';
$_LANG['send_by'][SEND_BY_PRINT] = 'Off-line red envelopes';
$_LANG['send_by'][SEND_BY_REGISTER] = 'Distribution by Registered Users';
$_LANG['send_by'][SEND_BY_ONLINE] = 'Red Packets on-line';
$_LANG['bonus_img'] = 'Red Packet Pictures Released Online';
$_LANG['user_bonus_max'] = 'Upper limit of red envelope on line for users';

$_LANG['report_form'] = 'Report form';
$_LANG['send'] = 'Grant';
$_LANG['bonus_excel_file'] = 'Offline Red Pack Information List';

$_LANG['goods_cat'] = 'Choosing Classification of Commodities';
$_LANG['goods_brand'] = 'Commodity brand';
$_LANG['goods_key'] = 'Commodity keywords';
$_LANG['all_goods'] = 'Optional commodity';
$_LANG['send_bouns_goods'] = 'Goods for this type of red envelope';
$_LANG['remove_bouns'] = 'Remove red packets';
$_LANG['all_remove_bouns'] = 'remove all';
$_LANG['goods_already_bouns'] = 'Other types of red envelopes have been distributed.!';
$_LANG['send_user_empty'] = 'You have not selected the members who need to distribute red envelopes. Please return.!';
$_LANG['batch_drop_success'] = 'Successfully deleted %d user red envelope';
$_LANG['sendbonus_count'] = 'A total of %d red envelope.';
$_LANG['send_bouns_error'] = 'Error sending membership red envelope, please return to retry!';
$_LANG['no_select_bonus'] = 'You did not select the user red envelope to delete';
$_LANG['bonustype_edit'] = 'Editing Red Packet Type';
$_LANG['bonustype_view'] = 'View details';
$_LANG['drop_bonus'] = 'Delete red packets';
$_LANG['send_bonus'] = 'Send red packets';
$_LANG['continus_add'] = 'Continue to add red envelope types';
$_LANG['back_list'] = 'Returns a list of red envelope types';
$_LANG['continue_add'] = 'Continue to add red envelopes';
$_LANG['back_bonus_list'] = 'Return to the Red Pack List';
$_LANG['validated_email'] = 'Only red envelopes are issued to users who have passed email validation';

/* 提示信息 */
$_LANG['attradd_succed'] = 'Successful operation!';
$_LANG['js_languages']['type_name_empty'] = 'Please enter the red envelope type name!';
$_LANG['js_languages']['type_money_empty'] = 'Please enter the price of red envelope type!';
$_LANG['js_languages']['order_money_empty'] = 'Please enter the order amount.!';
$_LANG['js_languages']['type_money_isnumber'] = 'Type amount must be in digital format!';
$_LANG['js_languages']['order_money_isnumber'] = 'Order amount must be in digital format!';
$_LANG['js_languages']['bonus_sn_empty'] = 'Please enter the serial number of the red envelope.';
$_LANG['js_languages']['bonus_sn_number'] = 'The serial number of the red envelope must be a number.!';
$_LANG['send_count_error'] = 'The number of red envelopes issued must be an integer!';
$_LANG['js_languages']['bonus_sum_empty'] = 'Please enter the number of red packets you want to issue.';
$_LANG['js_languages']['bonus_sum_number'] = 'The number of red envelopes issued must be an integer!';
$_LANG['js_languages']['bonus_type_empty'] = 'Please choose the type and amount of red envelope.';
$_LANG['js_languages']['user_rank_empty'] = 'You do not specify membership level!';
$_LANG['js_languages']['user_name_empty'] = 'You need to choose at least one member.';
$_LANG['js_languages']['invalid_min_amount'] = 'Please enter the lower order limit (number greater than 0)';
$_LANG['js_languages']['send_start_lt_end'] = 'The start date of red envelope issuance should not be greater than the end date';
$_LANG['js_languages']['use_start_lt_end'] = 'The start date of red envelope use should not be greater than the end date';

$_LANG['bonus_type4_notic'] = 'Optimum size of picture 1210px*100px';
$_LANG['bonus_type4_max_notic'] = 'This setup is only valid for online red envelopes. It is the number of red envelopes that users can receive online.';

$_LANG['order_money_notic'] = 'As long as the order amount reaches that value, a red envelope will be issued to the user.';
$_LANG['type_money_notic'] = 'The amount that this type of red envelope can offset';
$_LANG['send_startdate_notic'] = 'This type of red envelope can only be issued if the current time is between the start date and the deadline.';
$_LANG['use_startdate_notic'] = 'This type of red envelope can only be used if the current time is between the start date and the deadline.';
$_LANG['type_name_exist'] = 'This type of name already exists!';
$_LANG['type_money_error'] = 'The amount must be numeric and not less than 0!';
$_LANG['bonus_sn_notic'] = 'Tip: The red envelope serial number is composed of six-digit serial number seeds plus four random digits.';
$_LANG['creat_bonus'] = 'Generated ';
$_LANG['creat_bonus_num'] = ' Red envelope serial number';
$_LANG['bonus_sn_error'] = 'The red envelope serial number must be a number!';
$_LANG['send_user_notice'] = 'When issuing a red envelope to a specified user, please enter a user name here, and separate <br/> between multiple users by comma (,). For example:liry, wjz, zwj';

/* 红包信息字段 */
$_LANG['bonus_id'] = 'ID';
$_LANG['bonus_type_id'] = 'Type amount';
$_LANG['send_bonus_count'] = 'Number of red packets';
$_LANG['start_bonus_sn'] = 'Initial serial number';
$_LANG['bonus_sn'] = 'Red envelope serial number';
$_LANG['user_id'] = 'User';
$_LANG['used_time'] = 'Waktu';
$_LANG['order_id'] = 'Nomor Order';
$_LANG['send_mail'] = 'Send email';
$_LANG['emailed'] = 'Pemberitahuan Email';
$_LANG['mail_status'][BONUS_NOT_MAIL] = 'Unissued';
$_LANG['mail_status'][BONUS_MAIL_FAIL] = 'Failure';
$_LANG['mail_status'][BONUS_MAIL_SUCCEED] = 'Successful';

$_LANG['sendtouser'] = 'Distribution of red envelopes to designated users';
$_LANG['senduserrank'] = 'Distribution of red envelopes according to user level';
$_LANG['userrank'] = 'User level';
$_LANG['select_rank'] = 'Selection of membership level...';
$_LANG['keywords'] = 'Kata Kunci:';
$_LANG['userlist'] = 'Daftar Keanggotaan:';
$_LANG['send_to_user'] = 'Distribution of red envelopes to the following users';
$_LANG['search_users'] = 'Search member';
$_LANG['confirm_send_bonus'] = 'Determine to send red packets';
$_LANG['bonus_not_exist'] = 'The red envelope does not exist';
$_LANG['success_send_mail'] = '%d email has been added to the mailing list';
$_LANG['send_continue'] = 'Continue to distribute red envelopes';
?>