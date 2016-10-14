<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['student']))
{
 header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM studentdetails WHERE email='".$_SESSION['student']."'");
$userRow=mysqli_fetch_assoc($res);
?>
