<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_sortlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'sortlist_fids' => 'In forum',
	'sortlist_fids_comment' => 'Set allowed to participate in the forum called new posts, You can hold down the CTRL multiple choice, Select All or Deselect All are not limited',
	'sortlist_startrow' => 'Initial data rows',
	'sortlist_startrow_comment' => 'For information on setting the number of rows of data starting, Please enter specific values, 0 from the first line, And so on',
	'sortlist_showitems' => 'Display the number of data',
	'sortlist_showitems_comment' => 'Set the the Topic number of entries displayed at one time, set to an integer greater than 0',
	'sortlist_titlelength' => 'Title maximum bytes',
	'sortlist_titlelength_comment' => 'Set when the title is longer than the set, Whether the title is automatically reduced to the number of bytes in the set, 0 will not autoreduction',
	'sortlist_fnamelength' => 'Title maximum number of bytes containing the forum name',
	'sortlist_fnamelength_comment' => 'Set the title length in forum name length counted together',
	'sortlist_summarylength' => 'The number of theme brief text',
	'sortlist_summarylength_comment' => 'Set the theme brief text number 0 to use the default value of 255',
	'sortlist_tids' => 'Specify the subject',
	'sortlist_tids_comment' => 'Set to specify the display theme tid, a plurality tid please use a comma "," separated. Note: Leave blank for no filtering',
	'sortlist_keyword' => 'Title Keyword',
	'sortlist_keyword_comment' => 'Set the title contains keywords. Note: Leave blank for no filtering; Keywords can use wildcards *; Search by more keywords, available space, or AND connection. As win32 AND unix; Match multiple keywords by part | or OR connection. As win32 OR unix',
	'sortlist_typeids' => 'Theme type',
	'sortlist_typeids_comment' => 'Set specific type theme.Note: Select All or Deselect All are without any filtering',
	'sortlist_typeids_all' => 'All Theme type',
	'sortlist_sortids' => 'Type info',
	'sortlist_sortids_comment' => 'Set the theme of the type information. Note: Select All or Deselect All are without any filtering',
	'sortlist_sortids_all' => 'All type info',
	'sortlist_digest' => 'Digest Topics filter',
	'sortlist_digest_comment' => 'Set a specific range of topics. Note: Select All or Deselect All are without any filtering',
	'sortlist_digest_0' => 'Normal Threads',
	'sortlist_digest_1' => 'Digest I',
	'sortlist_digest_2' => 'Digest II',
	'sortlist_digest_3' => 'Digest III',
	'sortlist_stick' => 'Top topic filter',
	'sortlist_stick_comment' => 'Set a specific range of topics. Note: Select All or Deselect All are without any filtering',
	'sortlist_stick_0' => 'Normal Threads',
	'sortlist_stick_1' => 'Top I',
	'sortlist_stick_2' => 'Top II',
	'sortlist_stick_3' => 'Top III',
	'sortlist_special' => 'Special topic filter',
	'sortlist_special_comment' => 'Set a specific range of topics. Note: Select All or Deselect All are without any filtering',
	'sortlist_special_1' => 'Vote theme',
	'sortlist_special_2' => 'Commodity theme',
	'sortlist_special_3' => 'Reward theme',
	'sortlist_special_4' => 'Events Themes',
	'sortlist_special_5' => 'The subject of debate',
	'sortlist_special_0' => 'Normal Threads',
	'sortlist_special_reward' => 'Reward topic filter',
	'sortlist_special_reward_comment' => 'Set a specific type of reward theme',
	'sortlist_special_reward_0' => 'All',
	'sortlist_special_reward_1' => 'Resolved',
	'sortlist_special_reward_2' => 'Unresolved',
	'sortlist_recommend' => 'Recommended topic filter',
	'sortlist_recommend_comment' => 'Set whether to display only the theme of the recommended',
	'sortlist_orderby' => 'Topic Sort by',
	'sortlist_orderby_comment' => 'Set which field or sort the topics',
	'sortlist_orderby_lastpost' => 'Last reply time reverse sort',
	'sortlist_orderby_dateline' => 'Published reverse order',
	'sortlist_orderby_replies' => 'Sort by Replies reverse',
	'sortlist_orderby_views' => 'Press Views reverse sort',
	'sortlist_orderby_heats' => 'Heat reverse order',
	'sortlist_orderby_recommends' => 'Evaluation reverse order by subject',
	'sortlist_lastpost' => 'Theme Published',
	'sortlist_lastpost_nolimit' => 'Not limit',
	'sortlist_lastpost_hour' => 'Within 1 hour',
	'sortlist_lastpost_day' => 'Within 24 hours',
	'sortlist_lastpost_week' => 'Within 7 days',
	'sortlist_lastpost_month' => 'Within 1 month',
	'sortlist_orderby_hours_comment' => 'Views reverse sort within a specified time time value',
);

?>