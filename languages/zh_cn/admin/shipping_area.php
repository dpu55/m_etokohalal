<?php

/**
 * 鸿宇多用户商城 管理中心配送方式管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: shipping_area.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['shipping_area_name'] = 'Delivery area name';
$_LANG['shipping_area_districts'] = 'Area list';
$_LANG['shipping_area_regions'] = 'Area under its jurisdiction';
$_LANG['shipping_area_assign'] = 'Delivery Method';
$_LANG['area_region'] = 'area';
$_LANG['area_shipping'] = 'Delivery Method';
$_LANG['fee_compute_mode'] = 'Cost calculation method';
$_LANG['fee_by_weight'] = 'By weight';
$_LANG['fee_by_number'] = 'Calculated by number of items';
$_LANG['new_area'] = 'New delivery area';
$_LANG['label_country'] = 'country：';
$_LANG['label_province'] = 'province：';
$_LANG['label_city'] = 'city：';
$_LANG['label_district'] = 'District/county：';

$_LANG['delete_selected'] = 'Remove selected shipping area';
$_LANG['btn_add_region'] = 'Add selected area';
$_LANG['free_money'] = 'Free quota:';
$_LANG['pay_fee'] = 'Cash on delivery payment：';
$_LANG['edit_area'] = 'Edit delivery area';

$_LANG['add_continue'] = 'Continue to add shipping areas';
$_LANG['back_list'] = 'Return to list page';
$_LANG['empty_regions'] = 'There are no associated regions under the current region.';

/* 提示信息 */
$_LANG['repeat_area_name'] = 'There is already a delivery area with the same name.';
$_LANG['not_find_plugin'] = 'The plugin for the specified shipping method was not found.';
$_LANG['remove_confirm'] = 'Are you sure you want to delete the selected shipping area?';
$_LANG['remove_success'] = 'The specified delivery area has been deleted successfully!';
$_LANG['no_shippings'] = 'No available shipping methods were found.';
$_LANG['add_area_success'] = 'Adding a shipping area was successful.';
$_LANG['edit_area_success'] = 'Edit the delivery area successfully.';
$_LANG['disable_shipping_success'] = 'The specified shipping method has been removed from the shipping area.';

/* 需要用到的JS语言项 */
$_LANG['js_languages']['no_area_name'] = 'The shipping area name cannot be empty.';
$_LANG['js_languages']['del_shipping_area'] = 'Please delete the shipping area first and then add it again.';
$_LANG['js_languages']['invalid_free_mondy'] = 'The free credit cannot be empty and must be an integer.';
$_LANG['js_languages']['blank_shipping_area'] = 'The area under the jurisdiction of the distribution area cannot be empty.';
$_LANG['js_languages']['lang_remove'] = 'Remove';
$_LANG['js_languages']['lang_remove_confirm'] = 'Are you sure you want to remove the area?';
$_LANG['js_languages']['lang_disabled'] = 'Disable';
$_LANG['js_languages']['lang_enabled'] = 'Enable';
$_LANG['js_languages']['lang_setup'] = 'Setting';
$_LANG['js_languages']['lang_region'] = 'area';
$_LANG['js_languages']['lang_shipping'] = 'Delivery Method';
$_LANG['js_languages']['region_exists'] = 'The selected area already exists.';
?>