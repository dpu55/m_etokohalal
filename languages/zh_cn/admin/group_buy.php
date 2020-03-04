<?php
/* 当前页面标题及可用链接名称 */
$_LANG['group_buy_list'] = 'List of Group Purchase Activities';
$_LANG['add_group_buy'] = 'Add';
$_LANG['edit_group_buy'] = 'Edit';

/* 活动列表页 */
$_LANG['goods_name'] = 'Product name';
$_LANG['start_date'] = 'Start time';
$_LANG['end_date'] = 'End time';
$_LANG['deposit'] = 'Bond';
$_LANG['restrict_amount'] = 'Home purchase restrictions';
$_LANG['gift_integral'] = 'Presentation points';
$_LANG['valid_order'] = 'Order';
$_LANG['valid_goods'] = 'Order goods';
$_LANG['current_price'] = 'Current price';
$_LANG['current_status'] = 'Status';
$_LANG['view_order'] = 'View order';

/* 添加/编辑活动页 */
$_LANG['goods_cat'] = 'Product category';
$_LANG['all_cat'] = 'All categories';
$_LANG['goods_brand'] = 'Product brand';
$_LANG['all_brand'] = 'All brands';

$_LANG['label_goods_name'] = 'Group Purchase products:';
$_LANG['notice_goods_name'] = 'Search for items first, and generate a list of options here.';
$_LANG['label_start_date'] = 'Activity start time:';
$_LANG['label_end_date'] = 'At the end of the event:';
$_LANG['notice_datetime'] = '(Year, month, day-hour)';
$_LANG['label_deposit'] = 'Bond:';
$_LANG['label_restrict_amount'] = 'Kuantitas Pembeli Promosi';
$_LANG['notice_restrict_amount']= 'Upon reaching this quantity, group buying activities will automatically end. 0 means there is no quantitative limit.';
$_LANG['label_gift_integral'] = 'Gift points:';
$_LANG['label_price_ladder'] = 'Price ladder:';
$_LANG['notice_ladder_amount'] = 'Quantity reached';
$_LANG['notice_ladder_price'] = 'Enjoy the price';
$_LANG['label_desc'] = 'Activity description:';
$_LANG['label_status'] = 'Current status of activity:';
$_LANG['gbs'][GBS_PRE_START] = 'Not yet begun';
$_LANG['gbs'][GBS_UNDER_WAY] = 'In progress';
$_LANG['gbs'][GBS_FINISHED] = 'End of Unhandled';
$_LANG['gbs'][GBS_SUCCEED] = 'Successful conclusion';
$_LANG['gbs'][GBS_FAIL] = 'Failure ends';
$_LANG['label_order_qty'] = 'Number of orders/number of valid orders:';
$_LANG['label_goods_qty'] = 'Number of Goods/Number of Effective Goods:';
$_LANG['label_cur_price'] = 'Harga saat ini:';
$_LANG['label_end_price'] = 'Final price:';
$_LANG['label_handler'] = 'Operation:';
$_LANG['error_group_buy'] = 'The group buying activity you want to operate does not exist.';
$_LANG['error_status'] = 'The current state cannot perform this operation!';
$_LANG['button_finish'] = 'Close activities';
$_LANG['notice_finish'] = '(Modify the end time of the activity to the current time';
$_LANG['button_succeed'] = 'Successful activities';
$_LANG['notice_succeed'] = '(Update order price)';
$_LANG['button_fail'] = 'Activity failure';
$_LANG['notice_fail'] = '(Cancellation of orders, margin refund account balance, failure reasons can be written in the activity statement)';
$_LANG['cancel_order_reason'] = 'Group buying failure';
$_LANG['js_languages']['succeed_confirm'] = 'This operation is irreversible. Are you sure you want to set up the group buying activity successfully?';
$_LANG['js_languages']['fail_confirm'] = 'This operation is irreversible. Are you sure you want to set up the group buying activity to fail?';
$_LANG['button_mail'] = 'Send email';
$_LANG['notice_mail'] = '(Notify the customer to pay the balance for delivery)';
$_LANG['mail_result'] = 'The group purchase activity has a total of %s valid orders, and successfully sent %s e-mail.';
$_LANG['invalid_time'] = 'You entered an invalid group buying time.';

$_LANG['add_success'] = 'The group buying activity was successful.';
$_LANG['edit_success'] = 'The editorial group buying activity was successful.';
$_LANG['back_list'] = 'Return to the list of group buying activities.';
$_LANG['continue_add'] = 'Continue to add';

/* 添加/编辑活动提交 */
$_LANG['error_goods_null'] = 'You did not choose group-buying goods!';
$_LANG['error_goods_exist'] = 'At present, there is a group buying activity in progress for the goods you choose.';
$_LANG['error_price_ladder'] = 'You did not enter a valid price ladder!';
$_LANG['error_restrict_amount'] = 'Limited purchase quantity should not be less than the maximum quantity in the price ladder';

$_LANG['js_languages']['error_goods_null'] = 'You did not choose group-buying goods!';
$_LANG['js_languages']['error_deposit'] = 'The deposit you entered is not a number!';
$_LANG['js_languages']['error_restrict_amount'] = 'The limited purchase quantity you entered is not an integer!';
$_LANG['js_languages']['error_gift_integral'] = 'The free integral you entered is not an integer!';
$_LANG['js_languages']['search_is_null'] = 'No product was found. Please search again.';

/* 删除团购活动 */
$_LANG['js_languages']['batch_drop_confirm'] = 'Are you sure you want to delete the selected group buying activities?';
$_LANG['error_exist_order'] = 'The group purchase activity has already been ordered, can not be deleted!';
$_LANG['batch_drop_success'] = 'Successfully deleted the %s record of group buying activities (group buying activities that already have orders can not be deleted).';
$_LANG['no_select_group_buy'] = 'You have no record of group buying activities now!';

/* 操作日志 */
$_LANG['log_action']['group_buy'] = 'Group buying products';

?>