<?php

/**
 * 鸿宇多用户商城 管理中心分销语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: dqy $
 * $Id: distrib.php 17217 2015-07-06 06:29:08Z dqy $
*/


$_LANG['distrib_goods_list'] = 'Distribution List';
$_LANG['add_distrib_goods'] = 'Single Added Distribution Goods';
$_LANG['distrib_money'] = 'Divided into amount';
$_LANG['error_distrib_money'] = 'The share amount should not be greater than the product price.';
$_LANG['distrib_percent'] = 'Percentage of product prices';
$_LANG['error_money_percent'] = 'Divide into the amount and the percentage of product price, can only fill in one!';
$_LANG['error_over_percent'] = 'The percentage of product price is not within the reasonable range!';
$_LANG['batch_add'] = 'Batch Addition of Distribution Goods';

$_LANG['pls_search_goods'] = 'Please search for goods first';
$_LANG['label_search_goods'] = 'Product Number, Name or Number';
$_LANG['custom_goods_cat'] = 'All categories';
$_LANG['custom_goods_brand'] = 'All brands';

/* 活动列表页 */
$_LANG['goods_name'] = 'Product name';
$_LANG['start_date'] = 'start time';
$_LANG['end_date'] = 'End time';
$_LANG['deposit'] = 'Bond';
$_LANG['restrict_amount'] = 'Home purchase restrictions';
$_LANG['gift_integral'] = 'Presentation points';
$_LANG['valid_order'] = 'Order';
$_LANG['valid_goods'] = 'Order goods';
$_LANG['current_price'] = 'Current price';
$_LANG['current_status'] = 'state';
$_LANG['view_order'] = 'View order';

/* 添加/编辑活动页 */
$_LANG['goods_cat'] = 'Product category';
$_LANG['all_cat'] = 'All categories';
$_LANG['goods_brand'] = 'Product brand';
$_LANG['all_brand'] = 'All brands';

$_LANG['label_goods_name'] = 'Product distribution：';
$_LANG['notice_goods_name'] = 'Search for items first, and generate a list of options here...';
$_LANG['label_start_date'] = 'start time：';
$_LANG['label_end_date'] = 'End time：';
$_LANG['notice_datetime'] = '（Year, month, day－hour）';
$_LANG['label_deposit'] = 'Bond：';
$_LANG['label_restrict_amount'] = 'Restriction quantity：';
$_LANG['notice_restrict_amount']= 'Upon reaching this quantity, the distribution will automatically end. 0 means there is no quantitative limit.';
$_LANG['label_gift_integral'] = 'Gift points：';
$_LANG['label_price_ladder'] = 'Price ladder：';
$_LANG['notice_ladder_amount'] = 'Quantity reached';
$_LANG['notice_ladder_price'] = 'Enjoy the price';
$_LANG['label_desc'] = 'Activity description：';
$_LANG['label_status'] = 'Active Current Status：';
$_LANG['gbs'][GBS_PRE_START] = 'Not yet begun';
$_LANG['gbs'][GBS_UNDER_WAY] = 'Have in hand';
$_LANG['gbs'][GBS_FINISHED] = 'End of Unhandled';
$_LANG['gbs'][GBS_SUCCEED] = 'Successful conclusion';
$_LANG['gbs'][GBS_FAIL] = 'Failure ends';
$_LANG['label_order_qty'] = 'Number of orders/number of valid orders：';
$_LANG['label_goods_qty'] = 'Number of Goods/Number of Effective Goods：';
$_LANG['label_cur_price'] = 'Current price：';
$_LANG['label_end_price'] = 'Final price：';
$_LANG['label_handler'] = 'operation：';
$_LANG['error_group_buy'] = 'Distribution goods you want to operate do not exist';
$_LANG['error_status'] = 'The current state cannot perform this operation!';
$_LANG['button_finish'] = 'Closing activities';
$_LANG['notice_finish'] = '（Modify the end time of the activity to the current time）';
$_LANG['button_succeed'] = 'Successful activities';
$_LANG['notice_succeed'] = '（Update order price）';
$_LANG['button_fail'] = 'Activity failure';
$_LANG['notice_fail'] = '（Cancellation of orders, margin refund account balance, failure reasons can be written in the activity statement）';
$_LANG['cancel_order_reason'] = 'Group buying failure';
$_LANG['js_languages']['succeed_confirm'] = 'This operation is irreversible. Are you sure you want to set up the distribution product successfully?';
$_LANG['js_languages']['fail_confirm'] = 'This operation is irreversible. Are you sure you failed to set up the distribution product?';
$_LANG['button_mail'] = 'Send mail';
$_LANG['notice_mail'] = '（Notify the customer to pay the balance for delivery）';
$_LANG['mail_result'] = 'The distributor has a total of% s valid orders and successfully sent% s e-mail. %s valid orders and successfully sent %s e-mail.';
$_LANG['invalid_time'] = 'You entered an invalid group buying time.';

$_LANG['add_success'] = 'Successful addition of distributors.';
$_LANG['edit_success'] = 'Editors succeeded in distributing goods.';
$_LANG['back_list'] = 'Returns the distribution list.';
$_LANG['continue_add'] = 'Continue to add distribution goods.';

/* 添加/编辑活动提交 */
$_LANG['error_goods_null'] = 'You did not choose to distribute goods!';
$_LANG['error_goods_exist'] = 'The goods you choose are currently in the process of being distributed!';
$_LANG['error_price_ladder'] = 'You did not enter a valid price ladder!';
$_LANG['error_restrict_amount'] = 'Limited purchase quantity should not be less than the maximum quantity in the price ladder';

$_LANG['js_languages']['error_goods_null'] = 'You did not choose group-buying goods!';
$_LANG['js_languages']['error_deposit'] = 'The deposit you entered is not a number!';
$_LANG['js_languages']['error_restrict_amount'] = 'The limited purchase quantity you entered is not an integer!The limited purchase quantity you entered is not an integer!';
$_LANG['js_languages']['error_gift_integral'] = 'The free integral you entered is not an integer!';
$_LANG['js_languages']['search_is_null'] = 'No product was found. Please search again.';

/* 删除分销商品 */
$_LANG['js_languages']['batch_drop_confirm'] = 'Are you sure you want to delete the selected distribution?';
$_LANG['error_exist_order'] = 'The distribution goods have orders, can not be deleted!';
$_LANG['batch_drop_success'] = 'Successfully deleted the %s distribution record. (Distribution items that already have orders cannot be deleted.)';
$_LANG['no_select_group_buy'] = 'You have no record of distributing goods now!';

/* 操作日志 */
$_LANG['log_action']['group_buy'] = 'Group buying product';

?>