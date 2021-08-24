<?php

$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
$pas = filter_var(trim($_POST['pas']), FILTER_SANITIZE_STRING);


$servername = "w123";
$username = "username";
$password = "secret";
$database = "the task 1";

// Create connection
$mysqli = new mysqli("$servername", "$username", "$password", "$database");
	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}
	//запрос к базе
$result = $mysqli->query("SELECT * FROM `user` WHERE `mail`= '$mail' AND `password` = '$pas'");
//print_r($result);
$user = $result->fetch_assoc();

//print_r($user);
//print_r ($user[status]);
if(count($user) == 0){
		echo "Не знаем таких";
 		exit();
} if ($user[status] =='admin') {
	header('Location: /');
} if ($user[status] == 'user') {
	header('Location: /');
}


setcookie('user', $user['mail'], time() + 3600, "/"); //куки 3600 секунд
setcookie('status', $user['status'], time() + 3600, "/");

$mysqli->close();


?>