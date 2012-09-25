<?php
session_start();
!isset($_SESSION['flashes']) && $_SESSION['flashes'] = array();

include 'autoload.php';
$pdo = include 'db.php';
$cfg = include 'config.php';
$tpl = new Template($cfg['paths']['views']);
$model = new Model($pdo);

$data = array(
	'flashes' => $_SESSION['flashes'],
	'filieres' => $model->retrieve_all()
);

$tpl->set_title('FSAC notifications > Index');
$tpl->set_view('index', $data);
$tpl->render();

$_SESSION['flashes'] = array();