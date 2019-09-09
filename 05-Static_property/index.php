<?php
	include 'StaticVariable.php';
	include 'StaticMethod.php';
	
	//================UserData class================
	//Accessing static variable through 'non static method', obj or class both are usable.
	$obj = new UserData();
	$obj->show() ."<br>";

	
	UserData::show();
	echo "<br><br>";

	//Accessing static variable directly, can't be accessed by object
 	echo UserData::$userName ."<br>";
 	echo UserData::$userAge;

	
	//================UserInfo class================			
	//className::method();
	echo "<br><br>";
	echo UserInfo::showName("Umme Habiba");
	echo "<br>";

	//print multiple parameter from static method
	$rtn_values = UserInfo::showAll("Ruman Chowhury",25);

	foreach ($rtn_values as $values) {
			echo $values ."<br>";
		}	


?>