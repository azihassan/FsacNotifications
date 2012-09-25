<?php
$cfg = include 'config.php';
spl_autoload_register(function($class) use($cfg)
{
	$path = $cfg['paths']['classes'].$class.'.class.php';
	
	if(is_readable($path))
	{
		require_once $path;
	}
});