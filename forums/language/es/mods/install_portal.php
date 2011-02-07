<?php
/**
*
* @package - Board3portal
* @version $Id: install_portal.php 483 2009-03-18 16:40:32Z kevin74 $
* @copyright (c) kevin / saint ( www.board3.de/ ), (c) Ice, (c) nickvergessen ( www.flying-bits.org/ ), (c) redbull254 ( www.digitalfotografie-foren.de ), (c) Christian_N ( www.phpbb-projekt.de )
* @installer based on: phpBB Gallery by nickvergessen, www.flying-bits.org
* @translator (c) ( Alorse - http://www.phpbb-es.com )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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

$lang = array_merge($lang, array(
	'INSTALL_CONGRATS_EXPLAIN'		=> 	'<p>Has instalado Board3 Portal v%s<br/><br/><strong>Por favor borre, mueva o renombre la carpeta install antes de usar su Sitio. Si esta carpeta se encuentra presente, solamente el Panel de Administración (ACP) será accesible.</strong></p>',
	'INSTALL_INTRO_BODY'			=> 	'Este sistema de instalación le guiará a través de los procesos de la instalación de Board3 Portal en su foro phpBB.',

	'MISSING_CONSTANTS'			=> 	'Antes de ejecutar el script de instalación, tendrá que subir los archivos editados, especialmente /includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 	'Cree el módulo padre estándar',
	'MODULES_PARENT_SELECT'		=> 	'Seleccione el módulo padre',
	'MODULES_SELECT_4ACP'		=> 	'Módulo padre para el ACP',
	'MODULES_SELECT_NONE'		=> 	'Ningún módulo padre',

	'STAGE_ADVANCED_EXPLAIN'        =>  'Por favor seleccione módulos padre para la Board3 Portal. Normalmente no hay necesidad de cambiar la configuración predeterminada.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 	'El Board3 Portal ha creado y inicializa tablas de base de datos con los valores básicos. Continúe con el paso siguiente para finalizar la instalación del portal Board3.',
	'STAGE_ADVANCED_SUCCESSFUL'		=> 	'El Board3 Portal ha creado los módulos. Proceder a finalizar la instalación del portal Board3.',
	'STAGE_UNINSTALL'				=> 	'Desistalar',

	'FILES_EXISTS'				=> 	'Todavía existe el archivo',
	'FILES_OUTDATED'			=> 	'Archivos anticuados',
	'FILES_OUTDATED_EXPLAIN'	=> 	'<strong>Archivos anticuados</strong> - por favor elimine estos archivos para evitar problemas de seguridad.',
	'REQUIREMENTS_EXPLAIN'		=> 	'Por favor elimine todos los archivos anticuados de su servidor antes de continuar con la actualización',
	'NOT_REQUIREMENTS_EXPLAIN'	=> 	'Ningun archivo anticuado fue encontrado sobre su servidor, usted puede seguir con la actualización.',

	'UPDATE_INSTALLATION'			=> 	'Actualizar Board3 Portal',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 	'Esta opción actualiza su Board3 Portal a la última versión.',
	'UPDATE_CONGRATS_EXPLAIN'		=> 	'<p>Has actualizado Board3 Portal v%s<br/><br/><strong>Por favor borre, mueva o renombre la carpeta install antes de usar su Sitio. Si esta carpeta se encuentra presente, solamente el Panel de Administración (ACP) será accesible.</strong></p>',

	'UNINSTALL_INTRO'				=> 	'Bienvenido al Desinstalar',
	'UNINSTALL_INTRO_BODY'			=> 	'Este sistema de instalación le guiará por el proceso de desinstalación de la Board3 portal de su foro phpBB',
	'CAT_UNINSTALL'					=> 	'Desistalar',
	'UNINSTALL_CONGRATS'			=> 	'<h1>Board3 Portal borrado.</h1>
									Has desinstalado el Board3 Portal.',
	'UNINSTALL_CONGRATS_EXPLAIN'	=> 	'<strong>Por favor borre, mueva o renombre la carpeta install antes de usar su Sitio. Si esta carpeta se encuentra presente, solamente el Panel de Administración (ACP) será accesible.<br /><br />Recuerde que debe eliminar los archivos relacionados con el Portal y deshacer los cambios relacionados con los archivos del portal a phpBB.</strong></p>',

	'SUPPORT_BODY'		=> 	'Soporte para la última versión estable del portal Board3 está disponible de forma gratuita para:</p><ul><li>Instalación</li><li>Preguntas técnicas</li><li>
Programa de las cuestiones relacionadas con este</li><li>Descargar la última Release Candidate (RC) o versión estable</li></ul><p>Puede encontrar apoyo en estos foros:</p><ul><li><a href="http://www.board3.de/">board3.de - Homepage of Kevin - MOD author</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li><li><a href="http://www.phpbb-es.com/">phpbb-es.com</a></li></ul><p>',
	'GOTO_INDEX'		=> 	'Proceder al foro',
	'GOTO_PORTAL'		=> 	'Proceder al Portal',
	
	'CAT_CONVERT'					=> 'Convertir phpBB3 Portal',
	'CONVERT_P3P_INTRO'				=> 'Convierte tu "phpBB3 Portal" a un "Board3 Portal"',
	'STAGE_REMOVE_P3P'				=> 'Remover phpBB3 Portal',
	'STAGE_REMOVE_TABLE'			=> 'Remover tablas de la base de datos',
	'STAGE_REMOVE_TABLE_EXPLAIN'	=> 'Las tablas de la base de datos de phpBB3 Portal se han eliminado con éxito. Continúe con el paso siguiente para finalizar la instalación del portal Board3.',
	'CONVERT_COMPLETE_EXPLAIN'		=> 'El phpBB3 Portal hse ha convertido a Board3 Portal v%s.<br /><br /><strong>Por favor borre, mueva o renombre la carpeta install antes de usar su Sitio. Si esta carpeta se encuentra presente, solamente el Panel de Administración (ACP) será accesible.</strong>',
));

?>