<?php
/**
*
* @package phpBB3
* @version $Id: prime_quick_style.php,v 1.2.4 2009/09/02 10:15:00 primehalo Exp $
* @copyright (c) 2008-2009 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Include only once.
*/
global $prime_quick_style;
if (!class_exists('prime_quick_style'))
{
	/**
	* Options
	*/
	define('PRIME_QUICK_STYLE_ENABLED', true);	// Enable this MOD?
	define('PRIME_QUICK_STYLE_GUEST', true);	// Allow guests to switch styles?

	/**
	* Class
	*/
	class prime_quick_style
	{
		/**
		* Constructor
		*/
		function prime_quick_style()
		{
		}

		/**
		*/
		function request_cookie($name, $default)
		{
			global $config;

			$name	= $config['cookie_name'] . '_' . $name;
			$value	= isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
			settype($value, gettype($default));
			return $value;
		}

		/**
		*/
		function switch_style()
		{
			global $config, $user, $db, $phpbb_root_path, $phpEx;

			if (PRIME_QUICK_STYLE_ENABLED && (PRIME_QUICK_STYLE_GUEST || $user->data['is_registered']) && ($style = request_var('prime_quick_style', 0)))
			{
				$redirect_url = request_var('redirect', append_sid("{$phpbb_root_path}index.$phpEx"));
				$style = ($config['override_user_style']) ? $config['default_style'] : $style;
				if ($user->data['is_registered'])
				{
					$sql = 'UPDATE ' . USERS_TABLE . ' SET user_style = ' . intval($style) . ' WHERE user_id = ' . $user->data['user_id'];
					$db->sql_query($sql);
				}
				else
				{
					$user->set_cookie('style', $style, 0);
				}
				redirect($redirect_url);
			}
		}


		/**
		*/
		function select_style()
		{
			global $config, $template, $user, $phpbb_root_path, $phpEx;

			if (PRIME_QUICK_STYLE_ENABLED && (PRIME_QUICK_STYLE_GUEST || $user->data['is_registered']) && !$config['override_user_style'])
			{
				$current_style = ($user->data['is_registered']) ? $user->data['user_style'] : $this->request_cookie('style', $user->data['user_style']);
				$style_options = style_select(request_var('style', (int)$current_style));
				if (substr_count($style_options, '<option') > 1)
				{
					//$user->add_lang('mods/prime_quick_style');
					$redirect = $user->page['page_dir'] ? '' : '&amp;redirect=' . urlencode(str_replace('&amp;', '&', build_url(array('_f_', 'style'))));
					$template->assign_var('S_QUICK_STYLE_ACTION', append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=prefs&amp;mode=personal' .  $redirect));
					$template->assign_var('S_QUICK_STYLE_OPTIONS', ($config['override_user_style']) ? '' : $style_options);
				}
			}
		}

		/**
		*/
		function set_guest_style(&$style)
		{
			global $user;

			if (PRIME_QUICK_STYLE_ENABLED && PRIME_QUICK_STYLE_GUEST && $user->data['user_id'] == ANONYMOUS) // $user->data['is_registered'] may not be set at this point, such as if the user was banned
			{
				$style	= ($style) ? $style : $this->request_cookie('style', intval($user->data['user_style']));
			}
		}
	}
	// End class

	$prime_quick_style = new prime_quick_style();
}
?>