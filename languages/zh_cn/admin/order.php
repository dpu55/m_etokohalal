<?php
/* 订单搜索 */
$_LANG['order_sn'] = 'Order ID';
$_LANG['consignee'] = 'Penerima';
$_LANG['all_status'] = 'Status Pesanan';

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
$_LANG['os'][OS_RETURNED] = '<font color="red">Return goods</font>';
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

$_LANG['ss_admin'][SS_SHIPPED_ING] = 'Shipment in progress (Front Desk Status: Unshipped)';
/* 订单操作 */
$_LANG['label_operable_act'] = 'Currently executable operations:';

$_LANG['label_action_note']='Masukkan Catatan Tindakan:';
$_LANG['label_resi']='Masukkan Nomor Resi:';
$_LANG['label_cancel_note']='Detail Pembatalan:';

$_LANG['label_invoice_note']='Delivery Note:';
$_LANG['label_invoice_no']='invoice number:';
$_LANG['notice_cancel_note']='(will be recorded in the business message to the customer)';
$_LANG['op_confirm']='confirmation';
$_LANG['op_pay']='payment';
$_LANG['op_prepare']='dispatch';
$_LANG['op_ship']='Delivery';
$_LANG['op_cancel']='cancel';
$_LANG['op_invalid']='Tidak Lengkap';
$_LANG['op_return']='return';
$_LANG['op_unpay']='set to unpaid';
$_LANG['op_unship']='Unshipped';
$_LANG['op_cancel_ship']='cancel shipment';
$_LANG['op_receive']='Received';
$_LANG['op_assign']='assign to';
$_LANG['op_after_service']='after-sale';
$_LANG['act_ok']='successful operation';
$_LANG['act_false']='operation failure';
$_LANG['act_ship_num']='The quantity of this order cannot exceed the quantity of the goods ordered';
$_LANG['act_good_vacancy']='goods out of stock';
$_LANG['act_good_delivery']='Goods are finished';
$_LANG['notice_gb_ship']='Note: Group buying activities can not be delivered until they are successfully processed';
$_LANG['notice_ps_ship']='Note: Pre-sale activities can not be delivered until they are successfully processed';
$_LANG['back_list']='return to order list';
$_LANG['op_remove']='Hapus';
$_LANG['op_you_can']='What you can do';
$_LANG['op_split']='Generate invoice';
$_LANG['op_to_delivery']='Delivery';

/* 订单列表 */
$_LANG['order_amount'] = 'Pembayaran';
$_LANG['total_fee'] = 'Total';
$_LANG['shipping_name'] = 'Metode Pengiriman';
$_LANG['pay_name'] = 'Metode Pembayaran';
$_LANG['address'] = 'Alamat';
$_LANG['order_time'] = 'Waktu ditambahkan';
$_LANG['detail'] = 'View';
$_LANG['Telepon'] = 'Telepon';
$_LANG['group_buy'] = '(group buying)';
$_LANG['error_get_goods_info'] = 'Error in obtaining order merchandise information';
$_LANG['exchange_goods'] = '(Integral Exchange)';

$_LANG['js_languages']['remove_confirm'] = 'Deleting an order clears all information about the order. Are you sure you want to do that?';

/* 订单搜索 */
$_LANG['label_order_sn'] = 'Order ID:';
$_LANG['label_all_status'] = 'Status Pesanan:';
$_LANG['label_user_name'] = 'Purchaser:';
$_LANG['label_consignee'] = 'Penerima:';
$_LANG['label_email'] = 'Email';
$_LANG['label_address'] = 'Alamat:';
$_LANG['label_zipcode'] = 'Kode Pos:';
$_LANG['label_tel'] = 'Telepon:';
$_LANG['label_mobile'] = 'Mobile';
$_LANG['label_shipping'] = 'Metode Pengiriman:';
$_LANG['label_payment'] = 'Metode Pembayaran:';
$_LANG['label_order_status'] = 'Status Pesanan:';
$_LANG['label_pay_status'] = 'Metode Pembayaran:';
$_LANG['label_shipping_status'] = 'Status Pengiriman:';
$_LANG['label_area'] = 'Location:';
$_LANG['label_time'] = 'Waktu Pemesanan:';

/* 订单详情 */
$_LANG['prev']='previous order';
$_LANG['next']='the latter order';
$_LANG['print_order']='print order';
$_LANG['print_shipping']='print courier bill';
$_LANG['print_order_sn']='Nomor Order:';
$_LANG['print_buy_name']='Pembeli:';
$_LANG['label_consignee_address']='Receiving address:';
$_LANG['no_print_shipping']='I am sorry, you have not set up a template for printing courier sheets yet. You cannot print';
$_LANG['suppliers_no']='Do not designate the supplier to handle by itself';
$_LANG['restaurant']='Our store';
$_LANG['order_info']='order information';
$_LANG['base_info']='basic information';
$_LANG['other_info']='Other information';
$_LANG['consignee_info']='consignee information';
$_LANG['fee_info']='cost information';
$_LANG['action_info']='operation information';
$_LANG['shipping_info']='distribution information';
$_LANG['label_how_oos']='shortage processing:';
$_LANG['label_how_surplus']='balance processing:';
$_LANG['label_pack']='packaging:';
$_LANG['label_card']='greeting card:';
$_LANG['label_card_message']='Congratulations card:';
$_LANG['label_order_time']='Waktu Pemesanan:';
$_LANG['label_pay_time']='payment time:';
$_LANG['label_shipping_time']='Delivery time:';
$_LANG['label_sign_building']='landmark building:';
$_LANG['label_best_time']='best delivery time:';
$_LANG['label_inv_type']='invoice type:';
$_LANG['label_inv_payee']='Invoice payable:';
$_LANG['label_inv_content']='invoice content:';
$_LANG['label_postscript']='customers message to the merchant:';
$_LANG['label_region']='location:';
$_LANG['label_shop_url']='url:';
$_LANG['label_shop_address']='Alamat:';
$_LANG['label_service_phone']='telephone:';
$_LANG['label_print_time']='print time:';
$_LANG['label_suppliers']='Select supplier:';
$_LANG['label_agency']='office:';
$_LANG['suppliers_name']='supplier';
$_LANG['product_sn']='Nomor Produk';
$_LANG['goods_info']='commodity information';
$_LANG['goods_name']='Nama Produk:';
$_LANG['goods_name_brand']='Nama Produk [Merek]';
$_LANG['goods_shouhou']='after-sale';
$_LANG['goods_sn']='Nomor Produk';
$_LANG['goods_price']='Harga';
$_LANG['goods_number']='quantity';
$_LANG['goods_attr']='attribute';
$_LANG['goods_delivery']='quantity shipped';
$_LANG['goods_delivery_curr']='quantity of this single shipment';
$_LANG['storage']='Inventaris';
$_LANG['subtotal']='subtotal';
$_LANG['label_total']='total:';
$_LANG['label_total_weight']='total weight of goods:';
$_LANG['label_goods_amount']='total amount of goods:';
$_LANG['label_discount']='discount:';
$_LANG['label_tax']='invoice tax:';
$_LANG['label_shipping_fee']='Distribution cost:';
$_LANG['label_insure_fee']='premium:';
$_LANG['label_insure_yn']='Is it insured?';
$_LANG['label_pay_fee']='payment fee:';
$_LANG['label_pack_fee']='packing cost:';
$_LANG['label_card_fee']='greeting card fee';
$_LANG['label_money_paid']='paid amount:';
$_LANG['label_surplus']='use balance:';
$_LANG['label_integral']='Use integral:';
$_LANG['label_bonus']='Use red envelope:';
$_LANG['label_order_amount']='total order amount:';
$_LANG['label_money_dues']='Pembayaran:';
$_LANG['label_money_refund']='amount of refundable:';
$_LANG['label_to_buyer']='Commerces message to customers:';
$_LANG['save_order']='save order';
$_LANG['notice_gb_order_amount']='(Note: If there is a bond for group purchase, the first time only need to pay the bond and the corresponding payment fee)';


$_LANG['action_user']='operator:';
$_LANG['action_time']='operation time';
$_LANG['order_status']='Status Pesanan';
$_LANG['pay_status']='payment status';
$_LANG['shipping_status']='shipment status';
$_LANG['action_note']='remark';
$_LANG['pay_note']='Payment Note:';
$_LANG['sms_time_format']='m month, J day, G hour';
$_LANG['order_shipped_sms']='Your order %s has been shipped at %s [%s]';
$_LANG['order_splited_sms']='your order %s,%s is in %s [%s]';
$_LANG['order_removed']='Order deletion was successful. ';
$_LANG['return_list']='return order list';

/* 订单处理提示 */
$_LANG['surplus_not_enough']='The order is paid with the %s balance, and the user balance is insufficient now';
$_LANG['integral_not_enough']='The order is paid with %s integral, but now the users integral is insufficient';
$_LANG['bonus_not_available']='The order is paid in red envelope, which is not available now';

/* 购货人信息 */
$_LANG['display_buyer']='Show buyer information';
$_LANG['buyer_info']='buyer information';
$_LANG['pay_points']='consumption integral';
$_LANG['rank_points']='grade integral';
$_LANG['user_money']='account balance';
$_LANG['email']='e-mail';
$_LANG['rank_name']='membership level';
$_LANG['bonus_count']='number of red envelopes';
$_LANG['zipcode']='zip code';
$_LANG['tel']='telephone';
$_LANG['mobile']='standby phone';

/* 合并订单 */
$_LANG['order_sn_not_null'] = 'Please fill in the order number to be merged.';
$_LANG['two_order_sn_same'] = 'The two order numbers to be merged cannot be the same';
$_LANG['order_not_exist'] = 'Order %s does not exist';
$_LANG['os_not_unconfirmed_or_confirmed'] = '%s the order status is not "unacknowledged" or "confirmed"';
$_LANG['ps_not_unpayed'] = 'Payment status of order %s is not "unpaid"';
$_LANG['ss_not_unshipped'] = 'The shipment status of order %s is not "undelivered"';
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
$_LANG['order'] = 'Pesanan Produk:';
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
$_LANG['from_goods_js'] = '商品站外JS投放';
$_LANG['from_self_site'] = 'From this station';
$_LANG['from'] = 'From the site:';

/* 添加、编辑订单 */
$_LANG['add_order'] = 'Add order';
$_LANG['edit_order'] = 'Edit order';
$_LANG['step']['user'] = 'Please choose which member you want to place an order for.';
$_LANG['step']['goods'] = 'Choose product';
$_LANG['step']['consignee'] = 'Setting up consignee information';
$_LANG['step']['shipping'] = 'Choose shipping method';
$_LANG['step']['payment'] = 'Choose payment method';
$_LANG['step']['other'] = 'Setting up other information';
$_LANG['step']['money'] = 'Setup cost';
$_LANG['anonymous'] = 'Anonymous';
$_LANG['by_useridname'] = 'Search by membership number or name';
$_LANG['button_prev'] = 'Previous step';
$_LANG['button_next'] = 'Next step';
$_LANG['button_finish'] = 'Complete';
$_LANG['button_cancel'] = 'Cancel';
$_LANG['name'] = 'Name';
$_LANG['desc'] = 'Description';
$_LANG['shipping_fee'] = 'Shipping fee';
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
$_LANG['admin'] = 'Add';
$_LANG['search_goods'] = 'Search by product number or Nama Produk or product number';
$_LANG['category'] = 'Category';
$_LANG['brand'] = 'Brand';
$_LANG['user_money_not_enough'] = 'Insufficient user balance';
$_LANG['pay_points_not_enough'] = 'Insufficient User Integral';
$_LANG['money_paid_enough'] = 'The amount paid is more than the sum of the total amount of the goods and all kinds of expenses. Please refund it first.';
$_LANG['price_note'] = 'Note: Attribute price increases have been included in product prices.';
$_LANG['select_pack'] = 'Selective packaging';
$_LANG['select_card'] = 'Choosing greeting cards';
$_LANG['select_shipping'] = 'Please choose the mode of distribution first.';
$_LANG['want_insure'] = 'I want to protect the price.';
$_LANG['update_goods'] = 'Update commodity';
$_LANG['notice_user'] = '<strong> Note: </strong> Search results show only the first 20 records, if no phase is found.

Members, please search more accurately. In addition, if the member is registered from the forum and has not logged in at the mall,'.

'It cannot be found either. You need to log in at the mall first.';

$_LANG['amount_increase']='As you modify the order, the total amount of the order increases, and you need to pay again';
$_LANG['amount_decrease']='Because you modify the order, the total amount of the order decreases, requiring a refund';
$_LANG['continue_shipping']='Because you modify the consignees area, the original distribution method is no longer available, please re-select the distribution method';
$_LANG['continue_payment']='Because you changed the distribution method, the original payment method is no longer available, please re-select the distribution method';
$_LANG['refund']='refund';
$_LANG['cannot_edit_order_shipped']='You cannot modify the order that has been shipped';
$_LANG['address_list']='Select from the existing receiving address:';
$_LANG['order_amount_change']='total order amount changed from %s to %s';
$_LANG['shipping_note']='Because the order has been shipped, modifying the distribution method will not change the distribution fee and premium. ';
$_LANG['change_use_surplus']='edit order %s, change the amount paid with advance payment';
$_LANG['change_use_integral']='edit order %s, change the amount paid with points';
$_LANG['return_order_surplus']='Advance used to return payment order %s due to cancellation, invalidation or return operation';
$_LANG['return_order_integral']='Integral used to return payment order %s due to cancellation, invalidation or return operation';
$_LANG['order_gift_integral']='integral given by order %s';
$_LANG['return_order_gift_integral']='Return the integral given by order %s due to return or non-delivery operation';
$_LANG['invoice_no_mall']='&nbsp; &nbsp; &nbsp; &nbsp; multiple invoice numbers, separated by English commas (","). ';

$_LANG['js_languages']['input_price']='custom price';
$_LANG['js_languages']['pls_search_user']='Search and select members';
$_LANG['js_languages']['confirm_drop']='Confirm that you want to delete the item? ';
$_LANG['js_languages']['invalid_goods_number']='incorrect quantity of goods';
$_LANG['js_languages']['pls_search_goods']='Please search and select commodities';
$_LANG['js_languages']['pls_select_area']='Please select the area in its entirety';
$_LANG['js_languages']['pls_select_shipping']='Please choose the delivery method';
$_LANG['js_languages']['pls_select_payment']='Please choose the payment method';
$_LANG['js_languages']['pls_select_pack']='Please select the package';
$_LANG['js_languages']['pls_select_card']='Please select greeting card';
$_LANG['js_languages']['pls_input_note']='Please fill in the notes! ';
$_LANG['js_languages']['pls_input_cancel']='Please fill in the cancellation reason! ';
$_LANG['js_languages']['pls_select_refund']='Please choose the refund method! ';
$_LANG['js_languages']['pls_select_agency']='Please select the office! ';
$_LANG['js_languages']['pls_select_other_agency']='This order belongs to this office now, Please choose another office! ';
$_LANG['js_languages']['loading']='loading';

/* 订单操作 */
$_LANG['order_operation']='order operation:';
$_LANG['label_refund_amount']='refund amount:';
$_LANG['label_handle_refund']='refund method:';
$_LANG['label_refund_note']='refund description:';
$_LANG['return_user_money']='return user balance';
$_LANG['create_user_account']='generate a refund application';
$_LANG['not_handle']='No processing, select this item when misoperation';

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
$_LANG['label_add_time'] = 'Waktu Pemesanan';
$_LANG['label_update_time'] = 'Delivery time';
$_LANG['label_send_number'] = 'Quantity shipped';

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
$_LANG['label_pickup_point'] = 'Selected pick-up points:';
$_LANG['p_shop_name'] = 'Nama Toko:';
$_LANG['p_address'] = 'Alamat:';
$_LANG['p_contact'] = 'Kontak';
$_LANG['p_phone'] = 'No Telepon';
$_LANG['order_type'] = 'Order type';
$_LANG['pickup_order'] = 'Self order';
$_LANG['normal_order'] = 'General order';
/*发票列表新增*/
$_LANG['unprovided'] = 'Open bill';
$_LANG['provided'] = 'Invoiced';
$_LANG['provide_invoice'] = 'Invoice';
$_LANG['export'] = 'Export';
$_LANG['export_to_excel'] = 'Export to Excel';
$_LANG['export_all_to_excel'] = 'All exported to Excel';
$_LANG['normal_invoice'] = 'General invoice';
$_LANG['vat_invoice'] = 'VAT Invoice';
$_LANG['please_select'] = 'Silahkan pilih';
$_LANG['inv_type'] = 'Invoice type';
$_LANG['inv_info'] = 'Invoice information';
$_LANG['inv_payee'] = 'Invoice rise';
$_LANG['inv_content'] = 'Invoice contents';
$_LANG['company_name1'] = 'Company name';
$_LANG['taxpayer_id'] = 'Taxpayer identification number';
$_LANG['registration_address'] = 'Registered address';
$_LANG['registration_phone'] = 'Register phone';
$_LANG['deposit_bank'] = 'Bank of deposit';
$_LANG['bank_account'] = 'Bank account';
$_LANG['inv_consignee_info'] = 'Receiver information';
$_LANG['inv_consignee_name'] = 'Name of the drawee';
$_LANG['inv_consignee_phone'] = 'Ticket Receivers Mobile Phone';
$_LANG['inv_consignee_address'] = 'Receivers address';
$_LANG['inv_status'] = 'Invoice status';
$_LANG['inv_money'] = 'Invoice amount';
$_LANG['edit_invoice'] = 'Edit invoice';
$_LANG['check_invoice'] = 'View invoice';
$_LANG['individual'] = 'Personal';
$_LANG['unit'] = 'Company';

$_LANG['label_inv_info']='invoice information:';
$_LANG['label_company_name1']='unit name:';
$_LANG['label_taxpayer_id']='taxpayer identification number:';
$_LANG['label_registration_address']='registration address:';
$_LANG['label_registration_phone']='Registered phone:';
$_LANG['label_deposit_bank']='deposit bank:';
$_LANG['label_bank_account']='bank account:';
$_LANG['label_inv_consignee_info']='recipient information:';
$_LANG['label_inv_consignee_name']='name of the drawee:';
$_LANG['label_inv_consignee_phone']='Receivers mobile phone:';
$_LANG['label_inv_consignee_address']='addressee of the drawee:';
$_LANG['label_inv_status']='invoice status:';
$_LANG['label_inv_money']='invoice amount:';
$_LANG['label_action_note2']='Note:';
$_LANG['js_languages']['remove_invoice_confirm']='Are you sure you want to delete the invoice information for this order? ';

$_LANG['b_142'] = 'Pengiriman sekali klik';

?>