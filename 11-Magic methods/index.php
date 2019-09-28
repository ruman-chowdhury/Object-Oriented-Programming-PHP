<?php  
	include 'Student.php';

	$st = new Student();
	$st->describe();

	$st->Ruman;
	$st->Age=25;

	$st->displayValues('25','30','40');

?>