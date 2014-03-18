<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_spacecp.php 32426 2013-01-15 10:00:21Z liulanbo $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(

	'by' => 'By',
	'tab_space' => ' ',

	'share' => 'Share',
	'share_action' => 'Have share',

	'pm_comment' => 'Reply Reviews',
	'pm_thread_about' => 'About you "{subject}" Posts',

	'wall_pm_subject' => 'Hello, I give you a message',
	'wall_pm_message' => 'I am in your Message Board Message，[url=\\1]Click here to go to the message board to look at it[/url]',
	'reward' => 'Reward',
	'reward_info' => 'To participate in the vote available  \\1 Credits',
	'poll_separator' => '"、"',

	'pm_report_content' => '<a href="home.php?mod=space&uid={reporterid}" target="_blank">{reportername}</a>Report PM: <br>Form<a href="home.php?mod=space&uid={uid}" target="_blank">{username}</a>\'s PM<br>Content：{message}',
	'message_can_not_send_1' => 'Failed to send, This exceeds the upper limit of the two sessions within 24 hours',
	'message_can_not_send_2' => 'Send PM twice too fast, Please wait to send',
	'message_can_not_send_3' => 'Sorry, You can not bulk to non-friends Send PM',
	'message_can_not_send_4' => 'Sorry, You can not yet use the Send PM',
	'message_can_not_send_5' => 'You have exceeded the upper limit of the group chat sessions within 24 hours',
	'message_can_not_send_6' => 'Other shield your PM',
	'message_can_not_send_7' => 'More than a group chat maximum number of',
	'message_can_not_send_8' => 'Sorry, You can not give yourself PM',
	'message_can_not_send_9' => 'The recipient is empty OR Other shield your PM',
	'message_can_not_send_10' => 'Initiate group chat number can not be less than two',
	'message_can_not_send_11' => 'The session does not exist',
	'message_can_not_send_12' => 'Sorry, You do not have permission to operate',
	'message_can_not_send_13' => 'This is not a group chat message',
	'message_can_not_send_14' => 'This is not a private message',
	'message_can_not_send_15' => 'Data is incorrect',
	'message_can_not_send_16' => 'You have exceeded the maximum number of PM within 24 hours',
	'message_can_not_send_onlyfriend' => 'The user only receives the message sent by the Friends',


	'friend_subject' => '<a href="{url}" target="_blank">{username} Request to add you to friends</a>',
	'friend_request_note' => '，Postscript：{note}',
	'comment_friend' =>'<a href="\\2" target="_blank">\\1 leave you messages</a>',
	'photo_comment' => '<a href="\\2" target="_blank">\\1 Commented on your photo</a>',
	'blog_comment' => '<a href="\\2" target="_blank">\\1 commented on your Blog</a>',
	'poll_comment' => '<a href="\\2" target="_blank">\\1 commented on your vote</a>',
	'share_comment' => '<a href="\\2" target="_blank">\\1 Comments You Share</a>',
	'friend_pm' => '<a href="\\2" target="_blank">\\1 give you send private messages</a>',
	'poke_subject' => '<a href="\\2" target="_blank">\\1 Say hello to you</a>',
	'mtag_reply' => '<a href="\\2" target="_blank">\\1 Reply your topic</a>',
	'event_comment' => '<a href="\\2" target="_blank">\\1 commented on your activity</a>',

	'friend_pm_reply' => '\\1 Reply your private messages',
	'comment_friend_reply' => '\\1 Reply Your Message',
	'blog_comment_reply' => '\\1 Replied to your blog comment',
	'photo_comment_reply' => '\\1 Replied to your photo comments',
	'poll_comment_reply' => '\\1 Reply your vote Comments',
	'share_comment_reply' => '\\1 Reply yoyr sharing comments',
	'event_comment_reply' => '\\1 Replied to your activities comments',

	'mail_my' => 'Friends and I remind interaction',
  	'mail_system' => 'System alert',

	'invite_subject' => '{username} Invite you to join {sitename}, And become friends',
	'invite_massage' => '<table border="0">
		<tr>
		<td valign="top">{avatar}</td>
		<td valign="top">
		<h3>Hi，I\'m{username}，Invite you to join {sitename}, Become my friends</h3><br>
		Please add you to my friend, You can understand my current situation, Communicate with me, Keep in touch with me at any time.<br>
		<br>
		Invite postscript：<br>{saymsg}
		<br><br>
		<strong>Please click on the following link, Accept a friend invitation：</strong><br>
		<a href="{inviteurl}">{inviteurl}</a><br>
		<br>
		<strong>If you have {sitename} account, Click the link below to view my profile:</strong><br>
		<a href="{siteurl}home.php?mod=space&uid={uid}">{siteurl}home.php?mod=space&uid={uid}</a><br>
		</td></tr></table>',

	'app_invite_subject' => '{username}Invite you to join {sitename}，Play {appname}',
	'app_invite_massage' => '<table border="0">
		<tr>
		<td valign="top">{avatar}</td>
		<td valign="top">
		<h3>Hi，I\'m {username}，In{sitename} To play {appname}，Invite you to join play</h3><br>
		<br>
		Invite postscript：<br>
		{saymsg}
		<br><br>
		<strong>Please click on the following link, Accept a friend invitation to play with {appname}:</strong><br>
		<a href="{inviteurl}">{inviteurl}</a><br>
		<br>
		<strong>If you have {sitename} account, Click the link below to view my profile:</strong><br>
		<a href="{siteurl}home.php?mod=space&uid={uid}">{siteurl}home.php?mod=space&uid={uid}</a><br>
		</td></tr></table>',

	'person' => ' People',
	'delete' => 'Delete',

	'space_update' => '{actor} Is SHOW',

	'active_email_subject' => 'Your E-mail activation email',
	'active_email_msg' => 'Activated, please copy the following link into your browser to access, In order to activate your mailbox.<br>E-mail activation link:<br><a href="{url}" target="_blank">{url}</a>',
	'share_space' => 'Share a User',
	'share_blog' => 'Share a blog',
	'share_album' => 'Shared an album',
	'default_albumname' => 'Default album',
	'share_image' => 'Shared a picture',
	'share_article' => 'Share an article',
	'album' => 'Albums',
	'share_thread' => 'Share a post',
	'mtag' => '{$_G[setting][navs][3][navname]}',
	'share_mtag' => 'Shared a {$_G[setting][navs][3][navname]}',
	'share_mtag_membernum' => 'Existing {membernum} Members',
	'share_tag' => 'Share a label',
	'share_tag_blognum' => 'Existing {blognum} Blogs',
	'share_link' => 'Share a web site',
	'share_video' => 'Share a Video',
	'share_music' => 'Share a music',
	'share_flash' => 'Share a Flash',
	'share_event' => 'Shared a activities',
	'share_poll' => 'Share a \\1 Vote',
	'event_time' => 'Activity',
	'event_location' => 'Event Location',
	'event_creator' => 'Initiator',
	'the_default_style' => 'Default style',
	'the_diy_style' => 'Custom style',

	'thread_edit_trail' => '<ins class="modify">[This topic by \\1 At \\2 edit]</ins>',
	'create_a_new_album' => 'Create a new album',
	'not_allow_upload' => 'You do not have permission to upload images',
	'not_allow_upload_extend' => 'Not allowed to upload {extend} type pictures',
	'files_can_not_exceed_size' => '{extend} class file can not be more than {size}',
	'get_passwd_subject' => 'Retrieve Password mail',
	'get_passwd_message' => 'You need to submit a request within three days of, Reset your password by clicking on the link below: <br />\\1<br />(If the above is not the form of links, Please address manually paste it into the browser address bar to access)<br />At the page opens, Enter the new password submitted, Then you can use the new password.',
	'file_is_too_big' => 'The file is too large',

	'take_part_in_the_voting' => '{actor} Participated in the {touser}\'s {reward} Vote <a href="{url}" target="_blank">{subject}</a>',
	'lack_of_access_to_upload_file_size' => 'Unable to get the upload file size',
	'only_allows_upload_file_types' => 'Only allowed to upload jpg, jpeg, gif, png standard format picture',
	'unable_to_create_upload_directory_server' => 'The server was unable to create the upload directory',
	'inadequate_capacity_space' => 'Insufficient space capacity, Can not upload new attachment',
	'mobile_picture_temporary_failure' => 'Temporary files can not be transferred to the server specified directory',
	'ftp_upload_file_size' => 'The remote upload pictures to fail',
	'comment' => 'Comment',
	'upload_a_new_picture' => 'Uploaded a new picture',
	'upload_album' => 'Updated album',
	'the_total_picture' => 'Total \\1 Pictures',

	'space_open_subject' => 'Come and sprucing up your personal home page',
	'space_open_message' => 'hi, Today, I went to visit your profile, Find yourself not to take care of it. Quickly and see it。Address: \\1space.php',



	'apply_mtag_manager' => 'Would like to apply to become a <a href="\\1" target="_blank">\\2</a> The main group, Reasons: \\3。<a href="\\1" target="_blank">(Click here to enter management)</a>',


	'magicunit' => 'Piece',
	'magic_note_wall' => '{actor} give you on the message board <a href="{url}" target="_blank">Message</a>',
	'magic_call' => 'Mid-point of your name in the blog, <a href="{url}" target="_blank">Go see it</a>',


	'present_user_magics' => 'You have received a gift by the administrator props: \\1',
	'has_not_more_doodle' => 'You do not have graffiti board',

	'do_stat_login' => 'Users who access',
	'do_stat_mobilelogin' => 'Mobile Access',
	'do_stat_connectlogin' => 'QQ Login access',
	'do_stat_register' => 'New registered users',
	'do_stat_invite' => 'Friends Invite',
	'do_stat_appinvite' => 'Apps invited',
	'do_stat_add' => 'Info release',
	'do_stat_comment' => 'Interactive info',
	'do_stat_space' => 'Interactive',
	'do_stat_doing' => 'Record',
	'do_stat_blog' => 'Blog',
	'do_stat_activity' => 'Activity',
	'do_stat_reward' => 'Reward',
	'do_stat_debate' => 'Debate',
	'do_stat_trade' => 'Goods',
	'do_stat_group' => "Create {$_G[setting][navs][3][navname]}",
	'do_stat_tgroup' => "{$_G[setting][navs][3][navname]}",
	'do_stat_home' => "{$_G[setting][navs][4][navname]}",
	'do_stat_forum' => "{$_G[setting][navs][2][navname]}",
	'do_stat_groupthread' => 'Group Topic',
	'do_stat_post' => 'Topic Replies',
	'do_stat_grouppost' => 'Group Reply',
	'do_stat_pic' => 'Picture',
	'do_stat_poll' => 'Vote',
	'do_stat_event' => 'Activity',
	'do_stat_share' => 'Share',
	'do_stat_thread' => 'Theme',
	'do_stat_docomment' => 'Record Reply',
	'do_stat_blogcomment' => 'Blog comment',
	'do_stat_piccomment' => 'Picture comments',
	'do_stat_pollcomment' => 'Vote Comments',
	'do_stat_pollvote' => 'Participate in the vote',
	'do_stat_eventcomment' => 'Activity Comments',
	'do_stat_eventjoin' => 'To join Activity',
	'do_stat_sharecomment' => 'Share a comment',
	'do_stat_post' => 'Topic Replies',
	'do_stat_click' => 'Declare',
	'do_stat_wall' => 'Leave a message',
	'do_stat_poke' => 'Greet',
	'do_stat_sendpm' => 'Send PM',
	'do_stat_addfriend' => 'Friend request',
	'do_stat_friend' => 'Become friends',
	'do_stat_post_number' => 'Posting volume',
	'do_stat_statistic' => 'Combined statistics',
	'logs_credit_update_INDEX' => array('TRC','RTC','RAC','MRC','BMC','TFR','RCV','CEC','ECU','SAC','BAC','PRC','RSC','STC','BTC','AFD','UGP','RPC','ACC','RCT','RCA','RCB','CDC','RGC','BGC','AGC','RKC','BME','RPR','RPZ','FCP','BGC'),
	'logs_credit_update_TRC' => 'Quest Rewards',
	'logs_credit_update_RTC' => 'Reward theme',
	'logs_credit_update_RAC' => 'Best Answer',
	'logs_credit_update_MRC' => 'Props random access',
	'logs_credit_update_BMC' => 'Buy props',
	'logs_credit_update_TFR' => 'Transfer roll-out',
	'logs_credit_update_RCV' => 'Transfers received',
	'logs_credit_update_CEC' => 'Redeem Points',
	'logs_credit_update_ECU' => 'UCenter Redeem Points expenses',
	'logs_credit_update_SAC' => 'Sale attach',
	'logs_credit_update_BAC' => 'Buy attach',
	'logs_credit_update_PRC' => 'Posts be rating',
	'logs_credit_update_RSC' => 'Post Rating',
	'logs_credit_update_STC' => 'Sale theme',
	'logs_credit_update_BTC' => 'Buy Theme',
	'logs_credit_update_AFD' => 'Buy Credits',
	'logs_credit_update_UGP' => 'Buy extended usergroup',
	'logs_credit_update_RPC' => 'Report rewards and punishments',
	'logs_credit_update_ACC' => 'Join activities',
	'logs_credit_update_RCT' => 'Replies awards',
	'logs_credit_update_RCA' => 'Replies winning',
	'logs_credit_update_RCB' => 'The return of Replies reward Credits',
	'logs_credit_update_CDC' => 'Recharge cards close',
	'logs_credit_update_RGC' => 'Recycled red envelopes',
	'logs_credit_update_BGC' => 'Planted red envelope',
	'logs_credit_update_AGC' => 'Get a red envelope',
	'logs_credit_update_RKC' => 'Bid ranking',
	'logs_credit_update_BME' => 'Buy Medal',
	'logs_credit_update_RPR' => 'Background Credits rewards and punishments',
	'logs_credit_update_RPZ' => 'Background Credits incentive cleared',
	'logs_credit_update_FCP' => 'Pay Forum',
	'logs_credit_update_BGR' => 'Create a group',
	'buildgroup' => 'To view the group has been created',
	'logs_credit_update_reward_clean' => 'Cleared',
	'logs_select_operation' => 'Please select the type of operation',
	'task_credit' => 'Task reward points',
	'special_3_credit' => 'Reward theme deducted Credits',
	'special_3_best_answer' => 'Best Answer Get Reward Credits',
	'magic_credit' => 'Props random access Credits',
	'magic_space_gift' => 'Planted red envelopes in their own space Home',
	'magic_space_re_gift' => 'Recovery has not run out of red envelopes',
	'magic_space_get_gift' => 'Access space to receive the red envelope',
	'credit_transfer' => 'Credits transfer',
	'credit_transfer_tips' => '\'s Transfer income',
	'credit_exchange_tips_1' => 'The integration is performed on an exchange operation, ',
	'credit_exchange_to' => 'Converted into',
	'credit_exchange_center' => 'By UCenter exchange Credits',
	'attach_sell' => 'Sell',
	'attach_sell_tips' => '\'s attach get points',
	'attach_buy' => 'Buy',
	'attach_buy_tips' => '\'s attach expenditure Credits',
	'grade_credit' => 'Rating points obtained',
	'grade_credit2' => 'Posts rating Credits deducted',
	'thread_credit' => 'Theme get points',
	'thread_credit2' => 'Theme expenditure Credits',
	'buy_credit' => 'Credits recharge',
	'buy_usergroup' => 'Buy the Extended usergroup expenditures Credits',
	'buy_medal' => 'Buy Medal',
	'buy_forum' => 'Buy the paid area of access',
	'report_credit' => 'Reward and punishment in the Report function',
	'join' => 'Join',
	'activity_credit' => 'Activities deduction Credits',
	'thread_send' => 'Deducted of published',
	'replycredit' => 'Credits distributed',
	'add_credit' => 'Reward Points',
	'recovery' => 'Recover',
	'replycredit_post' => 'Replies awards',
	'replycredit_thread' => 'Distribution of posts',
	'card_credit' => 'The cards close recharge points obtained',
	'ranklist_top' => 'To participate in the consumption of bid ranking Credits',
	'admincp_op_credit' => 'Background Credits incentive operation',
	'credit_update_reward_clean' => 'Cleared',

	'profile_unchangeable' => 'Submit this information can not be modified',
	'profile_is_verifying' => 'This information being verified at the',
	'profile_mypost' => 'I submit content ',
	'profile_need_verifying' => 'This information is submitted by the need to audit',
	'profile_edit' => 'Modify',
	'profile_censor' => '(Sensitive words)',
	'profile_verify_modify_error' => '{verify} Has been certified by not allowing changes',
	'profile_verify_verifying' => 'Yours {verify} Information has been submitted, Please be patient verification.',

	'district_level_1' => '-Province-',
	'district_level_2' => '-City-',
	'district_level_3' => '-Counties-',
	'district_level_4' => '-Townships-',
	'invite_you_to_visit' => '{user} Invite you to visit {bbname}',

	'portal' => 'Portal',
	'group' => 'Group',
	'follow' => 'Broadcast',
	'collection' => 'Collection',
	'guide' => 'REVIEW',
	'feed' => 'Feed',
	'blog' => 'Blog',
	'doing' => 'Record',
	'wall' => 'Message Board',
	'homepage' => 'Profile home',
	'ranklist' => 'Rank List',
	'select_the_navigation_position' => 'Select {TYPE} navigation position',
	'close_module' => 'Close {type} function',

	'follow_add_remark' => 'Add notes',
	'follow_modify_remark' => 'Edit Note',
	'follow_specified_group' => 'Broadcast area',
	'follow_specified_forum' => 'Broadcast special forum',

	'filesize_lessthan' => 'File size should be less than ',

	'spacecp_message_prompt' => '(Support {MSG} code, maximum 1000 words)',
	'card_update_doing' => ' <a class="xi2" href="###">[Update records]</a>',
	'email_acitve_message' => '<img src="{imgdir}/mail_inactive.png" alt="Unverified" class="vm" /> <span class="xi1">New mailbox ({newemail}) Pending Verification...</span><br />
								The system has been sent to the mailbox a verification activation email, Please check your email, Verify activation.<br>
								If you do not received a verification email, You can replace a mailbox, Or <a href="home.php?mod=spacecp&ac=profile&op=password&resend=1" class="xi2">Receive a verification email again</a>',
	'qq_set_status' => 'I set my QQ online status',
	'qq_dialog' => 'Initiated by QQ chat',

);

?>