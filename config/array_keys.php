<?php

$servername = "w123";
$username = "ADMIN";
$password = "123";
$database = "the task 1";



// Create connection
$mysqli = new mysqli("$servername", "$username", "$password", "$database");
	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}
