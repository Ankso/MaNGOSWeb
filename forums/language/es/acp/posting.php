<?php
/**
    *
    * This program is the full and free Spanish (of Spain) phpBB 3.0 Translation.
    * Copyright (c) 2007 Huan Manwe for phpbb-es.com
    *
    * This program is free software; you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation; either version 2 of the License, or
    * (at your option) any later version.
    *
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    * GNU General Public License for more details.
    *
    * You should have received a copy of the GNU General Public License along
    * with this program; if not, write to the Free Software Foundation, Inc.,
    * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
    *
    */
	
// ’ » " " …

/**
*
* This program is the full and free Spanish (of Spain) phpBB 3.0 Translation.
* Copyright (c) 2007 Huan Manwe for phpbb-es.com
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
**/

/** 
*
* acp_posting.php [Colloquial Spanish [es_x_tu]]
*
* @package language
* @version $Id: $
* @copyright (c) 2010 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2010 
* @author 2010-10-20 - Traducido por Huan Manwe y jakk junto con phpbb-es.com (http://www.phpbb-es.com).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
*
*/

/**
* DO NOT CHANGE
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode es una implementación especial de HTML ofreciendo gran control sobre qué y cómo mostrar algo. Desde esta sección puedes añadir, eliminar y editar BBCodes personalizados',
	'ADD_BBCODE'			=> 'Añadir un nuevo BBCode',

	'BBCODE_ADDED'				=> 'BBCode añadido correctamente.',
	'BBCODE_DANGER'				=> 'El BBCode que estás intentando añadir parece que usa la marca clave {TEXT} dentro de un atributo HTML. Eso puede traducirse en un agujero de seguridad XSS. Trata de usar en cambio los tipos {SIMPLETEXT} o {INTTEXT} que son más restrictivos. Solo continúa si entiendes los riesgos que corres y consideras el uso de {TEXT} absolutamente inevitable.',
	'BBCODE_DANGER_PROCEED'		=> 'Proceder', //'Entiendo el riesgo',
	'BBCODE_EDITED'				=> 'BBCode editado correctamente.',
	'BBCODE_NOT_EXIST'			=> 'El BBCode seleccionado no existe.',
	'BBCODE_HELPLINE'			=> 'Línea de ayuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contiene el consejo de ayuda del BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto de la línea de ayuda',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'La línea de ayuda que insertaste es demasiado larga.',
	'BBCODE_INVALID_TAG_NAME'	=> 'El nombre elegido para este BBCode ya existe.',
	'BBCODE_INVALID'			=> 'Tu BBCode está construido en un formulario no válido.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Tu BBCode personalizado debe tener tanto la etiqueta de apertura como la de cierre.',
	'BBCODE_TAG'				=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'		=> 'El nombre elegido es muy largo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'La definición de etiqueta que introdujiste es muy larga, por favor acórtala.',
	'BBCODE_USAGE'				=> 'Uso de BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aquí define cómo usar el BBCode. Reemplaza las variables de entrada por la marca clave correpondiente (%sver abajo%s)',

	'EXAMPLE'					=> 'Ejemplo:',
	'EXAMPLES'					=> 'Ejemplos:',

	'HTML_REPLACEMENT'			=> 'Reemplazo HTML',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Aquí define el reemplazo HTML por defecto (cada plantilla puede tener su propio reemplazo HTML). ¡No olvides poner las marca claves que usaste arriba!!',

	'TOKEN'				=> 'marca clave',
	'TOKENS'			=> 'marca claves',
	'TOKENS_EXPLAIN'	=> 'Las marcas claves son contenedores de la información suministrada por el usuario. La entrada será válida solo si coincide con la definición correspondiente. Si es necesario puedes numerarlas, añadiendo un número como último caracter entre llaves, ej. {USERNAME1}, {USERNAME2}.<br /><br />Sumado a estas marcas claves puedes usar cualquier palabra presente en tu directorio language/ como estas: {L_<em>&lt;stringname&gt;</em>} donde <em>&lt;stringname&gt;</em> es la palabra traducida que quiera agregar. Por ejemplo, {L_WROTE} se mostrará como “escrito” o su traducción de acuerdo al idioma usado por el usuario.<br /><br /><strong>Por favor ten en cuenta que solo las marcas claves listadas debajo son las que se pueden usar en los BBCodes personalizados.</strong>',
	'TOKEN_DEFINITION'	=> '¿Qué puede ser?',
	'TOO_MANY_BBCODES'	=> 'No puedes crear más BBCodes. Por favor borra uno o más BBCodes y luego inténtalo de nuevo.',

	'tokens'	=> array(
		'TEXT'		=> 'Cualquier texto, incluyendo caracteres extraños, números, etc. No deberías usar esta marca clave en etiquetas HTML. En cambio intenta usar IDENTIFIER, INTTEXT o SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caracteres del alfabeto latino (A-Z), números, espacios, comas, puntos, menos, más, guión y guión bajo',
		'INTTEXT'		=> 'Letras de caracteres Unicode, números, espacios, comas, puntos, menos, más, guión, guión bajo y espacios en blanco.',
		'IDENTIFIER'	=> 'Carecteres del alfabeto latino (A-Z), números, guión y guión bajo',
		'NUMBER'	=> 'Cualquier serie de dígitos',
		'EMAIL'		=> 'Una dirección de email válida',
		'URL'		=> 'Una URL válida usando cualquier protocolo (http, ftp, etc… no puede ser usado para exploits de javascript). Si no se proporciona, se asumirá “http://” antes de la cadena dada',
		'LOCAL_URL'	=> 'Una URL local. La URL debe ser relativa a la página del tema y no puede contener nombre de servidor o protocolo',
		'COLOR'		=> 'Un color HTML, puede ser bien en formato numérico <samp>#FF1234</samp> o un <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">color CSS</a> como ser <samp>fuchsia</samp> o <samp>InactiveBorder</samp>',
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Desde esta sección puedes añadir, eliminar y editar los emoticonos que los usuarios pueden añadir a sus temas o mensajes. Estos emoticonos son mostrados por lo general cerca del título del tema en el listado de foros, o en los temas de los mensajes en el listado de temas. También puedes instalar y crear nuevos paquetes de iconos.',
	'ACP_SMILIES_EXPLAIN'	=> 'Emoticonos son usualmente pequeños, a veces imágenes animadas, usados para comunicar una emoción o sentimiento. Desde esta sección puedes añadir, eliminar y editar los emoticonos que los usuarios pueden añadir a sus mensajes y mensajes privados. También puedes instalar y crear nuevos paquetes de emoticonos.',
	'ADD_SMILIES'			=> 'Añadir múltiples emoticonos',
	'ADD_SMILEY_CODE'		=> 'Añadir código de emoticono adicional',
	'ADD_ICONS'				=> 'Añadir múltiples iconos',
	'AFTER_ICONS'			=> 'Después %s',
	'AFTER_SMILIES'			=> 'Después %s',

	'CODE'						=> 'Código',
	'CURRENT_ICONS'				=> 'Iconos actuales',
	'CURRENT_ICONS_EXPLAIN'		=> 'Decide qué hacer con los iconos actualmente instalados',
	'CURRENT_SMILIES'			=> 'Emoticonos actuales',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Decide qué hacer con los emoticonos actualmente instalados',

	'DISPLAY_ON_POSTING'		=> 'Mostrar en mensajes',
	'DISPLAY_POSTING'			=> 'En mensajes',
	'DISPLAY_POSTING_NO'		=> 'No en mensajes',	
	
	'EDIT_ICONS'				=> 'Editar iconos',
	'EDIT_SMILIES'				=> 'Editar emoticonos',
	'EMOTION'					=> 'Emoción',
	'EXPORT_ICONS'				=> 'Exportar y descargar icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sSiguiendo este enlace, la configuración de tus emoticonos instalados será empaquetada en <samp>icons.pak</samp> el cual, una vez descargado, puede usarse para crear un archivo <samp>.zip</samp> o <samp>.tgz</samp> conteniendo todos tus emoticonos más este archivo de configuración <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Exportar y descargar smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sSiguiendo este enlace, la configuración de tus emoticonos instalados será empaquetada en <samp>smiles.pak</samp> el cual una vez descargado puede usarse para crear un archivo <samp>.zip</samp> o <samp>.tgz</samp> conteniendo todos tus emoticonos más este archivo de configuración <samp>smiles.pak</samp>%s.',

	'FIRST'						=> 'Primero',

	'ICONS_ADD'					=> 'Añadir un nuevo icono',
	'ICONS_NONE_ADDED'			=> 'No se han añadido iconos.',
	'ICONS_ONE_ADDED'			=> 'El icono se ha añadido correctamente.',
	'ICONS_ADDED'				=> 'Los iconos han sido añadidos correctamente.',
	'ICONS_CONFIG'				=> 'Configuración de iconos',
	'ICONS_DELETED'				=> 'El icono ha sido eliminado correctamente.',
	'ICONS_EDIT'				=> 'Editar icono',
	'ICONS_ONE_EDITED'			=> 'El icono se ha actualizado correctamente.',
	'ICONS_NONE_EDITED'			=> 'No se han actualizado iconos.',
	'ICONS_EDITED'				=> 'El icono ha sido actualizado correctamente.',
	'ICONS_HEIGHT'				=> 'Alto del icono',
	'ICONS_IMAGE'				=> 'Imagen del icono',
	'ICONS_IMPORTED'			=> 'El paquete de iconos ha sido instalado correctamente.',
	'ICONS_IMPORT_SUCCESS'		=> 'El paquete de iconos fue importado correctamente.',
	'ICONS_LOCATION'			=> 'Ubicación del icono',
	'ICONS_NOT_DISPLAYED'		=> 'Los siguientes iconos no son mostrados en los mensajes',
	'ICONS_ORDER'				=> 'Orden de iconos',
	'ICONS_URL'					=> 'Archivo de icono',
	'ICONS_WIDTH'				=> 'Ancho del icono',
	'IMPORT_ICONS'				=> 'Instalar paquete de iconos',
	'IMPORT_SMILIES'			=> 'Instalar paquete de emoticonos',

	'KEEP_ALL'					=> 'Mantener todo',

	'MASS_ADD_SMILIES'			=> 'Añadir múltiples emoticonos',
	
	'NO_ICONS_ADD'				=> 'No hay iconos disponibles para añadir.',
	'NO_ICONS_EDIT'				=> 'No hay iconos disponibles para modificar.',
	'NO_ICONS_EXPORT'			=> 'No tienes iconos con los que crear un paquete.',
	'NO_ICONS_PAK'				=> 'Paquete de iconos no encontrado.',
	'NO_SMILIES_ADD'			=> 'No hay emoticonos disponibles para añadir.',
	'NO_SMILIES_EDIT'			=> 'No hay emoticonos disponibles para modificar.',
	'NO_SMILIES_EXPORT'			=> 'No tienes emoticonos con los que crear un paquete.',
	'NO_SMILIES_PAK'			=> 'Paquete de emoticonos no encontrado.',

	'PAK_FILE_NOT_READABLE'		=> 'No se puede leer el archivo <samp>.pak</samp>.',

	'REPLACE_MATCHES'			=> 'Reemplazar coincidencias',

	'SELECT_PACKAGE'			=> 'Seleccione un paquete',
	'SMILIES_ADD'				=> 'Añadir un nuevo emoticono',
	'SMILIES_NONE_ADDED'		=> 'No se han añadido emoticonos.',
	'SMILIES_ONE_ADDED'			=> 'El emoticono se ha añadido correctamente.',
	'SMILIES_ADDED'				=> 'Los emoticonos han sido añadidos correctamente.',
	'SMILIES_CODE'				=> 'Código de emoticono',
	'SMILIES_CONFIG'			=> 'Configuración de emoticonos',
	'SMILIES_DELETED'			=> 'El emoticono ha sido eliminado correctamente.',
	'SMILIES_EDIT'				=> 'Editar emoticono',
	'SMILIE_NO_CODE'			=> 'El emoticono “%s” fue ignorado, ya que no se introdujo ningún código.',
	'SMILIE_NO_EMOTION'			=> 'El emoticono “%s” fue ignorado, ya que no se introdujo ninguna emoción.',
	'SMILIES_NONE_EDITED'		=> 'No se han actualizado emoticonos.',
	'SMILIES_ONE_EDITED'		=> 'El emoticono se ha actualizado correctamente.',
	'SMILIES_EDITED'			=> 'El emoticono ha sido editado correctamente.',
	'SMILIES_EMOTION'			=> 'Emoción',
	'SMILIES_HEIGHT'			=> 'Alto de emoticono',
	'SMILIES_IMAGE'				=> 'Imagen de emoticono',
	'SMILIES_IMPORTED'			=> 'El paquete de emoticonos ha sido instalado correctamente.',
	'SMILIES_IMPORT_SUCCESS'	=> 'El paquete de emoticonos ha sido importado correctamente.',
	'SMILIES_LOCATION'			=> 'Ubicación del emoticono',
	'SMILIES_NOT_DISPLAYED'		=> 'Los siguientes emoticonos no son mostrados en los mensajes',
	'SMILIES_ORDER'				=> 'Orden de emoticonos',
	'SMILIES_URL'				=> 'Archivo de emoticono',
	'SMILIES_WIDTH'				=> 'Ancho de emoticono',
	'TOO_MANY_SMILIES'			=> 'Alcanzado el límite de %d emoticonos.',

	'WRONG_PAK_TYPE'			=> 'El paquete especificado no contiene la información apropiada.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'	=> 'Desde este panel de control puedes añadir, editar, y eliminar palabras que serán censuradas automáticamente en sus foros. La gente seguirá pudiendo registrar nombres de usuario con estas palabras. Los comodines (*) son aceptados en los campos de palabras, por ej. *test* coincidirá con detestable, test* coincidirá con testificar, *test coincidirá con detestar.',
	'ADD_WORD'			=> 'Añadir nueva palabra',

	'EDIT_WORD'			=> 'Editar palabra censurada',
	'ENTER_WORD'		=> 'Tienes que escribir una palabra y su reemplazo.',

	'NO_WORD'			=> 'No seleccionaste una palabra para editar.',

	'REPLACEMENT'		=> 'Sustituta',

	'UPDATE_WORD'		=> 'Actualizar palabra censurada',

	'WORD'				=> 'Palabra',
	'WORD_ADDED'		=> 'La palabra a censurar ha sido añadida correctamente.',
	'WORD_REMOVED'		=> 'La palabra censurada ha sido eliminada correctamente.',
	'WORD_UPDATED'		=> 'La palabra censurada ha sido actualizada correctamente.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'	=> 'Usando este formulario puedes agregar, editar, ver y borrar rangos. También puedes crear rangos personalizados los cuales se pueden aplicar a los usuarios vía administración de usuarios.',
	'ADD_RANK'			=> 'Añadir nuevo rango',

	'MUST_SELECT_RANK'	=> 'Tienes que seleccionar un rango.',

	'NO_ASSIGNED_RANK'	=> 'No se ha asignado rango.',
	'NO_RANK_TITLE'		=> 'No especificaste un título para el rango.',
	'NO_UPDATE_RANKS'	=> 'El rango fue borrado correctamente. Sin embargo las cuentas de usuario que usaban este rango no se han actualizado. Necesitas reestablecer manualmente el rango en esas cuentas.',

	'RANK_ADDED'			=> 'El rango fue añadido correctamente.',
	'RANK_IMAGE'			=> 'Imagen de rango',
	'RANK_IMAGE_EXPLAIN'	=> 'Usa esto para definir una pequeña imagen asociada al rango. La ruta es relativa al directorio raíz de phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(En uso)',
	'RANK_MINIMUM'			=> 'Mensajes mínimos',
	'RANK_REMOVED'			=> 'El rango fue borrado correctamente.',
	'RANK_SPECIAL'			=> 'Configurar como rango especial',
	'RANK_TITLE'			=> 'Título del rango',
	'RANK_UPDATED'			=> 'El rango fue actualizado correctamente.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Aquí puedes controlar qué nombres de usuario no se permitirá que sean utilizados. Nombres de usuario deshabilitados pueden contener un comodín (*).  Por favor observa que no puedes especificar un nombre de usuario que ya haya sido registrado, primero has de borrar ese nombre y después deshabilitarlo',
	'ADD_DISALLOW_EXPLAIN'	=> 'Puedes deshabilitar un nombre de usuario usando el comodín (*) para coincidir cualquier caracter',
	'ADD_DISALLOW_TITLE'	=> 'Deshabilitar un nombre',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Puedes eliminar un nombre deshabilitado seleccionándolo de esta lista y haciendo clic en enviar',
	'DELETE_DISALLOW_TITLE'		=> 'Eliminar nombre deshabilitado',
	'DISALLOWED_ALREADY'		=> 'El nombre que ingresaste no puede ser deshabilitado. O bien ya existe en la lista, o bien existe en la lista de palabras censuradas, o ha sido registrado previamente.',
	'DISALLOWED_DELETED'		=> 'El nombre ha sido eliminado correctamente.',
	'DISALLOW_SUCCESSFUL'		=> 'El nombre ha sido añadido correctamente.',

	'NO_DISALLOWED'				=> 'No hay nombres deshabilitados',
	'NO_USERNAME_SPECIFIED'		=> 'No has seleccionado o introducido un nombre.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Aquí puedes administrar las razones usadas en informes y mensajes de desaprobación de mensajes. Hay una razón por defecto (señalada con un *) que no puedes eliminar, esta razón es normalmente empleada para mensajes personalizados si ninguna razón encaja.',
	'ADD_NEW_REASON'		=> 'Añadir nueva razón',
	'AVAILABLE_TITLES'		=> 'Títulos regionalizados disponibles',

	'IS_NOT_TRANSLATED'			=> 'La razón <strong>no</strong> ha sido traducida.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'La razón <strong>no</strong> ha sido regionalizada. Si quieres traducirla, especifica el código de idioma.',
	'IS_TRANSLATED'				=> 'La razón ha sido traducida.',
	'IS_TRANSLATED_EXPLAIN'		=> 'La razón ha sido traducida. Si el título que especificaste ha sido incluído en el archivo de idioma, será empleado en el informe.',

	'NO_REASON'					=> 'No se puede encontrar la razón.',
	'NO_REASON_INFO'			=> 'Tienes que especificar un título y una descripción para esta razón.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'No puedes eliminar la razon por defecto "Otro".',

	'REASON_ADD'				=> 'Añadir razón',
	'REASON_ADDED'				=> 'Razón añadida correctamente.',
	'REASON_ALREADY_EXIST'		=> 'Ya existe una razón con este título, por favor introduce otro título.',
	'REASON_DESCRIPTION'		=> 'Descripción de la razón',
	'REASON_DESC_TRANSLATED'	=> 'Descripción mostrada',
	'REASON_EDIT'				=> 'Editar razón',
	'REASON_EDIT_EXPLAIN'		=> 'Aquí puedes agregar o editar una razón. Si la razón ha sido incluída en el archivo de idioma, será empleada en el informe.',
	'REASON_REMOVED'			=> 'Razón eliminada correctamente.',
	'REASON_TITLE'				=> 'Título de la razón',
	'REASON_TITLE_TRANSLATED'	=> 'Título mostrado',
	'REASON_UPDATED'			=> 'Razón actualizada correctamente.',

	'USED_IN_REPORTS'			=> 'Usada en informes',
));

?>