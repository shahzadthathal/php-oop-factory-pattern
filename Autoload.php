<?php

	$directories = array('FactoryPattern');
	$calledClassesArr = [];
	spl_autoload_register( function($className){
		global $directories;
		global $calledClassesArr;
		$calledClassesArr[] = $className;
		foreach($directories as $directory){
			if(file_exists($directory.DIRECTORY_SEPARATOR.$className.'.php')){
				require_once $directory.DIRECTORY_SEPARATOR.$className.'.php';
			}
		}
	});
?>