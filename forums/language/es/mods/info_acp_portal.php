<?php

/**
*
* @package - Board3portal
* @version $Id: info_acp_portal.php 503 2009-04-20 18:34:29Z kevin74 $
* @copyright (c) kevin / saint ( www.board3.de/ ), (c) Ice, (c) nickvergessen ( www.flying-bits.org/ ), (c) redbull254 ( www.digitalfotografie-foren.de ), (c) Christian_N ( www.phpbb-projekt.de )
* @based on: phpBB3 Portal by Sevdin Filiz, www.phpbb3portal.com
* @translator (c) ( Alorse - http://www.phpbb-es.com )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_PORTAL_INFO'							=> 'Portal',
	'ACP_PORTAL_GENERAL_INFO'					=> 'General',
	'ACP_PORTAL_ANNOUNCEMENTS_INFO'				=> 'Anuncio global',
	'ACP_PORTAL_NEWS_INFO'						=> 'Noticias',
	'ACP_PORTAL_RECENT_INFO'					=> 'Temas recientes',
	'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Palabras mas usadas',
	'ACP_PORTAL_GENERAL_INFO'					=> 'Configuración general',
	'ACP_PORTAL_PAYPAL_INFO'					=> 'Donaciones Paypal',
	'ACP_PORTAL_ATTACHMENTS_INFO'				=> 'Adjuntos',
	'ACP_PORTAL_MEMBERS_INFO'					=> 'Últimos miembros',
	'ACP_PORTAL_POLLS_INFO'						=> 'Encuesta',
	'ACP_PORTAL_BOTS_INFO'						=> 'Últimos robots',
	'ACP_PORTAL_POSTER_INFO'					=> 'Top posteadores',
	'ACP_PORTAL_WELCOME_INFO'					=> 'Mensaje de bienvenida',
	'ACP_PORTAL_CUSTOMBLOCK_INFO'				=> 'Bloque de uso frecuente',
	'ACP_PORTAL_MINICALENDAR_INFO'				=> 'Mini calendario',
	'ACP_PORTAL_LINKS_INFO'						=> 'Enlaces',
	'ACP_PORTAL_BIRTHDAYS_INFO'					=> 'Cumpleaños',
	'ACP_PORTAL_FRIENDS_INFO'					=> 'Amigos',
	
	// Logs
	'LOG_PORTAL_CONFIG'			=> '<strong>Alterada la configuración del portal</strong><br />&raquo; %s',
	
	// Adding the permissions
	'acl_a_portal_manage'		=> array('lang' => 'Pueden alterar la configuración del portal', 'cat' => 'misc'),
));

?>