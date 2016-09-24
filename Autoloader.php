<?php

//spl_autoload_register(null, false);
//spl_autoload_extensions('.php');

class Autoloader
{
	protected $ds = DIRECTORY_SEPARATOR;
	protected $basepath = __DIR__;
	protected $directories = array('FactoryPattern');
	public 	$calledClassesArr = array();

    public function __construct(){
    	//spl_autoload_register(null, false);
		//spl_autoload_register(array($this, 'loader'));
		 spl_autoload_extensions(".php"); // comma-separated list
    	 spl_autoload_register();
    }

    public function loader($className){
    	$fileName = str_replace('\\', '/', $className) . '.php';
    	$this->calledClassesArr[] = $className;
   		if(is_readable($fileName)){
   			require $fileName;
   		}
   		return true; // End autoloader successfully.
	}
}