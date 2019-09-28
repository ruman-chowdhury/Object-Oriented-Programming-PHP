<?php
	include 'Customer.php';

	//we have no param in Customer class constractor,though we are getting all property from User cls
	$cs = new Customer("Ruman Chowdhury",25);
	
	$cs->userDetails();
	$cs->displayMessage();



?>