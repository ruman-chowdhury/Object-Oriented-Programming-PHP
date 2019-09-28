<?php  
	//loaded all the file
	spl_autoload_register(function($className){ 
		include_once $className.".php"; 
	});


	$ja = new Java();
	$py = new Python();
	$ru = new Ruby();
	$com = new Admin();
	
?>