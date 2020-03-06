<?php

/**
 * 鸿宇多用户商城
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 *
 * $Author: derek $
 * $Id: goods_export.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['user_guide'] =
        '<br/>Instructions：' .
        '<ol>' .
          '<li>Search conditions allow only 50 items to be searched at a time.</li>' .
          '<li>If the user needs to export all the goods under a certain category, after choosing the category in the condition, he does not need to click on the search, but directly chooses the data format and the code export.</li>' .
        '</ol>';
$_LANG['export_taobao'] = 'Export Taobao Assistant Support Data Format';
$_LANG['export_taobao_v43'] = 'Export Taobao Assistant V4.3 Support Data Format';
$_LANG['export_taobao_v46'] = 'Export Taobao Assistant V4.6 Support Data Format';
$_LANG['good_cat'] = 'Product category';
$_LANG['select_please'] = 'Select the category to export';
$_LANG['select_charset'] = 'Please select the encoding to export';

$_LANG['goods_class'] = 'Baby column ID';
$_LANG['tabobao_shipping'] = 'Taobao distribution';
$_LANG['post_express'] = 'Flat mail price';
$_LANG['express'] = 'Express price';
$_LANG['ems'] = 'EMS price';
$_LANG['notice_goods_class'] = 'Baby ID is the ID of Taobao Category. If you are not sure, please fill in 0.';

$_LANG['post_express_not_null'] = 'Postal price must be greater than 0';
$_LANG['express_not_null'] = 'Express Price Must Be Over 0';
$_LANG['ems_not_null'] = 'EMS price must be greater than 0';

/* 淘宝 */
$_LANG['taobao']['goods_name'] = 'Baby name';
$_LANG['taobao']['goods_class'] = '宝Baby category';
$_LANG['taobao']['shop_class'] = 'Store category';
$_LANG['taobao']['new_level'] = 'New and old degree';
$_LANG['taobao']['province'] = 'Province';
$_LANG['taobao']['city'] = 'city';
$_LANG['taobao']['sell_type'] = 'Mode of sale';
$_LANG['taobao']['shop_price'] = 'Baby price';
$_LANG['taobao']['add_price'] = 'Price increase range';
$_LANG['taobao']['goods_number'] = 'Baby quantity';
$_LANG['taobao']['die_day'] = 'Term of validity';
$_LANG['taobao']['load_type'] = 'Freight charges';
$_LANG['taobao']['post_express'] = 'Surface mail';
$_LANG['taobao']['ems'] = 'EMS';
$_LANG['taobao']['express'] = 'Express';
$_LANG['taobao']['pay_type'] = 'Payment method';
$_LANG['taobao']['allow_alipay'] = 'Alipay';
$_LANG['taobao']['invoice'] = 'Invoice';
$_LANG['taobao']['repair'] = 'Repair';
$_LANG['taobao']['resend'] = 'Auto resending';
$_LANG['taobao']['is_store'] = 'Put in warehouse';
$_LANG['taobao']['window'] = 'Gallery Featured';
$_LANG['taobao']['add_time'] = 'Release time';
$_LANG['taobao']['story'] = 'Mood story';
$_LANG['taobao']['goods_desc'] = 'Baby description';
$_LANG['taobao']['goods_img'] = 'Baby pictures';
$_LANG['taobao']['goods_attr'] = 'Baby attribute';
$_LANG['taobao']['group_buy'] = 'Group buying price';
$_LANG['taobao']['group_buy_num'] = 'Minimum number of group purchases';
$_LANG['taobao']['template'] = 'Postage template ID';
$_LANG['taobao']['discount'] = 'Membership discount';
$_LANG['taobao']['modify_time'] = 'Modification time';
$_LANG['taobao']['upload_status'] = 'Upload status';
$_LANG['taobao']['img_status'] = 'Picture status';

/*淘宝4.6*/
$_LANG['taobao46']['goods_name'] = 'Baby name';
$_LANG['taobao46']['goods_class'] = 'Baby category';
$_LANG['taobao46']['shop_class'] = 'Store category';
$_LANG['taobao46']['new_level'] = 'New and old degree';
$_LANG['taobao46']['province'] = 'province';
$_LANG['taobao46']['city'] = 'City';
$_LANG['taobao46']['sell_type'] = 'Mode of sale';
$_LANG['taobao46']['shop_price'] = 'Baby price';
$_LANG['taobao46']['add_price'] = 'Price increase range';
$_LANG['taobao46']['goods_number'] = 'Baby quantity';
$_LANG['taobao46']['die_day'] = 'Term of validity';
$_LANG['taobao46']['load_type'] = 'Freight charges';
$_LANG['taobao46']['post_express'] = 'Surface mail';
$_LANG['taobao46']['ems'] = 'EMS';
$_LANG['taobao46']['express'] = 'Express';
$_LANG['taobao46']['pay_type'] = 'Payment method';
$_LANG['taobao46']['allow_alipay'] = 'Alipay';
$_LANG['taobao46']['invoice'] = 'Invoice';
$_LANG['taobao46']['repair'] = 'Repair';
$_LANG['taobao46']['resend'] = 'Auto resending';
$_LANG['taobao46']['is_store'] = 'Put in warehouse';
$_LANG['taobao46']['window'] = 'Gallery Featured';
$_LANG['taobao46']['add_time'] = 'Release time';
$_LANG['taobao46']['story'] = 'Mood story';
$_LANG['taobao46']['goods_desc'] = 'Baby description';
$_LANG['taobao46']['goods_img'] = 'Baby pictures';
$_LANG['taobao46']['goods_attr'] = 'Baby attribute';
$_LANG['taobao46']['group_buy'] = 'Group buying price';
$_LANG['taobao46']['group_buy_num'] = 'Minimum number of group purchases';
$_LANG['taobao46']['template'] = 'Postage template ID';
$_LANG['taobao46']['discount'] = 'Membership discount';
$_LANG['taobao46']['modify_time'] = 'Modification time';
$_LANG['taobao46']['upload_status'] = 'Upload status';
$_LANG['taobao46']['img_status'] = 'Picture status';

$_LANG['taobao46']['rebate_proportion'] = 'Return point ratio';
$_LANG['taobao46']['new_picture'] = 'New picture';
$_LANG['taobao46']['video'] = 'Video';
$_LANG['taobao46']['marketing_property_mix'] = 'Combination of sales attributes';
$_LANG['taobao46']['user_input_ID_numbers'] = 'User input ID string';
$_LANG['taobao46']['input_user_name_value'] = 'User input name-value pairs';
$_LANG['taobao46']['sellers_code'] = 'Merchant code';
$_LANG['taobao46']['another_of_marketing_property'] = 'Sales Attribute Alias';
$_LANG['taobao46']['charge_type'] = 'Substitute filling type';
$_LANG['taobao46']['treasure_number'] = 'Baby number';
$_LANG['taobao46']['ID_number'] = 'Digital ID';


$_LANG['export_paipai'] = 'Export to Pat Assistant Support Data Format';
$_LANG['paipai']['id'] = 'id';
$_LANG['paipai']['tree_node_id'] = 'tree_node_id';
$_LANG['paipai']['old_tree_node_id'] = 'old_tree_node_id';
$_LANG['paipai']['title'] = 'title';
$_LANG['paipai']['id_in_web'] = 'id_in_web';
$_LANG['paipai']['auctionType'] = 'auctionType';
$_LANG['paipai']['category'] = 'category';
$_LANG['paipai']['shopCategoryId'] = 'shopCategoryId';
$_LANG['paipai']['pictURL'] = 'pictURL';
$_LANG['paipai']['quantity'] = 'quantity';
$_LANG['paipai']['duration'] = 'duration';
$_LANG['paipai']['startDate'] = 'startDate';
$_LANG['paipai']['stuffStatus'] = 'stuffStatus';
$_LANG['paipai']['price'] = 'price';
$_LANG['paipai']['increment'] = 'increment';
$_LANG['paipai']['prov'] = 'prov';
$_LANG['paipai']['city'] = 'city';
$_LANG['paipai']['shippingOption'] = 'shippingOption';
$_LANG['paipai']['ordinaryPostFee'] = 'ordinaryPostFee';
$_LANG['paipai']['fastPostFee'] = 'fastPostFee';
$_LANG['paipai']['paymentOption'] = 'paymentOption';
$_LANG['paipai']['haveInvoice'] = 'haveInvoice';
$_LANG['paipai']['haveGuarantee'] = 'haveGuarantee';
$_LANG['paipai']['secureTradeAgree'] = 'secureTradeAgree';
$_LANG['paipai']['autoRepost'] = 'autoRepost';
$_LANG['paipai']['shopWindow'] = 'shopWindow';
$_LANG['paipai']['failed_reason'] = 'failed_reason';
$_LANG['paipai']['pic_size'] = 'pic_size';
$_LANG['paipai']['pic_filename'] = 'pic_filename';
$_LANG['paipai']['pic'] = 'pic';
$_LANG['paipai']['description'] = 'description';
$_LANG['paipai']['story'] = 'story';
$_LANG['paipai']['putStore'] = 'putStore';
$_LANG['paipai']['pic_width'] = 'pic_width';
$_LANG['paipai']['pic_height'] = 'pic_height';
$_LANG['paipai']['skin'] = 'skin';
$_LANG['paipai']['prop'] = 'prop';

$_LANG['export_paipai4'] = 'Export to Photo Assistant 3.0 Support Data Format';
$_LANG['paipai4']['id'] = 'id';
$_LANG['paipai4']['goods_name'] = 'Product name';
$_LANG['paipai4']['auctionType'] = 'Mode of sale';
$_LANG['paipai4']['category'] = 'Product category';
$_LANG['paipai4']['shopCategoryId'] = 'Store category';
$_LANG['paipai4']['quantity'] = 'Quantity of products';
$_LANG['paipai4']['duration'] = 'Term of validity';
$_LANG['paipai4']['startDate'] = 'Regular shelves';
$_LANG['paipai4']['stuffStatus'] = 'New and old degree';
$_LANG['paipai4']['price'] = 'Price';
$_LANG['paipai4']['increment'] = 'Price increase range';
$_LANG['paipai4']['prov'] = 'Province';
$_LANG['paipai4']['city'] = 'City';
$_LANG['paipai4']['shippingOption'] = 'Freight charges';
$_LANG['paipai4']['ordinaryPostFee'] = 'Surface mail';
$_LANG['paipai4']['fastPostFee'] = 'Express';
$_LANG['paipai4']['buyLimit'] = 'Purchase restriction';
$_LANG['paipai4']['paymentOption'] = 'Payment method';
$_LANG['paipai4']['haveInvoice'] = 'Invoices';
$_LANG['paipai4']['haveGuarantee'] = 'With warranty';
$_LANG['paipai4']['secureTradeAgree'] = 'Supporting Finance Payment';
$_LANG['paipai4']['autoRepost'] = 'Auto resending';
$_LANG['paipai4']['failed_reason'] = 'Error reason';
$_LANG['paipai4']['pic_filename'] = 'Picture';
$_LANG['paipai4']['description'] = 'Product details';
$_LANG['paipai4']['shelfOption'] = 'Upload options';
$_LANG['paipai4']['skin'] = 'Skin style';
$_LANG['paipai4']['attr'] = 'Attribute';
$_LANG['paipai4']['chengBao'] = 'Cheng Bao';
$_LANG['paipai4']['shopWindow'] = 'Display window';

// 批量上传商品的字段
$_LANG['export_ecshop'] = 'Export to ECShop data format';
$_LANG['ecshop']['goods_name'] = 'Product name';
$_LANG['ecshop']['goods_sn'] = 'Product code';
$_LANG['ecshop']['brand_name'] = 'Product brand';   // 需要转换成brand_id
$_LANG['ecshop']['market_price'] = 'Market selling price';
$_LANG['ecshop']['shop_price'] = 'Market selling price';
$_LANG['ecshop']['integral'] = 'Integral Purchase Quota';
$_LANG['ecshop']['original_img'] = 'Primitive Product Map';
$_LANG['ecshop']['goods_img'] = 'Product pictures';
$_LANG['ecshop']['goods_thumb'] = 'Product thumbnails';
$_LANG['ecshop']['keywords'] = 'Key words of products';
$_LANG['ecshop']['goods_brief'] = 'Simple description';
$_LANG['ecshop']['goods_desc'] = 'Detailed description';
$_LANG['ecshop']['goods_weight'] = 'Product weight（kg）';
$_LANG['ecshop']['goods_number'] = 'Inventory quantity';
$_LANG['ecshop']['warn_number'] = 'Stock Warning Quantity';
$_LANG['ecshop']['is_best'] = 'Whether boutique';
$_LANG['ecshop']['is_new'] = 'Is it new?';
$_LANG['ecshop']['is_hot'] = 'Is it selling well?';
$_LANG['ecshop']['is_on_sale'] = 'Is it on the shelf?';
$_LANG['ecshop']['is_alone_sale'] = 'Can it be sold as an ordinary product?';
$_LANG['ecshop']['is_real'] = 'Is it a physical product?';

//自定义导出数据格式
$_LANG['export_custom'] = 'Export to custom data format';
$_LANG['custom']['goods_name'] = 'Product name';
$_LANG['custom']['goods_sn'] = 'Product code';
$_LANG['custom']['brand_name'] = 'Product brand';
$_LANG['custom']['market_price'] = 'Market selling price';
$_LANG['custom']['shop_price'] = 'Price of our shop';
$_LANG['custom']['integral'] = 'Integral Purchase Quota';
$_LANG['custom']['original_img'] = 'Primitive Product Map';
$_LANG['custom']['goods_img'] = 'Product pictures';
$_LANG['custom']['goods_thumb'] = 'Product thumbnails';
$_LANG['custom']['keywords'] = 'Key words of products';
$_LANG['custom']['goods_brief'] = 'Simple description';
$_LANG['custom']['goods_desc'] = 'Detailed description';
$_LANG['custom']['goods_weight'] = 'Product weight（kg）';
$_LANG['custom']['goods_number'] = 'Inventory quantity';
$_LANG['custom']['warn_number'] = 'Stock Warning Quantity';
$_LANG['custom']['is_best'] = 'Whether boutique';
$_LANG['custom']['is_new'] = 'Is it new?';
$_LANG['custom']['is_hot'] = 'Is it selling well?';
$_LANG['custom']['is_on_sale'] = 'Is it on the shelf?';
$_LANG['custom']['is_alone_sale'] = 'Can it be sold as an ordinary product?';
$_LANG['custom']['is_real'] = 'Is it a physical product?';

$_LANG['custom_keyword'] = 'Keyword';
$_LANG['custom_goods_cat'] = 'All categories';
$_LANG['custom_goods_brand'] = 'All brands';
$_LANG['custom_goods_list'] = 'Select product data columns';
$_LANG['custom_goods_type'] = 'All product types';
$_LANG['custom_export_list'] = 'Output product data column';
$_LANG['custom_up'] = 'up';
$_LANG['custom_down'] = 'down';
$_LANG['custom_goods_search'] = 'Derived condition';
$_LANG['custom_goods_field_not_null'] = 'Output product data column cannot be empty';

// 导出条件
$_LANG['export_condition'] = 'Batch export of product data';
$_LANG['export_condition_search'] = 'Search';
$_LANG['export_format'] = 'Data format';

?>
