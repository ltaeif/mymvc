<?php 


abstract class Controller{
	 
	public   $view;
	public   $layout;

	
	public function initview(){
	
		$viewname=$_SESSION['mvc']['view'];
		$controllername=$_SESSION['mvc']['controller'];
		$modulename=$_SESSION['mvc']['module'];

		
		$this->view= Config::$param['mvc']['modules'].'/'.$modulename.'/'.'view/'.$viewname.'.phtml' ;
		$this->layout=Config::$param['mvc']['modules'].'/'.$modulename.'/layout/'.Config::$param['mvc']['layout'].".phtml";
		
		include_once $this->layout;
	}
	
	public function initajaxview(){
	
		$viewname=$_SESSION['mvc']['view'];
		$controllername=$_SESSION['mvc']['controller'];
		$modulename=$_SESSION['mvc']['module'];
		//$this->modulename=$this->modulepath.$modulename.'/';
		
		$this->view= Config::$param['mvc']['modules'].'/'.$modulename.'/'.'view/'.$viewname.'.phtml' ;
		$this->layout = Config::$param['mvc']['modules'].'/'.$modulename.'/layout/'.Config::$param['mvc']['ajaxlayout'].".phtml";
		
		include_once $this->layout;
	}
	 
	
	 
	
	
	
}