<?php

/**
 * 鸿宇多用户商城 商品分类管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: category.php 17217 2016-01-19 06:29:08Z derek $
*/

/* 商品分类字段信息 */
$_LANG['cat_id'] = 'Number';
$_LANG['cat_name'] = 'Category name';
$_LANG['isleaf'] = 'Not allow';
$_LANG['noleaf'] = 'Allow';
$_LANG['keywords'] = 'Keyword';
$_LANG['cat_desc'] = 'Category description';
$_LANG['parent_id'] = 'Category parent';
$_LANG['sort_order'] = 'Sort';
$_LANG['measure_unit'] = 'Quantity unit';
$_LANG['delete_info'] = 'Delete select';
$_LANG['category_edit'] = 'Editing product category';
$_LANG['move_goods'] = 'Transfer products';
$_LANG['cat_top'] = 'Top level category';
$_LANG['show_in_nav'] = 'Is it displayed in the navigation bar';
$_LANG['cat_style'] = 'Categorized style sheet files';
$_LANG['is_show'] = 'Whether to display';
$_LANG['show_in_index'] = 'Setting Recommendation for Home Page';
$_LANG['notice_show_in_index'] = 'This setting can display the recommended items in the latest, popular and recommendation section of the homepage.';
$_LANG['goods_number'] = 'Quantity of products';
$_LANG['grade'] = 'Number of price intervals';
$_LANG['notice_grade'] = 'This option denotes the number of categories between the lowest price and the highest price of the product under the category, and filling in 0 denotes not grading, not exceeding 10 at most.';
$_LANG['short_grade'] = 'Price grading';

$_LANG['nav'] = 'Navigation bar';
$_LANG['index_new'] = 'Newest';
$_LANG['index_best'] = 'Boutique';
$_LANG['index_hot'] = 'Popular';

$_LANG['back_list'] = 'Returns the categorization list';
$_LANG['continue_add'] = 'Continue adding categories';

$_LANG['notice_style'] = 'You can specify a style sheet file for each product category. For example, if a file is stored in the themes directory, enter it：themesmobile/style.css';

/* 操作提示信息 */
$_LANG['catname_empty'] = 'Category name cannot be empty!';
$_LANG['catname_exist'] = 'The same taxonomic name already exists!';
$_LANG["parent_isleaf"] = 'The selected category cannot be final!';
$_LANG["cat_isleaf"] = 'You cannot delete items that are not final or exist under this category!';
$_LANG["cat_noleaf"] = 'There are other sub-categories below, which cannot be modified to last-level categories!';
$_LANG["is_leaf_error"] = 'The selected upper category cannot be the current category or the lower category of the current category.!';
$_LANG['grade_error'] = 'Price category quantity can only be an integer within 0-10';

$_LANG['catadd_succed'] = 'Successful addition of new product category!';
$_LANG['catedit_succed'] = 'Successful Category Editor of Products!';
$_LANG['catdrop_succed'] = 'Successful deletion of product category!';
$_LANG['catremove_succed'] = 'Successful Category Transfer of Products!';
$_LANG['move_cat_success'] = 'Category of Transferred Products has been successfully completed!';

$_LANG['cat_move_desc'] = 'What is the category of transferred goods?';
$_LANG['select_source_cat'] = 'Choose the categories to be transferred';
$_LANG['select_target_cat'] = 'Selection of target category';
$_LANG['source_cat'] = 'From this category';
$_LANG['target_cat'] = 'Transfer to';
$_LANG['start_move_cat'] = 'Begin to transfer';
$_LANG['cat_move_notic'] = 'In addition to goods or in product management, if you need to change the category of goods, then you can manage your product category correctly through this function.';

$_LANG['cat_move_empty'] = 'You did not choose the right category.!';

$_LANG['sel_goods_type'] = 'Please choose the type of goods.';
$_LANG['sel_filter_attr'] = 'Select Filter Properties';
$_LANG['filter_attr'] = 'Filter attributes';
$_LANG['filter_attr_notic'] = 'Screening attributes can be used to screen items on the pre-categorization page';
$_LANG['filter_attr_not_repeated'] = 'Screening attributes are not repeatable';

/*JS 语言项*/
$_LANG['js_languages']['catname_empty'] = 'Category name cannot be empty!';
$_LANG['js_languages']['unit_empyt'] = 'Quantitative units cannot be empty!';
$_LANG['js_languages']['is_leafcat'] = 'The category you selected is a final one.\r\nThe superior category of the new category cannot be a final category.';
$_LANG['js_languages']['not_leafcat'] = 'The category you selected is not a final category.\r\nClassification transfer of products can only be operated between the last categories.';
$_LANG['js_languages']['filter_attr_not_repeated'] = 'Screening attributes are not repeatable';
$_LANG['js_languages']['filter_attr_not_selected'] = 'Select Filter Properties';

?>