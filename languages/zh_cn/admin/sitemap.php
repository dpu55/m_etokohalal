<?php

/**
 * 鸿宇多用户商城 站点地图生成程序语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇多用户商城科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com;
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: derek $
 * $Id: sitemap.php 17217 2016-01-19 06:29:08Z derek $
*/

$_LANG['homepage_changefreq'] = 'Home update frequency';
$_LANG['category_changefreq'] = 'Category page update frequency';
$_LANG['content_changefreq'] = 'Content page update frequency';

$_LANG['priority']['always'] = 'Always updated';
$_LANG['priority']['hourly'] = 'hour';
$_LANG['priority']['daily'] = 'day';
$_LANG['priority']['weekly'] = 'week';
$_LANG['priority']['monthly'] = 'month';
$_LANG['priority']['yearly'] = 'year';
$_LANG['priority']['never'] = 'Never update';

$_LANG['generate_success'] = 'The site map has been generated to the appropriate directory.<br />The address is:%s';
$_LANG['generate_failed'] = 'Failed to generate site map, please check if the site root directory, /data/ directory is allowed to write.';
$_LANG['sitemaps_note'] = 'The Sitemap service is designed to use the feed file sitemap.xml to notify Google, Yahoo!, and other crawler sites such as Microsoft on which files need to be indexed, the last revision time of these files, the frequency of changes, the file location, and the relative priority indexing information. Will help them build the behavioral habits of indexing and indexing. See the instructions on the <a href="http://www.sitemaps.org/" target="_blank">sitemaps.org</a> website for more information.';
?>