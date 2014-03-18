<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupactivity.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupactivity_fids' => 'To develop a group',
	'groupactivity_fids_comment' => 'Specify the group, a plurality ID please use a comma "," separated.',
	'groupactivity_gtids' => 'Groups type',
	'groupactivity_gtids_comment' => 'Set Group Where type, You can hold down the CTRL multiple choice, Select All or Deselect All are not limited',
	'groupactivity_uids' => 'Initiator UID',
	'groupactivity_uids_comment' => 'Setting activities initiator UID, a plurality UID please use a comma "," separated.',
	'groupactivity_startrow' => 'Initial data rows',
	'groupactivity_startrow_comment' => 'For information on setting the number of rows of data starting, Please enter specific values, 0 from the first line, And so on',
	'groupactivity_items' => 'Display the number of data',
	'groupactivity_items_comment' => 'Set up a display theme number of entries, Please set as an integer greater than 0',
	'groupactivity_titlelength' => 'Title maximum bytes',
	'groupactivity_titlelength_comment' => 'Set when the title is longer than the set, Whether the title is automatically reduced to the number of bytes in the set, 0 will not autoreduction',
	'groupactivity_fnamelength' => 'Title maximum number of bytes containing the forum name',
	'groupactivity_fnamelength_comment' => 'Set the title length in forum name length counted together',
	'groupactivity_summarylength' => 'The number of theme brief text',
	'groupactivity_summarylength_comment' => 'Set the theme brief text number 0 to use the default value of 255',
	'groupactivity_tids' => 'Specify the subject',
	'groupactivity_tids_comment' => 'Set to specify the display theme tid, a plurality tid please use a comma "," separated. Note: Leave blank for no filtering',
	'groupactivity_keyword' => 'Title Keyword',
	'groupactivity_keyword_comment' => 'Set the title contains keywords. Note: Leave blank for no filtering; Keywords can use wildcards *; Search by more keywords, available space, or AND connection. As win32 AND unix; Match multiple keywords by part | or OR connection. As win32 OR unix',
	'groupactivity_typeids' => 'Theme type',
	'groupactivity_typeids_comment' => 'Set specific type theme.Note: Select All or Deselect All are without any filtering',
	'groupactivity_typeids_all' => 'All Theme type',
	'groupactivity_sortids' => 'Type info',
	'groupactivity_sortids_comment' => 'Set the theme of the type information. Note: Select All or Deselect All are without any filtering',
	'groupactivity_sortids_all' => 'All type info',
	'groupactivity_digest' => 'Digest Topics filter',
	'groupactivity_digest_comment' => 'Set a specific range of topics. Note: Select All or Deselect All are without any filtering',
	'groupactivity_digest_0' => 'Normal Threads',
	'groupactivity_digest_1' => 'Digest I',
	'groupactivity_digest_2' => 'Digest II',
	'groupactivity_digest_3' => 'Digest III',
	'groupactivity_stick' => 'Top topic filter',
	'groupactivity_stick_comment' => 'Set a specific range of topics. Note: Select All or Deselect All are without any filtering',
	'groupactivity_stick_0' => 'Normal Threads',
	'groupactivity_stick_1' => 'Top I',
	'groupactivity_stick_2' => 'Top II',
	'groupactivity_stick_3' => 'Top III',
	'groupactivity_special' => 'Special topic filter',
	'groupactivity_special_comment' => 'Set a specific range of topics. Note: Select All or Deselect All are without any filtering',
	'groupactivity_special_1' => 'Vote theme',
	'groupactivity_special_2' => 'Commodity theme',
	'groupactivity_special_3' => 'Reward theme',
	'groupactivity_special_4' => 'Events Themes',
	'groupactivity_special_5' => 'The subject of debate',
	'groupactivity_special_0' => 'Normal Threads',
	'groupactivity_special_reward' => 'Reward topic filter',
	'groupactivity_special_reward_comment' => 'Set a specific type of reward theme',
	'groupactivity_special_reward_0' => 'All',
	'groupactivity_special_reward_1' => 'Resolved',
	'groupactivity_special_reward_2' => 'Unresolved',
	'groupactivity_recommend' => 'Recommended topic filter',
	'groupactivity_recommend_comment' => 'Set whether to display only the theme of the recommended',
	'groupactivity_orderby' => 'Topic Sort by',
	'groupactivity_orderby_comment' => 'Set which field or sort the topics',
	'groupactivity_orderby_lastpost' => 'Last reply time reverse sort',
	'groupactivity_orderby_dateline' => 'Published reverse order',
	'groupactivity_orderby_replies' => 'Sort by Replies reverse',
	'groupactivity_orderby_views' => 'Press Views reverse sort',
	'groupactivity_orderby_heats' => 'Heat reverse order',
	'groupactivity_orderby_recommends' => 'Evaluation reverse order by subject',
	'groupactivity_orderby_hourviews' => 'Within the time specified Views reverse sort',
	'groupactivity_orderby_todayviews' => 'Press the reverse order of the day Views',
	'groupactivity_orderby_weekviews' => 'Views this week reverse order',
	'groupactivity_orderby_monthviews' => 'Views reverse order by month',
	'groupactivity_orderby_hours' => 'Specified time (hours)',
	'groupactivity_orderby_hours_comment' => 'Views reverse sort within a specified time time value',
	'groupactivity_orderby_todayhots' => 'The day has sold reverse order',
	'groupactivity_orderby_weekhots' => 'Week sold reverse order',
	'groupactivity_orderby_monthhots' => 'Month has sold reverse order',
	'groupactivity_price_add' => ' Append ',
	'groupactivity_place' => 'Event Location',
	'groupactivity_class' => 'Type of activity',
	'groupactivity_class_all' => 'All type',
	'groupactivity_gender' => 'Required Gender',
	'groupactivity_gender_0' => 'Not limited',
	'groupactivity_gender_1' => 'Boy',
	'groupactivity_gender_2' => 'Girl',
	'groupactivity_orderby_weekstart' => 'Sort by within a week Event Start Time',
	'groupactivity_orderby_monthstart' => 'Sort by month Event Start Time',
	'groupactivity_orderby_weekexp' => 'Sort by week registration deadline',
	'groupactivity_orderby_monthexp' => 'To registration deadline Sort by month',
	'groupactivity_gviewperm' => 'Group Browse permissions',
	'groupactivity_gviewperm_nolimit' => 'Not limited',
	'groupactivity_gviewperm_only_member' => 'Members only',
	'groupactivity_gviewperm_all_member' => 'Everyone',
	'groupactivity_highlight' => 'Get Highlight value',
);

?>