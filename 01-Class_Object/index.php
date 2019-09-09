<?php
	include 'Person.php';

	$person_obj = new Person;

	$person_obj->name = "Ruman Chowdhury"; //assign name in person class
	$person_obj->personName();	//access the method of person through object

	echo $person_obj->age ."<br>";	// display age value,assigned in another class

	$person_obj->personResult(20,10); //passing value to method of person class
	echo $person_obj->marks;

?>