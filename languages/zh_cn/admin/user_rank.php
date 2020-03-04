<?php

/**
 * 鸿宇多用户商城 管理中心共用语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: user_rank.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['rank_name'] = 'Member level name';
$_LANG['integral_min'] = 'Lower limit of integration';
$_LANG['integral_max'] = 'Upper limit of points';
$_LANG['discount'] = 'Initial discount rate';
$_LANG['add_user_rank'] = 'Add membership level';
$_LANG['special_rank'] = 'Special member group';
$_LANG['show_price'] = 'Display the product price of this membership level on the product details page';
$_LANG['notice_special'] = 'Members of the special membership group will not change as the points change.';
$_LANG['add_continue'] = 'Continue to add membership level';
$_LANG['back_list'] = 'Return to membership level list';
$_LANG['show_price_short'] = 'Show price';
$_LANG['notice_discount'] = 'Please fill in an integer from 0-100. If you fill in 80, the initial discount rate is 20% off.';

$_LANG['rank_name_exists'] = 'Member level name %s already exists.';
$_LANG['add_rank_success'] = 'The membership level has been added successfully.';
$_LANG['integral_min_exists'] = 'There is already a membership level with a lower level limit of %d';
$_LANG['integral_max_exists'] = 'There is already a membership level with a level limit of %d';

/* JS 语言 */
$_LANG['js_languages']['remove_confirm'] = 'Are you sure you want to delete the selected membership level?';
$_LANG['js_languages']['rank_name_empty'] = 'You did not enter a membership level name.';
$_LANG['js_languages']['integral_min_invalid'] = 'You have not entered the lower limit of the integration or the lower limit of the integration is not an integer.';
$_LANG['js_languages']['integral_max_invalid'] = 'You did not enter an upper limit or the upper limit is not an integer.';
$_LANG['js_languages']['discount_invalid'] = 'You have not entered a discount rate or the discount rate is invalid.';
$_LANG['js_languages']['integral_max_small'] = 'The upper limit of the integration must be greater than the lower limit of the integration';
$_LANG['js_languages']['lang_remove'] = 'Remove';
?>