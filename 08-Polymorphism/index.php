<?php
	include 'Admin.php';

	//====MyName Class=====
	$ad = new Admin();

	$ad->setValues("Ruman Chowdhury", 25);
	$ad->dept ="Computer Science";
	$ad->display();

?>