<?php
	include 'Person.php';


	$name = "Joe Root";
	$age = 30;
	$country = "England";
	//creating object and passing value to constructor
	$person_obj = new Person($name, $age, $country);	
	$rtn_values = $person_obj->personDetails();

	foreach ($rtn_values as $values) {
		
		echo $values ."<br>";

	}


?>