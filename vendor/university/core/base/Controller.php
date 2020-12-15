<?php


namespace university\core\base;


/**
* Base coontroller
*/
abstract class Controller{


	/**
	* Current route
	* @var array 
	*/
	public $route = [];
	
	/**
	* View for controller
	* @var array 
	*/
	public $view;

	/**
	* Layout for View
	* @var array
	*/
	public $layout;


	/**
	* Users data
	* @var array 
	*/
	public $vars = [];


	public function __construct($route){
		$this->route = $route;
		$this->view = $route['action'];
	}

	/**
	* Render of View
	* @return array
	*/
	public function getView(){
		$vObj = new View($this->route, $this->layout, $this->view);
		$vObj->render($this->vars);
	}

	public function set($vars){
		$this->vars = $vars;
	}


}