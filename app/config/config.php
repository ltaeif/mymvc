<?php


class Config {

	public static $param= array(
				//'sitename'=>'e-omed/simpleform'
				'sitename'=>'app'

                ,'mvc'=>array(
						  'modules' =>"modules"
						 ,'view' =>"view" 
						 ,'controller' =>"controller" 
						 ,'model' =>"model" 
						 ,'class' =>'lib/mvcController.php' 
						 ,'defaultview' =>"index" 
						 ,'defaultcontroller' =>"index" 
						 ,'defaultmodule' =>"index" 

						 ,'layout' =>"layout" 
						 ,'ajaxlayout' =>"ajaxlayout"
                         ,'theme' => ''
						 ,'timezone' =>"ajaxlayout" 
						 
						
						)
			
				,'path'=>array(
						'resource'=>"resources"
						,'css'=>"resources/css"
						,'images'=>"resources/images"
						,'js'=>"resources/js"
						,'lib'=>"lib"
						,'path'=>"."
						,'sep'=>"/"
						)
					
						
			)
	
	
	
	;
	
 
	 

	
	
	
	
	
	
	
}

 




