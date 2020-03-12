<?php
session_start();
//liberando origem do dominio
header("Access-Control-Allow-Origin: *");
//liberando todos os metodos
header("Access-Control-Allow-Methods: *");

require 'config.php';
require 'routers.php';
require 'vendor/autoload.php';

$core = new Core\Core();
$core->run();