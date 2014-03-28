<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_optimizer.php 31754 2012-10-08 02:29:22Z zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'optimizer_dbbackup_advice' => 'Three months no data backup, it is recommended to back up your data Now',
	'optimizer_dbbackup_lastback' => 'The last data backup in',
	'optimizer_dbbackup_clean_safe' => 'Does not detect the database backup file£¬no safety issues',
	'optimizer_dbbackup_clean_delete' => 'Detected {filecount} Data backup file(Directory: ./data/backup_xxx)£¬<br>As soon as possible manually copied to a safe location backup£¬Then delete these files',
	'optimizer_filecheck_advice' => 'Three months did not file checksum,Recommended Now checksum',
	'optimizer_filecheck_lastcheck' => 'Last file checksum',
	'optimizer_log_clean' => 'Have {count} Log table can clean up optimization',
	'optimizer_log_not_found' => 'Clean up the log table is not found',
	'optimizer_patch_have' => 'Have {patchnum} £¬Please update as soon as possible',
	'optimizer_patch_check_safe' => 'Detect security',
	'optimizer_plugin_new_plugin' => 'Have {newversion} Applications available updates',
	'optimizer_plugin_no_upgrade' => 'Do not need to apply the update',
	'optimizer_post_need_split' => '{count} Posts and sub tables have Need to optimize',
	'optimizer_post_not_need' => 'No need to optimize',
	'optimizer_seo_advice' => 'We recommend that you improve the SEO settings',
	'optimizer_seo_no_need' => 'The discovery has perfected seo set',
	'optimizer_setting_cache_index' => 'Cache Forum Home',
	'optimizer_setting_cache_index_desc' => 'To Open This feature can reduce server load',
	'optimizer_setting_cache_optimize_desc' => 'Set the cache time of 900 seconds',
	'optimizer_setting_cache_post' => 'Cache Posts',
	'optimizer_setting_cache_post_desc' => 'The cache Posts turn on this feature can reduce server load',
	'optimizer_setting_cache_post_optimize_desc' => 'Set the cache time of 900 seconds',
	'optimizer_setting_optimizeviews' => 'Optimize the updated theme views',
	'optimizer_setting_optimizeviews_desc' => '开启此功能可减轻更新主题浏览量时对服务器产生的负载',
	'optimizer_setting_optimizeviews_optimize_desc' => 'Enable this function',
	'optimizer_setting_delayviewcount' => 'Attachment downloads delay update',
	'optimizer_setting_delayviewcount_desc' => 'Delay updates attachment views£¬Can significantly reduce the burden of Visits great site server',
	'optimizer_setting_delayviewcount_optimize_desc' => 'Enable this function',
	'optimizer_setting_preventrefresh' => 'View the number of open anti refresh',
	'optimizer_setting_preventrefresh_desc' => 'Open anti-refresh£¬Can significantly reduce the pressure on the server',
	'optimizer_setting_preventrefresh_optimize_desc' => 'Enable this function',
	'optimizer_setting_nocacheheaders' => 'Disable browser caching',
	'optimizer_setting_nocacheheaders_desc' => 'Can be used to solve a very few normal browser refresh£¬This will increase the burden on the server',
	'optimizer_setting_nocacheheaders_optimize_desc' => 'Close this feature',
	'optimizer_setting_jspath' => 'JS File cache',
	'optimizer_setting_jspath_desc' => 'When the script for the cache directory£¬The system will default directory *.js file is compressed and then saved to the cache directory to improve the reading speed',
	'optimizer_setting_jspath_optimize_desc' => 'To modify js path to cache directory',
	'optimizer_setting_lazyload' => 'Picture delay loaded',
	'optimizer_setting_lazyload_desc' => 'Page picture is loaded in the browser window£¬Can significantly reduce the burden of Visits great site server',
	'optimizer_setting_lazyload_optimize_desc' => 'Enable this function',
	'optimizer_setting_sessionclose' => 'Close session mechanism',
	'optimizer_setting_sessionclose_desc' => 'After closing the session mechanism£¬Can significantly reduce the burden on the server of the site£¬Turn on the recommended number of online users over 20,000<br>Note£ºLong when the number of visitors and users of online statistics will no longer£¬Forum Home Forum List page online user list function will be unavailable',
	'optimizer_setting_sessionclose_optimize_desc' => 'Enable this function',
	'optimizer_setting_need_optimizer' => 'Have {count} Setting items can be optimized',
	'optimizer_setting_no_need' => 'Setting items without optimization',
	'optimizer_thread_need_optimizer' => 'Need to optimize your theme table',
	'optimizer_thread_no_need' => 'No need to optimize',
	'optimizer_upgrade_need_optimizer' => 'Have new version£¬Update to the latest version',
	'optimizer_upgrade_no_need' => 'Is the latest version',
	'optimizer_setting_rewriteguest' => 'Rewrite Only for tourists',
	'optimizer_setting_rewriteguest_desc' => 'Enabled this£¬Rewrite function is only valid for visitors and search engines£¬Ease the burden on the server',
	'optimizer_setting_rewriteguest_optimize_desc' => 'Enable this function',
);
?>