<?php
include_once 'session_start.php';
$course_delete=$_POST['course'];
$user=$_session['user'];
$id=$_GET['CourseID'];

if(mysqli_query($conn,"delete from course_details where Course_ID=$id"))
{
	echo "Success";
	header("Location: welcome.php");
}
else{
	echo "Failed";
}
?>