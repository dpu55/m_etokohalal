<?php

/**
 * 鸿宇多用户商城 管理中心拍卖活动语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: auction.php 17217 2016-01-19 06:29:08Z derek $
 */

/* menu */
$_LANG['auction_list'] = 'List of auction activities';
$_LANG['add_auction'] = 'Adding Auction Activities';
$_LANG['edit_auction'] = 'Editorial Auction';
$_LANG['auction_log'] = 'Auction Bidding Records';
$_LANG['continue_add_auction'] = 'Continue to add Auctions';
$_LANG['back_auction_list'] = 'Return to the list of auction activities';
$_LANG['add_auction_ok'] = 'Success in Adding Auctions';
$_LANG['edit_auction_ok'] = 'Editorial Auction Successful';
$_LANG['settle_deposit_ok'] = 'Successful handling of frozen margins';

/* list */
$_LANG['act_is_going'] = 'Show only ongoing activities';
$_LANG['act_name'] = 'Name of auction activity';
$_LANG['goods_name'] = 'Trade name';
$_LANG['start_time'] = 'Start time';
$_LANG['end_time'] = 'End time';
$_LANG['deposit'] = 'Bond';
$_LANG['start_price'] = 'Starting price';
$_LANG['end_price'] = 'Price';
$_LANG['amplitude'] = 'Price increase range';
$_LANG['auction_not_exist'] = 'The auction you want to operate does not exist.';
$_LANG['auction_cannot_remove'] = 'The auction has been offered and cannot be deleted.';
$_LANG['js_languages']['batch_drop_confirm'] = 'Are you sure you want to delete the selected auction?';
$_LANG['batch_drop_ok'] = 'The operation is completed (the auction activity that has been bid cannot be deleted)';
$_LANG['no_record_selected'] = 'No record selected';

/* info */
$_LANG['label_act_name'] = 'Name of auction activity：';
$_LANG['notice_act_name'] = 'If left blank, take the name of the auction commodity (the name is only used in the background, the front desk will not show)';
$_LANG['label_act_desc'] = 'Description of auction activities：';
$_LANG['label_search_goods'] = 'Search for goods based on their number, name, or number';
$_LANG['label_goods_name'] = 'Name of Auction Goods：';
$_LANG['label_start_time'] = 'Auction start time：';
$_LANG['label_end_time'] = 'The closing time of the auction：';
$_LANG['label_status'] = 'Current state：';
$_LANG['label_start_price'] = 'Starting price：';
$_LANG['label_end_price'] = 'Price：';
$_LANG['label_no_top'] = 'No capping';
$_LANG['label_amplitude'] = 'Price increase range：';
$_LANG['label_deposit'] = 'Bond：';
$_LANG['bid_user_count'] = 'There are already %s bids from buyers.';
$_LANG['settle_frozen_money'] = 'How to deal with the buyer\'s frozen funds?';
$_LANG['unfreeze'] = 'Thaw deposit';
$_LANG['deduct'] = 'Deduction of margin';
$_LANG['invalid_status'] = 'The current status is incorrect';
$_LANG['no_deposit'] = 'No margin to be processed';
$_LANG['unfreeze_auction_deposit'] = 'Margin for unfreezing Auctions：%s';
$_LANG['deduct_auction_deposit'] = 'Deduction of margin for auction activities：%s';

$_LANG['auction_status'][PRE_START] = 'Not yet begun';
$_LANG['auction_status'][UNDER_WAY] = 'Have in hand';
$_LANG['auction_status'][FINISHED] = 'Has ended';
$_LANG['auction_status'][SETTLED] = 'Has ended';

$_LANG['pls_search_goods'] = 'Please search for goods first';
$_LANG['search_result_empty'] = 'No merchandise found, please search again';

$_LANG['pls_select_goods'] = 'Please choose the goods for auction.';
$_LANG['goods_not_exist'] = 'The goods you want to auction do not exist.';

$_LANG['js_languages']['start_price_not_number'] = 'Incorrect starting price (Number)';
$_LANG['js_languages']['end_price_not_number'] = 'Incorrect Price Form at One Mouth (Number)';
$_LANG['js_languages']['end_gt_start'] = 'One price should be greater than the initial bid price.';
$_LANG['js_languages']['amplitude_not_number'] = 'Incorrect margin format (figures)';
$_LANG['js_languages']['deposit_not_number'] = 'Incorrect margin format (number)';
$_LANG['js_languages']['start_lt_end'] = 'Auction start time should not be greater than the end time';
$_LANG['js_languages']['search_is_null'] = 'No merchandise was found. Please search again.';

/* log */
$_LANG['bid_user'] = 'Buyer';
$_LANG['bid_price'] = 'Offer';
$_LANG['bid_time'] = 'Time';
$_LANG['status'] = 'State';

?>