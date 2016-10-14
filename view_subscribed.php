<?php

include_once 'session_student_start.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body link="white" style='background-image: url("white.jpg");'>
<div style='position: absolute; margin-top: 50px;margin-left: 40%;font-size: 30px;'>
	
<?php
$u=$_SESSION['student'];
$result=mysqli_query($conn,"select * from student_subscribe where username='$u'");


echo '<table>';
if (mysqli_num_rows($result) > 0) {
    while($courses = mysqli_fetch_assoc($result)) {
        echo "<tr><td><a href='course_view_all.php?CourseID=".$courses["courseid"]."'>". $courses["coursename"].'</a></td></tr>';
    }
} else {
    echo "0 results";
}
echo '</table>';

?>



</div>


</body>
</html>
