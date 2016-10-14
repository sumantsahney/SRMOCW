<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['student'])!="")
{
 header("Location: index1.php");
}

if(isset($_POST['btn-login']))
{
	$email=$_POST["email"];
	$pass=md5($_POST["pass"]);
	$_SESSION['student']=$email;

$result=mysqli_query($conn,"select password from studentdetails where email='$email'");

$row=mysqli_fetch_assoc($result);
if($row["password"]==$pass){

	echo "Login Succesful";
	header("Location: index1.php");
	die();
}
else{

	echo "Incorrect Details";
}
}


?>