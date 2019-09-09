<?php
	include 'Private_Variable.php';
	include 'Private_Method.php';

	//1st class
	$std1_obj = new Student1();

	$rcv_name1 = $std1_obj->studentInfo("Joe Root");
	echo $rcv_name1;

	
	//if we want to access the private var outside the class it will generate error
	//echo $std1_obj->$stdName;
	

	//2nd class
	$std2_obj = new Student2();
	$rcv_name2 = $std2_obj->sendInfo("Alex Hales");
	echo "<br>".$rcv_name2;

?>