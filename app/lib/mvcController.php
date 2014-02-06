<?php 
date_default_timezone_set('Europe/Madrid');

abstract class initMVC {
	
	//public static $DB;// MySQL Connection 
 
	public static function init() {
		 
	}
	 
}

abstract class mvcController{
	 
	public static  $view;
 
	 
	
	public static function init(){ 
		
		initMVC::init();
		  
		try {
		
		
		if(isset($_GET['module']) && !empty($_GET['module'])) $Modulename=$_GET['module'];
		else  $Modulename='index';
		
		if(isset($_GET['view']) && !empty($_GET['view'])) $viewname=$_GET['view'];
		else  $viewname='index';
		
		if(isset($_GET['controller']) && !empty($_GET['controller'])) $Controllername=$_GET['controller'];
		else  $Controllername='index';
		
		
		$_SESSION['mvc']['module']=$Modulename;
		$_SESSION['mvc']['controller']=$Controllername;
		$_SESSION['mvc']['view']=$viewname;
		
		
		
		//echo (include_once 'controller/'.$Controllername.'.php');exit;
		if(file_exists ('modules/'.$Modulename.'/controller/'.$Controllername.'.php')===false)    
			throw new Exception('not existant.');
		else
			include_once 'modules/'.$Modulename.'/controller/'.$Controllername.'.php';
		
		$controller= new $Controllername;
		
		
		if(method_exists($controller,$viewname)==true) {
			$controller->{$viewname}();
		}
		else throw new Exception('not existant Function .');
			
		//var_dump($controller);exit;
		
		
		
		} catch (Exception $e) {
			echo 'Exception : ',  $e->getMessage(), "\n";
			//mvcController::redirect('signin','participant');
		}


		
	 
	}
	
	/*
	public static  function redirect($module,$controller,$view){
		$url="http://".$_SERVER['HTTP_HOST']."/".Config::$param['sitename']."/index.php?controller=$controller&view=$view";
		header("Location:".$url);
	}
	
	public static function url($view,$controller){
		return "http://".$_SERVER['HTTP_HOST']."/".Config::$param['sitename']."/index.php?controller=$controller&view=$view";
	}*/
	
}