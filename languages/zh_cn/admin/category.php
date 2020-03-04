<?php
/* 商品分类字段信息 */
$_LANG['cat_id'] = 'Category ID';
$_LANG['cat_name'] = 'Category name';
$_LANG['isleaf'] = 'Not allow';
$_LANG['noleaf'] = 'Allow';
$_LANG['keywords'] = 'Keyword';
$_LANG['cat_desc'] = 'Category description';
$_LANG['parent_id'] = 'Category parent';
$_LANG['sort_order'] = 'Sort';
$_LANG['measure_unit'] = 'Quantity unit';
$_LANG['delete_info'] = 'Delete select';
$_LANG['category_edit'] = 'Edit category';
$_LANG['move_goods'] = 'Move Product';
$_LANG['cat_top'] = 'Top category';
$_LANG['show_in_nav'] = 'Show in navigation bar?';
$_LANG['cat_style'] = 'Category style';
$_LANG['is_show'] = 'Show';
$_LANG['show_in_index'] = 'Show in index';
$_LANG['is_show_cat_pic'] = 'Whether to Set Recommendation for Home Page';
$_LANG['cat_pic'] = 'Upload image';
$_LANG['cat_pic_url'] = 'Image url';
$_LANG['cat_goods_limit'] = 'Number of such items displayed on the home page';
$_LANG['notice_show_in_index'] = 'This setting can display the recommended items in the latest, popular and recommendation section of the homepage.';
$_LANG['goods_number'] = 'Quantity of products';
$_LANG['grade'] = 'Number of price intervals';
$_LANG['notice_grade'] = 'This option denotes the number of categories between the lowest price and the highest price of the product under the category, and filling in 0 denotes not grading, not exceeding 10 at most.';
$_LANG['short_grade'] = 'Price grading';

$_LANG['nav'] = 'Navigation bar';
$_LANG['index_new'] = 'Newest';
$_LANG['index_best'] = 'Best';
$_LANG['index_hot'] = 'Popular';

$_LANG['back_list'] = 'Back';
$_LANG['continue_add'] = 'Add category';

$_LANG['notice_style'] = 'You can specify a style sheet file for each product category. For example, if a file is stored in the themes directory, enter it：themesmobile/style.css';

/* 操作提示信息 */
$_LANG['catname_empty'] = 'Category name cannot be empty!';
$_LANG['catname_exist'] = 'The same category name already exists!';
$_LANG["parent_isleaf"] = 'The selected category cannot be final!';
$_LANG["cat_isleaf"] = 'It is not the final category or there are still goods under this category, you can not delete them!';
$_LANG["cat_noleaf"] = 'There are other sub-categories below, which can not be modified to final category!';
$_LANG["is_leaf_error"] = 'The selected upper category cannot be the current category or the lower category of the current category!';
$_LANG['grade_error'] = 'Price category quantity can only be an integer within 0-10';

$_LANG['catadd_succed'] = 'Successful addition of new product category!';
$_LANG['catedit_succed'] = 'Successful category editor of products!';
$_LANG['catdrop_succed'] = 'Successful deletion of product category!';
$_LANG['catremove_succed'] = 'Successful category transfer of products!';
$_LANG['move_cat_success'] = 'category of Transferred products has been successfully completed!';

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
$_LANG['js_languages']['catname_empty'] = 'category name cannot be empty!';
$_LANG['js_languages']['unit_empyt'] = 'Quantitative units cannot be empty!';
$_LANG['js_languages']['is_leafcat'] = 'The category you selected is a final one. The superior category of the new category cannot be a final category.';
$_LANG['js_languages']['not_leafcat'] = 'The category you selected is not a final category. The category transfer of products can only be operated between the last categories.';
$_LANG['js_languages']['filter_attr_not_repeated'] = 'Filter attributes are not repeatable';
$_LANG['js_languages']['filter_attr_not_selected'] = 'Filter attributes are not selected';
$_LANG['notice_cat_name'] = 'If you need to add more than one category, use a half-corner comma to separate the categories.';

$_LANG['cat_expand'] = '[Unfold all]';
$_LANG['cat_collect'] = '[All contraction]';

$_LANG['virtual_category_list'] = 'Classified management of virtual products';
?>