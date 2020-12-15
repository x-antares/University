<?php

namespace university\core;


/**
 * Description of Router
 *
 *
 */
class Router {
	
	/**
	* All routes
	* @var array
	**/
	protected static $routes = [];

	/**
	* Current route
	* @var array
	**/
	protected static $route = [];

	/**
	* Add new route
	* @var array
	**/
	public static function add($regexp, $route = []) {

		self::$routes[$regexp] = $route;
    }

    /**
	* Return all routes
	* @return array
	*/
	public static function getRoutes() {
		return self::$routes;
	}

	/**
	* Return current route
	* @return array
	*/
	public static function getRoute() {
		return self::$route;
	}

	/**
	* Search Url in table routes
	* @param string $url inputed URL
	* @return boolean
	*/
	protected static function matchRoute($url) {
		foreach(self::$routes as $pattern => $route) {
			if(preg_match("#$pattern#i", $url, $matches)) {
				foreach ($matches as $k => $v) {
					if(is_string($k)){
						$route[$k] = $v;
					}	
				}
				if(!isset($route['action'])){
					$route['action'] = 'index';
				}	
				self::$route = $route;
				return true;
			}
		}
		return false;
	}

	/**
	* Redirect url to controller with action
	* @param string $url inputed URL
	* @return void
	*/
	public static function dispatch($url) {
		if(self::matchRoute($url)){
			$controller = 'app\controllers\\' . self::$route['controller'] . 'Controller';
			if(class_exists($controller)){
				$cObj = new $controller(self::$route);
				$action = self::$route['action'];
				if(method_exists($cObj, $action)){
				$cObj->$action();
				$cObj->getView();
				}else{
				echo "Action <b>$action</b> not found";
			}
	
			}else{
				echo "Controller <b>$controller</b> not found";
			}
			
		}else{
			http_response_code(404);
			include '404.html';
		}

	}


}

