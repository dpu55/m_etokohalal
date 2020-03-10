<?php

/**
 * 鸿宇多用户商城 文章分类管理程序语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: articlecat.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['cat_name'] = 'Article Category Name';
$_LANG['type'] = 'Category type';
$_LANG['type_name'][COMMON_CAT] = 'General category';
$_LANG['type_name'][SYSTEM_CAT] = 'System category';
$_LANG['type_name'][INFO_CAT]   = 'Shop information';
$_LANG['type_name'][UPHELP_CAT] = 'Help sort';
$_LANG['type_name'][HELP_CAT]   = 'Shop help';

$_LANG['cat_keywords'] = 'Keyword';
$_LANG['cat_desc'] = 'Describe';
$_LANG['parent_cat'] = 'Category parent';
$_LANG['cat_top'] = 'Top level category';
$_LANG['not_allow_add'] = 'Subcategories are not allowed to be added to your selected categories';
$_LANG['not_allow_remove'] = 'The system retains category and does not allow deletion';
$_LANG['is_fullcat'] = 'There are subclassifications under this category. Please delete the subclassifications first.';
$_LANG['show_in_nav'] = 'Is it displayed in the navigation bar';

$_LANG['isopen'] = 'Display';
$_LANG['isclose'] = 'No display';
$_LANG['add_article'] = 'Add article';

$_LANG['articlecat_edit'] = 'Category Editor of Articles';


/* 提示信息 */
$_LANG['catname_exist'] = 'Category name %s already exists';
$_LANG['parent_id_err'] = 'Category name %s the parent category cannot set the cost itself or its own sub-categories';
$_LANG['back_list'] = 'Returns the categorization list';
$_LANG['continue_add'] = 'Continue to add new categories';
$_LANG['catadd_succed'] = 'Successfully added';
$_LANG['catedit_succed'] = 'Category %s Editor Successful';
$_LANG['back_list'] = 'Returns the categorization list';
$_LANG['continue_add'] = 'Continue adding categories';
$_LANG['no_catname'] = 'Please fill in the category name.';
$_LANG['edit_fail'] = 'Editor failure';
$_LANG['enter_int'] = 'Please enter an integer';
$_LANG['not_emptycat'] = 'There are also articles under the category. No deletion of non-empty categories is allowed.';

/*帮助信息*/
$_LANG['notice_keywords'] ='Keyword is an optional item. Its purpose is to facilitate the search of external search engines.';
$_LANG['notice_isopen'] ='Does the article category appear in the main navigation bar in the front desk?';

/*JS 语言项*/
$_LANG['js_languages']['no_catname'] = 'No category name was entered';
$_LANG['js_languages']['sys_hold'] = 'Systems retain categories, and subclassifications are not allowed to be added.';
$_LANG['js_languages']['remove_confirm'] = 'Are you sure you want to delete the selected category?';

?>