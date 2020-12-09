<?php

namespace vendor\core\base;



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


	public function __construct($route, $layout = '', $view = ''){
		var_dump($layout);
		var_dump($view);
		$this->route = $route;
		$this->layout = $layout ?: LAYOUT;
		$this->view = $view; 
	}

	public function render(){
		$file_view = APP. "/views/{$this->route['controller']}/{$this->view}.php"; 
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




