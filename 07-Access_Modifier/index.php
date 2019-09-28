<?php
	include 'Private_Variable.php';
	include 'Private_Method.php';

	//1st class
	$std1 = new Student1();
	$name1 = $std1->studentInfo();
	echo $name1;
	

	//2nd class
	$std2 = new Student2();
	$name2 = $std2->getInfo("Alex Hales");
	echo "<br>".$name2;

?>