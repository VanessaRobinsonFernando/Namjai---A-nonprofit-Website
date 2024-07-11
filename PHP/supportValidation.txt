<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'namjai');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM user_details where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{ 
	echo '<script type="text/javascript">'; 
	echo 'alert("Your Support wil not be in vain! We Promise you");'; 
	echo 'window.location.href = "../index.html";';
	echo '</script>';
}
else
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Please Enter a Valid Email Address or Password!");'; 
	echo 'window.location.href = "../index.html";';
	echo '</script>';
}

?>

