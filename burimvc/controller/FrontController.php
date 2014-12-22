<?php
abstract class FrontController
{
	public $view_file;
	abstract public function index();
	
	public function showView($view,$params = array())
	{
		include_once $view ;
	}
	public function showString($string)
	{
		echo $string;
	}
	public function redirect($url){
		ob_clean();
		header("location: ".$url);
	}
}