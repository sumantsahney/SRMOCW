<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE email='".$_SESSION['user']."'");
$userRow=mysqli_fetch_assoc($res);
?>
