<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://127.0.0.1/projetPSR4/");
	$config['dbname'] = 'ZeusRetail_Jeferson';
	$config['host'] = '192.168.3.249';
	$config['dbuser'] = 'sa';
	$config['dbpass'] = 'zanthus';
} else {
	define("BASE_URL", "http://127.0.0.1/projetoPSR4/");
	$config['dbname'] = 'ZeusRetail_Jeferson';
	$config['host'] = '192.168.3.249';
	$config['dbuser'] = 'sa';
	$config['dbpass'] = 'zanthus';
}

global $db;
try {
	//$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

  $db = new PDO("sqlsrv:Server=".$config['host'].";Database=".$config['dbname'].";", $config['dbuser'], $config['dbpass']);

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}