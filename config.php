<?php
!defined('DS') && define('DS', DIRECTORY_SEPARATOR);

$cfg = array();

$cfg['database']['dbname'] = 'database';
$cfg['database']['host'] = 'localhost';
$cfg['database']['username'] = 'root';
$cfg['database']['password'] = '';

$cfg['mailer']['host'] = 'smtp.live.com';
$cfg['mailer']['port'] = 587;
$cfg['mailer']['encryption'] = 'startls';
$cfg['mailer']['username'] = 'youremail@live.fr';
$cfg['mailer']['password'] = 'yourpassword';

$cfg['paths']['email_tpl'] = __DIR__.DS.'email.tpl';
$cfg['paths']['error_log'] = __DIR__.DS.'logs'.DS.'error_log';
$cfg['paths']['views'] = __DIR__.DS.'views'.DS;
$cfg['paths']['classes'] = __DIR__.DS.'classes'.DS;

return $cfg;