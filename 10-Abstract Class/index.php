<?php
	include 'MyStatus.php';

	//====MyName Class=====
	$stat = new MyStatus();

	$gorib_income = $stat->lowMoney(750);
	$gorib_msg = $stat->homeLess("I have no house to live");

	

	echo $gorib_income ."<br>";
	echo $gorib_msg ."<br><br>";

	$stat->owner(); //we can call non abstract method through object




?>