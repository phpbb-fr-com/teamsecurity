<?php
/**
 *
 * Team Security Measures extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 * French translation revised by phpBB-fr.com Translation Team
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_TEAM_SECURITY'				=> 'Sécurité de l’équipe',
	'ACP_TEAM_SECURITY_SETTINGS'	=> 'Paramètres',

	// ACP Logs
	'LOG_TEAM_AUTH_FAIL'			=> '<strong>Échec d’une tentative de connexion d’un membre de l’équipe</strong>',
	'LOG_TEAM_SEC_UPDATED'			=> '<strong>Les paramètres de l’extension « Sécurité de l’équipe » ont été mis à jour</strong>',

	// ACP Log notifications
	'LOG_DELETE_ALL'				=> 'Tous les journaux',
	'LOG_DELETE_MARKED'				=> 'Journaux par ID : %1$s',

	// EMAIL
	'ACP_CONTACT_ADMIN'				=> 'L’administrateur du forum ou du site',

	// EXT
	'TEAM_SECURITY_DISABLE_MESSAGE'	=> 'Veuillez supprimer le fichier « ext.php » du système de fichier, purger le cache du forum et essayer à nouveau.',
));
