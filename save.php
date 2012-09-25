<?php
session_start();
!isset($_SESSION['flashes']) && $_SESSION['flashes'] = array();

include 'autoload.php';
$cfg = include 'config.php';
$pdo = include 'db.php';
$tpl = new Template($cfg['paths']['views']);
$model = new Model($pdo);
$data = array(
	'flashes' => array(),
	'fid' => $_GET['fid']
);

if(!isset($_GET['fid']) || !is_numeric($_GET['fid']) || $_GET['fid'] <= 0 || !$model->filiere_exists($_GET['fid']))
{
	$_SESSION['flashes'][] = 'La fili�re que vous avez s�lectionn�e n\'existe pas.';
	header('Location: index.php');
	exit;
}

if(isset($_POST['email']))
{
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$data['flashes'][] = 'Veuillez entrer une adresse email valide.';
	}
	else
	{
		try
		{
			$model->save($_POST['email'], $_GET['fid']);
			$_SESSION['flashes'][] = 'Votre demande a �t� enregistr�e avec succ�s ! Vous serez contact�s par email d�s que les r�sultats seront publi�s.';
			header('Location: index.php');
		}
		catch(PDOException $e)
		{
			$data['flashes'][] = 'Il y a eu un probl�me lors de l\'insertion des donn�es, veuillez r�essayer plus tard.';
			file_put_contents('error_log', sprintf('[%s] Model::save(%s, %s) : %s%s', date('Y-m-d H:i:s'), $_POST['email'], $_GET['fid'], $e->getMessage(), PHP_EOL));
		}
	}
}

$tpl->set_title('FSAC notifications > S\'abonner aux alertes');
$tpl->set_view('save', $data);
$tpl->render();