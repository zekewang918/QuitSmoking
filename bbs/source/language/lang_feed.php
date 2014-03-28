<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_feed.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'feed_blog_password' => '{actor} Post a new encrypted log {subject}',
	'feed_blog_title' => '{actor} Post a new log',
	'feed_blog_body' => '<b>{subject}</b><br />{summary}',
	'feed_album_title' => '{actor} Updated albums',
	'feed_album_body' => '<b>{album}</b><br /> {picnum} Pictures',
	'feed_pic_title' => '{actor} Upload a new picture',
	'feed_pic_body' => '{title}',



	'feed_poll' => '{actor} Launched a new vote',

	'feed_comment_space' => '{actor} On {touser} Left a message on the message board',
	'feed_comment_image' => '{actor} Commented on {touser} The picture',
	'feed_comment_blog' => '{actor} Commented on {touser} The log {blog}',
	'feed_comment_poll' => '{actor} Commented on {touser} Voting {poll}',
	'feed_comment_event' => '{actor} on {touser} The activities of the organization {event} Commented',
	'feed_comment_share' => '{actor} To {touser} Sharing {share} Commented',

	'feed_showcredit' => '{actor} Presented to {fusername} Auction Points {credit}£¬To help a friend move up the <a href="misc.php?mod=ranklist&type=member" target="_blank">Bid ranking</a> In the ranking',
	'feed_showcredit_self' => '{actor} Increase bidding credits {credit}£¬Upgrade themselves in<a href="misc.php?mod=ranklist&type=member" target="_blank">Bid ranking</a> In the Ranking',
	'feed_doing_title' => '{actor}£º{message}',
	'feed_friend_title' => '{actor} And {touser} Become a friend',



	'feed_click_blog' => '{actor} Send a¡°{click}¡±To {touser} The log {subject}',
	'feed_click_thread' => '{actor} Send a¡°{click}¡±To {touser} The topic {subject}',
	'feed_click_pic' => '{actor} Send a¡°{click}¡±To {touser} The picture',
	'feed_click_article' => '{actor} Send a¡°{click}¡±To {touser} Article {subject}',


	'feed_task' => '{actor} Completion of the prizes task {task}',
	'feed_task_credit' => '{actor} Completion of the prizes task {task}£¬Received {credit} Bonus points',

	'feed_profile_update_base' => '{actor} Update the basic information',
	'feed_profile_update_contact' => '{actor} Updated Contact',
	'feed_profile_update_edu' => '{actor} Update their own education',
	'feed_profile_update_work' => '{actor} Update their own work',
	'feed_profile_update_info' => '{actor} Update their own personal information',
	'feed_profile_update_bbs' => '{actor} Updated forum information',
	'feed_profile_update_verify' => '{actor} Updated the authentication information',

	'feed_add_attachsize' => '{actor} use {credit} redeem points Exchange {size} Annex space£¬Can upload more pictures!(<a href="home.php?mod=spacecp&ac=credit&op=addsize">I also came to exchange</a>)',

	'feed_invite' => 'Initiate the invitation£¬{actor} and {username} Become a friend',

	'magicuse_thunder_announce_title' => '<strong>{username} sent a¡°Thunderous Voice¡±</strong>',
	'magicuse_thunder_announce_body' => 'Hello, everybody£¬I\'m on the line!<br /><a href="home.php?mod=space&uid={uid}" target="_blank">Welcome to my home Drop</a>',


	'feed_thread_title' =>			'{actor} Post a new topic',
	'feed_thread_message' =>		'<b>{subject}</b><br />{message}',

	'feed_reply_title' =>			'{actor} Replied to {author} The topic {subject}',
	'feed_reply_title_anonymous' =>		'{actor} Reply to the topic {subject}',
	'feed_reply_message' =>			'',

	'feed_thread_poll_title' =>		'{actor} Launched a new vote',
	'feed_thread_poll_message' =>		'<b>{subject}</b><br />{message}',

	'feed_thread_votepoll_title' =>		'{actor} To participate on {subject} Voting',
	'feed_thread_votepoll_message' =>	'',

	'feed_thread_goods_title' =>		'{actor} The sale of a commodity',
	'feed_thread_goods_message_1' =>	'<b>{itemname}</b><br />Selling price {itemprice} Dollar Append {itemcredit}{creditunit}',
	'feed_thread_goods_message_2' =>	'<b>{itemname}</b><br />Selling price {itemprice} Dollar',
	'feed_thread_goods_message_3' =>	'<b>{itemname}</b><br />Selling price {itemcredit}{creditunit}',

	'feed_thread_reward_title' =>		'{actor} Launched a new Reward',
	'feed_thread_reward_message' =>		'<b>{subject}</b><br />Reward {rewardprice}{extcredits}',

	'feed_reply_reward_title' =>		'{actor} Reply on {subject} Reward',
	'feed_reply_reward_message' =>		'',

	'feed_thread_activity_title' =>		'{actor} Initiated new activities',
	'feed_thread_activity_message' =>	'<b>{subject}</b><br />Start time£º{starttimefrom}<br />Event Location£º{activityplace}<br />{message}',

	'feed_reply_activity_title' =>		'{actor} Enrolled {subject} activities',
	'feed_reply_activity_message' =>	'',

	'feed_thread_debate_title' =>		'{actor} Initiated a new debate',
	'feed_thread_debate_message' =>		'<b>{subject}</b><br />Square£º{affirmpoint}<br />Anti-party£º{negapoint}<br />{message}',

	'feed_thread_debatevote_title_1' =>	'{actor} Square identity involved {subject} debate',
	'feed_thread_debatevote_title_2' =>	'{actor} As an anti-party participation on {subject} debate',
	'feed_thread_debatevote_title_3' =>	'{actor} To participate in a neutral identity on {subject} debate',
	'feed_thread_debatevote_message_1' =>	'',
	'feed_thread_debatevote_message_2' =>	'',
	'feed_thread_debatevote_message_3' =>	'',

);

?>