<?php
/* 列表 */
$_LANG['by_goods_type'] = 'According to the type of product:';
$_LANG['all_goods_type'] = 'Semua Tipe Produk';

$_LANG['attr_id'] = 'ID';
$_LANG['cat_id'] = 'Product type';
$_LANG['attr_name'] = 'Attribute name';
$_LANG['attr_input_type'] = 'How to input attribute values';
$_LANG['attr_values'] = 'Optional Value List';
$_LANG['attr_type'] = 'Whether you need to select the value of this attribute when purchasing goods';

$_LANG['value_attr_input_type'][ATTR_TEXT] = 'Manual entry';
$_LANG['value_attr_input_type'][ATTR_OPTIONAL] = 'Select from the list';
$_LANG['value_attr_input_type'][ATTR_TEXTAREA] = 'Multi-line text box';

$_LANG['drop_confirm'] = 'Are you sure you want to delete this property?';

/* 添加/编辑 */
$_LANG['label_attr_name'] = 'Attribute name:';
$_LANG['label_cat_id'] = 'Types of product:';
$_LANG['label_attr_index'] = 'Can it be retrieved?';
$_LANG['label_is_linked'] = 'Are goods of the same attribute value related?';
$_LANG['no_index'] = 'No search is required';
$_LANG['keywords_index'] = 'Keyword Retrieval';
$_LANG['range_index'] = 'Range search';
    $_LANG['note_attr_index'] = 'If you do not need this attribute to be the condition of searching commodities, please choose the case that you do not need to search. When you need this attribute to search commodities with keywords, choose the keyword search. If you want to specify a certain range, choose the range search.';
$_LANG['label_attr_input_type'] = 'The input mode of the attribute value is as follows:';
$_LANG['text'] = 'Manual entry';
$_LANG['select'] = 'Select from the list below (one row represents an optional value)';
$_LANG['text_area'] = 'Multi-line text box';
$_LANG['label_attr_values'] = 'Optional Value List:';
$_LANG['label_attr_group'] = 'Attribute grouping:';
$_LANG['label_attr_type'] = 'Is property optional';
$_LANG['note_attr_type'] = 'When choosing the "Select/Check Attribute", we can set multiple values for the attribute of the commodity, and at the same time, we can assign different price increases for different attribute values. Users need to select specific attribute values when purchasing the commodity. When "Unique Attribute" is selected, only one value can be set for the attribute value of the commodity, and the user can only view the value.';
$_LANG['attr_type_values'][0] = 'Unique attribute';
$_LANG['attr_type_values'][1] = 'Radio attribute';
$_LANG['attr_type_values'][2] = 'Check attributes';
/* 添加条形码*/
$_LANG['label_txm_type'] ='Whether Barcode is Enabled or Not';


$_LANG['add_next'] = 'Add the next attribute';
$_LANG['back_list'] ='Back';

$_LANG['add_ok'] = 'Add attribute [%s] successfully';
$_LANG['edit_ok'] = 'Edit attribute [%s] successfully';

/* 提示信息 */
$_LANG['name_exist'] = 'The property name already exists. Please change it.';
$_LANG['drop_confirm'] = 'Are you sure you want to delete this property?';
$_LANG['notice_drop_confirm'] = 'Already exist %s , do you really want to delete this property when the product uses it?';
$_LANG['name_not_null'] = 'Property name cannot be empty.';

$_LANG['no_select_arrt'] = 'You did not select the attribute name to delete';
$_LANG['drop_ok'] = 'Successfully deleted %d srticle Commodity Attribute';

$_LANG['js_languages']['name_not_null'] = 'Please enter the property name.';
$_LANG['js_languages']['values_not_null'] = 'Please enter an optional value for this property.';
$_LANG['js_languages']['cat_id_not_null'] = 'Please select the type of goods to which this property belongs.';

?>