<?php
	include 'MyStatus.php';

	//====MyName Class=====
	$stat = new MyStatus();

	$gorib_income = $stat->lowMoney(750);
	$gorib_msg = $stat->homeLess("I have no house to live");

	$middle_income = $stat->mediumMoney(10500);
	$middle_msg = $stat->mediumHome("I have a small house.");

	$rich_income = $stat->moreMoney(150500);
	$rich_msg = $stat->moreHome("I have two duplex houses.");

	

	echo $gorib_income ."<br>";
	echo $gorib_msg ."<br><br>";

	echo $middle_income ."<br>";
	echo $middle_msg ."<br><br>";

	echo $rich_income ."<br>";
	echo $rich_msg ."<br>";



?>