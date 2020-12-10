<?php

namespace app\controllers;
use app\models\Main;



class MainController extends AppController {


public function index(){
	$model = new Main;
	$posts = $model->findAll();
	$title = 'List Students';
	$this->set(compact('title', 'posts'));
	

 

}


public function test(){
		echo 'Hello test';
	}
	
}	