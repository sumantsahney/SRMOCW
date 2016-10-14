<?php
include_once 'session_student_start.php';
$flag=1;
$course_delete=$_POST['course'];
$user=$_SESSION['student'];
$id=$_GET['CourseID'];

$result=mysqli_query($conn,"select * from course_details where Course_ID=$id");

while($r=mysqli_fetch_assoc($result)){
	$coursename=$r['CourseName'];
}

$sub=mysqli_query($conn,"select * from student_subscribe where username='$user'");

while($s=mysqli_fetch_assoc($sub)){

	if($s['courseid']==$id){

		$flag=0;
	}
}


if($flag==1){
if(mysqli_query($conn,"insert into student_subscribe(username,courseid,coursename) values('$user',$id,'$coursename')"))
{
	echo "Success";
	header("Location: index1.php");
}
else{

	echo "Error While Subscribing";
}
}
else{
	echo "ALREADY SUBSCRIBED";
}
?>