<?php

/**
* phpBB Extension - marttiphpbb calendarlunar
* @copyright (c) 2014 - 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'CALENDARLUNAR_NEW_MOON'			=> 'New moon@%s',
	'CALENDARLUNAR_FIRST_QUARTER_MOON'	=> 'First quarter moon@%s',
	'CALENDARLUNAR_FULL_MOON'			=> 'Full moon@%s',
	'CALENDARLUNAR_THIRD_QUARTER_MOON'	=> 'Third quarter moon%s',
]);
