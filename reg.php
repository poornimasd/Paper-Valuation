<?php

 include 'config.php';

$mail = $_POST['mail'];
$password = $_POST['password'];

$q = mysqli_query($con , "insert into user(mail,password) values('{$mail}','{$password}')");

if($q) {
	header('location:login.html');
} 


?>