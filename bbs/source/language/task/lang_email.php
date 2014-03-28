<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'email_name' => 'Verify the mailbox task',
	'email_desc' => 'Verify the mailbox to receive the reward.',
	'email_view' => '<strong>Please follow the instructions below to participate in this task:</strong>
		<ul>
		<li><a href="home.php?mod=spacecp&ac=profile&op=password" target="_blank">New window to open the Account Settings page</a></li>
		<li>New open settings page, fill in your own mailbox true (new mailbox fill needs to be saved) and click on the "re-receive verification message" link</li>
		<li>A few minutes later, the system will give you send an e-mail message was received, in accordance with the verification link in the e-mail instructions to access your mail can</li>
		</ul>',
);

?>