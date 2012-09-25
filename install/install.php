<?php
$cfg = include __DIR__.'/../config.php';
$db = include $cfg['paths']['root'].'db.php';

$queries = explode(';', file_get_contents(__DIR__.'/db.sql'));
array_pop($queries);

try
{
	$db->beginTransaction();
	
	foreach($queries as $q)
	{
		$pdo->exec($q);
	}
	
	$db->commit();
}
catch(PDOException $e)
{
	$db->rollBack();
	echo 'Failed to create the tables : '.$e->getMessage();
	exit;
}
