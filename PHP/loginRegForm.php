<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'namjai');

$fullName = $_POST['fullName'];
$IdentityNumber = $_POST['IdentityNumber'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "SELECT * FROM user_details where idNo = '$IdentityNumber'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Username Already Taken");'; 
	echo 'window.location.href = "../loginRegisterForm/loginRegForm.html";';
	echo '</script>';
}
else
{
	$reg = "INSERT INTO user_details(Name, idNo, email,password) values('".$fullName."', '".$IdentityNumber."', '".$email."', '".$pass."')";
	mysqli_query($con, $reg);
	echo '<script type="text/javascript">'; 
	echo 'alert("Login Successful");'; 
	echo 'window.location.href = "../index.html";';
	echo '</script>';
}

?>