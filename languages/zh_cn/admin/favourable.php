<?php

/**
 * 鸿宇多用户商城 管理中心优惠活动语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: favourable.php 17217 2016-01-19 06:29:08Z derek $
 */

/* menu */
$_LANG['favourable_list'] = 'List of Preferential Activities';
$_LANG['add_favourable'] = 'Adding Preferential Activities';
$_LANG['edit_favourable'] = 'Editorial Preferential Activities';
$_LANG['favourable_log'] = 'Bidding Records for Preferential Activities';
$_LANG['continue_add_favourable'] = 'Continue to add preferential activities';
$_LANG['back_favourable_list'] = 'Return to the list of preferential activities';
$_LANG['add_favourable_ok'] = 'Successful Addition of Preferential Activities';
$_LANG['edit_favourable_ok'] = 'Successful Editorial Preferences';

/* list */
$_LANG['act_is_going'] = 'Show only ongoing activities';
$_LANG['act_name'] = 'Name of Preferential Activities';
$_LANG['goods_name'] = 'Trade name';
$_LANG['start_time'] = 'start time';
$_LANG['end_time'] = 'End time';
$_LANG['min_amount'] = 'Lower limit of amount';
$_LANG['max_amount'] = 'Upper limit of amount';
$_LANG['favourable_not_exist'] = 'The preferential activities you want to operate do not exist.';
$_LANG['js_languages']['batch_drop_confirm'] = 'Are you sure you want to delete the selected promotional activities?';
$_LANG['batch_drop_ok'] = 'Successful batch deletion';
$_LANG['no_record_selected'] = 'No record selected';

/* info */
$_LANG['label_act_name'] = 'Name of Preferential Activities：';
$_LANG['label_start_time'] = 'Preferential start time：';
$_LANG['label_end_time'] = 'Discount End Time：';
$_LANG['label_user_rank'] = 'Membership Level Enjoying Preferential Benefits：';
$_LANG['not_user'] = 'Non member';
$_LANG['label_act_range'] = 'Preferential scope：';
$_LANG['far_all'] = 'All merchandise';
$_LANG['far_category'] = 'The following categories';
$_LANG['far_brand'] = 'The following brands';
$_LANG['far_goods'] = 'Following commodities';
$_LANG['label_search_and_add'] = 'Search and add preferences';
$_LANG['js_languages']['all_need_not_search'] = 'Preferential range is all goods, do not need this operation';
$_LANG['js_languages']['range_exists'] = 'This option already exists';
$_LANG['label_min_amount'] = 'Lower limit of amount：';
$_LANG['label_max_amount'] = 'Upper limit of amount：';
$_LANG['notice_max_amount'] = '0 means no upper limit';
$_LANG['label_act_type'] = 'Preferential way：';
$_LANG['notice_act_type'] = 'When the preferential mode is "Enjoy Gifts (Preferential Goods)", please enter the maximum number of gifts (Preferential Goods) allowed to be selected by the buyer. The number of gifts (Preferential Goods) is 0, which means unlimited quantity.；' .
        'When the preferential mode is "cash deduction", please enter the amount of cash deduction.；' .
        'When the preferential mode is "enjoy price discount", please enter a discount (1-99), such as: 9 discount, enter 90.';
$_LANG['fat_goods'] = 'Enjoy gifts (special offers)';
$_LANG['fat_price'] = 'Enjoy cash relief';
$_LANG['fat_discount'] = 'Enjoy price discount';
$_LANG['js_languages']['pls_search'] = 'Please search first.';
$_LANG['search_result_empty'] = 'No record was found. Please search again.';
$_LANG['label_search_and_add_gift'] = 'Search for and add gifts (special offers)';
$_LANG['js_languages']['price_need_not_search'] = 'The preferential way is to enjoy the price discount, which is not required.';
$_LANG['js_languages']['gift'] = 'Gifts (special offers)';
$_LANG['js_languages']['price'] = 'Price';

$_LANG['js_languages']['act_name_not_null'] = 'Please enter the name of the promotional event.';
$_LANG['js_languages']['min_amount_not_number'] = 'The format of the lower limit of the amount is incorrect (figures)';
$_LANG['js_languages']['max_amount_not_number'] = 'Incorrect amount cap format (figures)';
$_LANG['js_languages']['act_type_ext_not_number'] = 'Incorrect value after preferential scheme (number)';
$_LANG['js_languages']['amount_invalid'] = 'The upper limit is less than the lower limit.';
$_LANG['js_languages']['start_lt_end'] = 'Preferential start time should not exceed the end time';

/* post */
$_LANG['pls_set_user_rank'] = 'Please set preferential membership levels';
$_LANG['pls_set_act_range'] = 'Please set the preferential range.';
$_LANG['amount_error'] = 'The lower limit of the amount should not be greater than the upper limit of the amount.';
$_LANG['act_name_exists'] = 'The name of the event already exists. Please change it.';

$_LANG['nolimit'] = 'No restrictions';
?>