<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 use vendor\core\Router;

$query = $_SERVER['QUERY_STRING'];

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');


require '../vendor/libs/function.php';

spl_autoload_register(function($class){
  $file = ROOT . '/' . str_replace( '\\', '/', $class) . '.php';
	if(is_file($file)){
		require_once $file;
	}
});
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

