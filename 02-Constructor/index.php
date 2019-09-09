<?php
	include 'Person.php';


	$var1 = "Ruman Chowdhury";
	$var2 = 20;
	$person_obj = new Person($var1, $var2);	//creating instance and passing value
	$person_obj->personDetails();


?>