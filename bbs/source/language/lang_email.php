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
	'hello' => 'Hello',
	'moderate_member_invalidate' => 'Veto',
	'moderate_member_delete' => 'Del',
	'moderate_member_validate' => 'Pass',


	'get_passwd_subject' =>		'Password recovery instructions',
	'get_passwd_message' =>		'
<p>{username}，
This letter is {bbname} Sent。</p>

<p>You are receiving this e-mail，is due this E-mail address in the {bbname} Be registered as a user\'s mailbox，
And the user requests use Email Due to the password reset feature。</p>
<p>
----------------------------------------------------------------------<br />
<strong>Important！</strong><br />
----------------------------------------------------------------------</p>

<p>If you do not submit a password reset request or not {bbname} Registered Users，Please ignore 
and delete this message。Only in the case of you to confirm the need to reset the password，
Need to continue to read the contents of the following。</p>
<p>
----------------------------------------------------------------------<br />
<strong>Password reset instructions</strong><br />
----------------------------------------------------------------------</p>
</p>
You only need to submit a request within three days，Click the link below to reset your password：<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(If the above is not a link，Longer have access to the address manually paste it into the address bar of the browser)</p>

<p>Open the page in the link above, enter a new password submitted，You can use the new password site。You can change your password at any time in the user control panel。</p>

<p>IP is the request submitted by the {clientip}</p>


<p>
Yours<br />
</p>
<p>{bbname} Management team.
{siteurl}</p>',


	'email_verify_subject' =>	'Email Address Verify',
	'email_verify_message' =>	'<br />
<p>{username}，<br />
This letter is {bbname} Sent。</p>

<p>You are receiving this mail {bbname} new user registered users to modify Email this email address.If you have not visited {bbname}, or did not carry out the above operation, please ignore this message. You do not need to unsubscribe or make further operation.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Account activation illustrate</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>If you are a new user of the {bbname}, or modify your registered Email the address, we need to verify the validity of your address to avoid spam or address abuse.</p>

<p>You simply click on the link below to activate your account：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(If the above is not a link form this address manually paste it into your browser address bar access) </ p>

<p> Thank you for your visit, a Happy you use!</p>


<p>
Yours<br />

{bbname} Management team.<br />
{siteurl}</p>',

	'email_register_subject' =>	'Forum Registered address',
	'email_register_message' =>	'<br />
<p>This letter is {bbname} Sent。</p>

<p>You receive this message, it is due to the use of the E-mail address to obtain the address of the new user registration {bbname}.If you have not visited {bbname}, or did not carry out the above operation, please ignore this message. You do not need to unsubscribe or make further operation.</p>
<br />
----------------------------------------------------------------------<br />
<strong>The new user registration instructions</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>If you are a new user of the {bbname}, or modify your registered Email the address, we need to verify the validity of your address to avoid spam or address abuse.</p>

<p>You simply click on the link below to registered users, the following link is valid for three days.Expired can re-request to send an e-mail to verify:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(If the above is not a link form this address manually paste it into your browser address bar access) </ p>

<p> Thank you for your visit, a Happy you use!</p>


<p>
Yours<br />

{bbname} Management team.<br />
{siteurl}</p>',


	'add_member_subject' =>		'You have been added as a member',
	'add_member_message' => 	'
{newusername} ，
This letter is {bbname} Sent。<br />
<br />
I {adminusername}, {bbname} one of the managers. You receive this message, you <br />
Just add {bbname} member Email is the email address you registered.<br />
<br />
----------------------------------------------------------------------<br />
Important！<br />
----------------------------------------------------------------------<br />
<br />
If you {bbname} are not interested or have no intention to become a member, please ignore this message.<br />
<br />
----------------------------------------------------------------------<br />
Account information<br />
----------------------------------------------------------------------<br />
<br />
website name: {bbname} <br />
Website address: {siteurl} <br />
<br />
User Name: {newusername} <br />
Password: {newpassword} <br />
<br />
From now on, you can use your account login {bbname} wish you a happy birthday to you happy！<br />
<br />
<br />
<br />
Yours<br />
<br />
{bbname} Management team.<br />
{siteurl}',


	'birthday_subject' =>		'Happy birthday to you',
	'birthday_message' => 		'<br />
{username}，<br />
This letter is {bbname} Sent。<br />
<br />
You received this email, this email address {bbname} to register as a user\'s mailbox, <br />
And as you fill in the information, and today is your birthday. Very pleased to present you a <br />
Birthday wishes, I {bbname} on behalf of the management team would like to wish you a happy birthday. <br />
<br />
If you are not a member of {bbname}, or today is not your birthday, may misuse your mail <br />
Pieces of the address, fill a birthday or wrong information. The messages are not repeatedly sent, please ignore this message.<br />
<br />
<br />
Yours<br />
<br />
{bbname} Management team.<br />
{siteurl}',

	'email_to_friend_subject' =>	'{$_G[member][username]} Recommended to you: $thread[subject]',
	'email_to_friend_message' =>	'<br />
This letter is {$_G[setting][bbname]} Of {$_G[member][username]} Sent。<br />
<br />
You are receiving this mail due to {$ _G [member] [username]} {$ _G [setting] [bbname]} "Tell a Friend" <br />
The function recommended the following content to you. If you\'re not interested, please ignore this message. You do not need to unsubscribe or make further operation.<br />
<br />
----------------------------------------------------------------------<br />
the letter original start<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
The end of the letter the original<br />
----------------------------------------------------------------------<br />
<br />
Please note that this letter is only used by the user "Tell a Friend" to send, not website official mail, <br />
Website management team will not be responsible for such messages.<br />
<br />
are welcome to visit {$_G[setting][bbname]}<br />
$_G[siteurl]',

	'email_to_invite_subject' =>	'Your friends {$ _G [member] [username]} send {$ _G [setting] [bbname} website registration invitation code you',
	'email_to_invite_message' =>	'<br />
$sendtoname,<br />
This letter is {$_G[setting][bbname]} Of {$_G[member][username]} Sent。<br />
<br />
You are receiving this mail {$ _G [member] [username]} {bbname} Send invitation code to a friend "<br />
The function recommended the following content to you. If you\'re not interested, please ignore this message. You do not need to unsubscribe or other into <br />
Step of the operation.<br />
<br />
----------------------------------------------------------------------<br />
the letter original start<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
The end of the letter the original<br />
----------------------------------------------------------------------<br />
<br />
Please note that this letter only by the user to use the "Send to a friend invitation code" sent, not the site of the official mail, <br />
Website management team will not be responsible for such messages.<br />
<br />
are welcome to visit {$_G[setting][bbname]}<br />
$_G[siteurl]',


	'moderate_member_subject' =>	'The user the Audit results notice',
	'moderate_member_message' =>	'<br />
<p>{username},
This letter is {bbname} Sent。</p>

<p>You have received this e-mail, this E-mail address in {bbname} new user registration
Use, and the administrator has set up a new user to the need for manual review, the mail will notify you submit
The application of the the Audit results.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Registration information and audit results</strong><br />
----------------------------------------------------------------------<br />
<br />
Username: {username} <br />
registration date: {regdate} <br />
Date Submitted: {submitdate} <br />
Number of commits: {submittimes} <br />
Register reason: {message} <br />
<br />
the Audit results: {modresult} <br />
the Audit time: {moddate} <br />
the Audit administrator: {adminusername} <br />
Administrator Message: {remark} <br />
<br />
----------------------------------------------------------------------<br />
<strong>The audit results indicate</strong><br />
----------------------------------------------------------------------<br />

<p>Pass: Your registration has been approved，You have become the official user of the {bbname}。</p>

<p>Veto: Your registration information is not complete，Or do not meet some of the requirements of our new users，You can according to the administrator\'s Message，<a href="home.php?mod=spacecp&ac=profile" target="_blank">To perfect your registration information</a>，And then re-submitted。</p>

<p>Del：Your registration due to our large deviations，Or the site of the new registration number than expected，The application has been rejected。Deleted your account from the database，Will no longer be able to use their login or submit again audit，Please understand that。</p>

<br />
<br />
Yours<br />
<br />
{bbname} Management team.<br />
{siteurl}',

	'adv_expiration_subject' =>	'Your site the following ad will be {day} days after the expiration，please promptly Handle',
	'adv_expiration_message' =>	'Your site the following ad will be {day} days after the expiration，please promptly Handle：<br /><br />{advs}',
	'invite_payment_email_message' => '
Welcome to {bbname}（{siteurl}），Has been paid to complete your orders {orderid}，The order has been confirmed valid。<br />
<br />----------------------------------------------------------------------<br />
Here is your invitation code
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
Important！
<br />----------------------------------------------------------------------<br />',
);

?>