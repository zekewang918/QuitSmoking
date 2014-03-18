<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_post.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'post_name' => 'Forum Posts class task',
	'post_desc' => 'o complete the task, active forum atmosphere by posting replies',
	'post_complete_var_act' => 'Action',
	'post_complete_var_act_newthread' => 'New Topic',
	'post_complete_var_act_newreply' => 'New Reply',
	'post_complete_var_act_newpost' => 'New Thread / Reply',
	'post_complate_var_forumid' => 'Forum restrictions',
	'post_complate_var_forumid_comment' => 'Set membership only to complete the task in a forum',
	'post_complate_var_threadid' => 'Reply designated theme',
	'post_complate_var_threadid_comment' => 'Setting member only reply to this topic in order to complete the task, please fill out the theme of TID',
	'post_complate_var_author' => 'Reply Specify Authors',
	'post_complate_var_author_comment' => 'Set Member only reply to the theme of the authors published in order to complete the task, please fill out the author\'s username',
	'post_complete_var_num' => 'The implementation of the minimum action times',
	'post_complete_var_num_comment' => 'The minimum number of members need to perform the corresponding action',
	'post_complete_var_time' => 'Time limit (hours)',
	'post_complete_var_time_comment' => 'Set membership application tasks to a time limit to complete the task, the members in this time failed to complete the task is not eligible for the reward and mark the task failed, 0 or blank for no limit',

	'task_complete_forumid' => 'In the forum {value} ',
	'task_complete_act_newthread' => 'New Topic {num} Times',
	'task_complete_act_newpost' => 'New Thread / Reply {num} Times',
	'task_complete_act_newreply_thread' => 'In "{value}" Reply to topic {num} Times',
	'task_complete_act_newreply_author' => 'Reply author "{value}" topic {num} Times',
);

?>