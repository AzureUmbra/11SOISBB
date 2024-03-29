<?php

/**
 * Markdown extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2019 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MARKDOWN_STATUS_FORMAT' => '<a href="%s">Markdown</a> está <em>%s</em>',
	'MARKDOWN_IS_ON' => 'habilitado',
	'MARKDOWN_IS_OFF' => 'deshabilitado',
	'DISABLE_MARKDOWN' => 'Deshabilitar Markdown',

	// Imgur extension
	'IMGUR_OUTPUT_MARKDOWN_IMAGE' => 'Imagen Markdown',
	'IMGUR_OUTPUT_MARKDOWN_THUMBNAIL' => 'Miniatura Markdown'
]);
