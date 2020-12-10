<?php

namespace university\core\base;



class View {


	/**
	* Current route
	* @var string
	* 
	*/
	public $route = [];

	/**
	* View
	* @var string
	* 
	*/
	public $view = [];

	/**
	* Current layout
	* @var string
	* 
	*/
	public $layout = [];


	/**
	* Vars
	* @var string
	* 
	*/
	public $vars = [];


	public function __construct($route, $layout = '', $view = ''){
		$this->route = $route;
		$this->layout = $layout ?: LAYOUT;
		$this->view = $view; 
		// var_dump($this->layout);
		// var_dump($this->view);
	}

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




