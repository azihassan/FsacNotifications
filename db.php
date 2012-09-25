<?php
$cfg = include 'config.php';

try
{
	$dsn = sprintf('mysql:host=%s;dbname=%s', $cfg['database']['host'], $cfg['database']['dbname']);
	$pdo = new PDO($dsn, $cfg['database']['username'], $cfg['database']['password']);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	
	return $pdo;
}
catch(PDOException $e)
{
	echo 'Failed to establish a database connection : '.$e->getMessage();
	exit;
}
