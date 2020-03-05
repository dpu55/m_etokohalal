<?php

/**
 * 鸿宇多用户商城 授权证书管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: testyang $
 * $Id: agency.php 15013 2008-10-23 09:31:42Z testyang $
 */

/* 菜单 */
$_LANG['upload_license'] = 'Upload certificate';
$_LANG['download_license'] = 'Download certificate';
$_LANG['back'] = 'Return';

/* 列表页 */
$_LANG['license_here'] = 'license';

/* 标签 */
$_LANG['label_certificate_download'] = 'ECshop certificate Download Backup';
$_LANG['label_license_key'] = 'Authorization code：';
$_LANG['label_certificate_reset'] = 'ECshop certificate Upload Recovery';
$_LANG['label_delete_license'] = 'Error certificate deletion';
$_LANG['label_select_license'] = 'Select upload certificate：';

/* 系统提示 */
$_LANG['delete_license_notice'] = 'When you upload the wrong ECshop certificate and cause the certificate function to fail, please empty the wrong certificate here first, and then use the certificate upload recovery function to restore the correct certificate.';
$_LANG['license_notice'] = 'ECShop certificate is the only identification for you to enjoy ECShop software service. It records the authorization information of your online store, purchase official service record, short message account and other important information. You need to backup the certificate through the "Certificate Download Backup" function and keep it properly. When you encounter the need to reinstall the store system, you can use the "certificate upload recovery" function in the newly installed system to restore the previously backed-up certificates, so that the new system can continue to use the important information in the certificate.';
$_LANG['delete_license'] = "The wrong certificate has been deleted.";
$_LANG['fail_license'] = "The certificate is incomplete. Please confirm that the certificate is correct and then upload it again!";
$_LANG['recover_license'] = "The certificate was restored successfully.";
$_LANG['no_license_down'] = "Failure. No certificate to download!";
$_LANG['fail_license_login'] = "Certificate login failed. The upload certificate is incorrect!";

/* JS提示 */
$_LANG['js_languages']['del_confirm'] = 'Are you sure you deleted the wrong certificate?';

?>