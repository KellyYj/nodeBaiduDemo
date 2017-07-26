<?php
	header("Content-type:application/json; charset=utf-8");
	
	$localhost = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbName = 'mynewsdb';
	$dbport = 3306;
	
	$link = mysqli_connect($localhost,$dbusername,$dbpassword,$dbName,$dbport);
?>