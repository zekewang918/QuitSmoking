<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_exif.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(

	'unknown' => 'unknown',
	'resolutionunit' => array('', '', 'Inch', 'Cm'),
	'exposureprogram' => array('Undefined', 'Manual', 'Standard procedure', 'Aperture Priority', 'Shutter Priority', 'Depth of field precedent', 'Sports mode', 'Portrait mode', 'Landscape mode'),
	'meteringmode' => array(
		'0'		=>	'unknown',
		'1'		=>	'Average',
		'2'		=>	'Center-weighted average',
		'3'		=>	'Point measurement',
		'4'		=>	'Partition',
		'5'		=>	'Assess',
		'6'		=>	'Part',
		'255'	=>	'Other'
		),
	'lightsource' => array(
		'0'		=>	'unknown',
		'1'		=>	'Sunlight',
		'2'		=>	'Fluorescent lamps',
		'3'		=>	'Lncandescent light',
		'10'	=>	'flash lamp',
		'17'	=>	'Standard light A',
		'18'	=>	'Standard light B',
		'19'	=>	'Standard light C',
		'20'	=>	'D55',
		'21'	=>	'D65',
		'22'	=>	'D75',
		'255'	=>	'Other'
		),
	'img_info' => array ('File Info' => 'No EXIF Info'),

	'FileName' => 'FileName',
	'FileType' => 'FileType',
	'MimeType' => 'File Format',
	'FileSize' => 'FileSize',
	'FileDateTime' => 'Time',
	'ImageDescription' => 'Imag Info',
	'auto'     => 'Auto',
	'Make'     => 'Manufacturers',
	'Model'    => 'Model',
	'Orientation' => 'Direction',
	'XResolution' => 'XRDirection',
	'YResolution' => 'YRDirection',
	'Software'    => 'Create software',
	'DateTime'    => 'Modified time',
	'Artist'      => 'Artist',
	'YCbCrPositioning' => 'YCbCr Position control',
	'Copyright'   => 'Copyright',
	'Photographer'=> 'Photography copyright',
	'Editor'      => 'Editor copyright',
	'ExifVersion' => 'ExifVersion',
	'FlashPixVersion' => 'FlashPixVersion',
	'DateTimeOriginal' => 'Shooting Time',
	'DateTimeDigitized'=> 'Digitized Time',
	'Height'  => 'Shoot with High resolution',
	'Width'   => 'Shoot with Width resolution',
	'ApertureValue' => 'Aperture',
	'ShutterSpeedValue' => 'Shutter speed',
	'ApertureFNumber'   => 'Shutter aperture',
	'MaxApertureValue'  => 'Maximum aperture',
	'ExposureTime'      => 'Exposure time',
	'FNumber'           => 'F-Number',
	'MeteringMode'      => 'Metering Mode',
	'LightSource'       => 'Light source',
	'Flash'             => 'flash lamp',
	'ExposureMode'		=> 'Exposure Mode',
	'manual'            => 'Manual',
	'WhiteBalance'      => 'White Balance',
	'ExposureProgram'   => 'Exposure Program',
	'ExposureBiasValue' => 'Exposure BiasValue',
	'ISOSpeedRatings'   => 'ISO SpeedRatings',
	'ComponentsConfiguration' => 'Component configuration',
	'CompressedBitsPerPixel'  => 'Image compression rate',
	'FocusDistance'     => 'Focusing distance',
	'FocalLength'       => 'Focal length',
	'FocalLengthIn35mmFilm' => 'Equivalent to 35mm focal length',
	'UserCommentEncoding' => 'user comment encoding',
	'UserComment'		=> 'User comments',
	'ColorSpace'		=> 'Color Space',
	'ExifImageLength'   => 'ExifImageLength',
	'ExifImageWidth'    => 'ExifImageWidth',
	'FileSource'        => 'File Source',
	'SceneType'			=> 'The type of scene',
	'ThumbFileType'     => 'Thumbnail file format',
	'ThumbMimeType'     => 'Thumbnail Mime format'
);

?>