<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_notification.php 32028 2012-10-31 10:12:22Z zhangjie $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'type_wall' => 'Guestbook',
	'type_piccomment' => 'Picture comments',
	'type_blogcomment' => 'Blog comments',
	'type_clickblog' => 'Blog position',
	'type_clickarticle' => 'Articles position',
	'type_clickpic' => 'Image position',
	'type_sharecomment' => 'Share comments',
	'type_doing' => 'Record',
	'type_friend' => 'Friends',
	'type_credit' => 'Credits',
	'type_bbs' => 'Forum',
	'type_system' => 'System',
	'type_thread' => 'Theme',
	'type_task' => 'Task',
	'type_group' => 'Group',

	'mail_to_user' => 'New notification',
	'showcredit' => '{actor} Presented to you {credit} bid Credits, Help improve your in <a href="misc.php?mod=ranklist&type=member" target="_blank">bidding Ranking</a> In the ranking',
	'share_space' => '{actor} Share your space',
	'share_blog' => '{actor} Share your blog <a href="{url}" target="_blank">{subject}</a>',
	'share_album' => '{actor} Share your album <a href="{url}" target="_blank">{albumname}</a>',
	'share_pic' => '{actor} Share your album {albumname} In the <a href="{url}" target="_blank"> Picture</a>',
	'share_thread' => '{actor} Share your posts <a href="{url}" target="_blank">{subject}</a>',
	'share_article' => '{actor} Share your article <a href="{url}" target="_blank">{subject}</a>',
	'magic_present_note' => 'Gave you a prop <a href="{url}" target="_blank">{name}</a>',
	'friend_add' => '{actor} And you become friends',
	'friend_request' => '{actor} Request to add you to friends {note}&nbsp;&nbsp;<a onclick="showWindow(this.id, this.href, \'get\', 0);" class="xw1" id="afr_{uid}" href="{url}">Approve the application</a>',
	'doing_reply' => '{actor} Reply your <a href="{url}" target="_blank">Record</a>',
	'wall_reply' => '{actor} Reply your <a href="{url}" target="_blank">Comments</a>',
	'pic_comment_reply' => '{actor} Reply your <a href="{url}" target="_blank">Image position</a>',
	'blog_comment_reply' => '{actor} Reply your <a href="{url}" target="_blank">Blog comments</a>',
	'share_comment_reply' => '{actor} Reply your <a href="{url}" target="_blank">Share comments</a>',
	'wall' => '{actor} To you on the message board <a href="{url}" target="_blank">Guestbook</a>',
	'pic_comment' => '{actor} Commented on your <a href="{url}" target="_blank">Picture</a>',
	'blog_comment' => '{actor} commented on your blog <a href="{url}" target="_blank">{subject}</a>',
	'share_comment' => '{actor} Commented on your <a href="{url}" target="_blank">Share</a>',
	'click_blog' => '{actor} In Your blog <a href="{url}" target="_blank">{subject}</a> Position',
	'click_pic' => '{actor} In Your <a href="{url}" target="_blank">Picture</a> Position',
	'click_article' => '{actor} In Your article <a href="{url}" target="_blank">{subject}</a> Position',
	'show_out' => '{actor} Access to your home page, bid ranking championship last Credits is also consumed',
	'puse_article' => 'Congratulations, Your <a href="{url}" target="_blank">{subject}</a>Has been added to the list of articles, <a href="{newurl}" target="_blank">Click to view</a>',

	'myinvite_request' => 'A new apps message, <a href="home.php?mod=space&do=notice&view=userapp">Click here to enter the application message page related operations</a>',


	'group_member_join' => '{actor} Add to your <a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a> Group need to audit, Please go to group<a href="{url}" target="_blank">Manage background</a> Audit',
	'group_member_invite' => '{actor} Invite you to join <a href="forum.php?mod=group&fid={fid}" target="_blank">{groupname}</a> Group, <a href="{url}" target="_blank">Click here to join now</a>',
	'group_member_check' => 'You have passed <a href="{url}" target="_blank">{groupname}</a> Audit of the group, Please <a href="{url}" target="_blank">Click here to visit</a>',
	'group_member_check_failed' => 'You do not pass <a href="{url}" target="_blank">{groupname}</a> Audit of the group.',
	'group_mod_check' => 'You create groups <a href="{url}" target="_blank">{groupname}</a> Through the Audit, Please <a href="{url}" target="_blank">Click here to visit</a>',

	'reason_moderate' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_merge' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_post' => 'You in <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> The post has been {actor} Delete <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_delete_comment' => 'You in <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> Reviews are {actor} Delete <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_ban_post' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} {modaction} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_warn_post' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} {modaction}<br />
Continuous {warningexpiration} Days accumulated {warninglimit} Warnings, You will be automatically disabled to speak {warningexpiration} days.<br />
Up to now, You have been {authorwarnings} Warnings, Please note that! <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_move' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Moves to the <a href="forum.php?mod=forumdisplay&fid={tofid}" target="_blank">{toname}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_copy' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Copy as <a href="forum.php?mod=viewthread&tid={threadid}" target="_blank">{subject}</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_remove_reward' => 'The theme of your reward <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Revocation <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_update' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Add stamp {stamp} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamp_delete' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Revocation stamp <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_update' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Add icon {stamp} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stamplist_delete' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Revocation icon <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickreply' => 'You in the theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Replies been {actor} Top <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_stickdeletereply' => 'You in the theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Replies been {actor} Revocation Top <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_quickclear' => 'Your {cleartype} Be {actor} Remove <div class="quote"><blockquote>{reason}</blockquote></div>',

	'reason_live_update' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Is set to live paste <div class="quote"><blockquote>{reason}</blockquote></div>',
	'reason_live_cancle' => 'Your theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Cancel live <div class="quote"><blockquote>{reason}</blockquote></div>',

	'modthreads_delete' => 'You publish theme {threadsubject} Is not approved, has been deleted!',

	'modthreads_delete_reason' => 'You publish theme {threadsubject} Is not approved, has been deleted! <div class="quote"><blockquote>{reason}</blockquote></div>',
	'modthreads_validate' => 'You publish theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{threadsubject}</a> Have been audited by! &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',

	'modreplies_delete' => 'You post replies did not pass the audit, has now been deleted! <p class="summary">Reply a contents: <span>{post}</span></p>',

	'modreplies_validate' => 'You post replies did not pass the audit! &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">View &rsaquo;</a> <p class="summary">Reply a contents: <span>{post}</span></p>',

	'transfer' => 'You receive a sum from {actor} integral transfer {credit} &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=log&suboperation=creditslog" target="_blank" class="lit">View &rsaquo;</a>
<p class="summary">{actor} Say: <span>{transfermessage}</span></p>',

	'addfunds' => 'Credits recharge you submit the request has been completed, The corresponding amount of Credits credited to your points account &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">View &rsaquo;</a>
<p class="summary">Order No.<span>{orderid}</span></p><p class="summary">Expenditure: <span>Usd {price}</span></p><p class="summary">Income: <span>{value}</span></p>',

	'rate_reason' => 'You in the theme <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> The post has been {actor} Score {ratescore} <div class="quote"><blockquote>{reason}</blockquote></div>',

	'recommend_note_post' => 'Congratulation, Your posts <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be edited using',

	'rate_removereason' => 'You in the theme <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank">{subject}</a> Posts in ratings {ratescore} <div class="quote"><blockquote>{reason}</blockquote></div> Be {actor} Revocation',

	'trade_seller_send' => '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> Buy your goods <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>, Other have payment, Waiting for your shipment &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">View &rsaquo;</a>',

	'trade_buyer_confirm' => 'You purchase goods <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a>, <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> has shipped, Waiting for you to confirm &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">View &rsaquo;</a>',

	'trade_fefund_success' => 'Goods <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> Has been successfully refund &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Evaluate &rsaquo;</a>',

	'trade_success' => 'Goods <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> Has been successfully trading &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Evaluate &rsaquo;</a>',

	'trade_order_update_sellerid' => 'Seller <a href="home.php?mod=space&uid={sellerid}" target="_blank">{seller}</a> Modified goods <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> Transactions single, Please confirm &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">View &rsaquo;</a>',

	'trade_order_update_buyerid' => 'Buyers <a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> Modified goods <a href="forum.php?mod=trade&orderid={orderid}" target="_blank">{subject}</a> Transactions single, Please confirm &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">View &rsaquo;</a>',

	'eccredit' => 'Transactions with you {actor} Has been evaluated &nbsp; <a href="forum.php?mod=trade&orderid={orderid}" target="_blank" class="lit">Back to the evaluat &rsaquo;</a>',

	'activity_notice' => '{actor} Apply to join the activities organized <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>, Please review &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',

	'activity_apply' => 'Activity <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> The promoters {actor} You to participate in this activity has been approved &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_replenish' => 'Activity <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> The promoters {actor} Notice you need to improve the enrollment information &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_delete' => 'Activity <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> The promoters {actor} Refused you to participate in this activity &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">View &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_cancel' => '{actor} Cancel to participate <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Activity &nbsp; <a href="forum.php?mod=viewthread&tid={tid}"  target="_blank" class="lit">View &rsaquo;</a> <div class="quote"><blockquote>{reason}</blockquote></div>',

	'activity_notification' => 'Activity <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> The promoters {actor} Sent a notice&nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View Activity &rsaquo;</a> <div class="quote"><blockquote>{msg}</blockquote></div>',

	'reward_question' => 'The theme of your reward <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> Be {actor} Set the best answer &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',

	'reward_bestanswer' => 'Your reply is offering a reward of theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> author {actor} Selected as best answer &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',

	'reward_bestanswer_moderator' => 'You Reward theme in <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>Reply was selected as best answer &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',

	'comment_add' => '{actor} Review Have you ever theme <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a>Post &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">View &rsaquo;</a>',

	'reppost_noticeauthor' => '{actor} Reply your posts <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="lit">View</a>',

	'task_reward_credit' => 'Congratulations on completing the task: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Get Credits {creditbonus} &nbsp; <a href="home.php?mod=spacecp&ac=credit&op=base" target="_blank" class="lit">View My Credits &rsaquo;</a></p>',

	'task_reward_magic' => 'Congratulations on completing the task: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Get props <a href="home.php?mod=magic&action=mybox" target="_blank">{rewardtext}</a> {bonus}s',

	'task_reward_medal' => 'Congratulations on completing the task: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Awarded medals <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> Valid {bonus} Days',

	'task_reward_medal_forever' => 'Congratulations on completing the task: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Awarded medals <a href="home.php?mod=medal" target="_blank">{rewardtext}</a> Permanent',

	'task_reward_invite' => 'Congratulations on completing the task: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Get<a href="home.php?mod=spacecp&ac=invite" target="_blank"> Invitation codes{rewardtext} </a> Valid {bonus} Days',

	'task_reward_group' => 'Congratulations on completing the task: <a href="home.php?mod=task&do=view&id={taskid}" target="_blank">{name}</a>, Get User group {rewardtext} Valid {bonus} Days &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">See what I can do &rsaquo;</a>',

	'user_usergroup' => 'Upgrade to your user group {usergroup} &nbsp; <a href="home.php?mod=spacecp&ac=usergroup" target="_blank" class="lit">See what I can do &rsaquo;</a>',

	'grouplevel_update' => 'Congratulations, Your group {groupname} Has been upgraded to {newlevel}.',

	'thread_invite' => '{actor} Invite you {invitename} <a href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a> &nbsp; <a href="forum.php?mod=viewthread&tid={tid}" target="_blank" class="lit">View &rsaquo;</a>',
	'blog_invite' => '{actor} Invite you to view blog <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a> &nbsp; <a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank" class="lit">View &rsaquo;</a>',
	'article_invite' => '{actor} Invite you to view article <a href="{url}" target="_blank">{subject}</a> &nbsp; <a href="{url}" target="_blank" class="lit">View &rsaquo;</a>',
	'invite_friend' => 'Congratulations, you have successfully invited to {actor} And become your friends',

	'poke_request' => '<a href="{fromurl}" class="xi2">{fromusername}</a>: <span class="xw0">{pokemsg}&nbsp;</span><a href="home.php?mod=spacecp&ac=poke&op=reply&uid={fromuid}&from=notice" id="a_p_r_{fromuid}" class="xw1" onclick="showWindow(this.id, this.href, \'get\', 0);">Re say hello</a><span class="pipe">|</span><a href="home.php?mod=spacecp&ac=poke&op=ignore&uid={fromuid}&from=notice" id="a_p_i_{fromuid}" onclick="showWindow(\'pokeignore\', this.href, \'get\', 0);">Ignore</a>',

	'profile_verify_error' => '{verify}Information Audit is rejected, The following fields need to re-fill:<br/>{profile}<br/>reasons: {reason}',
	'profile_verify_pass' => 'Congratulations, You fill {verify} information audit has passed',
	'profile_verify_pass_refusal' => 'Unfortunately, You fill {verify} Information Audit has been rejected',
	'member_ban_speak' => 'You have been {user} Banned to Post, Deadline：{day} Days(0: On behalf of the permanent banned to post), reasons: {reason}',
	'member_ban_visit' => 'You have been {user} Banned to Access, Deadline：{day} Days(0: On behalf of the permanent banned to Access), reasons: {reason}',
	'member_ban_status' => 'You have been {user} Lock, reasons: {reason}',
	'member_follow' => 'The people you follow have been {count} The new feed。<a href="home.php?mod=follow">Click to view</a>',
	'member_follow_add' => '{actor} Listen to you. <a href="home.php?mod=follow&do=follower">Click to view</a>',

	'member_moderate_invalidate' => 'Failed to pass your account administrator audit, Please<a href="home.php?mod=spacecp&ac=profile">Resubmit the registration</a>。<br />Administrator Message: <b>{remark}</b>',
	'member_moderate_validate' => 'Your account has been approved, <br />Administrator Message: <b>{remark}</b>',
	'member_moderate_invalidate_no_remark' => 'Failed to pass your account administrator audit, Please <a href="home.php?mod=spacecp&ac=profile">Resubmit the registration</a>。',
	'member_moderate_validate_no_remark' => 'Your account has been approved.',
	'manage_verifythread' => 'New pending theme, <a href="admin.php?action=moderate&operation=threads&dateline=all">Now audit</a>',
	'manage_verifypost' => 'New pending replies, <a href="admin.php?action=moderate&operation=replies&dateline=all">Now audit</a>',
	'manage_verifyuser' => 'New pending Member, <a href="admin.php?action=moderate&operation=members">Now audit</a>',
	'manage_verifyblog' => 'New pending logs, <a href="admin.php?action=moderate&operation=blogs">Now audit</a>',
	'manage_verifydoing' => 'New pending record, <a href="admin.php?action=moderate&operation=doings">Now audit</a>',
	'manage_verifypic' => 'New pending Pictures, <a href="admin.php?action=moderate&operation=pictures">Now audit</a>',
	'manage_verifyshare' => 'New pending Share, <a href="admin.php?action=moderate&operation=shares">Now audit</a>',
	'manage_verifycommontes' => 'New pending message / comments, <a href="admin.php?action=moderate&operation=comments">Now audit</a>',
	'manage_verifyrecycle' => 'Recycle Bin have new pending theme, <a href="admin.php?action=recyclebin">Now deal</a>',
	'manage_verifyrecyclepost' => 'Replies Recycle Bin have new pending Replies, <a href="admin.php?action=recyclebinpost">Now deal</a>',
	'manage_verifyarticle' => 'New pending article, <a href="admin.php?action=moderate&operation=articles">Now audit</a>',
	'manage_verifymedal' => 'New pending Medal of application, <a href="admin.php?action=medals&operation=mod">Now audit</a>',
	'manage_verifyacommont' => 'New pending article comments, <a href="admin.php?action=moderate&operation=articlecomments">Now audit</a>',
	'manage_verifytopiccommont' => 'New pending Special topic issue comments, <a href="admin.php?action=moderate&operation=topiccomments">Now audit</a>',
	'manage_verify_field' => 'New to be treated {verifyname}, <a href="admin.php?action=verify&operation=verify&do={doid}">Now deal</a>',
	'system_notice' => '{subject}<p class="summary">{message}</p>',
	'system_adv_expiration' => 'The following advertisements will be your site {day} Expire in days, the timely processing of advertising:<br />{advs}',
	'report_change_credits' => '{actor} Processing your Report {creditchange} {msg}',
	'at_message' => '<a href="home.php?mod=space&uid={buyerid}" target="_blank">{buyer}</a> in the theme <a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">{subject}</a> You are mentioned in <div class="quote"><blockquote>{message}</blockquote></div><a href="forum.php?mod=redirect&goto=findpost&ptid={tid}&pid={pid}" target="_blank">Now to see</a>。',
	'new_report' => 'New Report waiting to be processed, <a href="admin.php?action=report" target="_blank">Click here to enter the background processing</a>。',
	'new_post_report' => 'New Report waiting to be processed, <a href="forum.php?mod=modcp&action=report&fid={fid}" target="_blank">Click here to enter the management panel</a>.',
	'magics_receive' => 'You receive {actor} Give you props {magicname}
<p class="summary">{actor} Say: <span>{msg}</span></p>
<p class="mbn"><a href="home.php?mod=magic" target="_blank">Rebate props</a><span class="pipe">|</span><a href="home.php?mod=magic&action=mybox" target="_blank">View my props box</a></p>',
	'invite_collection' => '{actor} Invite you to participate in the maintenance scouring album  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>.<br /> <a href="forum.php?mod=collection&action=edit&op=acceptinvite&ctid={ctid}&dateline={dateline}">Accept the invitation</a>',
	'collection_removed' => 'The scouring album that you are involved in the maintenance  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> Has been {actor} Close.',
	'exit_collection' => 'You have to exit maintenance scouring album  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a>。',
	'collection_becommented' => 'You scouring album  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> Received a new comment.',
	'collection_befollowed' => 'You scouring album <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> New users to subscribe!',
	'collection_becollected' => 'Congratulations on your theme <a href="forum.php?mod=viewthread&tid={tid}">{threadname}</a> scouring album been  <a href="forum.php?mod=collection&action=view&ctid={ctid}">{collectionname}</a> Collection!',

	'pmreportcontent' => '{pmreportcontent}',

);

?>