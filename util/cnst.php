<?php
/**
* phpBB Extension - marttiphpbb calendarlunar
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\calendarlunar\util;

class cnst
{
	const FOLDER = 'marttiphpbb/calendarlunar';
	const ID = 'marttiphpbb_calendarlunar';
	const PREFIX = self::ID . '_';
	const CACHE_ID = '_' . self::ID;
	const L = 'MARTTIPHPBB_CALENDARLUNAR';
	const L_ACP = 'ACP_' . self::L;
	const L_MCP = 'MCP_' . self::L;
	const TPL = '@' . self::ID . '/';
	const EXT_PATH = 'ext/' . self::FOLDER . '/';
	const TABLE = self::ID;
	const COLUMN_START = 'start_jd';
	const COLUMN_END = 'end_jd';
}
