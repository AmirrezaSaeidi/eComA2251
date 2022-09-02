<?php 
 namespace app\controllers;

 class Main extends \app\core\controller{
 	public function index(){
 		$this -> view('Main/index');
 	}

 	public function index2(){
 		echo "Main index2";
 	}
 }