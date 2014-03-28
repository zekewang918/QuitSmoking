<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_jack.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'jack_name' => 'Jack',
	'jack_desc' => 'Topic may be the top for some time, and reused to extend Posts Jacked time',
	'jack_expiration' => 'Length of time',
	'jack_expiration_comment' => 'Set the theme can be the top long, default 1 hour',
	'jack_forum' => 'To allow the use of the props forum',
	'jack_info' => '<p class="mtn xw0 mbn">Jacking the specified topic<span class="xi1 xw1 xs2"> {expiration} </span> hour.</p> <p class="mtn xw0 mbn">You now have<span class="xi1 xw1 xs2"> {magicnum} </span>A jack can be used.</p>',
	'jack_num' => 'The use of the num:',
	'jack_num_not_enough' => 'Insufficient num of props or do not fill in the num of use.',
	'jack_info_nonexistence' => 'Please specify the theme to the top',
	'jack_succeed' => 'Jack success of the theme from the top',
	'jack_info_noperm' => 'Sorry, the theme in forum does not allow use of the props',

	'jack_notification' => 'Your theme {subject} Be {actor} Used {magicname}, <a href="forum.php?mod=viewthread&tid={tid}">Go see it!</a>',
);

?>