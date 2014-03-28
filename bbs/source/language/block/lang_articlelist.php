<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_articlelist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'articlelist_aids' => 'Specified articles',
	'articlelist_aids_comment' => 'Fill in the specified article ID (AID), articles with a comma (,) to separate',
	'articlelist_uids' => 'User UID',
	'articlelist_uids_comment' => 'Fill the specified user ID (uid) between multiple users with a comma (,) to separate',
	'articlelist_startrow' => 'Initial data rows',
	'articlelist_startrow_comment' => 'For information on setting the number of rows of data starting, Please enter specific values, 0 from the first line, And so on',
	'articlelist_tag' => 'Polymerization tags',
	'articlelist_tag_comment' => 'Specify the label to be polymerized',
	'articlelist_titlelength' => 'Title Length',
	'articlelist_titlelength_comment' => 'The max length of the set title',
	'articlelist_summarylength' => 'Introduction length',
	'articlelist_summarylength_comment' => 'The max length of the Set Introduction',
	'articlelist_starttime' => 'Published-start',
	'articlelist_starttime_comment' => 'Published in the article after the specified time',
	'articlelist_endtime' => 'Published-end',
	'articlelist_endtime_comment' => 'Published in the article before the appointed time',
	'articlelist_catid' => 'Article columns',
	'articlelist_catid_comment' => 'Select the part of the article belongs',
	'articlelist_picrequired' => 'Filter cover story',
	'articlelist_picrequired_comment' => 'Whether the filter is not set the cover picture of the article',
	'articlelist_orderby' => 'Articles Sort by',
	'articlelist_orderby_comment' => 'Set which field or sort articles',
	'articlelist_orderby_dateline' => 'Published reverse',
	'articlelist_orderby_viewnum' => 'Views reverse',
	'articlelist_orderby_commentnum' => 'Comments reverse',
	'articlelist_orderby_click' => 'Accordance with the position {clickname} num reverse',
	'articlelist_publishdateline' => 'Articles Published',
	'articlelist_publishdateline_nolimit' => 'Not limit',
	'articlelist_publishdateline_hour' => 'Within 1 hour',
	'articlelist_publishdateline_day' => 'Within 24 hours',
	'articlelist_publishdateline_week' => 'Within 7 days',
	'articlelist_publishdateline_month' => 'Within 1 month',
	'articlelist_keyword' => 'Title Keyword',
	'articlelist_keyword_comment' => 'Set the title contains keywords. Note: Leave blank for no filtering; Keywords can use wildcards *; Search by more keywords, available space, or AND connection. As win32 AND unix; Match multiple keywords by part | or OR connection. As win32 OR unix',
);

?>