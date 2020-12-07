<?php

$query = $_SERVER['QUERY_STRING'];

require '../vendor/core/Router.php';
require '../vendor/libs/function.php';
require '../app/controllers/Main.php';
require '../app/controllers/Posts.php';

// Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
// Router::add('posts/delete', ['controller' => 'Posts', 'action' => 'delete']);
// Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
// Router::add('', ['controller' => 'Main', 'action' => 'index']);

	Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
	


	debug(Router::dispatch($query));

