<?php
/**
 * 鸿宇多用户商城 商品类型管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: attribute.php 17217 2016-01-19 06:29:08Z derek $
*/

/* 列表 */
$_LANG['by_goods_type'] = 'Display by commodity type：';
$_LANG['all_goods_type'] = 'All commodity types';

$_LANG['attr_id'] = 'Number';
$_LANG['cat_id'] = 'Commodity type';
$_LANG['attr_name'] = 'Attribute name';
$_LANG['attr_input_type'] = 'How to input attribute values';
$_LANG['attr_values'] = 'Optional Value List';
$_LANG['attr_type'] = 'Whether you need to select the value of this attribute when purchasing goods';

$_LANG['value_attr_input_type'][ATTR_TEXT] = 'Manual entry';
$_LANG['value_attr_input_type'][ATTR_OPTIONAL] = 'Select from the list';
$_LANG['value_attr_input_type'][ATTR_TEXTAREA] = 'Multi-line text box';

$_LANG['drop_confirm'] = 'Are you sure you want to delete this property?';

/* 添加/编辑 */
$_LANG['label_attr_name'] = 'Attribute name：';
$_LANG['label_cat_id'] = 'Types of commodities to which they belong：';
$_LANG['label_attr_index'] = 'Can it be retrieved?：';
$_LANG['label_is_linked'] = 'Are goods of the same attribute value related?';
$_LANG['no_index'] = 'No search is required';
$_LANG['keywords_index'] = 'Keyword Retrieval';
$_LANG['range_index'] = 'Range search';
$_LANG['note_attr_index'] = 'If you do not need this attribute to be the condition of searching commodities, please choose the case that you do not need to search. When you need this attribute to search commodities with keywords, choose the keyword search. If you want to specify a certain range, choose the range search.';
$_LANG['label_attr_input_type'] = 'How to input the attribute value：';
$_LANG['text'] = 'Manual entry';
$_LANG['select'] = 'Select from the list below (one row represents an optional value)';
$_LANG['text_area'] = 'Multi-line text box';
$_LANG['label_attr_values'] = 'Optional Value List：';
$_LANG['label_attr_group'] = 'Attribute grouping：';
$_LANG['label_attr_type'] = 'Is property optional';
$_LANG['note_attr_type'] = 'When choosing the "Select/Check Attribute", we can set multiple values for the attribute of the commodity, and at the same time, we can assign different price increases for different attribute values. Users need to select specific attribute values when purchasing the commodity.When "Unique Attribute" is selected, only one value can be set for the attribute value of the commodity, and the user can only view the value.';
$_LANG['attr_type_values'][0] = 'Unique attribute';
$_LANG['attr_type_values'][1] = 'Single selection attribute';
$_LANG['attr_type_values'][2] = 'Check attributes';


$_LANG['add_next'] = 'Add the next attribute';
$_LANG['back_list'] = 'Returns a list of attributes';

$_LANG['add_ok'] = 'Attribute [%s] was added successfully.';
$_LANG['edit_ok'] = 'Edit attribute [%s] was added successfully.';

/* 提示信息 */
$_LANG['name_exist'] = 'The property name already exists. Please change it.';
$_LANG['drop_confirm'] = 'Are you sure you want to delete this property?';
$_LANG['notice_drop_confirm'] = 'There are already%sproducts using this property. Do you really want to delete this property?';
$_LANG['name_not_null'] = 'Property name cannot be empty.';

$_LANG['no_select_arrt'] = 'You did not select the attribute name to delete';
$_LANG['drop_ok'] = ' %d item attributes were successfully deleted';

$_LANG['js_languages']['name_not_null'] = 'Please enter the property name.';
$_LANG['js_languages']['values_not_null'] = 'Please enter an optional value for this property.';
$_LANG['js_languages']['cat_id_not_null'] = 'Please select the type of goods to which this property belongs.';

?>