<?php
class TodoConstants {
    const AppName = "Simple To Do List";
	const AppTitle = "To Do";
}

class TodoLang {
    static $langfile = "lang-de.ini";
    static $langstrings;
	function _($key) {
	    return isset(self::$langstrings[$key]) ? self::$langstrings[$key] : '???'.$key.'???';
	}
}

TodoLang::$langstrings = parse_ini_file(TodoLang::$langfile);
