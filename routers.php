<?php

global $routes;
$routes = array();

$routes ['/teste'] = '/home/testando';
$routes ['/usuario/{id}'] = '/home/vizualizar_usuarios/:id';