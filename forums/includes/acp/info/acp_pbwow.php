<?php
if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_pbwow_info
{
    function module()
    {
        return array(
			'filename'	=> 'acp_pbwow',
			'title'		=> 'ACP_PBWOW_INFO',
			'version'	=> 'RC4',
			'modes'		=> array(
				'index'		=> array('title' => 'ACP_PBWOW_INDEX_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PBWOW_INFO')),
				'config'	=> array('title' => 'ACP_PBWOW_CONFIG_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PBWOW_INFO')),
				'ads'		=> array('title' => 'ACP_PBWOW_ADS_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PBWOW_INFO')),
            ),
        );
    }

    function install()
    {
    }

    function uninstall()
    {
    }
}
?>