<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_highlight.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'highlight_name' => 'Discoloration card',
	'highlight_desc' => 'Posts or log the title highlighting, change the color',
	'highlight_expiration' => 'Highlighting validity',
	'highlight_expiration_comment' => 'Set the title can be highlighted how long the default 24 hours. Acting on the log, no expiration date.',
	'highlight_forum' => 'To allow the use of the props forum',
	'highlight_info_tid' => 'ighlighting the theme of the title {expiration} hours',
	'highlight_info_blogid' => 'Log or title of the post highlighting, change the color',
	'highlight_color' => 'Color',
	'highlight_info_nonexistence_tid' => 'Please specify highlighted Post',
	'highlight_info_nonexistence_blogid' => 'Please specify highlighted Log',
	'highlight_succeed_tid' => 'Post your operation highlighted',
	'highlight_succeed_blogid' => 'The log your operating highlighted',
	'highlight_info_noperm' => 'Sorry, the theme in forum does not allow use of the props',
	'highlight_info_notype' => 'Parameter error, do not specify the type of operation.',

	'highlight_notification' => 'Your theme {subject} Be {actor} Used {magicname}, <a href="forum.php?mod=viewthread&tid={tid}">Go see it!</a>',
	'highlight_notification_blogid' => 'Your Log {subject} Be {actor} Used {magicname}，<a href="home.php?mod=space&do=blog&id={blogid}">Go see it!</a>',
);

?>