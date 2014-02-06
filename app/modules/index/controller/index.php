<?php 
 
class index extends Controller{
	

	public $vars;
	
	public function __construct(){
	}

	
	public function index(){
		$this->initview();
		
	}
	
	public function login(){
	
		$this->initajaxview();
		
	
	
	}
	
	
	public function logout(){
		$this->initajaxview();
		
		
	}
	
	
	
	
	
}