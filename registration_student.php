<?php
session_start();

if(isset($_SESSION['student'])!="")
{
 header("Location: home.php");
}

if(isset($_POST['btn-signup'])){
$name=$_POST["name"];
$email=$_POST["email"];
$pass=md5($_POST["pass"]);

include_once 'dbconnect.php';

$sql="insert into studentdetails(username,email,password) values('".$name."','".$email."','".$pass."')";

$count=mysqli_query($conn,"select * from studentdetails where Name='$name'");
$num=mysqli_num_rows($count);
  if($num>=1)
    {
      echo"name already exists";
    }
  else
    {
  if (mysqli_query($conn, $sql)) {
      echo "Registration Successful";
      header("Location: welcome.php");
    die();
  }
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
}
?>

