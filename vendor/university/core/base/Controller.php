<?php


namespace university\core\base;



abstract class Controller{

	public $route = [];
	public $view;
	public $layout;


	/**
	*
	* Users data
	* @var array 
	*
	*/
	public $vars = [];

	public function __construct($route){
		$this->route = $route;
		$this->view = $route['action'];
	}

	public function getView(){
		$vObj = new View($this->route, $this->layout, $this->view);
		$vObj->render($this->vars);
	}

	public function set($vars){
		$this->vars = $vars;
	}


}