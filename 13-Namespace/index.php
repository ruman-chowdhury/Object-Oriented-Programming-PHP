<?php  
/* If we want to load all the classes and use namespace to reduce dependency so that send all the classes into a folder.In short,if we want both autoload and namespace together it will give fatal error.autoload can't resolve namespace.To remove this we should use composer. */
include 'vendor/autoload.php';
	use App\Java;
	use App\Python;


	$ja = new Java();
	$py = new Python();

?>