<?php
	//include 'Car.php';
	include 'Audi.php';

	//====set value in Car=====
	$au = new Audi();
	
	$au->setEngineStatus("Audi");
	$au->setBodyPart("Au-00325GT");
	$au->setColor("Black");
	$au->setSeats(6);

	$engineStatus = $au->getEngineStatus();
	$bodyPart = $au->getBodyPart();
	$color = $au->getColor();
	$seats = $au->getSeats();

	echo $engineStatus ."<br>";
	echo $bodyPart ."<br>";
	echo $color ."<br>";
	echo $seats;




?>