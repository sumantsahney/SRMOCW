<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: welcome.php");
}

if(isset($_POST['btn-login']))
{
	$email=$_POST["email"];
	$pass=md5($_POST["pass"]);
	$_SESSION['user']=$email;

$result=mysqli_query($conn,"select password from users where email='$email'");

$row=mysqli_fetch_assoc($result);
if($row["password"]==$pass){

	echo "Login Succesful";
	header("Location: welcome.php");
	die();
}
else{

	echo "Incorrect Details";
}
}


?>