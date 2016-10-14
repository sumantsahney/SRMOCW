<?php


include_once 'session_start.php';

$courseid=$_POST['courseid'];

$unit1=$_POST['unit1'];
$unit2=$_POST['unit2'];
$unit3=$_POST['unit3'];
$unit4=$_POST['unit4'];
$unit5=$_POST['unit5'];


$unit1_content=$_POST['unit1_content'];
$unit2_content=$_POST['unit2_content'];
$unit3_content=$_POST['unit3_content'];
$unit4_content=$_POST['unit4_content'];
$unit5_content=$_POST['unit5_content'];

if(mysqli_query($conn,"update course_details set Unit1='$unit1',Unit2='$unit2',Unit3='$unit3',Unit4='$unit4',Unit5='$unit5',unit1_content='$unit1_content',unit2_content='$unit2_content',unit3_content='$unit3_content',unit4_content='$unit4_content',unit5_content='$unit5_content' where Course_ID=$courseid ")==TRUE){

	header("Location: course_view_all.php?CourseID=$courseid");
}
else{
	echo "Not Success";
}



?>