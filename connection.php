<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'sahil';

	$conn = mysqli_connect($host, $user, $password, $dbname);

	if(!$conn){
		echo 'Connection to Database Failed';
	}

?>