<?php
/* 当前页面标题及可用链接名称 */
$_LANG['pre_sale_list'] = 'List of pre-sale activities';
$_LANG['add_pre_sale'] = 'Add pre-sale activities';
$_LANG['edit_pre_sale'] = 'Editorial Pre-sale Activities';

/* 活动列表页 */
$_LANG['goods_name'] = 'Nama Produk';
$_LANG['start_date'] = 'Waktu Mulai';
$_LANG['end_date'] = 'Waktu Berakhir';
$_LANG['deposit'] = 'Bond';
$_LANG['restrict_amount'] = 'Batas Pembayaran';
$_LANG['gift_integral'] = 'Presentation points';
$_LANG['valid_order'] = 'Orders';
$_LANG['valid_goods'] = 'Pesanan Produk';
$_LANG['current_price'] = 'Harga saat ini';
$_LANG['current_status'] = 'Status';
$_LANG['view_order'] = 'View order';

/* 添加/编辑活动页 */
$_LANG['goods_cat'] = 'Product Kategori';
$_LANG['all_cat'] = 'Semua Kategori';
$_LANG['goods_brand'] = 'Product Merek';
$_LANG['all_brand'] = 'Semua Merek';

$_LANG['label_goods_name'] = 'Pre-sale goods:';
$_LANG['notice_goods_name'] = 'Search for items first, and generate a list of options here.';
$_LANG['label_start_date'] = 'Activity start time:';
$_LANG['label_end_date'] = 'At the end of the event:';
$_LANG['notice_datetime'] = '(Year, month, day-hour)';
$_LANG['label_sale_price'] = 'Pre-sale price:';
$_LANG['label_deposit'] = 'Deposit:';
$_LANG['notice_deposit']= 'When the deposit is 0, it means that the user does not need to pay the tail money directly for the current pre-sale price. At this time, the tail money payment time can not be set. After the pre-sale activity ends <br/>, the system will return the difference paid by the user according to the latest pre-sale price.';
$_LANG['label_restrict_amount'] = 'Pre-sale stock:';
$_LANG['notice_restrict_amount']= 'Upon reaching this quantity, the pre-sale activity will automatically end. 0 means there is no quantitative limit.';
$_LANG['label_gift_integral'] = 'Gift points:';
$_LANG['label_retainage_start'] = 'The start time of final payment:';
$_LANG['label_retainage_end'] = 'The closing time of the final payment:';
$_LANG['notice_retainage_start'] = 'The end payment shall not start earlier than the end of the pre-sale activity.';
$_LANG['notice_retainage_end'] = 'It is recommended that the end payment should be left to users for at least 72 hours.';
$_LANG['label_deliver_goods'] = 'Start shipment time description:';
$_LANG['notice_deliver_goods'] = 'Format suggestions: 1. It is expected that yyyy-MM-dd HH will be delivered in advance. 2. Delivery within N days after payment. ';
$_LANG['label_price_ladder']='price ladder';
$_LANG['notice_ladder_amount'] = 'The number of people scheduled to arrive';
$_LANG['notice_ladder_price'] = 'Harga';
$_LANG['label_desc'] = 'Activity description:';
$_LANG['label_status'] = 'Current status of activity:';
$_LANG['pss'][PSS_PRE_START] = 'Not yet begin';
$_LANG['pss'][PSS_UNDER_WAY] = 'Pre-sale';
$_LANG['pss'][PSS_FINISHED] = 'End of Unhandled';
$_LANG['pss'][PSS_SUCCEED] = 'Successful conclusion';
$_LANG['pss'][PSS_FAIL] = 'Failure ends';
$_LANG['label_order_qty'] = 'Number of orders/number of valid orders:';
$_LANG['label_goods_qty'] = 'Number of Goods/Number of Effective Goods:';
$_LANG['label_cur_price'] = 'Harga saat ini:';
$_LANG['label_end_price'] = 'Final price:';
$_LANG['label_handler'] = 'Operation:';
$_LANG['error_group_buy'] = 'The pre-sale activity you want to operate does not exist.';
$_LANG['error_status'] = 'The current state cannot perform this operation!';
$_LANG['button_finish'] = 'Closing activities';
$_LANG['notice_finish'] = '(Modify the end time of the activity to the current time)';
$_LANG['button_succeed'] = 'Successful activities';
$_LANG['notice_succeed'] = '(Update order price)';
$_LANG['button_fail'] = 'Activity failure';
$_LANG['notice_fail'] = '(Cancellation of orders, margin refund account balance, failure reasons can be written in the activity statement)';
$_LANG['cancel_order_reason'] = 'Pre-sale failure';
$_LANG['js_languages']['succeed_confirm'] = 'This operation is irreversible. Are you sure you want to set up the pre-sale activity successfully?';
$_LANG['js_languages']['fail_confirm'] = 'This operation is irreversible. Are you sure you want to set up the pre-sale activity to fail?';
$_LANG['button_mail'] = 'Send mail';
$_LANG['notice_mail'] = '(Notify the customer to pay the balance for delivery)';
$_LANG['mail_result'] = 'The pre-sale activity has a total of %s valid orders, and successfully sent %s e-mail.';
$_LANG['invalid_time'] = 'You entered an invalid advance sale time.';

$_LANG['add_success'] = 'The pre-sale activity was successful.';
$_LANG['edit_success'] = 'Editors pre-sale campaign was successful.';
$_LANG['back_list'] = 'Return to the list of pre-sale activities.';
$_LANG['continue_add'] = 'Continue to add pre-sale activities.';

/* 添加/编辑活动提交 */
$_LANG['error_goods_null'] = 'You did not choose the pre-sale goods!';
$_LANG['error_goods_exist'] = 'There is a pre-sale activity for the goods you choose at present!';
$_LANG['error_price_ladder'] = 'You did not enter a valid price ladder!';
$_LANG['error_restrict_amount'] = 'Limited purchase quantity should not be less than the maximum quantity in the price ladder';
$_LANG['error_deposit'] = 'Deposit should not be greater than ladder price';

$_LANG['js_languages']['error_goods_null'] = 'You did not choose the pre-sale goods!';
$_LANG['js_languages']['error_deposit'] = 'The deposit you entered is not a number!';
$_LANG['js_languages']['error_restrict_amount'] = 'The limited purchase quantity you entered is not an integer!';
$_LANG['js_languages']['error_gift_integral'] = 'The free integral you entered is not an integer!';
$_LANG['js_languages']['search_is_null'] = 'No product was found. Please search again.';

/* 删除预售活动 */
$_LANG['js_languages']['batch_drop_confirm'] = 'Are you sure you want to delete the selected pre-sale activities?';
$_LANG['error_exist_order'] = 'The pre-sale activity has already been ordered, can not be deleted!';
$_LANG['batch_drop_success'] = 'Successfully deleted %s pre-sale activity record (pre-sale activity can not be deleted for existing orders).';
$_LANG['no_select_group_buy'] = 'You have no pre-sale record now!';

/* 操作日志 */
$_LANG['log_action']['pre_sale'] = 'Pre-sale goods';

?>