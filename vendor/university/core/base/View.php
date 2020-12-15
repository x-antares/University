<?php

namespace university\core\base;


/**
* Base View
*/
class View {


	/**
	* Current route
	* @var array
	* 
	*/
	public $route = [];

	/**
	* View for controller
	* @var array
	* 
	*/
	public $view = [];

	/**
	* Layout for View
	* @var array
	* 
	*/
	public $layout = [];


	/**
	* User data
	* @var array
	* 
	*/
	public $vars = [];


	public function __construct($route, $layout = '', $view = ''){
		$this->route = $route;
		$this->layout = $layout ?: LAYOUT;
		$this->view = $view; 
	}

	/**
	* Complate render
	*/
	public function render($vars){
		if(is_array($vars)) extract($vars);
		$file_view = APP. "/views/{$this->route['controller']}/{$this->view}.php"; 
		ob_start();
		if(is_file($file_view)){
			require $file_view;
		}else{
			echo "<p>View <b>{$file_view}</b> not exist</p>";
		}
		$content = ob_get_clean();

		$file_layout = APP . "/views/layouts/{$this->layout}.php";
		if(is_file($file_layout)){
			require $file_layout;
		}else{
			echo "<p>Layout <b>{$file_layout}</b> not exist</p>";
		}

	}


}




