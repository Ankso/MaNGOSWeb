<?php

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// general
	'ACP_PBWOW_INDEX_TITLE'				=> 'PBWoW Module Index',
	'ACP_PBWOW_INDEX_TITLE_EXPLAIN'		=> 'Thank you for choosing PBWoW, hope you like it.',
	'ACP_PBWOW_INDEX_SETTINGS'			=> 'General information',
	'PBWOW_ENABLE'						=> 'Enable PBWoW',
	'PBWOW_ENABLE_EXPLAIN'				=> 'Turns the whole portal on or off.',
	'PBWOW_VERSION_CHECK'				=> 'Versioncheck on Portal',
	
	// config
	'ACP_PBWOW_CONFIG_TITLE'			=> 'PBWoW Configuration',
	'ACP_PBWOW_CONFIG_TITLE_EXPLAIN'	=> 'Here you can choose some options for your PBWoW installation.',
	'ACP_PBWOW_CONFIG_SETTINGS'			=> 'Configuration Options',

	'ACP_PBWOW_TOPNAV'					=> 'Top Navigation Bar',
	'PBWOW_TOPNAV_CODE'					=> 'Top navigation bar code',
	'PBWOW_TOPNAV_CODE_EXPLAIN'			=> 'Enter your code here, the bar will display at the top of every page. Note that you need to clear your forum cache before these changes will go into effect.',

	'ACP_PBWOW_IE6MESSAGE'				=> 'Unsupported Browser (IE6) Warning Message',
	'PBWOW_IE6MESSAGE_ENABLE'			=> 'Enable warning message for old browsers (IE6)',
	'PBWOW_IE6MESSAGE_ENABLE_EXPLAIN'	=> 'By enabling this option, a banner will be shown to visitors of your forum that are still using Internet Explorer 6 or older, advising them to upgrade.',
	'PBWOW_IE6MESSAGE_CODE'				=> 'Unsupported browser warning message code',
	'PBWOW_IE6MESSAGE_CODE_EXPLAIN'		=> 'Customize your warning message code. Visit this website for <a href="http://www.ie6nomore.com/code-samples.html" target="_blank">CODE SAMPLES</a>.',
	
	'ACP_PBWOW_BLIZZ'					=> 'Blizzard Post Styling',
	'PBWOW_BLIZZ_ENABLE'				=> 'Enable Blizzard post styling',
	'PBWOW_BLIZZ_ENABLE_EXPLAIN'		=> 'Enable this feature to let the rank(s) selected below show as "Blizzard" posters, usually reserved for admins and moderators.',
	'PBWOW_BLIZZ_RANKS'					=> 'Blizzard post styling ranks',
	'PBWOW_BLIZZ_RANKS_EXPLAIN'			=> 'Choose the userranks that you want to display as "Blizzard" posters. Note that you need to clear your forum cache before these changes will go into effect.',	

	'ACP_PBWOW_PROPASS'					=> 'Propass Post Styling',
	'PBWOW_PROPASS_ENABLE'				=> 'Enable Propass post styling',
	'PBWOW_PROPASS_ENABLE_EXPLAIN'		=> 'Enable this feature to let the rank(s) selected below show as "Propass" or "Dragon" posters, usually reserved for special users.',
	'PBWOW_PROPASS_RANKS'				=> 'Propass post styling ranks',
	'PBWOW_PROPASS_RANKS_EXPLAIN'		=> 'Choose the userranks that you want to display as "Propass" posters. Note that you need to clear your forum cache before these changes will go into effect.',					

	// advertisements
	'ACP_PBWOW_ADS_TITLE'				=> 'PBWoW Advertisement Settings',
	'ACP_PBWOW_ADS_TITLE_EXPLAIN'		=> 'This page controls the way your PBWoW board displays advertisements. These blocks can of course also be used to put your own content, images, banners or whatever. Just keep in mind the size limitations.',

	'ACP_PBWOW_ADS_INDEX'				=> 'Index Advertisement Block',
	'PBWOW_ADS_INDEX_ENABLE'			=> 'Enable index advertisements',
	'PBWOW_ADS_INDEX_ENABLE_EXPLAIN'	=> 'Enabling this ad will generate a square ads block on the forum index page.',
	'PBWOW_ADS_INDEX_CODE'				=> 'Index advertisment code',
	'PBWOW_ADS_INDEX_CODE_EXPLAIN'		=> 'This block is suitable for advertisements with dimensions: <b>300 x 250</b>. Note that you need to clear your forum cache before these changes will go into effect.',

	'ACP_PBWOW_ADS_TOP'					=> 'Horizontal (Top) Advertisement Block',
	'PBWOW_ADS_TOP_ENABLE'				=> 'Enable horizontal (top) forum advertisements',
	'PBWOW_ADS_TOP_ENABLE_EXPLAIN'		=> 'Enabling this ad will generate a horizontal bar advertisment at the top of viewforum and viewtopic pages.',
	'PBWOW_ADS_TOP_CODE'				=> 'Horizontal (top) advertisment code',
	'PBWOW_ADS_TOP_CODE_EXPLAIN'		=> 'This block is suitable for advertisements with dimensions: <b>728 x 90</b>. Note that you need to clear your forum cache before these changes will go into effect.',

	'ACP_PBWOW_ADS_SIDE'				=> 'Vertical (Side) Advertisement Block',
	'PBWOW_ADS_SIDE_ENABLE'				=> 'Enable vertical (side) forum advertisements',
	'PBWOW_ADS_SIDE_ENABLE_EXPLAIN'		=> 'Enabling this ad will generate a vertical bar advertisment along the right side of viewforum and viewtopic pages.',
	'PBWOW_ADS_SIDE_CODE'				=> 'Vertical (side) advertisment code',
	'PBWOW_ADS_SIDE_CODE_EXPLAIN'		=> 'This block is suitable for advertisements with dimensions: <b>160 x 600</b>. Note that you need to clear your forum cache before these changes will go into effect.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the portal general settings
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Release Announcement',
	'CURRENT_VERSION'		=> 'Current Version',
	'DOWNLOAD_LATEST'		=> 'Download Latest Version',
	'LATEST_VERSION'		=> 'Latest Version',
	'NO_INFO'				=> 'Version server could not be contacted',
	'NOT_UP_TO_DATE'		=> '%s is not up to date',
	'RELEASE_ANNOUNCEMENT'	=> 'Annoucement Topic',
	'UP_TO_DATE'			=> '%s is up to date',
	'VERSION_CHECK'			=> 'MOD Version Check',
));

?>