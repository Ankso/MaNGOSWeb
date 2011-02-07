<?php

/**
*
* @package - Board3portal
* @version $Id: lang_portal.php 508 2009-06-09 14:02:54Z Christian_N $
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

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	// General
	'PORTAL'				=> 'Portal',
	'WELCOME'			=> 'Bienvenido',
	
	'PORTAL_INSTALL'			=> 'Directorio de instalación detectado',
	'PORTAL_INSTALL_TEXT'	=> 'Un archivo de instalación se ha detectado. Si desea actualizar su portal (o cualquier otro mod), por favor, ejecute el instalador. Si ya lo han hecho, por favor, elimine o cambie el nombre del directorio por razones de seguridad.',

	// news & global announcements
	'LATEST_ANNOUNCEMENTS'			=> 'Últimos anuncios globales',
	'GLOBAL_ANNOUNCEMENT'			=> 'Anuncio globalt',
	'VIEW_LATEST_ANNOUNCEMENT'   	=> '1 anuncio',
	'VIEW_LATEST_ANNOUNCEMENTS'   => '%d anuncios',
	'LATEST_NEWS'			=> 'Últimas noticias',
	'READ_FULL'				=> 'Leer todo',
	'NO_NEWS'				=> 'No hay noticias',
	'NO_ANNOUNCEMENTS'	=> 'No hay anuncios globales ',
	'POSTED_BY'				=> 'Escrito por',
	'COMMENTS'				=> 'Comentarios',
	'VIEW_COMMENTS'		=> 'Ver comentarios',
	'POST_REPLY'			=> 'Escribir comentarios',
	'TOPIC_VIEWS'			=> 'Vistas',
	'JUMP_NEWEST'			=> 'Ir a mensaje reciente',
	'JUMP_FIRST'			=> 'Ir al primer mensaje',
	'JUMP_TO_POST'			=> 'Ir al mensaje',
	'BACK'					=> 'Regresar',

	// Birthday
	'BIRTHDAYS_AHEAD'		=> 'En los siguientes %s días',
	'NO_BIRTHDAYS_AHEAD'	=> 'En este período, no hay miembros que cumplan cumpleaños.',

	// user menu
	'USER_MENU'				=> 'Menú del Usuario',
	'UM_LOG_ME_IN'			=> 'Recordarme',
	'UM_HIDE_ME'			=> 'Ocultame',
	'UM_MAIN_SUBSCRIBED'	=> 'Suscripciones',
	'UM_BOOKMARKS'			=> 'Marcadores',

	// statistics
	'ST_TOP'				=> 'Total',
	'ST_TOP_ANNS'		=> 'Total anuncios',
	'ST_TOP_STICKYS'	=> 'Total fijos',
	'ST_TOT_ATTACH'	=> 'Total adjuntos',

	// search
	'SH'				=> 'Ir',
	'SH_SITE'		=> 'foro',
	'SH_POSTS'		=> 'mensajes',
	'SH_AUTHOR'		=> 'Autor',
	'SH_ENGINE'		=> 'Motores de búsqueda',
	'SH_ADV'			=> 'Búsqueda avanzada',
	
	// recent
	'RECENT_NEWS'			=> 'Recientes',
	'RECENT_TOPIC'			=> 'Mensajes recientes',
	'RECENT_ANN'			=> 'Anuncios recientes',
	'RECENT_HOT_TOPIC'	=> 'Temas populares recientes',

	// random member
	'RND_MEMBER'		=> 'Usuario aleatorio',
	'RND_JOIN'			=> 'Registrado',
	'RND_POSTS'			=> 'Mensajes',
	'RND_OCC'			=> 'Ocupación',
	'RND_FROM'			=> 'Lugar',
	'RND_WWW'			=> 'Página Web',

	// top poster
	'TOP_POSTER'		=> 'Los que mas escriben',
	
	// attachments
	'DOWNLOADS'			=> 'Descargas',
	'NO_ATTACHMENTS'	=> 'No hay adjuntos',

	// links
	'LINKS'				=> 'Enlaces',
	'NO_LINKS'			=> 'No hay enlaces',
	
	// latest members
	'LATEST_MEMBERS'	=> 'Últimos miembros',

	// make donation
	'DONATION' 				=> 'Donaciones PayPal',
	'DONATION_TEXT'		=> 'es una comunidad sin ánimo de lucro, sin la intención de cualquier ganancia monetaria. Sus donaciones son bienvenidas y su proposito es lograr pagar alojamiento, dominio, etc. y así gracias a ustedes mantenernos en línea.',
	'DONATION_TEXT_S'		=> 'es una comunidad sin ánimo de lucro. Sus donaciones son bienvenidas y su proposito es pagar los gastos del servidor.',
	'PAY_MSG'       		=> 'Por favor, use un punto decimal (no una coma) como separador, por ejemplo 4.50',
	'PAY_ITEM'				=> 'Donar!', // paypal item

	'AUD'						=> 'Australian Dollars (AUD)',
	'CAD'						=> 'Canadian Dollars (CAD)',
	'CZK'						=> 'Czech Koruna (CZK)',
	'DKK'						=> 'Danish Kroner (DKK)',
	'HKD'						=> 'Hong Kong Dollars (HKD)',
	'HUF'						=> 'Hungarian Forint (HUF)',
	'NZD'						=> 'New Zealand Dollars (NZD)',
	'NOK'						=> 'Norwegian Kroner (NOK)',
	'PLN'						=> 'Polish Zlotych (PLN)',
	'GBP'						=> 'British Pounds (GBP)',
	'SGD'						=> 'Singapore Dollars (SGD)',
	'SEK'						=> 'Swedish Kronor (SEK)',
	'CHF'						=> 'Swiss Francs (CHF)',
	'JPY'						=> 'Japanese Yen (JPY)',
	'USD'						=> 'U.S. Dollars (USD)',
	'EUR'						=> 'Euros (EUR)',
	'MXN'						=> 'Mexican Pesos (MXN)',
	'ILS'						=> 'Israeli New Shekels (ILS)',
	
	// main menu
	'M_MENU'					=> 'Menu',
	'M_CONTENT'				=> 'Contenido',
	'M_ACP'					=> 'ACP',
	'M_HELP'					=> 'Ayuda',
	'M_BBCODE'				=> 'BBCode FAQ',
	'M_TERMS'				=> 'Terminos de uso',
	'M_PRV'					=> 'Política de privacidad',
	'M_SEARCH'				=> 'Buscar',

	// link us
	'LINK_US'				=> 'Enlacese con nosotros',
	'LINK_US_TXT'			=> 'Por favor, siéntase libre de enlazar a <strong>%s</strong> con su sitio web. Utilice el siguiente HTML:',

	// friends
	'FRIENDS'				=> 'Amigos',
	'FRIENDS_OFFLINE'		=> 'Desconecados',
	'FRIENDS_ONLINE'		=> 'Conectados',
	'NO_FRIENDS'			=> 'No hay amigos definidos en la actualidad',
	'NO_FRIENDS_OFFLINE'	=> 'No hay amigos offline',
	'NO_FRIENDS_ONLINE'	=> 'No hay amigos online',
	
	// last bots
	'LAST_VISITED_BOTS'	=> 'Última %s visita de robots',
	
	// wordgraph
	'WORDGRAPH'				=> 'Palabras mas usadas',

	// change style
	'BOARD_STYLE'			=> 'Estilo del foro',
	'STYLE_CHOOSE'			=> 'Selecciona un estilo',
		
	// Equipo
	'NO_ADMINISTRATORS_P'	=> 'No hay administradores',
	'NO_MODERATORS_P'			=> 'No hay moderadores',
	'NO_GROUPS_P'				=> 'No  hay Grupos',

	// average Statistics
	'TOPICS_PER_DAY_OTHER'	=> 'Temas por día: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Temas por día: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Mensajes por día: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'		=> 'Mensajes por día: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Usuarios por día: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'		=> 'Usuarios por día: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Temas por usuario: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Temas por usuario: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Mensajes por usuario: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Mensajes por usuario: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Mensajes por temas: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Mensajes por temas: <strong>0</strong>',

	// Encuestas
	'POLL'					=> 'Encuesta',
	'LATEST_POLLS'			=> 'Últimas encuestas',
	'NO_OPTIONS'			=> 'Esta encuesta no tiene opciones disponibles.',
	'NO_POLL'				=> 'No hay encuestas disponibles',
	'RETURN_PORTAL'		=> '%sVolver al portal%s',

	// otros 
	'VIEWING_PORTAL'	=> 'Portal de la página',
	'CLOCK'				=> 'Reloj',
	'SPONSOR'			=> 'Patrocinadores',
	
	/**
	* DO NOT REMOVE or CHANGE
	*/
	'PORTAL_COPY'	=> '<a href="http://www.board3.de" title="board3.de">board3 Portal</a> - basado en <a href="http://www.phpbb3portal.com" title="phpBB3 Portal">phpBB3 Portal</a><br />Traducción por <a href="http://www.hiperacme.net/">Alorse</a> para <a href="http://www.phpbb-es.com/">phpBB-Es.com</a>',
	)
);

// mini calendar
$lang = array_merge($lang, array(
    'MINI_CALENDAR'			=> 'Calendario',
    'VIEW_NEXT_MONTH'		=> 'Mes siguiente',
    'VIEW_PREVIOUS_MONTH'	=> 'Mes anterior',

    'mini_cal'    => array(
        'day'    => array(
            '1'	=> 'Do',
            '2'	=> 'Lu',
            '3'	=> 'Ma',
            '4'	=> 'Mi',
            '5'	=> 'Ju',
            '6'	=> 'vi',
            '7'	=> 'Sa',
        ),

        'month'    => array(
            '1'	=> 'Ene.',
            '2'	=> 'Feb.',
            '3'	=> 'Mar.',
            '4'	=> 'Abr.',
            '5'	=> 'May',
            '6'	=> 'Jun.',
            '7'	=> 'Jul.',
            '8'	=> 'Ago.',
            '9'	=> 'Sep.',
            '10'	=> 'Oct.',
            '11'	=> 'Nov.',
            '12'	=> 'Dic.',
        ),

        'long_month'=> array(
            '1'	=> 'Enero',
            '2'	=> 'Febrero',
            '3'	=> 'Marzo',
            '4'	=> 'Abril',
            '5'	=> 'Mayo',
            '6'	=> 'Junio',
            '7'	=> 'Julio',
            '8'	=> 'Agosto',
            '9'	=> 'Septiembre',
            '10'	=> 'Octubre',
            '11'	=> 'Noviembre',
            '12'	=> 'Diciembre',
        ),
    ),
));

?>