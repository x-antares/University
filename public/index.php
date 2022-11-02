<?php


use university\core\Router;

$query = $_SERVER['QUERY_STRING'];

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/university/core');
define('ROOT', dirname(__DIR__) . '/');
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');


require '../vendor/university/libs/function.php';
require '../vendor/autoload.php';



	Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

	Router::dispatch($query);

	
