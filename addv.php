<?php

include_once 'session_start.php';

$id=$_POST['id'];
$unit=$_POST['unit'];
$url=$_POST['video'];
if(mysqli_query($conn,"insert into course_content(Course_ID,Unit,FileTarget,Type) values($id,'$unit','$url','vid')")){
	
	echo "success";
}
else{

	echo "fail".mysqli_error($conn);
}
?>
