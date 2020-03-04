<?php

/**
 * 鸿宇多用户商城 订单管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: order.php 17217 2016-01-19 06:29:08Z derek $
 */

/* 订单搜索 */
$_LANG['order_sn'] = 'Order number';
$_LANG['consignee'] = 'Consignee';
$_LANG['all_status'] = 'Order status';

$_LANG['cs'][OS_UNCONFIRMED] = 'To be confirmed';
$_LANG['cs'][CS_AWAIT_PAY] = 'To be confirmed';
$_LANG['cs'][CS_AWAIT_SHIP] = 'To be shipped';
$_LANG['cs'][CS_FINISHED] = 'Completed';
$_LANG['cs'][PS_PAYING] = 'In payment';
$_LANG['cs'][OS_CANCELED] = 'Cancel';
$_LANG['cs'][OS_INVALID] = 'Invalid';
$_LANG['cs'][OS_RETURNED] = 'Return goods';
$_LANG['cs'][OS_SHIPPED_PART] = 'Partial shipment';

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
$_LANG['ss'][SS_SHIPPED_PART] = 'Shipped(Some commodities)';
$_LANG['ss'][SS_SHIPPED_ING] = 'Delivery';

$_LANG['ps'][PS_UNPAYED] = 'Unpaid';
$_LANG['ps'][PS_PAYING] = 'In payment';
$_LANG['ps'][PS_PAYED] = 'Paid';

$_LANG['ss_admin'][SS_SHIPPED_ING] = 'Shipment in progress (Front Desk Status: Unshipped)';
/* 订单操作 */
$_LANG['label_operable_act'] = 'Current executable operation：';
$_LANG['label_action_note'] = 'Operation notes：';
$_LANG['label_invoice_note'] = 'Shipping notes：';
$_LANG['label_invoice_no'] = 'Invoice No.：';
$_LANG['label_cancel_note'] = 'Reasons for cancellation：';
$_LANG['notice_cancel_note'] = '(will be recorded in business messages to customers)';
$_LANG['op_confirm'] = 'Confirm';
$_LANG['op_pay'] = 'Payment';
$_LANG['op_prepare'] = 'Distribution';
$_LANG['op_ship'] = 'Deliver goods';
$_LANG['op_cancel'] = 'Cancel';
$_LANG['op_invalid'] = 'Invalid';
$_LANG['op_return'] = 'Return goods';
$_LANG['op_unpay'] = 'Set as unpaid';
$_LANG['op_unship'] = 'Unshipped';
$_LANG['op_cancel_ship'] = 'Cancel shipment';
$_LANG['op_receive'] = 'Received goods';
$_LANG['op_assign'] = 'Assigned to';
$_LANG['op_after_service'] = 'After sale';
$_LANG['act_ok'] = 'Successful operation';
$_LANG['act_false'] = 'Operation failed';
$_LANG['act_ship_num'] = 'The quantity of this order can not exceed the quantity of the goods ordered.';
$_LANG['act_good_vacancy'] = 'Goods are out of stock';
$_LANG['act_good_delivery'] = 'The goods have been sold out.';
$_LANG['notice_gb_ship'] = 'Note: Delivery is not allowed until the group purchase activity is successfully processed.';
$_LANG['back_list'] = 'Returns the order list';
$_LANG['op_remove'] = 'Delete';
$_LANG['op_you_can'] = 'What you can do';
$_LANG['op_split'] = 'Generating invoices';
$_LANG['op_to_delivery'] = 'To deliver goods';

/* 订单列表 */
$_LANG['order_amount'] = 'Amount payable';
$_LANG['total_fee'] = 'Total sum';
$_LANG['shipping_name'] = 'Distribution mode';
$_LANG['pay_name'] = 'Payment method';
$_LANG['address'] = 'Address';
$_LANG['order_time'] = 'Order time';
$_LANG['detail'] = 'View';
$_LANG['phone'] = 'Telephone';
$_LANG['group_buy'] = '(group buying)';
$_LANG['error_get_goods_info'] = 'Error in obtaining order merchandise information';
$_LANG['exchange_goods'] = '(Integral Exchange)';

$_LANG['js_languages']['remove_confirm'] = 'Deleting an order clears all information about the order. Are you sure you want to do that?';

/* 订单搜索 */
$_LANG['label_order_sn'] = 'Order NO.：';
$_LANG['label_all_status'] = 'Order status：';
$_LANG['label_user_name'] = 'Purchaser：';
$_LANG['label_consignee'] = 'Receiver：';
$_LANG['label_email'] = 'E-mail：';
$_LANG['label_address'] = 'address：';
$_LANG['label_zipcode'] = 'Zip code：';
$_LANG['label_tel'] = 'Telephone：';
$_LANG['label_mobile'] = 'Mobile phone：';
$_LANG['label_shipping'] = 'Distribution mode：';
$_LANG['label_payment'] = 'Payment method：';
$_LANG['label_order_status'] = 'Order status：';
$_LANG['label_pay_status'] = 'Payment status：';
$_LANG['label_shipping_status'] = 'Delivery status：';
$_LANG['label_area'] = 'Location：';
$_LANG['label_time'] = 'Order time：';

/* 订单详情 */
$_LANG['prev'] = 'The previous order';
$_LANG['next'] = 'The latter order';
$_LANG['print_order'] = 'Print order';
$_LANG['print_shipping'] = 'Print courier bill';
$_LANG['print_order_sn'] = 'Order number：';
$_LANG['print_buy_name'] = 'Purchaser：';
$_LANG['label_consignee_address'] = 'Purchaser：';
$_LANG['no_print_shipping'] = 'I\'m sorry, you haven\'t set up a template for printing courier sheets yet. It can\'t be printed.';
$_LANG['suppliers_no'] = 'Do not specify the supplier to handle the store itself';
$_LANG['restaurant'] = 'Our shop';

$_LANG['order_info'] = 'Order information';
$_LANG['base_info'] = 'Essential information';
$_LANG['other_info'] = 'Other information';
$_LANG['consignee_info'] = 'consignee';
$_LANG['fee_info'] = 'Cost information';
$_LANG['action_info'] = 'Operation information';
$_LANG['shipping_info'] = 'Distribution information';

$_LANG['label_how_oos'] = 'Shortage processing：';
$_LANG['label_how_surplus'] = 'Balance processing：';
$_LANG['label_pack'] = 'Packing：';
$_LANG['label_card'] = 'Greeting card：';
$_LANG['label_card_message'] = 'Congratulations on cards：';
$_LANG['label_order_time'] = 'Order time：';
$_LANG['label_pay_time'] = 'Payment time：';
$_LANG['label_shipping_time'] = 'Delivery time：';
$_LANG['label_sign_building'] = 'Landmark building：';
$_LANG['label_best_time'] = 'Best Delivery Time：';
$_LANG['label_inv_type'] = 'Invoice type：';
$_LANG['label_inv_payee'] = 'Invoice rise：';
$_LANG['label_inv_content'] = 'Invoice contents：';
$_LANG['label_postscript'] = 'Customer Messages to Businessmen：';
$_LANG['label_region'] = 'Location：';

$_LANG['label_shop_url'] = 'Website：';
$_LANG['label_shop_address'] = 'address：';
$_LANG['label_service_phone'] = 'Telephone：';
$_LANG['label_print_time'] = 'Printing time：';

$_LANG['label_suppliers'] = 'Selection of suppliers：';
$_LANG['label_agency'] = 'Office：';
$_LANG['suppliers_name'] = 'supplier';

$_LANG['product_sn'] = 'Goods No.';
$_LANG['goods_info'] = 'Commodity information';
$_LANG['goods_name'] = 'Trade name';
$_LANG['goods_name_brand'] = 'Commodity Name [Brand]';
$_LANG['goods_sn'] = 'Item number';
$_LANG['goods_price'] = 'Price';
$_LANG['goods_number'] = 'Number';
$_LANG['goods_attr'] = 'attribute';
$_LANG['goods_delivery'] = 'Quantity shipped';
$_LANG['goods_delivery_curr'] = 'Quantity of shipment of this order';
$_LANG['storage'] = 'Stock';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['label_total'] = 'Total：';
$_LANG['label_total_weight'] = 'Total weight of goods：';

$_LANG['label_goods_amount'] = 'Total amount of goods：';
$_LANG['label_discount'] = 'Discount：';
$_LANG['label_tax'] = 'Invoice tax：';
$_LANG['label_shipping_fee'] = 'Distribution cost：';
$_LANG['label_insure_fee'] = 'Insured cost：';
$_LANG['label_insure_yn'] = 'Is it insured?：';
$_LANG['label_pay_fee'] = 'Payment cost：';
$_LANG['label_pack_fee'] = 'Packing charges：';
$_LANG['label_card_fee'] = 'Greeting card fees：';
$_LANG['label_money_paid'] = 'Amount paid：';
$_LANG['label_surplus'] = 'Use balance：';
$_LANG['label_integral'] = 'Using integral：';
$_LANG['label_bonus'] = 'Use red envelopes：';
$_LANG['label_order_amount'] = 'Total order amount：';
$_LANG['label_money_dues'] = 'Amount payable：';
$_LANG['label_money_refund'] = 'Amount of refundable：';
$_LANG['label_to_buyer'] = 'Commerce Messages to Customers：';
$_LANG['save_order'] = 'Save order';
$_LANG['notice_gb_order_amount'] = '(Note: If there is a bond in group purchase, only the bond and the corresponding payment fee will be paid for the first time.)';

$_LANG['action_user'] = 'Operator：';
$_LANG['action_time'] = 'Operation time';
$_LANG['order_status'] = 'Order status';
$_LANG['pay_status'] = 'Payment status';
$_LANG['shipping_status'] = 'Delivery status';
$_LANG['action_note'] = 'Remarks';
$_LANG['pay_note'] = 'Payment remarks：';

$_LANG['sms_time_format'] = 'M months J days G hour';
$_LANG['order_shipped_sms'] = 'Your order %s has been shipped at %s [%s]';
$_LANG['order_splited_sms'] = 'Your order %s , %s is in %s [%s]';
$_LANG['order_removed'] = 'Order deletion was successful.';
$_LANG['return_list'] = 'Returns the order list';

/* 订单处理提示 */
$_LANG['surplus_not_enough'] = 'The order is paid with a %s balance, and the user balance is insufficient now.';
$_LANG['integral_not_enough'] = 'The order is paid with %s integral, but the user\'s integral is insufficient now.';
$_LANG['bonus_not_available'] = 'The order is paid in red envelope, which is not available now.';

/* 购货人信息 */
$_LANG['display_buyer'] = 'Display buyer information';
$_LANG['buyer_info'] = 'Buyer Information';
$_LANG['pay_points'] = 'Consumption points';
$_LANG['rank_points'] = 'Rank integral';
$_LANG['user_money'] = 'Account balance';
$_LANG['email'] = 'E-mail';
$_LANG['rank_name'] = 'Membership level';
$_LANG['bonus_count'] = 'Number of red packets';
$_LANG['zipcode'] = 'Zip code';
$_LANG['tel'] = 'Telephone';
$_LANG['mobile'] = 'Standby telephone';

/* 合并订单 */
$_LANG['order_sn_not_null'] = 'Please fill in the order number to be merged.';
$_LANG['two_order_sn_same'] = 'The two order numbers to be merged cannot be the same';
$_LANG['order_not_exist'] = 'Order %s does not exist';
$_LANG['os_not_unconfirmed_or_confirmed'] = '%s the order status of S is not "unacknowledged" or "confirmed"”';
$_LANG['ps_not_unpayed'] = 'Payment status of order %s is not "unpaid"';
$_LANG['ss_not_unshipped'] = 'The shipment status of order %s is not "undelivered"';
$_LANG['order_user_not_same'] = 'Two orders to be merged are not placed by the same user';
$_LANG['merge_invalid_order'] = 'Sorry, the merged order you choose is not allowed to merge.';

$_LANG['from_order_sn'] = 'Sub order：';
$_LANG['to_order_sn'] = 'Master order：';
$_LANG['merge'] = 'merge';
$_LANG['notice_order_sn'] = 'When the two orders are inconsistent, the combined order information (such as payment method, distribution method, packaging, greeting card, red envelope, etc.) is based on the main order.';
$_LANG['js_languages']['confirm_merge'] = 'Are you sure you want to merge the two orders?';

/* 批处理 */
$_LANG['pls_select_order'] = 'Please select the order you want to operate on.';
$_LANG['no_fulfilled_order'] = 'There is no order that meets the operating conditions.';
$_LANG['updated_order'] = 'Updated orders：';
$_LANG['order'] = 'Order：';
$_LANG['confirm_order'] = 'The following order cannot be set to confirmation status';
$_LANG['invalid_order'] = 'The following order cannot be set to invalid';
$_LANG['cancel_order'] = 'The following order cannot be cancelled';
$_LANG['remove_order'] = 'The following order cannot be removed';

/* 编辑订单打印模板 */
$_LANG['edit_order_templates'] = 'Edit order print template';
$_LANG['template_resetore'] = 'Reduction template';
$_LANG['edit_template_success'] = 'Edit the order print template successfully!';
$_LANG['remark_fittings'] = '(accessories)';
$_LANG['remark_gift'] = '(gift)';
$_LANG['remark_favourable'] = '(Preferences)';
$_LANG['remark_package'] = '(gift package)';

/* 订单来源统计 */
$_LANG['from_order'] = 'Order source：';
$_LANG['from_ad_js'] = 'Advertisement：';
$_LANG['from_goods_js'] = 'JS placement outside the merchandise station';
$_LANG['from_self_site'] = 'From this station';
$_LANG['from'] = 'From the site：';

/* 添加、编辑订单 */
$_LANG['add_order'] = 'Add order';
$_LANG['edit_order'] = 'Edit order';
$_LANG['step']['user'] = 'Please choose which member you want to place an order for.';
$_LANG['step']['goods'] = 'Rank integral';
$_LANG['step']['consignee'] = 'Setting up consignee information';
$_LANG['step']['shipping'] = 'Choosing Distribution Mode';
$_LANG['step']['payment'] = 'Choose payment method';
$_LANG['step']['other'] = 'Setting up other information';
$_LANG['step']['money'] = 'Setup cost';
$_LANG['anonymous'] = 'anonymous';
$_LANG['by_useridname'] = 'Search by membership number or name';
$_LANG['button_prev'] = 'Previous step';
$_LANG['button_next'] = 'Next step';
$_LANG['button_finish'] = 'complete';
$_LANG['button_cancel'] = 'cancel';
$_LANG['name'] = 'Name';
$_LANG['desc'] = 'describe';
$_LANG['shipping_fee'] = 'Distribution fee';
$_LANG['free_money'] = 'Free Quota';
$_LANG['insure'] = 'Value insured fee';
$_LANG['pay_fee'] = 'Service Charge';
$_LANG['pack_fee'] = 'Packing charges';
$_LANG['card_fee'] = 'Greeting card fee';
$_LANG['no_pack'] = 'Do not pack';
$_LANG['no_card'] = 'No greeting cards.';
$_LANG['add_to_order'] = 'Order added';
$_LANG['calc_order_amount'] = 'Calculate the order amount';
$_LANG['available_surplus'] = 'Available balance：';
$_LANG['available_integral'] = 'Available integral：';
$_LANG['available_bonus'] = 'Available red envelope：';
$_LANG['admin'] = 'Administrator adds';
$_LANG['search_goods'] = 'Search by commodity number or commodity name or commodity number';
$_LANG['category'] = 'Category';
$_LANG['brand'] = 'brand';
$_LANG['user_money_not_enough'] = 'Insufficient user balance';
$_LANG['pay_points_not_enough'] = 'Insufficient User Integral';
$_LANG['money_paid_enough'] = 'The amount paid is more than the sum of the total amount of the goods and all kinds of expenses. Please refund it first.';
$_LANG['price_note'] = 'Note: Attribute price increases have been included in commodity prices.';
$_LANG['select_pack'] = 'Selective packaging';
$_LANG['select_card'] = 'Choosing greeting cards';
$_LANG['select_shipping'] = 'Please choose the mode of distribution first.';
$_LANG['want_insure'] = 'I want to protect the price.';
$_LANG['update_goods'] = 'Update commodity';
$_LANG['notice_user'] = '<strong>note:</strong>Search results only show the top 20 records, if no phase is found' .
        'For members, please find more accurately. In addition, if the member is registered from the forum and has not logged in at the mall,' .
        'Also can\'t find it, you need to log in at the mall first.';
$_LANG['amount_increase'] = 'Since you have modified your order, the total order amount has increased and you need to pay again.';
$_LANG['amount_decrease'] = 'Since you have modified your order, the total order amount is reduced and a refund is required.';
$_LANG['continue_shipping'] = 'Since you have modified the consignee\'s location, the original shipping method is no longer available, please re-select the shipping method.';
$_LANG['continue_payment'] = 'Since you have modified the shipping method, the original payment method is no longer available, please re-select the shipping method.';
$_LANG['refund'] = 'refund';
$_LANG['cannot_edit_order_shipped'] = 'You can\'t modify the order that has been shipped.';
$_LANG['address_list'] = 'Select from the existing receiving address：';
$_LANG['order_amount_change'] = 'Total order amount changed from %s to %s ';
$_LANG['shipping_note'] = 'Note: Because the order has been shipped, modifying the distribution mode will not change the distribution fee and premium.';
$_LANG['change_use_surplus'] = 'Edit the order %s and change the amount paid with advance payment';
$_LANG['change_use_integral'] = 'Edit order %s to change the amount of points paid';
$_LANG['return_order_surplus'] = 'Due to cancellation, invalidity or return operation, advance payment used in the return of payment order %s ';
$_LANG['return_order_integral'] = 'Points used to refund payment order %s due to cancellation, invalidity or return operations';
$_LANG['order_gift_integral'] = 'Bonus points for order %s ';
$_LANG['return_order_gift_integral'] = 'Bonus points for return order %s due to return or non-delivery operation';
$_LANG['invoice_no_mall'] = '&nbsp;&nbsp;&nbsp;&nbsp;Multiple invoice numbers should be separated by English commas (",").';

$_LANG['js_languages']['input_price'] = 'Custom Price';
$_LANG['js_languages']['pls_search_user'] = 'Please search and select members';
$_LANG['js_languages']['confirm_drop'] = 'Are you sure you want to delete this item?';
$_LANG['js_languages']['invalid_goods_number'] = 'The quantity of goods is incorrect.';
$_LANG['js_languages']['pls_search_goods'] = 'Please search and select the goods.';
$_LANG['js_languages']['pls_select_area'] = 'Please select the area completely.';
$_LANG['js_languages']['pls_select_shipping'] = 'Please choose the mode of distribution.';
$_LANG['js_languages']['pls_select_payment'] = 'Please choose the mode of payment.';
$_LANG['js_languages']['pls_select_pack'] = 'Please choose packing.';
$_LANG['js_languages']['pls_select_card'] = 'Please choose a greeting card.';
$_LANG['js_languages']['pls_input_note'] = 'Please fill in the notes!';
$_LANG['js_languages']['pls_input_cancel'] = 'Please fill in the reason for the cancellation!';
$_LANG['js_languages']['pls_select_refund'] = 'Please choose the refund method!';
$_LANG['js_languages']['pls_select_agency'] = 'Please choose the office!';
$_LANG['js_languages']['pls_select_other_agency'] = 'This order belongs to this office now, please choose another office!';
$_LANG['js_languages']['loading'] = 'Loading...';

/* 订单操作 */
$_LANG['order_operate'] = 'Order operation：';
$_LANG['label_refund_amount'] = 'refund amount：';
$_LANG['label_handle_refund'] = 'Refund method：';
$_LANG['label_refund_note'] = 'Refund instruction：';
$_LANG['return_user_money'] = 'Return user balance';
$_LANG['create_user_account'] = 'Generate a refund application';
$_LANG['not_handle'] = 'No processing, select this item when misoperation occurs';

$_LANG['order_refund'] = 'Order refund：%s';
$_LANG['order_pay'] = 'Order payment：%s';

$_LANG['send_mail_fail'] = 'Failed to send mail';

$_LANG['send_message'] = 'Send/View Messages';

/* 发货单操作 */
$_LANG['delivery_operate'] = 'Invoice operation:';
$_LANG['delivery_sn_number'] = 'Flow Number of Invoice：';
$_LANG['invoice_no_sms'] = 'Please fill in the invoice number!';

/* 发货单搜索 */
$_LANG['delivery_sn'] = 'Invoice';

/* 发货单状态 */
$_LANG['delivery_status'][0] = 'Shipped';
$_LANG['delivery_status'][1] = 'Return goods';
$_LANG['delivery_status'][2] = 'normal';

/* 发货单标签 */
$_LANG['label_delivery_status'] = 'State of invoice';
$_LANG['label_suppliers_name'] = 'supplier';
$_LANG['label_delivery_time'] = 'Generation time';
$_LANG['label_delivery_sn'] = 'Flow Number of Invoice';
$_LANG['label_add_time'] = 'Order time';
$_LANG['label_update_time'] = 'Delivery time';
$_LANG['label_send_number'] = 'Quantity shipped';

/* 发货单提示 */
$_LANG['tips_delivery_del'] = 'Delete the invoice successfully!';

/* 退货单操作 */
$_LANG['back_operate'] = 'Return order operation：';

/* 退货单标签 */
$_LANG['return_time'] = 'Return time：';
$_LANG['label_return_time'] = 'Return time';

/* 退货单提示 */
$_LANG['tips_back_del'] = 'Return slip deletion success!';

$_LANG['goods_num_err'] = 'Insufficient stock, please re-select!';

/*发票列表新增*/
$_LANG['unprovided'] = 'Unbilled';
$_LANG['provided'] = 'Invoiced';
$_LANG['provide_invoice'] = 'Billing';
$_LANG['export'] = 'Export';
$_LANG['export_to_excel'] = 'Export to Excel';
$_LANG['export_all_to_excel'] = 'Export all to Excel';
$_LANG['normal_invoice'] = 'General invoice';
$_LANG['vat_invoice'] = 'VAT Invoice';
$_LANG['please_select'] = 'Please choose';
$_LANG['inv_type'] = 'Invoice type';
$_LANG['inv_info'] = 'Invoice information';
$_LANG['inv_payee'] = 'Invoice rise';
$_LANG['inv_content'] = 'Invoice contents';
$_LANG['company_name1'] = 'Unit name';
$_LANG['taxpayer_id'] = 'Taxpayer identification number';
$_LANG['registration_address'] = 'Registered address';
$_LANG['registration_phone'] = 'Registered telephone';
$_LANG['deposit_bank'] = 'Bank of deposit';
$_LANG['bank_account'] = 'Bank account';
$_LANG['inv_consignee_info'] = 'Receiver information';
$_LANG['inv_consignee_name'] = 'Name of the drawee';
$_LANG['inv_consignee_phone'] = 'Ticket Receiver\'s Mobile Phone';
$_LANG['inv_consignee_address'] = 'Receiver\'s address';
$_LANG['inv_status'] = 'Invoice status';
$_LANG['inv_money'] = 'Invoice amount';
$_LANG['edit_invoice'] = 'Edit invoice';
$_LANG['check_invoice'] = 'View invoice';
$_LANG['individual'] = 'personal';
$_LANG['unit'] = 'Company';

$_LANG['label_inv_info'] = 'Invoice information：';
$_LANG['label_company_name1'] = 'Unit name：';
$_LANG['label_taxpayer_id'] = 'Taxpayer identification number：';
$_LANG['label_registration_address'] = 'Registered address：';
$_LANG['label_registration_phone'] = 'Registered telephone：';
$_LANG['label_deposit_bank'] = 'Bank of deposit：';
$_LANG['label_bank_account'] = 'Bank account：';
$_LANG['label_inv_consignee_info'] = 'Receiver information：';
$_LANG['label_inv_consignee_name'] = 'Name of the drawee：';
$_LANG['label_inv_consignee_phone'] = 'Ticket Receiver\'s Mobile Phone：';
$_LANG['label_inv_consignee_address'] = 'Receiver\'s address：';
$_LANG['label_inv_status'] = 'Invoice status：';
$_LANG['label_inv_money'] = 'Invoice amount：';
$_LANG['label_action_note2'] = 'Remarks：';
$_LANG['js_languages']['remove_invoice_confirm'] = 'Are you sure you want to delete the invoice information for this order?';

$_LANG['sch_stats'][0] = 'Not divided into';
$_LANG['sch_stats'][1] = 'Have been divided into';
$_LANG['sch_stats'][2] = 'Abolition';
$_LANG['sch_stats'][3] = 'rescinded';
?>