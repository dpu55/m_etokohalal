<?php
/* 订单搜索 */
$_LANG['order_sn'] = 'Original order number';
$_LANG['back_goods_sn'] = 'Return/Maintenance';
$_LANG['back_goods_name'] = 'Return/Repair Goods';
$_LANG['back_id'] = 'ID';
$_LANG['back_money_1'] = 'Amount to be refunded';
$_LANG['back_money_2'] = 'Actual refund amount';
$_LANG['back_username'] = 'Applicant';
$_LANG['consignee'] = 'Penerima';
$_LANG['all_status'] = 'Status Pesanan';

$_LANG['back_goods_info'] = 'Return/Repair';

$_LANG['cs'][OS_UNCONFIRMED] = 'Tunggu Konfirmasi';
$_LANG['cs'][CS_AWAIT_PAY] = 'Pembayaran Tertahan';
$_LANG['cs'][CS_AWAIT_SHIP] = 'Tunggu Kirim';
$_LANG['cs'][CS_FINISHED] = 'Lengkap';
$_LANG['cs'][PS_PAYING] = 'In payment';
$_LANG['cs'][OS_CANCELED] = 'Cancel';
$_LANG['cs'][OS_INVALID] = 'Tidak Lengkap';
$_LANG['cs'][OS_RETURNED] = 'Produk Dikembalikan';
$_LANG['cs'][OS_SHIPPED_PART] = 'Pengiriman Terpisah';

/* 订单状态 */
$_LANG['os'][OS_UNCONFIRMED] = 'Unconfirmed';
$_LANG['os'][OS_CONFIRMED] = 'Confirmed';
$_LANG['os'][OS_CANCELED] = '<font color="red"> Cancel</font>';
$_LANG['os'][OS_INVALID] = '<font color="red">Invalid</font>';
$_LANG['os'][OS_RETURNED] = '<font color="red">Produk Dikembalikan</font>';
$_LANG['os'][OS_SPLITED] = 'Sub order';
$_LANG['os'][OS_SPLITING_PART] = 'Partial sub order';

$_LANG['ss'][SS_UNSHIPPED] = 'Unshipped';
$_LANG['ss'][SS_PREPARING] = 'In distribution';
$_LANG['ss'][SS_SHIPPED] = 'Shipped';
$_LANG['ss'][SS_RECEIVED] = 'Receipt confirmation';
$_LANG['ss'][SS_SHIPPED_PART] = 'Shipped (partial goods)';
$_LANG['ss'][SS_SHIPPED_ING] = 'Delivery';

$_LANG['ps'][PS_UNPAYED] = 'Unpaid';
$_LANG['ps'][PS_PAYING] = 'In payment';
$_LANG['ps'][PS_PAYED] = 'Paid';

/* 退换货订单状态 */
$_LANG['bos'][0] = "Audit pass</br></br>Waiting for the user to send back the goods";
$_LANG['bos'][1] = "Receive the goods sent back by the user";
$_LANG['bos'][2] = "Goods returned have been sent out";
$_LANG['bos'][3] = "Complete returns/repairs";
$_LANG['bos'][4] = "Refund (no refund)";
$_LANG['bos'][5] = "Application review";
$_LANG['bos'][6] = "The application was rejected";
$_LANG['bos'][7] = "Return of goods overdue, application cancelled automatically";
$_LANG['bos'][8] = "Users cancel their applications by themselves";

/* 退换货订单退款状态 */
$_LANG['bps'][0] = "No refund";
$_LANG['bps'][1] = "Refunded";
$_LANG['bps'][9] = "No refund required";

$_LANG['ss_admin'][SS_SHIPPED_ING] = 'Shipment in progress (Front Desk Status: Unshipped)';
/* 订单操作 */
$_LANG['label_operable_act'] = 'Currently executable operations:';

$_LANG['label_action_note']='Masukkan Catatan Tindakan:';
$_LANG['label_resi']='Masukkan Nomor Resi:';
$_LANG['label_cancel_note']='Detail Pembatalan:';

$_LANG['label_invoice_note'] = 'Remarks on delivery:';
$_LANG['label_invoice_no'] = 'The invoice number:';
$_LANG['notice_cancel_note'] = '(will be recorded in business messages to customers)';
$_LANG['op_confirm'] = 'Confirm';
$_LANG['op_pay'] = 'Pay';
$_LANG['op_prepare'] = 'Distribution';
$_LANG['op_ship'] = 'Deliver goods';
$_LANG['op_cancel'] = 'Cancel';
$_LANG['op_invalid'] = 'Tidak Lengkap';
$_LANG['op_return'] = 'Produk Dikembalikan';
$_LANG['op_unpay'] = 'Set as unpaid';
$_LANG['op_unship'] = 'Unshipped';
$_LANG['op_cancel_ship'] = 'Cancel shipment';
$_LANG['op_receive'] = 'Received goods';
$_LANG['op_assign'] = 'assigned to';
$_LANG['op_after_service'] = 'After sale';
$_LANG['act_ok'] = 'Successful operation';
$_LANG['act_false'] = 'operation failed';
$_LANG['act_ship_num'] = 'The quantity of this order can not exceed the quantity of the goods ordered.';
$_LANG['act_good_vacancy'] = 'Goods are out of stock';
$_LANG['act_good_delivery'] = 'The goods have been sold out';
$_LANG['notice_gb_ship'] = 'Note: Delivery is not allowed until the group purchase activity is successfully processed.';
$_LANG['back_list'] = 'Returns the order list';
$_LANG['op_remove'] = 'Hapus';
$_LANG['op_you_can'] = 'What you can do';
$_LANG['op_split'] = 'Generating invoices';
$_LANG['op_to_delivery'] = 'To deliver goods';

/* 订单列表 */
$_LANG['order_amount'] = 'Pembayaran';
$_LANG['total_fee'] = 'Total';
$_LANG['shipping_name'] = 'Metode Pengiriman';
$_LANG['pay_name'] = 'Metode Pembayaran';
$_LANG['address'] = 'Alamat';
$_LANG['order_time'] = 'Waktu ditambahkan';
$_LANG['detail'] = 'View';
$_LANG['phone'] = 'Telepon';
$_LANG['group_buy'] = '(group buying)';
$_LANG['error_get_goods_info'] = 'Error in obtaining order merchandise information';
$_LANG['exchange_goods'] = '(Credit Exchange)';

$_LANG['js_languages']['remove_confirm'] = 'Deleting an order clears all information about the order. Are you sure you want to do that?';

/* 订单搜索 */
$_LANG['label_order_sn'] = 'Nomor Order:';
$_LANG['label_all_status'] = 'Status Pesanan:';
$_LANG['label_user_name'] = 'Pembeli: ';
$_LANG['label_consignee'] = 'Penerima:';
$_LANG['label_email'] = 'Email:';
$_LANG['label_address'] = 'Alamat:';
$_LANG['label_zipcode'] = 'Kode Pos:';
$_LANG['label_tel'] = 'Telepon:';
$_LANG['label_mobile'] = 'Mobile:';
$_LANG['label_shipping'] = 'Metode Pengiriman:';
$_LANG['label_payment'] = 'Metode Pembayaran:';
$_LANG['label_order_status'] = 'Status Pesanan:';
$_LANG['label_pay_status'] = 'Payment status:';
$_LANG['label_shipping_status'] = 'Status Pengiriman:';
$_LANG['label_area'] = 'Location:';
$_LANG['label_time'] = 'Waktu Pemesanan:';

/* 订单详情 */
$_LANG['prev'] = 'The previous order';
$_LANG['next'] = 'The latter order';
$_LANG['print_order'] = 'Print order';
$_LANG['print_shipping'] = 'Print courier bill';
$_LANG['print_order_sn'] = 'Order ID:';
$_LANG['print_buy_name'] = 'Purchaser:';
$_LANG['label_consignee_address'] = 'Receiving address:';
$_LANG['no_print_shipping'] = 'I am sorry, you have not set up a template for printing courier sheets yet. It cannot be printed.';
$_LANG['suppliers_no'] = 'Non-designated supplier handled by our shop';
$_LANG['restaurant'] = 'Our shop';

$_LANG['order_info'] = 'Order information';
$_LANG['base_info'] = 'Basic information of original order';
$_LANG['back_info'] = 'Refund/Return/Repair Information';
$_LANG['other_info'] = 'Other information';
$_LANG['consignee_info'] = 'Penerima';
$_LANG['fee_info'] = 'Cost information';
$_LANG['action_info'] = 'Operation information';
$_LANG['shipping_info'] = 'Distribution information';

$_LANG['label_how_oos'] = 'Shortage disposal:';
$_LANG['label_how_surplus'] = 'Balance processing:';
$_LANG['label_pack'] = 'Packing:';
$_LANG['label_card'] = 'Greeting cards:';
$_LANG['label_card_message'] = 'Congratulations:';
$_LANG['label_order_time'] = 'Waktu Pemesanan:';
$_LANG['label_pay_time'] = 'Payment time:';
$_LANG['label_shipping_time'] = 'Delivery time:';
$_LANG['label_sign_building'] = 'Landmark buildings:';
$_LANG['label_best_time'] = 'Best delivery time:';
$_LANG['label_inv_type'] = 'Invoice type:';
$_LANG['label_inv_payee'] = 'Invoice payable:';
$_LANG['label_inv_content'] = 'Invoice contents:';
$_LANG['label_postscript'] = 'Customers message to the merchant:';
$_LANG['label_region'] = 'Location:';

$_LANG['label_shop_url'] = 'Website:';
$_LANG['label_shop_address'] = 'Alamat:';
$_LANG['label_service_phone'] = 'Telepon:';
$_LANG['label_print_time'] = 'Printing time:';

$_LANG['label_suppliers'] = 'Select suppliers:';
$_LANG['label_agency'] = 'Office:';
$_LANG['suppliers_name'] = 'Supplier';

$_LANG['product_sn'] = 'Goods No.';
$_LANG['goods_info'] = 'Original Order-Commodity Information';
$_LANG['goods_name'] = 'Nama Produk';
$_LANG['goods_name_brand'] = 'Nama Produk [ Brand ]';
$_LANG['goods_sn'] = 'Item number';
$_LANG['goods_price'] = 'Harga';
$_LANG['goods_number'] = 'Qty';
$_LANG['goods_attr'] = 'Attribute';
$_LANG['goods_delivery'] = 'Quantity shipped';
$_LANG['goods_delivery_curr'] = 'Quantity of shipment of this order';
$_LANG['storage'] = 'Stok';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['label_total'] = 'Total:';
$_LANG['label_total_weight'] = 'Total weight:';

$_LANG['label_goods_amount'] = 'Total:';
$_LANG['label_discount'] = 'Discount?';
$_LANG['label_tax'] = 'Invoice tax:';
$_LANG['label_shipping_fee'] = 'Shipping fee:';
$_LANG['label_insure_fee'] = 'Insurance cost:';
$_LANG['label_insure_yn'] = 'Are they insured?';
$_LANG['label_pay_fee'] = 'Payment fee:';
$_LANG['label_pack_fee'] = 'Packing cost:';
$_LANG['label_card_fee'] = 'Greeting card fee:';
$_LANG['label_money_paid'] = 'Amount paid:';
$_LANG['label_surplus'] = 'Use balance:';
$_LANG['label_integral'] = 'Using credit:';
$_LANG['label_bonus'] = 'Use red envelopes:';
$_LANG['label_order_amount'] = 'Order total:';
$_LANG['label_money_dues'] = 'Pembayaran:';
$_LANG['label_money_refund'] = 'Amount of refund payable:';
$_LANG['label_to_buyer'] = 'Businessmen leave messages to customers:';
$_LANG['save_order'] = 'Save Order';
$_LANG['notice_gb_order_amount'] = '(Note: If there is a bond in group purchase, only the bond and the corresponding payment fee will be paid for the first time.)';

$_LANG['action_user'] = 'Operator:';
$_LANG['action_time'] = 'Operation time';
$_LANG['order_status'] = 'Status Pesanan';
$_LANG['pay_status'] = 'Payment status';
$_LANG['shipping_status'] = 'Status Pengiriman';
$_LANG['action_note'] = 'Note';
$_LANG['pay_note'] = 'Payment Notes:';

$_LANG['sms_time_format'] = 'm month j day G hour';
$_LANG['order_shipped_sms'] = 'Your order %s already in %s deliver goods [%s]';
$_LANG['order_splited_sms'] = 'Your order %s,%s being %s [%s]';
$_LANG['order_removed'] = 'Order deletion was successful.';
$_LANG['return_list'] = 'Returns the order list';

/* 订单处理提示 */
$_LANG['surplus_not_enough'] = 'Use of this order %s balance payment, user balance is insufficient now';
$_LANG['integral_not_enough'] = 'Use of this order %s credit Payment, Now User Integral Insufficient';
$_LANG['bonus_not_available'] = 'The order is paid in red envelope, which is not available now.';

/* 购货人信息 */
$_LANG['display_buyer'] = 'Display buyer information';
$_LANG['buyer_info'] = 'Buyer Information';
$_LANG['pay_points'] = 'Consumption points';
$_LANG['rank_points'] = 'Rank integral';
$_LANG['user_money'] = 'Account balance';
$_LANG['email'] = 'Email';
$_LANG['rank_name'] = 'Membership level';
$_LANG['bonus_count'] = 'Number of red packets';
$_LANG['zipcode'] = 'Kode Pos';
$_LANG['tel'] = 'Telepon';
$_LANG['mobile'] = 'Standby telephone';

/* 合并订单 */
$_LANG['order_sn_not_null'] = 'Please fill in the order number to be merged.';
$_LANG['two_order_sn_same'] = 'The two order numbers to be merged cannot be the same';
$_LANG['order_not_exist'] = 'Order %s non-existent';
$_LANG['os_not_unconfirmed_or_confirmed'] = '%s the order status is not "unacknowledged" or "confirmed"';
$_LANG['ps_not_unpayed'] = 'Order %s payment status is not "unpaid"';
$_LANG['ss_not_unshipped'] = 'Order %s shipment status is not "undelivered"';
$_LANG['order_user_not_same'] = 'Two orders to be merged are not placed by the same user';
$_LANG['merge_invalid_order'] = 'Sorry, the merged order you choose is not allowed to merge.';

$_LANG['from_order_sn'] = 'Asal Pesanan:';
$_LANG['to_order_sn'] = 'Order Utama:';
$_LANG['merge'] = 'Gabungkan';
$_LANG['notice_order_sn'] = 'When the two orders are inconsistent, the combined order information (such as payment method, distribution method, packaging, greeting card, red envelope, etc.) is based on the Order Utama.';
$_LANG['js_languages']['confirm_merge'] = 'Are you sure you want to merge the two orders?';

/* 批处理 */
$_LANG['pls_select_order'] = 'Please select the order you want to operate on.';
$_LANG['no_fulfilled_order'] = 'There is no order that meets the operating conditions.';
$_LANG['updated_order'] = 'Updated order:';
$_LANG['order'] = 'Order:';
$_LANG['confirm_order'] = 'The following order cannot be set to confirmation status';
$_LANG['invalid_order'] = 'The following order cannot be set to invalid';
$_LANG['cancel_order'] = 'The following order cannot be cancelled';
$_LANG['remove_order'] = 'The following order cannot be removed';

/* 编辑订单打印模板 */
$_LANG['edit_order_templates'] = 'Edit Order Printing Template';
$_LANG['template_resetore'] = 'Reduction template';
$_LANG['edit_template_success'] = 'Successful operation of editing order printing template!';
$_LANG['remark_fittings'] = '(accessories)';
$_LANG['remark_gift'] = '(gift)';
$_LANG['remark_favourable'] = '(Preferences)';
$_LANG['remark_package'] = '(gift package)';

/* 订单来源统计 */
$_LANG['from_order'] = 'Source of order:';
$_LANG['from_ad_js'] = 'Advertisement:';
$_LANG['from_goods_js'] = 'JS Delivery Outside Commodity Station';
$_LANG['from_self_site'] = 'From this station';
$_LANG['from'] = 'From the site:';

/* 添加、编辑订单 */
$_LANG['add_order'] = 'Add order';
$_LANG['edit_order'] = 'Edit order';
$_LANG['step']['user'] = 'Please choose which member you want to place an order for.';
$_LANG['step']['goods'] = 'Choose product';
$_LANG['step']['consignee'] = 'Setting up consignee information';
$_LANG['step']['shipping'] = 'Choosing shipping method';
$_LANG['step']['payment'] = 'Choose payment method';
$_LANG['step']['other'] = 'Setting up other information';
$_LANG['step']['money'] = 'Setup cost';
$_LANG['anonymous'] = 'Anonymous';
$_LANG['by_useridname'] = 'Search by membership number or name';
$_LANG['button_prev'] = 'Previous step';
$_LANG['button_next'] = 'Next step';
$_LANG['button_finish'] = 'complete';
$_LANG['button_cancel'] = 'cancel';
$_LANG['name'] = 'Nama';
$_LANG['desc'] = 'description';
$_LANG['shipping_fee'] = 'shipping fee';
$_LANG['free_money'] = 'Free Quota';
$_LANG['insure'] = 'Value insured fee';
$_LANG['pay_fee'] = 'Service Charge';
$_LANG['pack_fee'] = 'Packing charges';
$_LANG['card_fee'] = 'Greeting card fee';
$_LANG['no_pack'] = 'Do not wrap up.';
$_LANG['no_card'] = 'No greeting cards.';
$_LANG['add_to_order'] = 'Order added';
$_LANG['calc_order_amount'] = 'Calculate the order amount';
$_LANG['available_surplus'] = 'Available balance:';
$_LANG['available_integral'] = 'Available integrals:';
$_LANG['available_bonus'] = 'Available in red envelopes:';
$_LANG['admin'] = 'Administrator adds';
$_LANG['search_goods'] = 'Search by commodity number or commodity name or commodity number';
$_LANG['category'] = 'Category';
$_LANG['brand'] = 'Brand';
$_LANG['user_money_not_enough'] = 'Insufficient user balance';
$_LANG['pay_points_not_enough'] = 'Insufficient User Integral';
$_LANG['money_paid_enough'] = 'The amount paid is more than the sum of the total amount of the goods and all kinds of expenses. Please refund it first.';
$_LANG['price_note'] = 'Note: Attribute price increases have been included in commodity prices.';
$_LANG['select_pack'] = 'Selective packaging';
$_LANG['select_card'] = 'Choosing greeting cards';
$_LANG['select_shipping'] = 'Please choose the mode of distribution first.';
$_LANG['want_insure'] = 'I want to protect the price.';
$_LANG['update_goods'] = 'Update product';
$_LANG['notice_user'] = '<strong>Note:</strong> Search results show only the first 20 records, if no phase is found' .
        'For members, please search more accurately. In addition, if the member is registered from the forum and has not registered in the mall,' .
        'I cannot find it either. I need to login in the mall first.';
$_LANG['amount_increase'] = 'As you have revised the order, the total amount of the order has increased, and you need to pay again.';
$_LANG['amount_decrease'] = 'As you have revised the order, the total amount of the order is reduced and a refund is required.';
$_LANG['continue_shipping'] = 'Because you changed the consignees area, the original distribution mode is no longer available. Please re-select the distribution mode.';
$_LANG['continue_payment'] = 'Because you have modified the distribution method, the original payment method is no longer available. Please re-select the distribution method.';
$_LANG['refund'] = 'refund';
$_LANG['cannot_edit_order_shipped'] = 'You cannot modify the order that has been shipped.';
$_LANG['address_list'] = 'Select from the existing receiving address:';
$_LANG['order_amount_change'] = 'The total amount of the order is determined by %s turn into %s';
$_LANG['shipping_note'] = 'Note: Because the order has been shipped, modifying the distribution mode will not change the distribution fee and premium.';
$_LANG['change_use_surplus'] = 'Edit order %s , change the amount of advance payment';
$_LANG['change_use_integral'] = 'Edit order %s ,change the amount of points paid';
$_LANG['return_order_surplus'] = 'Return payment order due to cancellation, invalidation or return operation %s advances used';
$_LANG['return_order_integral'] = 'Return payment order due to cancellation, invalidation or return operation %s integral used in time';
$_LANG['order_gift_integral'] = 'Order %s Gift points';
$_LANG['return_order_gift_integral'] = 'Return order due to return or non-delivery operation %s gift points';
$_LANG['invoice_no_mall'] = '&nbsp;&nbsp;&nbsp;&nbsp;Multiple invoice numbers should be separated by English commas (",").';

$_LANG['js_languages']['input_price'] = 'Custom Price';
$_LANG['js_languages']['pls_search_user'] = 'Please search and select members';
$_LANG['js_languages']['confirm_drop'] = 'Are you sure you want to delete this item?';
$_LANG['js_languages']['invalid_goods_number'] = 'The quantity of goods is incorrect.';
$_LANG['js_languages']['pls_search_goods'] = 'Please search and select the goods.';
$_LANG['js_languages']['pls_select_area'] = 'Please select the area completely.';
$_LANG['js_languages']['pls_select_shipping'] = 'Please choose shipping method.';
$_LANG['js_languages']['pls_select_payment'] = 'Please choose payment method.';
$_LANG['js_languages']['pls_select_pack'] = 'Please choose packing.';
$_LANG['js_languages']['pls_select_card'] = 'Please choose a greeting card.';
$_LANG['js_languages']['pls_input_note'] = 'Please fill in the notes!';
$_LANG['js_languages']['pls_input_cancel'] = 'Please fill in the reason for the cancellation!';
$_LANG['js_languages']['pls_select_refund'] = 'Please choose the refund method!';
$_LANG['js_languages']['pls_select_agency'] = 'Please choose the office!';
$_LANG['js_languages']['pls_select_other_agency'] = 'This order belongs to this office now, please choose another office!';
$_LANG['js_languages']['loading'] = 'Loading...';

/* 订单操作 */
$_LANG['order_operate'] = 'Order operation:';
$_LANG['label_refund_amount'] = 'Amount of refund:';
$_LANG['label_handle_refund'] = 'Method of refund:';
$_LANG['label_refund_note'] = 'Reimbursement instructions:';
$_LANG['return_user_money'] = 'Return user balance';
$_LANG['create_user_account'] = 'Generate a refund application';
$_LANG['not_handle'] = 'No processing, select this item when misoperation occurs';

$_LANG['order_refund'] = 'Order refund:%s';
$_LANG['order_pay'] = 'Order payment:%s';

$_LANG['send_mail_fail'] = 'Failed to send mail';

$_LANG['send_message'] = 'Send/View Messages';

/* 发货单操作 */
$_LANG['delivery_operate'] = 'Invoice operation:';
$_LANG['delivery_sn_number'] = 'Shipment order No.';
$_LANG['invoice_no_sms'] = 'Please fill in the invoice number!';

/* 发货单搜索 */
$_LANG['delivery_sn'] = 'Invoice';

/* 发货单状态 */
$_LANG['delivery_status'][0] = 'Shipped';
$_LANG['delivery_status'][1] = 'Produk Dikembalikan';
$_LANG['delivery_status'][2] = 'Normal';

/* 发货单标签 */
$_LANG['label_delivery_status'] = 'State of invoice';
$_LANG['label_suppliers_name'] = 'Supplier';
$_LANG['label_delivery_time'] = 'Generation time';
$_LANG['label_delivery_sn'] = 'Flow Number of Invoice';
$_LANG['label_add_time'] = 'Application time';
$_LANG['label_update_time'] = 'Delivery time';
$_LANG['label_send_number'] = 'Number';

/* 发货单提示 */
$_LANG['tips_delivery_del'] = 'Delete the invoice successfully!';

/* 退货单操作 */
$_LANG['back_operate'] = 'Return order operation:';

/* 退货单标签 */
$_LANG['return_time'] = 'Return time:';
$_LANG['label_return_time'] = 'Return time';

/* 退货单提示 */
$_LANG['tips_back_del'] = 'Return slip deletion success!';

$_LANG['goods_num_err'] = 'Insufficient stock, please re-select!';

$_LANG['b_142'] = 'Pengiriman sekali klik';

?>