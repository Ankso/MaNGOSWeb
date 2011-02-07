<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_pbwow
{
	var $u_action;
	var $new_config = array();

	function main($id, $mode)
	{
		global $db, $user, $template;
		global $config, $pbwow_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;;
		
		if (!function_exists('db_theme_data'))
		{
			include($phpbb_root_path . 'includes/acp/acp_styles.' . $phpEx);
		}

		$user->add_lang('mods/lang_pbwow_acp');

		$constantsokay = false;
		$dbtable = PBWOW_CONFIG_TABLE;
		$dbokay = false;
		if($dbtable != 'PBWOW_CONFIG_TABLE'){
			$constantsokay = true;
			if($this->sql_table_exists($dbtable)){
				$pbwow_config = $this->obtain_pbwow_config();
				$this->new_config = $pbwow_config;
				$dbokay = true;
			}
		}
		
		$topics_table_modded = false;
		$topics_table = TOPICS_TABLE;
		$topics_field1 = 'topic_first_poster_rank_img';
		$topics_field2 = 'topic_first_poster_rank_title';
		if($this->sql_field_exists($topics_table, $topics_field1) && $this->sql_field_exists($topics_table, $topics_field2))
		{
			$topics_table_modded = true;
		}

		$action = request_var('action', '');
		$submit = (isset($_POST['submit'])) ? true : false;

		/**
		*	Validation types are:
		*		string, int, bool,
		*		script_path (absolute path in url - beginning with / and no trailing slash),
		*		rpath (relative), rwpath (realtive, writeable), path (relative path, but able to escape the root), wpath (writeable)
		*/
		switch ($mode)
		{
			case 'index':
				$display_vars = array(
					'title'	=> 'ACP_PBWOW_INDEX_TITLE',
					'vars'	=> array(
						//'legend1'					=> 'ACP_PBWOW_INDEX_SETTINGS',
						//'pbwow_enable'				=> array('lang' => 'PORTAL_ENABLE',				'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
					)
				);
			break;
			case 'config':
				$display_vars = array(
					'title'	=> 'ACP_PBWOW_CONFIG_TITLE',
					'vars'	=> array(
						'legend1'					=> 'ACP_PBWOW_TOPNAV',
						'pbwow_topnav_code'			=> array('lang' => 'PBWOW_TOPNAV_CODE',			'type' => 'textarea:6:6',	'explain' => true),

						'legend2'					=> 'ACP_PBWOW_IE6MESSAGE',
						'pbwow_ie6message_enable'	=> array('lang' => 'PBWOW_IE6MESSAGE_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
						'pbwow_ie6message_code'		=> array('lang' => 'PBWOW_IE6MESSAGE_CODE',		'type' => 'textarea:6:6',	'explain' => true),

						'legend3'					=> 'ACP_PBWOW_BLIZZ',
						'pbwow_blizz_enable'		=> array('lang' => 'PBWOW_BLIZZ_ENABLE',		'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
						'pbwow_blizz_ranks'			=> array('lang' => 'PBWOW_BLIZZ_RANKS',			'validate' => 'string',	'type' => 'custom',			'explain' => true, 'method' => 'select_ranks'),

						'legend4'					=> 'ACP_PBWOW_PROPASS',
						'pbwow_propass_enable'	 	=> array('lang' => 'PBWOW_PROPASS_ENABLE',		'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
						'pbwow_propass_ranks'		=> array('lang' => 'PBWOW_PROPASS_RANKS',		'validate' => 'string',	'type' => 'custom',			'explain' => true, 'method' => 'select_ranks'),
					)
				);
			break;
			case 'ads':
				$display_vars = array(
					'title'	=> 'ACP_PBWOW_ADS_TITLE',
					'vars'	=> array(
						'legend1'					=> 'ACP_PBWOW_ADS_INDEX',
						'pbwow_ads_index_enable'	=> array('lang' => 'PBWOW_ADS_INDEX_ENABLE',	'validate' => 'bool',		'type' => 'radio:yes_no',	'explain' => true),
						'pbwow_ads_index_code'		=> array('lang' => 'PBWOW_ADS_INDEX_CODE',		'type' => 'textarea:6:6',	'explain' => true),
						'legend2'					=> 'ACP_PBWOW_ADS_TOP',
						'pbwow_ads_top_enable'		=> array('lang' => 'PBWOW_ADS_TOP_ENABLE',		'validate' => 'bool',		'type' => 'radio:yes_no',	'explain' => true),
						'pbwow_ads_top_code'		=> array('lang' => 'PBWOW_ADS_TOP_CODE',		'type' => 'textarea:6:6',	'explain' => true),
						'legend3'					=> 'ACP_PBWOW_ADS_SIDE',
						'pbwow_ads_side_enable'		=> array('lang' => 'PBWOW_ADS_SIDE_ENABLE',		'validate' => 'bool',		'type' => 'radio:yes_no',	'explain' => true),
						'pbwow_ads_side_code'		=> array('lang' => 'PBWOW_ADS_SIDE_CODE',		'type' => 'textarea:6:6',	'explain' => true),
					)
				);
			break;
		}

		if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}
	
		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
		$error = array();
		
		// We validate the complete config if whished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);
		
		// Do not write values if there is an error
		if (sizeof($error))
		{
			$submit = false;
		}

		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') || ($mode == 'links' && strpos($config_name, 'portal_link_') ) !== false)
			{
				continue;
			}
			
			if ($config_name == 'portal_attachments_filetype' || $config_name == 'portal_news_forum' || $config_name == 'portal_global_announcements_forum' || $config_name == 'portal_recent_forum' || $config_name == 'portal_attachments_forum_ids' || $config_name == 'portal_poll_topic_id')
			{
				continue;
			}

			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

			if ($submit)
			{
				$this->set_pbwow_config($config_name, $config_value);
			}
		}
		
		if ($submit)
		{
			if(($action == 'refresh_topic_ranks') && ($topics_table_modded == true)) {
				$this->refresh_topic_ranks();
			}
			if(($action == 'create_topic_ranks') && ($topics_table_modded == false)) {
				$this->sql_field_add($topics_table, $topics_field1);
				$this->sql_field_add($topics_table, $topics_field2);
			}
			if(($action == 'create_config_table') && ($constantsokay == true) && ($dbokay == false)) {
				$this->install_pbwow($dbtable);
			}
			if($action == 'refresh_all_themes') {
				$this->refresh_all_themes();
			}
			
			// Get data from select boxes and store in DB
			switch($mode)
			{
				case 'config':
					$this->store_selected_ranks('pbwow_blizz_ranks');
					$this->store_selected_ranks('pbwow_propass_ranks');
				break;
				
				default:
			}
		
			add_log('admin', 'LOG_PBWOW_CONFIG', $user->lang['ACP_PBWOW_' . strtoupper($mode) . '_INFO']);
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

##################################################
##################################################
##################################################
##################################################
##################################################

		$this->tpl_name = 'acp_pbwow';
		$this->page_title = $display_vars['title'];
		$allCPF = $this->getAllCPF();

		$title_explain = $user->lang[$display_vars['title'] . '_EXPLAIN'];

		$template->assign_vars(array(
			'L_TITLE'			=> $user->lang[$display_vars['title']],
			'L_TITLE_EXPLAIN'	=> $title_explain,

			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),

			'S_VERSIONCHECK'	=> ($display_vars['title'] == 'ACP_PBWOW_INDEX_TITLE') ? true : false,
			'S_CONSTANTSOKAY'	=> ($constantsokay) ? true : false,
			'PBWOW_DBTABLE'		=> $dbtable,
			'S_DBOKAY'			=> ($dbokay) ? true : false,
			'PBWOW_VERSION'		=> (isset($pbwow_config['pbwow_version'])) ? $pbwow_config['pbwow_version'] : 'No version value found in database!',
			'S_TOPICS_MODDED'	=> ($topics_table_modded) ? true : false,
			'TOPICS_TABLE'		=> $topics_table,

			'S_CPF_PBGUILD'			=> (in_array('pbguild',$allCPF)) ? true : false,
			'S_CPF_PBREALM'			=> (in_array('pbrealm',$allCPF)) ? true : false,
			'S_CPF_PBLEVEL'			=> (in_array('pblevel',$allCPF)) ? true : false,
			'S_CPF_PBRACE'			=> (in_array('pbrace',$allCPF)) ? true : false,
			'S_CPF_PBGENDER'		=> (in_array('pbgender',$allCPF)) ? true : false,
			'S_CPF_PBCLASS'			=> (in_array('pbclass',$allCPF)) ? true : false,
			'S_CPF_PBPVPRANK'		=> (in_array('pbpvprank',$allCPF)) ? true : false,
			'S_CPF_PBARMORYCHARLINK'	=> (in_array('pbarmorycharlink',$allCPF)) ? true : false,
			'S_CPF_PBARMORYGUILDLINK'	=> (in_array('pbarmoryguildlink',$allCPF)) ? true : false,	

			'U_ACTION'			=> $this->u_action,
			)
		);

		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars),
				)
			);
			unset($display_vars['vars'][$config_key]);
		}
	}

##################################################
##################################################
##################################################
##################################################
##################################################

	function getAllCPF()
	{
		global $db, $user, $config;
		
		$sql = 'SELECT f.field_name
			FROM ' . PROFILE_FIELDS_TABLE . " f
			WHERE f.field_active = 1
				$sql_where
			ORDER BY f.field_order";
		$result = $db->sql_query($sql);

		$allCPF = array();

		while ($row = $db->sql_fetchrow($result))
		{
			$allCPF[$row['field_name']] = $row['field_name'];
		}
		$db->sql_freeresult($result);

		return $allCPF;	
	}
	
	// Create rank select box
	function select_ranks($value, $key)
	{
		global $user, $config, $pbwow_config;
		
		$selected = array();
		if(isset($pbwow_config[$key]) && strlen($pbwow_config[$key]) > 0)
		{
			$selected = explode(',', $pbwow_config[$key]);
		}

		$rank_list = $this->rank_select_options($selected, false);

		// Build forum options
		$s_rank_options = '<select id="' . $key . '" name="' . $key . '[]" multiple="multiple">';
		$s_rank_options .= $rank_list;
		$s_rank_options .= '</select>';

		return $s_rank_options;
	}

	function rank_select_options($rank_id, $exclude_ids = false)
	{
		global $db, $config;
	
		$exclude_sql = ($exclude_ids !== false && sizeof($exclude_ids)) ? 'WHERE ' . $db->sql_in_set('rank_id', array_map('intval', $exclude_ids), true) : '';
	
		$sql = 'SELECT rank_id, rank_title, rank_special 
			FROM ' . RANKS_TABLE . "
			$exclude_sql
			ORDER BY rank_special DESC, rank_id ASC";
		$result = $db->sql_query($sql);
	
		$s_rank_options = '';
		while ($row = $db->sql_fetchrow($result))
		{
			if(in_array($row['rank_id'],$rank_id)) {
				$selected = ' selected="selected"';
			}
			else {
				$selected = '';
			}
			// Just special ranks for now
			if($row['rank_special'] == 1){
				$s_rank_options .= '<option' . (($row['rank_special'] == 1) ? ' class="sep"' : '') . ' value="' . $row['rank_id'] . '"' . $selected . '>' . $row['rank_title'] . '</option>';
			}
		}
		$db->sql_freeresult($result);
	
		return $s_rank_options;
	}

	// Store selected ranks
	function store_selected_ranks($key)
	{
		global $db, $cache;
		
		// Get selected extensions
		$values = request_var($key, array(0 => ''));
		
		$news = implode(',', $values);
		
		$this->set_pbwow_config($key, $news);
	}
	

	function refresh_topic_ranks() 
	{
		global $config, $db, $user, $auth, $template;
		global $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		// Resync post counts
		$start = $max_post_id = 0;
		
		// Find the maximum post ID, we can only stop the cycle when we've reached it
		$sql = 'SELECT MAX(topic_id) as max_post_id
			FROM ' . TOPICS_TABLE;
		$result = $db->sql_query($sql);
		$max_post_id = (int) $db->sql_fetchfield('max_post_id');
		$db->sql_freeresult($result);
		
		// No maximum post id? :o
		if (!$max_post_id)
		{
			$sql = 'SELECT MAX(topic_id)
				FROM ' . TOPICS_TABLE;
			$result = $db->sql_query($sql);
			$max_post_id = (int) $db->sql_fetchfield('max_post_id');
			$db->sql_freeresult($result);
		}
		
		// Still no maximum post id? Then we are finished
		if (!$max_post_id)
		{
			add_log('admin', 'LOG_RESYNC_POSTCOUNTS');
			break;
		}
		
		//$step = ($config['num_posts']) ? (max((int) ($config['num_posts'] / 5), 20000)) : 20000;
		$db->sql_query('UPDATE ' . TOPICS_TABLE . ' SET topic_first_poster_rank_img = "", topic_first_poster_rank_title = ""');
		
		while ($start < $max_post_id)
		{
			$sql = 'SELECT rank_title, rank_image, topic_id 
				FROM ' . RANKS_TABLE . ' as ranks 
				LEFT JOIN (' . USERS_TABLE . ' as users, ' . TOPICS_TABLE . ' as topics) 
				ON (ranks.rank_id = users.user_rank AND users.username = topic_first_poster_name) 
				WHERE topic_id = ' . $start . '';
			$result = $db->sql_query($sql);
		
			if ($row = $db->sql_fetchrow($result))
			{
				do
				{
					$sql = 'UPDATE ' . TOPICS_TABLE . " SET topic_first_poster_rank_img = '" . $row['rank_image'] . "', 
					topic_first_poster_rank_title = '" . $row['rank_title'] . "' WHERE topic_id = {$row['topic_id']}";
					$db->sql_query($sql);
				}
				while ($row = $db->sql_fetchrow($result));
			}
			$db->sql_freeresult($result);
		
			$start++;
		}
		add_log('admin', 'Special rank images on viewforum pages refreshed');
	}



	// Refresh theme data stored in the database
	function refresh_all_themes()
	{
		global $config, $db, $auth, $template, $phpbb_root_path, $cache, $user;
		// Refresh theme data stored in the database
		$sql = 'SELECT * FROM ' . STYLES_THEME_TABLE . '';
		$result = $db->sql_query($sql);

		while ($theme_row = $db->sql_fetchrow($result))
		{
			if (!$theme_row)
			{
				trigger_error($user->lang['NO_THEME'] . adm_back_link($this->u_action), E_USER_WARNING);
			}
	
			if (!$theme_row['theme_storedb'])
			{
				trigger_error($user->lang['THEME_ERR_REFRESH_FS'] . adm_back_link($this->u_action), E_USER_WARNING);
			}
			if ($theme_row['theme_storedb'] && file_exists("{$phpbb_root_path}styles/{$theme_row['theme_path']}/theme/stylesheet.css"))
			{
				// Save CSS contents
				$sql_ary = array(
					'theme_mtime'	=> (int) filemtime("{$phpbb_root_path}styles/{$theme_row['theme_path']}/theme/stylesheet.css"),
					'theme_data'	=> acp_styles::db_theme_data($theme_row)
				);

				$sql = 'UPDATE ' . STYLES_THEME_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
					WHERE theme_id = '" . $theme_row['theme_id'] . "'";
				$db->sql_query($sql);

				$cache->destroy('sql', STYLES_THEME_TABLE);
			}
		}
		$db->sql_freeresult($result);
		add_log('admin', 'LOG_THEME_REFRESHED', 'Called from the PBWoW ACP module');
		trigger_error($user->lang['THEME_REFRESHED'] . adm_back_link($this->u_action));
	}

##################################################
##################################################
##################################################
##################################################
##################################################

	/**
	* Get pbwow config
	*/
	function obtain_pbwow_config()
	{
		global $db, $cache;
	
		if (($pbwow_config = $cache->get('pbwow_config')) !== true)
		{
			$pbwow_config = $cached_pbwow_config = array();
	
			$sql = 'SELECT config_name, config_value
				FROM ' . PBWOW_CONFIG_TABLE;
			$result = $db->sql_query($sql);
	
			while ($row = $db->sql_fetchrow($result))
			{
				$cached_pbwow_config[$row['config_name']] = $row['config_value'];
				$pbwow_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);
	
			$cache->put('pbwow_config', $cached_pbwow_config);
		}
		return $pbwow_config;
	}

	/**
	* Set config value. Creates missing config entry.
	*/
	function set_pbwow_config($config_name, $config_value)
	{
		global $db, $cache, $pbwow_config;
	
		$sql = 'UPDATE ' . PBWOW_CONFIG_TABLE . "
			SET config_value = '" . $db->sql_escape($config_value) . "'
			WHERE config_name = '" . $db->sql_escape($config_name) . "'";
		$db->sql_query($sql);
	
		if (!$db->sql_affectedrows() && !isset($pbwow_config[$config_name]))
		{
			$sql = 'INSERT INTO ' . PBWOW_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
				'config_name'	=> $config_name,
				'config_value'	=> $config_value));
			$db->sql_query($sql);
		}
		$pbwow_config[$config_name] = $config_value;
	}
	
	function install_pbwow($table_name)
	{
		global $db;
		if($this->sql_table_exists($table_name) == false)
		{
		$sql = 'CREATE TABLE ' . $table_name . ' (
			`config_name` varchar(255) COLLATE utf8_bin NOT NULL,
			`config_value` mediumtext COLLATE utf8_bin NOT NULL,
			PRIMARY KEY (`config_name`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin';
		$db->sql_query($sql);
		}
		if($this->sql_table_exists($table_name) == true)
		{
		$sql = 'INSERT INTO ' . $table_name . ' VALUES (\'pbwow_topnav_code\', 0x266C743B6120687265663D2671756F743B687474703A2F2F7062776F772E636F6D2F646F6E6174652E68746D6C2671756F743B207461726765743D2671756F743B5F626C616E6B2671756F743B2667743B446F6E61746521266C743B2F612667743B0A266C743B696D67207372633D277374796C65732F7062776F772F696D6167657365742F746F706E61765F6469762E676966272F2667743B0A0A266C743B6120687265663D2671756F743B687474703A2F2F7062776F772E636F6D2671756F743B207461726765743D2671756F743B5F626C616E6B2671756F743B2667743B5042576F57266C743B2F612667743B0A266C743B696D67207372633D277374796C65732F7062776F772F696D6167657365742F746F706E61765F6469762E676966272F2667743B0A0A266C743B6120687265663D2671756F743B687474703A2F2F7777772E70687062622E636F6D2F636F6D6D756E6974792F76696577746F7069632E7068703F663D373426616D703B743D313030383135352671756F743B207461726765743D2671756F743B5F626C616E6B2671756F743B2667743B70687042422044657620546872656164266C743B2F612667743B), (\'pbwow_ie6message_enable\', 0x31), (\'pbwow_ie6message_code\', 0x266C743B212D2D5B6966206C7420494520375D2667743B0A266C743B646976207374796C653D27626F726465723A2031707820736F6C696420234637393431443B206261636B67726F756E643A20234645454644413B20746578742D616C69676E3A2063656E7465723B20636C6561723A20626F74683B206865696768743A20373570783B20706F736974696F6E3A2072656C61746976653B272667743B0A266C743B646976207374796C653D27706F736974696F6E3A206162736F6C7574653B2072696768743A203370783B20746F703A203370783B20666F6E742D66616D696C793A20636F7572696572206E65773B20666F6E742D7765696768743A20626F6C643B272667743B266C743B6120687265663D272327206F6E636C69636B3D276A6176617363726970743A746869732E706172656E744E6F64652E706172656E744E6F64652E7374796C652E646973706C61793D2671756F743B6E6F6E652671756F743B3B2072657475726E2066616C73653B272667743B266C743B696D67207372633D27687474703A2F2F7777772E6965366E6F6D6F72652E636F6D2F66696C65732F7468656D652F6965366E6F6D6F72652D636F726E6572782E6A706727207374796C653D27626F726465723A206E6F6E653B2720616C743D27436C6F73652074686973206E6F74696365272F2667743B266C743B2F612667743B266C743B2F6469762667743B0A266C743B646976207374796C653D2777696474683A2036343070783B206D617267696E3A2030206175746F3B20746578742D616C69676E3A206C6566743B2070616464696E673A20303B206F766572666C6F773A2068696464656E3B20636F6C6F723A20626C61636B3B272667743B0A266C743B646976207374796C653D2777696474683A20373570783B20666C6F61743A206C6566743B272667743B266C743B696D67207372633D27687474703A2F2F7777772E6965366E6F6D6F72652E636F6D2F66696C65732F7468656D652F6965366E6F6D6F72652D7761726E696E672E6A70672720616C743D275761726E696E6721272F2667743B266C743B2F6469762667743B0A266C743B646976207374796C653D2777696474683A2032373570783B20666C6F61743A206C6566743B20666F6E742D66616D696C793A20417269616C2C2073616E732D73657269663B272667743B0A266C743B646976207374796C653D27666F6E742D73697A653A20313470783B20666F6E742D7765696768743A20626F6C643B206D617267696E2D746F703A20313270783B272667743B596F7520617265207573696E6720616E206F757464617465642062726F77736572266C743B2F6469762667743B0A266C743B646976207374796C653D27666F6E742D73697A653A20313270783B206D617267696E2D746F703A203670783B206C696E652D6865696768743A20313270783B272667743B466F7220612062657474657220657870657269656E6365207573696E67207468697320736974652C20706C65617365207570677261646520746F2061206D6F6465726E207765622062726F777365722E266C743B2F6469762667743B0A266C743B2F6469762667743B0A266C743B646976207374796C653D2777696474683A20373570783B20666C6F61743A206C6566743B272667743B266C743B6120687265663D27687474703A2F2F7777772E66697265666F782E636F6D27207461726765743D275F626C616E6B272667743B266C743B696D67207372633D27687474703A2F2F7777772E6965366E6F6D6F72652E636F6D2F66696C65732F7468656D652F6965366E6F6D6F72652D66697265666F782E6A706727207374796C653D27626F726465723A206E6F6E653B2720616C743D274765742046697265666F7820332E35272F2667743B266C743B2F612667743B266C743B2F6469762667743B0A266C743B646976207374796C653D2777696474683A20373570783B20666C6F61743A206C6566743B272667743B266C743B6120687265663D27687474703A2F2F7777772E6D6963726F736F66742E636F6D2F77696E646F77732F696E7465726E65742D6578706C6F7265722F776F726C64776964652D73697465732E6173707827207461726765743D275F626C616E6B272667743B266C743B696D67207372633D27687474703A2F2F7777772E6965366E6F6D6F72652E636F6D2F66696C65732F7468656D652F6965366E6F6D6F72652D6965382E6A706727207374796C653D27626F726465723A206E6F6E653B2720616C743D2747657420496E7465726E6574204578706C6F7265722038272F2667743B266C743B2F612667743B266C743B2F6469762667743B0A266C743B646976207374796C653D2777696474683A20373370783B20666C6F61743A206C6566743B272667743B266C743B6120687265663D27687474703A2F2F7777772E6170706C652E636F6D2F7361666172692F646F776E6C6F61642F27207461726765743D275F626C616E6B272667743B266C743B696D67207372633D27687474703A2F2F7777772E6965366E6F6D6F72652E636F6D2F66696C65732F7468656D652F6965366E6F6D6F72652D7361666172692E6A706727207374796C653D27626F726465723A206E6F6E653B2720616C743D27476574205361666172692034272F2667743B266C743B2F612667743B266C743B2F6469762667743B0A266C743B646976207374796C653D27666C6F61743A206C6566743B272667743B266C743B6120687265663D27687474703A2F2F7777772E676F6F676C652E636F6D2F6368726F6D6527207461726765743D275F626C616E6B272667743B266C743B696D67207372633D27687474703A2F2F7777772E6965366E6F6D6F72652E636F6D2F66696C65732F7468656D652F6965366E6F6D6F72652D6368726F6D652E6A706727207374796C653D27626F726465723A206E6F6E653B2720616C743D2747657420476F6F676C65204368726F6D65272F2667743B266C743B2F612667743B266C743B2F6469762667743B0A266C743B2F6469762667743B0A266C743B2F6469762667743B0A266C743B215B656E6469665D2D2D2667743B), (\'pbwow_blizz_enable\', 0x31), (\'pbwow_propass_enable\', 0x30), (\'pbwow_blizz_ranks\', 0x31), (\'pbwow_propass_ranks\', \'\'), (\'pbwow_ads_index_enable\', 0x30), (\'pbwow_ads_index_code\', 0x266C743B73637269707420747970653D2671756F743B746578742F6A6176617363726970742671756F743B2667743B266C743B212D2D0A676F6F676C655F61645F636C69656E74203D202671756F743B7075622D363533323731303532313838383530312671756F743B3B0A2F2A207062776F775F696E6465785F626C6F636B202A2F0A676F6F676C655F61645F736C6F74203D202671756F743B323934373838353730342671756F743B3B0A676F6F676C655F61645F7769647468203D203330303B0A676F6F676C655F61645F686569676874203D203235303B0A2F2F2D2D2667743B0A266C743B2F7363726970742667743B0A266C743B73637269707420747970653D2671756F743B746578742F6A6176617363726970742671756F743B0A7372633D2671756F743B687474703A2F2F706167656164322E676F6F676C6573796E6469636174696F6E2E636F6D2F7061676561642F73686F775F6164732E6A732671756F743B2667743B0A266C743B2F7363726970742667743B), (\'pbwow_ads_top_enable\', 0x30), (\'pbwow_ads_top_code\', 0x266C743B73637269707420747970653D2671756F743B746578742F6A6176617363726970742671756F743B2667743B266C743B212D2D0A676F6F676C655F61645F636C69656E74203D202671756F743B7075622D363533323731303532313838383530312671756F743B3B0A2F2A207062776F775F76696577666F72756D5F746F70202A2F0A676F6F676C655F61645F736C6F74203D202671756F743B363134343035373935342671756F743B3B0A676F6F676C655F61645F7769647468203D203732383B0A676F6F676C655F61645F686569676874203D2039303B0A2F2F2D2D2667743B0A266C743B2F7363726970742667743B0A266C743B73637269707420747970653D2671756F743B746578742F6A6176617363726970742671756F743B207372633D2671756F743B687474703A2F2F706167656164322E676F6F676C6573796E6469636174696F6E2E636F6D2F7061676561642F73686F775F6164732E6A732671756F743B2667743B266C743B2F7363726970742667743B), (\'pbwow_ads_side_enable\', 0x30), (\'pbwow_ads_side_code\', 0x266C743B73637269707420747970653D2671756F743B746578742F6A6176617363726970742671756F743B2667743B266C743B212D2D0A676F6F676C655F61645F636C69656E74203D202671756F743B7075622D363533323731303532313838383530312671756F743B3B0A2F2A207062776F775F76696577746F7069635F73696465202A2F0A676F6F676C655F61645F736C6F74203D202671756F743B383236303636323139382671756F743B3B0A676F6F676C655F61645F7769647468203D203136303B0A676F6F676C655F61645F686569676874203D203630303B0A2F2F2D2D2667743B0A266C743B2F7363726970742667743B0A266C743B73637269707420747970653D2671756F743B746578742F6A6176617363726970742671756F743B207372633D2671756F743B687474703A2F2F706167656164322E676F6F676C6573796E6469636174696F6E2E636F6D2F7061676561642F73686F775F6164732E6A732671756F743B2667743B266C743B2F7363726970742667743B), (\'pbwow_version\', 0x524334)';
		$db->sql_query($sql);	
		}
	}

	function sql_table_exists($table_name)
	{
		global $db;
		$db->sql_return_on_error(true);
		$result = $db->sql_query_limit('SELECT * FROM ' . $table_name, 1);
		$db->sql_return_on_error(false);
	
		if ($result)
		{
			$db->sql_freeresult($result);
			return true;
		}

		return false;
	}
	
	function sql_field_exists($table_name, $field_name)
	{
		global $db;
		$db->sql_return_on_error(true);
		$result = $db->sql_query_limit('SELECT ' . $field_name . ' FROM ' . $table_name, 1);
		$db->sql_return_on_error(false);
	
		if ($result)
		{
			$db->sql_freeresult($result);
			return true;
		}

		return false;
	}

	function sql_field_add($table_name, $field_name)
	{
		global $db;
		if($this->sql_field_exists($table_name, $field_name) == false)
		{
			$sql = 'ALTER TABLE ' . $table_name . ' ADD ' . $field_name . ' VARCHAR(255) NOT NULL';
			$db->sql_query($sql);
		}
	}
}

?>