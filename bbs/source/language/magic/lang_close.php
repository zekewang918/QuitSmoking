<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_close.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'close_name' => 'Silent card',
	'close_desc' => 'Themes can be closed to Reply',
	'close_expiration' => 'Close validity',
	'close_expiration_comment' => 'Set the theme how long it can be turned off by default 24 hours',
	'close_forum' => 'To allow the use of the props forum',
	'close_info' => 'Close the specified topic {expiration} hour，Please enter the subject ID',
	'close_info_nonexistence' => 'Please specify to turn off the topic',
	'close_succeed' => 'Your operation thread is closed',
	'close_info_noperm' => 'Sorry, the theme in forum does not allow use of the props',
	'close_info_user_noperm' => 'I\'m sorry, you can not be the person to use the props',

	'close_notification' => 'Your theme {subject} Be {actor} Used {magicname}, <a href="forum.php?mod=viewthread&tid={tid}">Go see it!</a>',
);

?>