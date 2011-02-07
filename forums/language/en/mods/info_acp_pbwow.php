<?php

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_PBWOW_INFO'			=> 'PBWoW',
	'ACP_PBWOW_INDEX_INFO'		=> 'Index',
	'ACP_PBWOW_CONFIG_INFO'		=> 'Configuration',
	'ACP_PBWOW_ADS_INFO'		=> 'Advertisements',

	'LOG_PBWOW_CONFIG'			=> '<strong>Altered PBWoW settings</strong><br />&raquo; %s',
	
	// Adding the permissions
	//'acl_a_pbwow_auth'		=> array('lang' => 'Can alter PBWoW settings', 'cat' => 'misc'),
));

?>