<?php
	include 'MyStatus.php';

	//====MyName Class=====
	$stObj = new MyStatus();

	$rcv_income = $stObj->lowMoney(750);
	$rcv_msg = $stObj->homeLess("I have no house to live");

	echo $rcv_income ."<br>";
	echo $rcv_msg;



?>