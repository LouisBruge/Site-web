<?php

namespace griselangue\core;

class autoLoader
{
	static function autoload($class)
	{
		$class = str_replace('griselangue\\', '', $class);
		$class = str_replace('\\', '/', $class);
		require ( '/mnt/Documents/git/Site-web/' . $class . '.php');
	}

	static function register()
	{
		spl_autoload_register(array(__CLASS__,'autoload'));
	}
}

?>
