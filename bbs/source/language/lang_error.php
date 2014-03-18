<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_error.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'System Message' => 'Site Information',

	'config_notfound' => 'configuration file "config_global.php" Not found or can not be accessed£¬ Make sure you have correctly installed the program',
	'template_notfound' => 'The template file is not found or can not be accessed',
	'directory_notfound' => 'The directory is not found or can not be accessed',
	'request_tainting' => 'Your current access request which contains illegal characters£¬Has been rejected by the system',
	'db_help_link' => 'Click here for help',
	'db_error_message' => 'Error message',
	'db_error_sql' => '<b>SQL</b>: $sql<br />',
	'db_error_backtrace' => '<b>Backtrace</b>: $backtrace<br />',
	'db_error_no' => 'Error Codes',
	'db_notfound_config' => 'configuration file "config_global.php" Not found or can not be accessed¡£',
	'db_notconnect' => 'Unable to connect to database server',
	'db_security_error' => 'Query security threats',
	'db_query_sql' => 'query statement',
	'db_query_error' => 'query statement error',
	'db_config_db_not_found' => 'Database configuration error£¬Please carefully check config_global.php file',
	'system_init_ok' => 'The website system initialization completed£¬Please<a href="index.php">Click here</a>in',
	'backtrace' => 'Operating information',
	'error_end_message' => '<a href="http://{host}">{host}</a> Has this error message detail recording, This gives you access inconvenience we apologize',
	'mobile_error_end_message' => '<a href="http://{host}">{host}</a> We apologize the inconvenience caused by this error to your',

	'file_upload_error_-101' => 'Upload Failed£¡Upload file does not exist or is not legitimate£¬Please go back¡£',
	'file_upload_error_-102' => 'Upload Failed£¡Non-picture type file£¬Please go back¡£',
	'file_upload_error_-103' => 'Upload Failed£¡Unable to write to the file or write failure£¬Please go back¡£',
	'file_upload_error_-104' => 'Upload Failed£¡Unrecognized image file format£¬Please go back¡£',
);

?>