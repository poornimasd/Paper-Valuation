<?php
include 'config.php';
session_start();
$email = $_POST['mail'];
$password = $_POST['password'];

$q = mysqli_query($con, "select * from user where mail= '{$mail}' and password= '{$password}'");

if(mysqli_num_rows($q)>0) {
	$_SESSION['mail'] = $mail;
	header('location:fac.html');
}
else {
	echo "<center><h1 style='color:red'>Invalid username or password</h1></center>";
}

?>