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
* help_bbcode [Colloquial Spanish [es_x_tu]]
*
* @package language
* @copyright (c) 2007 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2007 
* @author 2010-10-20 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
*
*/

/**
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

$help = array(
	array(
		0 => '--',
		1 => 'Introducción'
	),
	array(
		0 => '¿Qué es el código BBCode?',
		1 => 'BBCode es una implementación especial del HTML, la forma en la que BBCode se usa es determinada por La Administración. Además se puede deshabilitar la opción de BBCode en un mensaje, desactivando la casilla correspondiente en el formulario de mensajes. BBCode así mismo es similar en estilo al HTML, pero los tags se encuentran encerrados entre corchetes [ y ] en lugar de < y > y ofrece un gran control sobre qué y cómo se visualiza algo. Dependiendo del estilo que utilice el foro, verás que es mucho más fácil añadir BBCodes a tus mensajes desde el área superior de la interfaz del formulario de publicación. Seguramente encontrás la siguiente guía muy útil.'
	),
	array(
		0 => '--',
		1 => 'Formato de texto'
	),
	array(
		0 => '¿Cómo crear texto en negritas, cursiva o subrayado?',
		1 => 'BBCode incluye etiquetas que te permitirán cambiar rápidamente el estilo de los textos. Esta acción se puede lograr del siguiente modo: <ul><li>Para crear un texto en negrita debes encerrarlo entre <strong>[b][/b]</strong>, ej. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />se convierte en <strong>Hola</strong></li><li>Para subrayar hay que usar <strong>[u][/u]</strong>, por ejemplo:<br /><br /><strong>[u]</strong>Buenos Días<strong>[/u]</strong><br /><br />se convierte en <span style="text-decoration: underline">Buenos Días</span></li><li>Para escribir en cursiva utiliza <strong>[i][/i]</strong>, ej.<br /><br />Esto es <strong>[i]</strong>¡Genial!<strong>[/i]</strong><br /><br />se convierte en Esto es <i>¡Genial!</i></li></ul>'
	),
	array(
		0 => '¿Cómo cambiar el color o tamaño de texto?',
		1 => 'Para cambiar el color o tamaño de un archivo se pueden utilizar las siguientes etiquetas. Igualmente hay que tener en cuenta que la apariencia final del texto va a depender del sistema y navegador que estés usando: <ul><li>Para cambiar el color de un texto debes colocarlo entre <strong>[color=][/color]</strong>. Puedes especificar el color utilizando su nombre en inglés (ej. red, blue, yellow, etc.) o mediante la escritura de su código hexadecimal, ej. #FFFFFF, #000000. Por ejemplo, para crear un texto en color rojo puedes usar:<br /><br /><strong>[color=red]</strong>¡Hola!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>¡Hola!<strong>[/color]</strong><br /><br />ambos se convierten en <span style="color:red">¡Hola!</span></li><li>Para cambiar el tamaño del texto se debe seguir un camino similar utilizando <strong>[size=][/size]</strong>. Esta etiqueta depende de la plantilla utilizada por el foro y/o seleccionada por el usuario, pero lo recomendable es escribir el valor numérico del tamaño de texto en porcentaje, empezando por 20 hasta llegar a 200 (muy grande). Por ejemplo:<br /><br /><strong>[size=30]</strong>Pequeño<strong>[/size]</strong><br /><br />será <span style="font-size:30%;">Pequeño</span><br /><br />mientras que:<br /><br /><strong>[size=200]</strong>¡Grande!<strong>[/size]</strong><br /><br />será <span style="font-size:200%;">¡Grande!</span></li></ul>'
	),
	array(
		0 => '¿Puedo combinar las etiquetas de formato?',
		1 => 'Sí, por supuesto, por ejemplo para llamar la atención de alguien puedes escribir:<br /><br /><strong>[size=150][color=red][b]</strong>¡MÍRAME!<strong>[/b][/color][/size]</strong><br /><br />se convierte en <span style="color:red;font-size:250%;"><strong>¡MÍRAME!</strong></span><br /><br />¡No recomendamos escribir demasiados textos como el del ejemplo! Recuerda que está en ti, como usuario, el asegurarse de que las etiquetas se encuentren correctamente cerradas. Por ejemplo lo siguiente es incorrecto:<br /><br /><strong>[b][u]</strong>Esto está mal<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Haciendo citas de texto o código'
	),
	array(
		0 => 'Citar texto en las respuestas',
		1 => 'Hay dos formas de citar un texto, haciendo o no referencia.<ul><li>Cuando utilizas la función Citar para responder un tema debes de notar que el texto es agregado a la ventana de respuesta encerrado entre las etiquetas <strong>[quote=&quot;&quot;][/quote]</strong>. ¡Este método te permite citar textos haciendo referencia a la persona que lo ha escrito! Por ejemplo para citar un trozo de texto que ha redactado Mr. Blobby debes escribir:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>El texto que redactó Mr. Blobby va aquí<strong>[/quote]</strong><br /><br />El texto resultante añadirá automáticamente, Mr. Blobby escribió: antes del texto en si mismo. Recuerda que <strong>es imprescindible</strong> incluir las comillas &quot;&quot; para encerrar el nombre del usuario citado. No es opcional.</li><li>El segundo método te permite citar un texto ocultando su redactor. Para hacerlo debes encerrar el texto entre las etiquetas <strong>[quote][/quote]</strong>. Cuando veas el mensaje notarás que solamente se muestra el mensaje sin hacer referencia al autor.</li></ul>'
	),
	array(
		0 => 'Escribiendo código o texto de otro tamaño',
		1 => 'Si deseas incluir alguna clase de código dentro de tus textos debes encasillarlo entre las etiquetas <strong>[code][/code]</strong>, ej.<br /><br /><strong>[code]</strong>&quot;Esto es un código&quot;<strong>[/code]</strong><br /><br />Todos los formatos incluidos entre las etiquetas <strong>[code][/code]</strong> son conservados al visualizar el mensaje. Se puede resaltar sintaxis PHP usando <strong>[code=php][/code]</strong> y es recomendado cuando se publican ejemplos de códigos en PHP para mejorar su lectura.'
	),
	array(
		0 => '--',
		1 => 'Creando listas'
	),
	array(
		0 => 'Creando una lista desordenada',
		1 => 'BBCode soporta dos tipos de listas: ordenas y desordenadas. Son esencialmente iguales a las listas HTML. Una lista desordenada muestra cada ítem uno despúes del otro identificado con una viñeta. Para crear una lista desordenada debes utilizar <strong>[list][/list]</strong> definiendo cada item usando <strong>[*]</strong>. Por ejemplo, para armar una lista de sus colores favoritos has de escribir:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rojo<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarillo<br /><strong>[/list]</strong><br /><br />Se generará la siguiente lista:<ul><li>Rojo</li><li>Azul</li><li>Amarillo</li></ul>'
	),
	array(
		0 => 'Creando una lista ordenada',
		1 => 'El segundo tipo de lista, la ordenada, te permite controlar qué va detrás de cada ítem (elemento). Para crear una lista ordenada debes usar <strong>[list=1][/list]</strong> para crear una lista numérica o en su caso <strong>[list=a][/list]</strong> una lista alfabética. Como en las listas desordenadas, los ítems deben ser identificados usando <strong>[*]</strong>. Por ejemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir de compras<br /><strong>[*]</strong>Comprar un PC nuevo<br /><strong>[*]</strong>Llevar el PC a arreglar cuando se rompe<br /><strong>[/list]</strong><br /><br />generará lo siguiente:<ol style="list-style-type: decimal;"><li>Ir de compras</li><li>Comprar un PC nuevo</li><li>Insultar al PC cuando se rompe</li></ol>para una lista alfabética usaría:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primera respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercera respuesta posible<br /><strong>[/list]</strong><br /><br />creando<ol style="list-style-type: lower-alpha"><li>Primera respuesta posible</li><li>Segunda respuesta posible</li><li>Tercera respuesta posible</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Creando enlaces'
	),
	array(
		0 => 'Creando un hipervínculo a otro sitio',
		1 => 'phpBB BBCode soporta muchas maneras de crear enlaces a otro sitio.<ul><li>La primera de ella es utilizando las etiquetas <strong>[url=][/url]</strong>, cualquier cosa que escribas después del signo = será interpretado por el BBCode como una dirección URL. Por ejemplo para crear un enlace a phpBB.com puedes escribir:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>¡Visita phpBB!<strong>[/url]</strong><br /><br />Se generará el siguiente enlace, <a href="http://www.phpbb.com/">Visita phpBB!</a> El enlace se abrirá en una nueva ventana o no, dependiendo de la configuración del navegador.</li><li>Si prefiere que el enlace aparezca como una simple dirección URL debes usar:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Se generará de esta forma lo siguiente, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Phpbb incluye una característica llamada <i>Links Mágicos</i>, con lo que se convertirá el enlace en una dirección URL automáticamente sin necesidad de utilizar ninguna etiqueta. Por ejemplo, escribiendo www.phpbb.com en tu mensaje aparecerá <a href="http://www.phpbb.com/">www.phpbb.com</a> cuando lo publiques.</li><li>Lo mismo ocurre con las direcciones de e-mail, puedes utilizar las etiquetas:<br /><br /><strong>[email]</strong>nadie@dominio.dir<strong>[/email]</strong><br /><br />lo cual se visualizará <a href="mailto:nadie@dominio.dir">nadie@dominio.dir</a> o puedes simplemente escribir nadie@dominio.dir dentro de tu mensaje, convirtiéndose en un enlace.</li></ul>Puedes incluir direcciones URL dentro de los demás BBCodes, como en <strong>[img][/img]</strong> (ver próxima explicación), <strong>[b][/b]</strong>, etc. También recuerda que está en ti asegurarte de que todas las etiquetas estén cerradas y ordenadas correctamente, por ejemplo:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">no</span> es correcto ya que puede llevar a que tu mensaje sea eliminado, así que ten cuidado.'
	),
	array(
		0 => '--',
		1 => 'Publicando imágenes y archivos en mensajes'
	),
	array(
		0 => 'Agregando una imagen al mensaje',
		1 => 'phpBB BBCode incluye una etiqueta para poder incorporar imágenes en los mensajes. Dos cosas importantes para cuando utilices esta etiqueta son: muchos usuarios no aprecian ver muchas imágenes dentro de un mensaje y, segundo, éstas deben estar disponibles en Internet (no pueden existir solo en tu PC, ¡a menos que se trate de un servidor web!). Para publicar una imagen debes encerrar su dirección URL entre las etiquetas <strong>[img][/img]</strong>. Por ejemplo:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />También puedes incluir la dirección URL de una imagen entre las etiquetas <strong>[url][/url]</strong> si es que así lo deseas, ej.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />se convierte en:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Agregando archivos adjuntos al mensaje',
		1 => 'Los archivos adjuntos ahora pueden ser ubicados en cualquier parte de un mensaje utilizando el nuevo BBCode <strong>[attachment=][/attachment]</strong>, si la función está habilitada por La Administración del foro y si posees los permisos necesarios. Dentro de la pantalla donde escribas los mensajes encontrarás un botón para incluir los archivos adjuntados en el mismo.'
	),
	array(
		0 => '--',
		1 => 'Otros'
	),
	array(
		0 => '¿Puedo agregar mis propias etiquetas?',
		1 => 'Si perteneces a La Administración de este foro y posees los permisos apropiados, puedes agregar nuevos BBCodes desde el Panel del Administrador.'
	)
);

?>