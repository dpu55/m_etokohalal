<?php

/**
 * 鸿宇多用户商城 管理中心起始页语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: sxc_shop $
 * $Id: goods.php 16154 2009-06-03 06:29:03Z sxc_shop $
*/

$_LANG['edit_goods'] = 'Editing Commodity Information';
$_LANG['copy_goods'] = 'Reproduction of commodity information';
$_LANG['continue_add_goods'] = 'Continue to add new products';
$_LANG['back_goods_list'] = 'Returns the list of items';
$_LANG['add_goods_ok'] = 'Successful addition of goods.';
$_LANG['edit_goods_ok'] = 'Editorial merchandise is successful.';
$_LANG['trash_goods_ok'] = 'Put the goods in the recycling bin successfully.';
$_LANG['restore_goods_ok'] = 'Success in restoring commodities.';
$_LANG['drop_goods_ok'] = 'Delete the product successfully.';
$_LANG['batch_handle_ok'] = 'The batch operation was successful.';
$_LANG['drop_goods_confirm'] = 'Are you sure you want to delete this item?';
$_LANG['batch_drop_confirm'] = 'Removing the product completely will delete all information related to the product.\nRemoving the product completely will delete all information related to the product.';
$_LANG['trash_goods_confirm'] = 'Are you sure you want to put the product in the recycling bin?';
$_LANG['batch_trash_confirm'] = 'Are you sure you want to put the selected items in the recycling bin?';
$_LANG['restore_goods_confirm'] = 'Are you sure you want to restore the product?';
$_LANG['batch_restore_confirm'] = 'Are you sure you want to restore the selected product?';
$_LANG['batch_on_sale_confirm'] = 'Are you sure you want to put the selected items on the shelf?';
$_LANG['batch_not_on_sale_confirm'] = 'Are you sure you want to take the selected item off the shelf?';
$_LANG['batch_best_confirm'] = 'Are you sure you want to make the selected product a top-quality product?';
$_LANG['batch_not_best_confirm'] = 'Are you sure you want to cancel the selection?';
$_LANG['batch_new_confirm'] = 'Are you sure you want to make the selected product a new product?';
$_LANG['batch_not_new_confirm'] = 'Are you sure you want to cancel the new product?';
$_LANG['batch_hot_confirm'] = 'Are you sure you want to make the selected item a hot seller?';
$_LANG['batch_not_hot_confirm'] = 'Are you sure you want to cancel the hot sale of the selected goods?';
$_LANG['cannot_found_goods'] = 'The specified commodity could not be found.';
$_LANG['sel_goods_type'] = 'Please choose the type of goods.';

/*------------------------------------------------------ */
//-- 图片处理相关提示信息
/*------------------------------------------------------ */
$_LANG['no_gd'] = 'Your server does not support GD or does not have an extension library that handles this image type installed.';
$_LANG['img_not_exists'] = 'The original image was not found and the thumbnail creation failed.';
$_LANG['img_invalid'] = 'Creating thumbnails failed because you uploaded an invalid image file.';
$_LANG['create_dir_failed'] = 'images The folder is not writable. Creating thumbnails failed.';
$_LANG['safe_mode_warning'] = 'Your server runs in secure mode and the %s directory does not exist. You may need to create the directory first to upload pictures.';
$_LANG['not_writable_warning'] = 'The directory %s is not writable. You need to make the directory writable to upload pictures.';

/*------------------------------------------------------ */
//-- 商品列表
/*------------------------------------------------------ */
$_LANG['goods_cat'] = 'All categories';
$_LANG['goods_brand'] = 'All brands';
$_LANG['intro_type'] = 'whole';
$_LANG['keyword'] = 'Keyword';
$_LANG['is_best'] = 'Boutique';
$_LANG['is_new'] = 'New products';
$_LANG['is_hot'] = 'Sell well';
$_LANG['is_promote'] = 'Special Offer';
$_LANG['all_type'] = 'All recommended';
$_LANG['sort_order'] = 'Recommended sorting';

$_LANG['goods_name'] = 'Trade name';
$_LANG['goods_sn'] = 'Item number';
$_LANG['shop_price'] = 'Price';
$_LANG['is_on_sale'] = 'Upper shelf';
$_LANG['goods_number'] = 'Stock';

$_LANG['copy'] = 'Copy';

$_LANG['integral'] = 'Integral limit';
$_LANG['on_sale'] = 'Upper shelf';
$_LANG['not_on_sale'] = 'Under shelf';
$_LANG['best'] = 'Boutique';
$_LANG['not_best'] = 'Cancel the boutique';
$_LANG['new'] = 'New products';
$_LANG['not_new'] = 'Cancel new products';
$_LANG['hot'] = 'Sell well';
$_LANG['not_hot'] = 'Cancel hot sale';
$_LANG['move_to'] = 'Transfer to classification';

// ajax
$_LANG['goods_name_null'] = 'Please enter the name of the product.';
$_LANG['goods_sn_null'] = 'Please enter the goods number.';
$_LANG['shop_price_not_number'] = 'Price is not a number';
$_LANG['shop_price_invalid'] = 'You entered an illegal market price.';
$_LANG['goods_sn_exists'] = 'The number you entered already exists. Please change it.';

/*------------------------------------------------------ */
//-- 添加/编辑商品信息
/*------------------------------------------------------ */
$_LANG['tab_general'] = 'General information';
$_LANG['tab_detail'] = 'Detailed description';
$_LANG['tab_mix'] = 'Other information';
$_LANG['tab_properties'] = 'Commodity attribute';
$_LANG['tab_gallery'] = 'Merchandise album';
$_LANG['tab_linkgoods'] = 'Related commodities';
$_LANG['tab_groupgoods'] = 'parts';
$_LANG['tab_article'] = 'Related articles';

$_LANG['lab_goods_name'] = 'Trade name：';
$_LANG['lab_goods_sn'] = 'product code：';
$_LANG['lab_goods_cat'] = 'Commodity classification：';
$_LANG['lab_other_cat'] = 'Extended classification：';
$_LANG['lab_goods_brand'] = 'Commodity brand：';
$_LANG['lab_shop_price'] = 'Price of our shop：';
$_LANG['lab_market_price'] = 'Market selling price：';
$_LANG['lab_user_price'] = 'Membership price：';
$_LANG['lab_promote_price'] = 'Promotional price：';
$_LANG['lab_promote_date'] = 'Promotion date：';
$_LANG['lab_picture'] = 'Upload merchandise pictures：';
$_LANG['lab_thumb'] = 'Upload product thumbnails：';
$_LANG['auto_thumb'] = 'Automatically generate product thumbnails';
$_LANG['lab_keywords'] = 'Key words of commodities：';
$_LANG['lab_goods_brief'] = 'A Brief Description of Commodities：';
$_LANG['lab_seller_note'] = 'Merchant remarks：';
$_LANG['lab_goods_type'] = 'Commodity type：';
$_LANG['lab_picture_url'] = 'Commodity picture exteriorURL';
$_LANG['lab_thumb_url'] = 'Outside of commodity thumbnailURL';

$_LANG['lab_goods_weight'] = 'Commodity weight：';
$_LANG['unit_g'] = 'g';
$_LANG['unit_kg'] = 'kg';
$_LANG['lab_goods_number'] = 'Inventory Quantity of Goods：';
$_LANG['lab_warn_number'] = 'Stock Warning Quantity：';
$_LANG['lab_integral'] = 'Integral Purchase Quota：';
$_LANG['lab_give_integral'] = 'Gift Consumption Points：';
$_LANG['lab_rank_integral'] = 'Gift grade score：';
$_LANG['lab_intro'] = 'Join recommendation：';
$_LANG['lab_is_on_sale'] = 'Upper shelf：';
$_LANG['lab_is_alone_sale'] = 'Can be sold as an ordinary commodity：';

$_LANG['compute_by_mp'] = 'Calculated at market price';

$_LANG['notice_goods_sn'] = 'If you do not enter the commodity number, the system will automatically generate a unique number.';
$_LANG['notice_integral'] = 'What is the maximum amount of points you can use to buy this product?';
$_LANG['notice_give_integral'] = 'When purchasing the product, give away the consumption integral, -1 means give away according to the price of the product.';
$_LANG['notice_rank_integral'] = 'When purchasing this commodity, the grade integral is given, -1 is given at the price of the commodity.';
$_LANG['notice_seller_note'] = 'Information for merchants only';
$_LANG['notice_keywords'] = 'Separate by spaces';
$_LANG['notice_user_price'] = 'When the membership price is - 1, it means that the membership price is calculated according to the discount rate of membership grade. You can also specify a fixed price for each level.';
$_LANG['notice_goods_type'] = 'Please choose the type of commodity to belong to, and then improve the attributes of this commodity.';

$_LANG['on_sale_desc'] = 'Checking means that sales are allowed, otherwise sales are not allowed.';
$_LANG['alone_sale'] = 'A tick indicates that it can be sold as an ordinary commodity, otherwise it can only be sold as accessories or gifts.';

$_LANG['invalid_goods_img'] = 'The format of the merchandise pictures is incorrect!';
$_LANG['invalid_goods_thumb'] = 'The product thumbnail format is incorrect!';
$_LANG['invalid_img_url'] = 'The format of the%spicture in the merchandise album is incorrect!';

$_LANG['goods_img_too_big'] = 'The merchandise picture file is too big（Maximum value：%s），Unable to upload.';
$_LANG['goods_thumb_too_big'] = 'The product thumbnail file is too big（Maximum value：%s），Unable to upload.';
$_LANG['img_url_too_big'] = 'The%simage file in the merchandise album is too big（Maximum value：%s），Unable to upload.';

$_LANG['integral_market_price'] = 'Integer';
$_LANG['upload_images'] = 'Upload pictures';
$_LANG['spec_price'] = 'Attribute price';
$_LANG['drop_img_confirm'] = 'Are you sure you want to delete the picture?';

$_LANG['select_font'] = 'Font style';
$_LANG['font_styles'] = array('strong' => 'Thickening', 'em' => 'Italics', 'u' => 'Underline', 'strike' => 'Delete line');

$_LANG['rapid_add_cat'] = 'Add classification';
$_LANG['rapid_add_brand'] = 'Add brand';
$_LANG['category_manage'] = 'Classified management';
$_LANG['brand_manage'] = 'Brand management';
$_LANG['hide'] = 'Hide';

$_LANG['lab_volume_price']         = 'Preferential Prices of Commodities：';
$_LANG['volume_number']            = 'Preferential quantity';
$_LANG['volume_price']             = 'Favorable Price';
$_LANG['notice_volume_price']      = 'Preferential Price Enjoyed when Buying Quantity Achieves Preferential Quantity';
$_LANG['volume_number_continuous'] = 'The number of concessions is repeated!';

/*------------------------------------------------------ */
//-- 关联商品
/*------------------------------------------------------ */

$_LANG['all_goods'] = 'Optional commodity';
$_LANG['link_goods'] = 'Goods associated with the commodity';
$_LANG['single'] = 'Unidirectional Association';
$_LANG['double'] = 'Bidirectional correlation';
$_LANG['all_article'] = 'Optional articles';
$_LANG['goods_article'] = 'Articles related to the commodity';
$_LANG['top_cat'] = 'Top level classification';

/*------------------------------------------------------ */
//-- 组合商品
/*------------------------------------------------------ */

$_LANG['group_goods'] = 'Parts for this commodity';
$_LANG['price'] = 'Price';

/*------------------------------------------------------ */
//-- 商品相册
/*------------------------------------------------------ */

$_LANG['img_desc'] = 'Picture description';
$_LANG['img_url'] = 'Upload files';

/*------------------------------------------------------ */
//-- 关联文章
/*------------------------------------------------------ */
$_LANG['article_title'] = 'Article title';

$_LANG['goods_not_exist'] = 'This commodity does not exist';
$_LANG['goods_not_in_recycle_bin'] = 'The product has not been put into the recycling bin and cannot be deleted.';

$_LANG['js_languages']['goods_name_not_null'] = 'The name of the commodity cannot be empty.';
$_LANG['js_languages']['goods_cat_not_null'] = 'Commodity classification must be selected.';
$_LANG['js_languages']['category_cat_not_null'] = 'Classification name cannot be empty';
$_LANG['js_languages']['brand_cat_not_null'] = 'Brand name cannot be empty';
$_LANG['js_languages']['goods_cat_not_leaf'] = 'The commodity category you choose is not the bottom one. Please choose the bottom one.';
$_LANG['js_languages']['shop_price_not_null'] = 'We can\'t sell for nothing.';
$_LANG['js_languages']['shop_price_not_number'] = 'Our price is not a numerical value.';

$_LANG['js_languages']['select_please'] = 'Please choose...';
$_LANG['js_languages']['button_add'] = 'Add';
$_LANG['js_languages']['button_del'] = 'Delete';
$_LANG['js_languages']['spec_value_not_null'] = 'Specifications cannot be empty';
$_LANG['js_languages']['spec_price_not_number'] = 'Price increases are not numbers';
$_LANG['js_languages']['market_price_not_number'] = 'Market price is not a number';
$_LANG['js_languages']['goods_number_not_int'] = 'Inventory of goods is not an integer';
$_LANG['js_languages']['warn_number_not_int'] = 'Inventory Warning is not an integer';
$_LANG['js_languages']['promote_not_lt'] = 'Promotion start date should not be greater than the end date';
$_LANG['js_languages']['promote_start_not_null'] = 'Promotion start time should not be empty';
$_LANG['js_languages']['promote_end_not_null'] = 'Promotion end time should not be empty';

$_LANG['js_languages']['drop_img_confirm'] = 'Are you sure you want to delete the picture?';
$_LANG['js_languages']['batch_no_on_sale'] = 'Are you sure you want to take the selected item off the shelf?';
$_LANG['js_languages']['batch_trash_confirm'] = 'Are you sure you want to put the selected items in the recycling bin?';
$_LANG['js_languages']['go_category_page'] = 'The data on this page will be lost. Are you sure you want to add classification to the commodity classification page?';
$_LANG['js_languages']['go_brand_page'] = 'The data on this page will be lost. Are you sure you want to add a brand to the brand page?';

$_LANG['js_languages']['volume_num_not_null'] = 'Please enter the quantity of the discount.';
$_LANG['js_languages']['volume_num_not_number'] = 'Preferential quantities are not numbers';
$_LANG['js_languages']['volume_price_not_null'] = 'Please enter preferential price';
$_LANG['js_languages']['volume_price_not_number'] = 'Preferential prices are not numbers';

/* 虚拟卡 */
$_LANG['card'] = 'View Virtual Card Information';
$_LANG['replenish'] = 'replenishment';
$_LANG['batch_card_add'] = 'Bulk replenishment';
$_LANG['add_replenish'] = 'Add virtual cards';

$_LANG['goods_number_error'] = 'Commodity Inventory Error';

?>
