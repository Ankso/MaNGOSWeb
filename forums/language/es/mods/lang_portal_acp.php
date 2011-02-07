<?php

/**
*
* @package - Board3portal
* @version $Id: lang_portal_acp.php 526 2009-12-11 23:48:49Z christian_n $
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
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Administración del Portal',
	'ACP_PORTAL_GENERAL_TITLE_EXPLAIN'	=> 'Gracias por elegir board3 Portal. En esta página usted puede administrar el portal de su foro. Las pantallas de aquí le darán un panorama general de todos los distintos ajustes del portal. Los enlaces en la parte izquierda de esta pantalla le permiten controlar cada aspecto de su experiencia con el portal.',
	'ACP_PORTAL_GENERAL_SETTINGS'			=> 'Configuración general',
	'PORTAL_ENABLE'							=> 'Habilitar Portal',
	'PORTAL_ENABLE_EXPLAIN'					=> 'Activa todo el portal de encendido o apagado.',
	'PORTAL_LEFT_COLUMN'						=> 'Habilitar columna de la izquierda',
	'PORTAL_LEFT_COLUMN_EXPLAIN'			=> 'Cambie a No si desea deshabilitar la columna de la izquierda',
	'PORTAL_RIGHT_COLUMN'					=> 'Habilitar columna de la derecha',
	'PORTAL_RIGHT_COLUMN_EXPLAIN'			=> 'Cambie a No si desea deshabilitar la columna de la derecha',
	'PORTAL_VERSION_CHECK'					=> 'Comprobar la versión del Portal',
	'PORTAL_ADVANCED_STAT'					=> 'Bloque de estadísticas avanzadas.',
	'PORTAL_ADVANCED_STAT_EXPLAIN'		=> 'Mostrar este bloque en el portal.',
	'PORTAL_LEADERS'							=> 'Bloque de Líderes / equipo',
	'PORTAL_LEADERS_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_LEADERS_EXT'						=> 'Mostrar equipo / Líderes',
	'PORTAL_LEADERS_EXT_EXPLAIN'			=> 'El bloque de "Líderes / Equipo" debe estar activado para mostrar este bloque ampliado.<br />El bloque estándar cataloga todo, admins/mods, mientras el bloque ampliado incluye todos los grupos no ocultos con una leyenda.',
	'PORTAL_CLOCK'								=> 'Bloque del reloj',
	'PORTAL_CLOCK_EXPLAIN'					=> 'Mostrar este bloque en el portal.',
	'PORTAL_LINK_US'							=> 'Bloque de Enlace con nosotros',
	'PORTAL_LINK_US_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_SEARCH'							=> 'Bloque de búsqueda',
	'PORTAL_SEARCH_EXPLAIN'					=> 'Mostrar este bloque en el portal.',
	'PORTAL_WELCOME'							=> 'Bloque de Bienvenida',
	'PORTAL_WELCOME_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_WHOIS_ONLINE'					=> '¿Quién está conectado?',
	'PORTAL_WHOIS_ONLINE_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_CHANGE_STYLE'					=> 'Cambiar estilos',
	'PORTAL_CHANGE_STYLE_EXPLAIN'			=> 'Mostrar este bloque en el portal.<br /><span style="color:red;">Porfavor tome nota:</span> Si "Sobreescribe el estilo de usuario" y en la configuración del foro esta puesto en "Si", este bloque <strong>no</strong> aparecerá, independientemente de este ajuste.',
	'PORTAL_MAIN_MENU'						=> 'Menú principal',
	'PORTAL_MAIN_MENU_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_PHPBB_MENU'						=> 'phpBB menu',
	'PORTAL_PHPBB_MENU_EXPLAIN'			=> 'Mostrar la cabecera de phpBB en el portal.',
	'PORTAL_USER_MENU'						=> 'Menú del Usuario / caja de logueo',
	'PORTAL_USER_MENU_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_FORUM_INDEX'						=> 'Indice del Foro (Lista de foros)',
	'PORTAL_FORUM_INDEX_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	
	// random member
	'PORTAL_RANDOM_MEMBER'					=> 'Bloque de miembro aleatorio',
	'PORTAL_RANDOM_MEMBER_EXPLAIN'		=> 'Mostrar este bloque en el portal.',
	
	// news and announcements
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Mostrar el número de respuestas y opiniones',
	'PORTAL_SHOW_REPLIES_VIEWS_EXPLAIN'		=> 'Configuración para el bloque compacto.<br />Si la respuesta es SÍ­, el número de respuestas y las opiniones se muestran en 2 columnas extra. Si la respuesta es No, las respuestas y opiniones se mostrará junto al nombre de foro. Seleccione No si tiene problemas con la visualización de las columnas extra extra debido a la anchura necesaria.',

	// birthdays
	'ACP_PORTAL_BIRTHDAYS_SETTINGS'			=> 'Configuración de cumpleaños',
	'ACP_PORTAL_BIRTHDAYS_SETTINGS_EXPLAIN'	=> 'Aquí­ es donde puede personalizar el bloque de cumpleaños.',
	'PORTAL_BIRTHDAYS'						=> 'Bloque de cumpleaños',
	'PORTAL_BIRTHDAYS_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_BIRTHDAYS_AHEAD'				=> 'Cumpleaños proximos días',
	'PORTAL_BIRTHDAYS_AHEAD_EXPLAIN'		=> 'Número de dias futuros para mostrar listado de cumpleaños.<br />"0" desactivará la lista de cumpleaños en adelante.',
	
	// global announcements
	'ACP_PORTAL_ANNOUNCE_SETTINGS'					=> 'Configuración de anuncio global',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'			=> 'Aquí es donde puede personalizar el bloque de anuncios globales.',
	'PORTAL_ANNOUNCEMENTS'								=> 'Mostrar anuncios globales',
	'PORTAL_ANNOUNCEMENTS_EXPLAIN'					=> 'Mostrar este bloque en el portal.',
	'PORTAL_ANNOUNCEMENTS_STYLE'						=> 'Compactar el estilo del bloque anuncio global',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXPLAIN'			=> 'Si selecciona si use el estilo compacto para anuncio global, no es estilo grande',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'					=> 'Número de anuncios en el portal',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXPLAIN'		=> '0 significa infinito',
	'PORTAL_ANNOUNCEMENTS_DAY'							=> 'Número de días para mostrar el anuncio',
	'PORTAL_ANNOUNCEMENTS_DAY_EXPLAIN'				=> '0 significa infinito',
	'PORTAL_ANNOUNCEMENTS_LENGTH'						=> 'Max longitud de anuncio global',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXPLAIN'			=> '0 significa infinito',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'				=> 'Anuncios del foro',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXPLAIN'	=> 'Foro(s) del cual queremos recuperar los anuncios. Deja en blanco para recuperar los anuncios de todos los foros. Si "Excluir foros" se establece en "Si", seleccione el foro que desea excluir.<br />Si "Excluir foros" se establece en "No" seleccione el foro que desea ver.<br />Seleccione/Suprima múltiples foros manteniendo la tecla <samp>CTRL</samp> presionada y haciendo clic.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'			=> 'Excluir foros',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXPLAIN'	=> 'Seleccione "Si" si desea de excluir los foros seleccionados del bloque de anuncios, y "No" si desea ver sólo los foros seleccionados en el bloque de anuncios.',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'				=> 'Habilitar / Deshabilitar permisos',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXPLAIN'	=> 'Tener en cuenta permisos de visualización del foro a la hora de mostrar anuncios',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'					=> 'Habilitar el sistema de anuncios',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXPLAIN'			=> 'Si se habilita el sistema de anuncios / se mostrará números de página.',

	// news
	'ACP_PORTAL_NEWS_SETTINGS'				=> 'Configuración de noticias',
	'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de noticias.',
	'PORTAL_NEWS'								=> 'Mostrar bloque de noticias',
	'PORTAL_NEWS_EXPLAIN'					=> 'Mostrar este bloque en el portal.',
	'PORTAL_NEWS_STYLE'						=> 'Compactar estilo de bloque de noticias',
	'PORTAL_NEWS_STYLE_EXPLAIN'			=> '"Sí" significa utilizar el estilo compacto para las noticias. "No" significa utilizar el gran estilo (ver texto).',
	'PORTAL_SHOW_ALL_NEWS'					=> 'Mostrar todos los artículos en este foro',
	'PORTAL_SHOW_ALL_NEWS_EXPLAIN'		=> 'Incluyendo temas fijos',
	'PORTAL_NUMBER_OF_NEWS'					=> 'Número de artículos de noticias en el portal',
	'PORTAL_NUMBER_OF_NEWS_EXPLAIN'		=> '0 significa infinito',
	'PORTAL_NEWS_LENGTH'						=> 'Maxima longitud de un artíulo de noticias',
	'PORTAL_NEWS_LENGTH_EXPLAIN'			=> '0 significa infinito',
	'PORTAL_NEWS_FORUM'						=> 'Noticias de Foros',
	'PORTAL_NEWS_FORUM_EXPLAIN'			=> 'Foro(s) del cual queremos arrastrar de los artículos, dejar en blanco para arrastrar de todos los foros. Si "Excluir foros" se establece en "Sí", seleccione el foro que desea excluir.<br />Si "Excluir foros"; se establece en "No", seleccione el foro que desea ver.<br />Seleccione/Suprima múltiples foros manteniendo la tecla <samp>CTRL</samp> presionada y haciendo clic.',
	'PORTAL_EXCLUDE_FORUM'					=> 'Excluir Foros',
	'PORTAL_EXCLUDE_FORUM_EXPLAIN'		=> 'Seleccione "Si" si desea de excluir los foros seleccionados del bloque de noticias, y "No" si desea ver sólo los foros seleccionados en el bloque de noticias.',
	'PORTAL_NEWS_PERMISSIONS'				=> 'Activar / desactivar los permisos',
	'PORTAL_NEWS_PERMISSIONS_EXPLAIN'	=> 'Tener en cuenta permisos de visualización del foro a la hora de mostrar noticias.',
	'PORTAL_NEWS_SHOW_LAST'					=> 'Poner en orden empezando por el tema mas reciente',
	'PORTAL_NEWS_SHOW_LAST_EXPLAIN'		=> 'Cuando se activa, la más reciente se ordenarán en orden al post mas reciente. Cuando se desactiva, las noticias se clasifican en orden al tema más reciente.',
	'PORTAL_NEWS_ARCHIVE'					=> 'Habilitar el sistema de archivo de noticias',
	'PORTAL_NEWS_ARCHIVE_EXPLAIN'			=> 'Si se habilita el sistema de noticias / se mostrará números de página.',

	// recent topics
	'ACP_PORTAL_RECENT_SETTINGS'			=> 'Configuración de los temas más recientes',
	'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de los útimos temas.',
	'PORTAL_RECENT'							=> 'Mostrar bloque de los útimos temas',
	'PORTAL_RECENT_EXPLAIN'					=> 'Mostrar este bloque en el portal.',
	'PORTAL_MAX_TOPIC'						=> 'Límite de los últimos anuncios / temas populares',
	'PORTAL_MAX_TOPIC_EXPLAIN'				=> '0 significa infinito',
	'PORTAL_RECENT_TITLE_LIMIT'			=> 'Límite de caracteres de los últimos tema',
	'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'	=> '0 significa infinito',
  	'PORTAL_RECENT_FORUM'					=> 'Temas recientes foros',
	'PORTAL_RECENT_FORUM_EXPLAIN'			=> 'Foro(s) del cual queremos arrastrar de los temas, dejar en blanco para arrastrar de todos los foros. Si "Excluir foros" se establece en "Sí", seleccione el foro que desea excluir.<br />Si "Excluir foros" se establece en "No", seleccione el foro que desea ver.<br />Seleccione/Suprima múltiples foros manteniendo la tecla <samp>CTRL</samp> presionada y haciendo clic.',
	'PORTAL_EXCLUDE_FORUM'					=> 'Excluir foros',
	'PORTAL_EXCLUDE_FORUM_EXPLAIN'		=> 'Seleccione "Si" si desea de excluir los foros seleccionados del bloque de los últimos temas, y "No" si desea ver sólo los foros seleccionados en el bloque de los últimos temas.',

	// paypal
	'ACP_PORTAL_PAYPAL_SETTINGS'			=> 'Configuración Paypal',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de Paypal.',
	'PORTAL_PAY_C_BLOCK'					=> 'Mostrar bloque de centro paypal',
	'PORTAL_PAY_C_BLOCK_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_PAY_S_BLOCK'					=> 'Mostrar bloque pequeño paypal',
	'PORTAL_PAY_S_BLOCK_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_PAY_ACC'						=> 'Paypal cuenta a utilizar',
	'PORTAL_PAY_ACC_EXPLAIN'				=> 'Introduzca su dirección de correo electrónico paypal, ej. xxx@xxx.com',

	// newest members
	'ACP_PORTAL_MEMBERS_SETTINGS'			=> 'Configuración de útimos miembros',
	'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de nuevos miembros.',
	'PORTAL_LATEST_MEMBERS'					=> 'Mostrar bloque de los miembros más recientes',
	'PORTAL_LATEST_MEMBERS_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_MAX_LAST_MEMBER'				=> 'Límite de mostrar de miembros más recientes ',
	'PORTAL_MAX_LAST_MEMBER_EXPLAIN'		=> '0 significa infinito',

	// bots
	'ACP_PORTAL_BOTS_SETTINGS'				=> 'Configuración de bots visitando',
	'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'		=> 'Aquí es donde puede personalizar el bloque de los robots visitantes.',
	'PORTAL_LOAD_LAST_VISITED_BOTS'			=> 'Mostrar bloque visitar bots ',
	'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'	=> 'Mostrar este bloque en el portal.',
	'PORTAL_LAST_VISITED_BOTS_NUMBER'		=> '¿Cuantos bots para mostrar?',
	'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'	=> '0 significa infinito',

	// polls   
	'ACP_PORTAL_POLLS_SETTINGS'			=> 'Configuración de encuesta',
	'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'	=> 'Aquí puede cambiar su información de la encuesta y algunas opciones específicas.',
	'PORTAL_POLL_TOPIC'					=> 'Mostrar bloques de encuesta ',
	'PORTAL_POLL_TOPIC_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_POLL_TOPIC_ID'				=> 'Encuestas foro',
	'PORTAL_POLL_TOPIC_ID_EXPLAIN'		=> 'Foros(s) de encuentas que queremos mostrar. Si "Excluir foros" se establece en "Sí", seleccione el foro que desea excluir.<br />Si "Excluir foros" se establece en "No", seleccione el foro que desea ver.<br />Seleccione/Suprima múltiples foros manteniendo la tecla <samp>CTRL</samp> presionada y haciendo clic.',
	'PORTAL_POLL_EXCLUDE_ID'			=> 'Excluir foros',
	'PORTAL_POLL_EXCLUDE_ID_EXPLAIN'	=> 'Seleccione "Si" si desea de excluir los foros seleccionados del bloque de las encuestas, y "No" si sólo desea ver las encuestas de los foros seleccionados en el bloque de las encuestas.',
	'PORTAL_POLL_LIMIT'					=> 'Mostrar límite de encuesta',
	'PORTAL_POLL_LIMIT_EXPLAIN'			=> 'El número de encuestas que le gustaría mostrar en la página del portal.',
	'PORTAL_POLL_ALLOW_VOTE'			=> 'Permitir votar',
	'PORTAL_POLL_ALLOW_VOTE_EXPLAIN'	=> 'Permitir a los usuarios con los permisos necesarios para votar desde la página del portal.',
	'PORTAL_POLL_HIDE'					=> '¿Ocultar encuestas cuando caduquen?',

	// peak posters
	'ACP_PORTAL_MOST_POSTER_SETTINGS'			=> 'Configuración de los que mas escriben',
	'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de los que mas escriben.',
	'PORTAL_TOP_POSTERS'                  		=> 'Mostrar bloque los que mas escriben / top posteadores',
	'PORTAL_TOP_POSTERS_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_MAX_MOST_POSTER'					=> '¿Cuántos usuarios se mostraran?',
	'PORTAL_MAX_MOST_POSTER_EXPLAIN'			=> '0 significa infinito',

	// left and right column width 
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'	=> 'Ajustes de anchura de columnas izquierda y derecha',
	'PORTAL_LEFT_COLUMN_WIDTH'			=> 'Ancho de la columna de la izquierda',
	'PORTAL_LEFT_COLUMN_WIDTH_EXPLAIN'	=> 'Cambia el ancho de la columna de la izquierda en píxeles, valor recomendado es de 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'			=> 'Ancho de la columna de la derecha',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXPLAIN'	=> 'Cambia el ancho de la columna de la derecha en píxeles, valor recomendado es de 180',

	// attachments    
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> 'La configuración de los archivos adjuntos',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de archivos adjuntos.',
	'PORTAL_ATTACHMENTS'								=> 'Mostrar el bloque de adjuntos ',
	'PORTAL_ATTACHMENTS_EXPLAIN'						=> 'Mostrar este bloque en el portal.',
	'PORTAL_ATTACHMENTS_NUMBER'							=> 'Límite de archivos adjuntos a mostrar',
	'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'					=> '0 significa infinito',
	'PORTAL_ATTACHMENTS_FORUM_IDS'						=> 'Adjuntos de foros',
	'PORTAL_ATTACHMENTS_FORUM_IDS_EXPLAIN'				=> 'Foros(s) a mostrar de los archivos adjuntos. Si "Excluir foros" se establece en "Sí", seleccione el foro que desea excluir.<br />Si "Excluir foros" se establece en "No", seleccione el foro que desea ver.<br />Seleccione/Suprima múltiples foros manteniendo la tecla <samp>CTRL</samp> presionada y haciendo clic.',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE'					=> 'Excluir foros',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE_EXPLAIN'			=> 'Seleccione "Si" si desea de excluir los foros seleccionados del bloque de archivos adjuntos, y "No" si desea ver sólo los archivos adjuntos de los foros seleccionados en el bloque de archivos adjuntos.',
	'PORTAL_ATTACHMENTS_MAX_LENGTH'						=> 'Límite de caracteres de cada uno de los archivos adjuntos',
	'PORTAL_ATTACHMENTS_MAX_LENGTH_EXPLAIN'				=> '0 significa infinito',
	'PORTAL_ATTACHMENTS_FILETYPE'						=> 'Tipos de archivo',
	'PORTAL_ATTACHMENTS_FILETYPE_EXPLAIN'				=> 'Si "Excluir tipos de archivo" está establecida en "Sí", seleccione los tipos de archivo que desea excluir.<br />Si "Excluir tipos de archivo" está establecida en  "No", seleccione los tipos de archivos que desea ver.<br />Seleccione/Suprima múltiples tipos de archivo manteniendo la tecla <samp>CTRL</samp> presionada y haciendo clic.',
	'PORTAL_ATTACHMENTS_EXCLUDE'						=> 'Excluir tipos de archivo',
	'PORTAL_ATTACHMENTS_EXCLUDE_EXPLAIN'				=> 'Seleccione "Si&#39 si desea de excluir los tipos de archivos seleccionados desde el bloque de archivos adjuntos, y "No&#39 si desea ver sólo los tipos de archivos seleccionados en el bloque de archivos adjuntos.',
		
	// friends
	'ACP_PORTAL_FRIENDS_SETTINGS'			=> 'Configuración de amigos',
	'ACP_PORTAL_FRIENDS_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque de amigos.',
	'PORTAL_FRIENDS'						=> 'Mostrar bloque de amigos',
	'PORTAL_FRIENDS_EXPLAIN'				=> 'Mostrar bloque de archivos adjuntos',
	'PORTAL_MAX_ONLINE_FRIENDS'				=> 'Límite de amigos mostrados',
	'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'		=> 'Limita el número de amigos mostrados al valor dado.',

	// wordgraph
	'ACP_PORTAL_WORDGRAPH_SETTINGS'			=> 'Configuración de Wordgraph',
	'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'	=> 'Aquí es donde puede personalizar el bloque wordgraph.',
	'PORTAL_WORDGRAPH'						=> 'Mostrar bloque de wordgraph',
	'PORTAL_WORDGRAPH_EXPLAIN'				=> 'Mostrar este bloque en el portal.<br /><strong>Wordgraph no funciona cuando se selecciona texto completo mysql como la búsqueda de fondo.</strong>',
	'PORTAL_WORDGRAPH_MAX_WORDS'			=> '¿Cuantas palabras a mostrar?',
	'PORTAL_WORDGRAPH_MAX_WORDS_EXPLAIN'	=> '0 significa infinito',
	'PORTAL_WORDGRAPH_WORD_COUNTS'			=> 'Incluir contar con valores para mostrar',
	'PORTAL_WORDGRAPH_WORD_COUNTS_EXPLAIN'	=> 'Mostrar contar valores por palabra ej. (25).',
	'PORTAL_WORDGRAPH_RATIO'				=> 'Usado relación de aspecto palabra tamaño',
	'PORTAL_WORDGRAPH_RATIO_EXPLAIN'		=> 'Cambio de la relación de aspecto (grande/pequeño) Tamaño de la palabra (Por defecto=18)',

	// welcome message
	'ACP_PORTAL_WELCOME_SETTINGS'			=> 'Configuración de bienvenida',
	'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'	=> 'Aquí puede cambiar los mensajes de bienvenida y algunas opciones específicas',
	'PORTAL_WELCOME_INTRO'					=> 'Mensaje de bievenida',
	'PORTAL_WELCOME_GUEST'					=> '¿Mensaje de bienvenida solo para invitados?',
	'PORTAL_WELCOME_INTRO_EXPLAIN'			=> 'Cambiar el mensaje de bienvenida (BBCode está¡ permitido).',
	
	// links
	'ACP_PORTAL_LINKS_SETTINGS' 		=> 'Configuración de enlaces',
	'ACP_PORTAL_LINKS_SETTINGS_EXPLAIN' => 'Establecer el enlce para bloque de enlaces.',
	'PORTAL_LINKS'						=> 'Bloque de enlaces.',
	'PORTAL_LINKS_EXPLAIN'				=> 'Mostrar este bloque en el portal.',
	'PORTAL_LINK_TEXT'					=> 'Texto / URL',
	'PORTAL_LINK_TEXT_EXPLAIN'			=> 'El texto seguido de la url para el enlace. Utilice los botones para borrar y reordenar los enlaces. no olvide el  http:// !',
	'PORTAL_ADD_LINK_TEXT'				=> 'Nuevo Enlace',
	'PORTAL_ADD_LINK_TEXT_EXPLAIN'		=> 'Haga clic en el texto para crear un nuevo enalce.',
	'PORTAL_LINK_ADD'					=> '<strong>Adicionar</strong>',

	// custom
	'ACP_PORTAL_CUSTOM_SETTINGS'			=> 'Configuración de Bloque de uso frecuente',
	'ACP_PORTAL_CUSTOM_SETTINGS_EXPLAIN'	=> 'Aquí usted puede cambiar su Bloque de uso frecuente. En estos se puede usar HTML o BBCode para diversos fines como publicidad, vídeos, imágenes, flash o texto. Simplemente inserte el código necesario.',
	'ACP_PORTAL_CUSTOM_SMALL_SETTINGS'		=> 'Configuración de Bloque de uso frecuente para bloque pequeño',
	'PORTAL_CUSTOM_SMALL_HEADLINE'			=> 'Título para los bloques pequeños',
	'PORTAL_CUSTOM_SMALL_HEADLINE_EXPLAIN'	=> 'Aquí puede cambiar el título para el bloque pequeño',
	'PORTAL_CUSTOM_SMALL'					=> 'Mostrar Bloque de uso frecuente pequeño.',
	'PORTAL_CUSTOM_SMALL_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_CUSTOM_SMALL_BBCODE'			=> 'Activar BBCode para Bloque de uso frecuente pequeño',
	'PORTAL_CUSTOM_SMALL_BBCODE_EXPLAIN'	=> 'BBCode podra utilizarse en este recuadro. BBCode Si no está activado, HTML será¡ analizada.',
	'PORTAL_CUSTOM_CODE_SMALL'				=> 'Código para el Bloque de uso frecuente pequeño.',
	'PORTAL_CUSTOM_CODE_SMALL_EXPLAIN'		=> 'Cambiar el Código para Bloque de uso frecuente pequeño (HTML o BBCode) aquí.',
	'ACP_PORTAL_CUSTOM_CENTER_SETTINGS'		=> 'La configuración de bloques personalizados para el bloque de centro',
	'PORTAL_CUSTOM_CENTER'					=> 'Muestra centrado el Bloque de uso frecuente',
	'PORTAL_CUSTOM_CENTER_EXPLAIN'			=> 'Mostrar este bloque en el portal.',
	'PORTAL_CUSTOM_CENTER_HEADLINE'			=> 'Título para el Bloque de uso frecuente central',
	'PORTAL_CUSTOM_CENTER_HEADLINE_EXPLAIN'	=> 'Aquí puede cambiar el título de el Bloque de uso frecuente central',
	'PORTAL_CUSTOM_CENTER_BBCODE'			=> 'Activar BBCode para el Bloque de uso frecuente central',
	'PORTAL_CUSTOM_CENTER_BBCODE_EXPLAIN'	=> 'BBCode podrá utilizarse en este recuadro. BBCode Si no está activado, HTML será analizada.',
	'PORTAL_CUSTOM_CODE_CENTER'				=> 'Código para el Bloque de uso frecuente central',
	'PORTAL_CUSTOM_CODE_CENTER_EXPLAIN'		=> 'Cambiar el Código para Bloque de uso frecuente central (HTML o BBCode) aquí.',

	// minicalendar
	'ACP_PORTAL_MINICALENDAR_SETTINGS'				=> 'Configuración de Mini calendario',
	'ACP_PORTAL_MINICALENDAR_SETTINGS_EXPLAIN'		=> 'Aquí puede cambiar información de su mini calendario  y ciertas opciones específicas.',
	'PORTAL_MINICALENDAR'							=> 'Mostrar el bloque de mini calendario ',
	'PORTAL_MINICALENDAR_EXPLAIN'					=> 'Mostrar este bloque en el portal.',
	'PORTAL_MINICALENDAR_TODAY_COLOR'				=> 'Color de día activo',
	'PORTAL_MINICALENDAR_TODAY_COLOR_EXPLAIN'		=> 'HEX o colores con nombre se permiten tales como # FFFFFF para blanco, el color o nombres como viloleta.',
	'PORTAL_MINICALENDAR_SUNDAY_COLOR'				=> 'Color para el domingo',
	'PORTAL_MINICALENDAR_SUNDAY_COLOR_EXPLAIN'		=> 'HEX o colores con nombre se permiten tales como # FFFFFF para blanco, el color o nombres como viloleta.',
	'PORTAL_LONG_MONTH'								=> 'Mostrar nombres de los meses',
	'PORTAL_LONG_MONTH_EXPLAIN'						=> 'Si está desactivado los meses se reducirán por ejemplo, Ago. en lugar de Agosto.',
	'PORTAL_SUNDAY_FIRST'							=> 'Primer día de la semana',
	'PORTAL_SUNDAY_FIRST_EXPLAIN'					=> 'Si está desactivado el calendario mostrará Lu. --> Do., sino Sa. --> Do.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the portal general settings
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Anuncio de lanzamiento',
	'CURRENT_VERSION'		=> 'Versión Actual',
	'DOWNLOAD_LATEST'		=> 'Descarga la última versión',
	'LATEST_VERSION'		=> 'La última versión',
	'NO_INFO'				=> 'No pudo ser contactado con a versión del servidor ',
	'NOT_UP_TO_DATE'		=> '%s no está al día',
	'RELEASE_ANNOUNCEMENT'	=> 'Tema del Anuncio',
	'UP_TO_DATE'			=> '%s está al día ',
	'VERSION_CHECK'			=> 'MOD Version Check',
));

?>