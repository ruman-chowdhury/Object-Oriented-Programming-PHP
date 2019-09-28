<?php
	include 'MyName.php';

	//====MyName Class=====
	$my = new MyName();

//set the name which method is in FullName class
	$my->setName("Ruman Chowdhury");

/*call the method which is existed in both class but subclass will get priority.If we change any method name then others will be called.*/	
	$my->printName();



?>