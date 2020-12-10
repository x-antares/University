<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 use university\core\Router;

$query = $_SERVER['QUERY_STRING'];

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/university/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');


require '../vendor/university/libs/function.php';
require '../vendor/autoload.php';


// Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
// Router::add('posts/delete', ['controller' => 'Posts', 'action' => 'delete']);
// Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
// Router::add('', ['controller' => 'Main', 'action' => 'index']);

    Router::add('^pages/?(?P<action>[a-z-]+)?$', ['controller' => 'Posts']);	

	Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
	// Router::add('^$', ['controller' => 'Posts', 'action' => 'posts']);
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
	
	// debug(Router::getRoutes());

	debug(Router::dispatch($query));

