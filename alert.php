<?php
#!/usr/bin/php

include 'autoload.php';
$cfg = include 'config.php';
$pdo = include 'db.php';
$model = new Model($pdo);
$emails = array();

$mail = new PHPMailer(TRUE);
$mail->IsSMTP();

$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = $cfg['mailer']['encryption'];
$mail->Host = $cfg['mailer']['host'];
$mail->Port = $cfg['mailer']['port'];
$mail->Username = $cfg['mailer']['username'];
$mail->Password = $cfg['mailer']['password'];
$mail->Subject = 'Service d\'alertes FSAC';
$mail->IsHTML(TRUE);
$mail->SetFrom($cfg['mailer']['username']);

foreach($model->retrieve_all() as $f)
{
	$mail->ClearAddresses();
	if($f['statut'] == 'Disponibles')
	{
		continue;
	}
	
	if(f_exists($f['url']))
	{
		$subscribers = $model->retrieve_subscribers($f['id']);
		$model->update_status($f['id'], 'Disponibles');
		if(empty($subscribers))
		{
			continue;
		}
		
		foreach($subscribers as $s)
		{
			$mail->AddAddress($s['email']);
		}
		
		$message = sprintf(file_get_contents($cfg['paths']['email_tpl']), $f['filiere'], $f['url']);
		$mail->Body = $message;
		$mail->AltBody = nl2br($message);
		try
		{
			$mail->Send();
		}
		catch(phpmailerException $e)
		{
			$err = 'Failed to email the '.$f['filiere'].' subscribers : '.$e->getMessage();
			log_error($err, $cfg['paths']['error_log']);
		}
	}
	else
	{
		$model->update_status($f['id'], 'Indisponibles');
	}
}

function f_exists($url)
{
	$f = @fopen($url, 'r');
	if($f !== FALSE)
	{
		fclose($f);
		return TRUE;
	}
	return FALSE;
}

function log_error($message, $file)
{
	$message = sprintf('[%s] %s%s', date('Y-m-d H:i:s'), $message, PHP_EOL);
	file_put_contents($file, $message, LOCK_EX | FILE_APPEND);
}
