<?php

/**
 * 鸿宇多用户商城 会员账号管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: users.php 17217 2016-01-19 06:29:08Z derek $
*/
/* 列表页面 */
$_LANG['label_user_name'] = 'Member name';
$_LANG['label_pay_points_gt'] = 'Member points are greater than';
$_LANG['label_pay_points_lt'] = 'Member points are less than';
$_LANG['label_rank_name'] = 'membership level';
$_LANG['all_option'] = 'All grades';

$_LANG['view_order'] = 'check order';
$_LANG['view_deposit'] = 'View account details';
$_LANG['username'] = 'Member name';
$_LANG['email'] = 'Email address';
$_LANG['is_validated'] = 'Is it verified?';
$_LANG['reg_date'] = 'Registration date';
$_LANG['button_remove'] = 'Delete member';
$_LANG['users_edit'] = 'Edit member account';
$_LANG['goto_list'] = 'Return to member account list';
$_LANG['username_empty'] = 'Member name cannot be empty!';

/* 表单相关语言项 */
$_LANG['password'] = 'password';
$_LANG['confirm_password'] = 'confirm password';
$_LANG['newpass'] = 'new password';
$_LANG['question'] = 'question';
$_LANG['answer'] = 'answer';
$_LANG['gender'] = 'gender';
$_LANG['birthday'] = 'birthday';
$_LANG['sex'][0] = 'secrecy';
$_LANG['sex'][1] = 'male';
$_LANG['sex'][2] = 'female';
$_LANG['pay_points'] = 'Consumption points';
$_LANG['rank_points'] = 'Rank integral';
$_LANG['user_money'] = 'Available funds';
$_LANG['frozen_money'] = 'Frozen funds';
$_LANG['credit_line'] = 'Line of credit';
$_LANG['user_rank'] = 'Membership level';
$_LANG['not_special_rank'] = 'Non-special grade';
$_LANG['view_detail_account'] = 'Check details';
$_LANG['parent_user'] = 'Recommender';
$_LANG['parent_remove'] = 'Break away from the recommendation relationship';
$_LANG['affiliate_user'] = 'Recommended member';
$_LANG['show_affiliate_users'] = 'Check the recommended list';
$_LANG['show_affiliate_orders'] = 'View recommended order details';
$_LANG['affiliate_lever'] = 'Grade';
$_LANG['affiliate_num'] = 'Number';
$_LANG['page_note'] = 'This list shows all member information recommended by users,';
$_LANG['how_many_user'] = ' members.';
$_LANG['back_note'] = 'Return to member edit page';
$_LANG['affiliate_level'] = 'Recommended level';

$_LANG['msn'] = 'MSN';
$_LANG['qq'] = 'QQ';
$_LANG['home_phone'] = 'home phone';
$_LANG['office_phone'] = 'office phone';
$_LANG['mobile_phone'] = 'mobile';

$_LANG['notice_pay_points'] = 'Consumption integral is a kind of money in the station, which allows users to pay a certain proportion of the integral when shopping.';
$_LANG['notice_rank_points'] = 'Grade integral is a kind of accumulated integral, which is used by the system to determine the user\'s membership grade.';
$_LANG['notice_user_money'] = 'The amount reserved by the user in the station';

/* 提示信息 */
$_LANG['username_exists'] = 'The same user name already exists.';
$_LANG['email_exists'] = 'The email address already exists.';
$_LANG['edit_user_failed'] = 'Failed to modify membership information.';
$_LANG['invalid_email'] = 'Illegal email address was entered.';
$_LANG['update_success'] = 'Editing user information has been successful.';
$_LANG['still_accounts'] = 'The member has a balance or arrears\n';
$_LANG['remove_confirm'] = 'Are you sure you want to delete this member\'s account?';
$_LANG['list_still_accounts'] = 'There are still balances or arrears in selected member accounts\n';
$_LANG['list_remove_confirm'] = 'Are you sure you want to delete all selected member accounts?';
$_LANG['remove_order_confirm'] = 'The member account already has an order, deleting the member account will clear the order data at the same time.<br />您确定要删除吗？';
$_LANG['remove_order'] = 'Yes, I\'m sure I want to delete the membership account and its order data.';
$_LANG['remove_cancel'] = 'No, I don\'t want to delete this member\'s account.';
$_LANG['remove_success'] = 'Membership account %s has been deleted successfully.';
$_LANG['add_success'] = 'Membership account %s has been added successfully.';
$_LANG['batch_remove_success'] = 'The %d membership accounts have been deleted successfully.';
$_LANG['no_select_user'] = 'You don\'t have any members to delete now!';
$_LANG['register_points'] = 'Register and send points';
$_LANG['username_not_allow'] = 'User name is not allowed to register';
$_LANG['username_invalid'] = 'Invalid username';
$_LANG['email_invalid'] = 'Invalid email address';
$_LANG['email_not_allow'] = 'Mail is not allowed';

/* 地址列表 */
$_LANG['address_list'] = 'Receiving address';
$_LANG['consignee'] = 'Receiver';
$_LANG['address'] = 'address';
$_LANG['link'] = 'Contact information';
$_LANG['other'] = 'other';
$_LANG['tel'] = 'phone';
$_LANG['mobile'] = 'mobile';
$_LANG['best_time'] = 'Best delivery time';
$_LANG['sign_building'] = 'Landmarks';

/* JS 语言项 */
$_LANG['js_languages']['no_username'] = 'No username entered.';
$_LANG['js_languages']['invalid_email'] = 'Did not enter an email address or entered an invalid email address.';
$_LANG['js_languages']['no_password'] = 'No password was entered.';
$_LANG['js_languages']['less_password'] = 'The password you enter cannot be less than six digits.';
$_LANG['js_languages']['passwd_balnk'] = 'Password cannot contain spaces';
$_LANG['js_languages']['no_confirm_password'] = 'No confirmation password was entered.';
$_LANG['js_languages']['password_not_same'] = 'The entered password does not match the confirmation password.';
$_LANG['js_languages']['invalid_pay_points'] = 'The number of points consumed is not an integer.';
$_LANG['js_languages']['invalid_rank_points'] = 'The number of grade points is not an integer.';
$_LANG['js_languages']['password_len_err'] = 'The length of the new password and the confirmation password cannot be less than 6';
?>
