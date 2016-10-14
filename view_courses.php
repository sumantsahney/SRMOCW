<?php 
include_once 'session_start.php';
$coursecoordinator=$userRow['username'];
$result=mysqli_query($conn,"select * from course_details where CourseCordinator='$coursecoordinator'");
?>



<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>VIEW COURSES</title>
        <link rel="stylesheet" href="css/ss.css">
  </head>
  <body>
<div style="float: right;">Hi <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a></div>

<table class="table-fill">
<thead>
<tr>
<th class="text-left">COURSES</th>
<th class="text-left" colspan="4">OPTIONS</th>
</tr>
</thead>
<tbody class="table-hover">

<?php

if (mysqli_num_rows($result) > 0) {
    while($courses = mysqli_fetch_assoc($result)) {
        echo '<tr><td class="text-left">'. $courses["CourseName"].'</td>';
        echo '<td class="text-left"><a href="edit.php?CourseID=' . $courses['Course_ID'] . '">Edit</a></td>';
        echo '<td class="text-left"><a href="delete.php?CourseID=' . $courses['Course_ID'] . '">Delete</a></td>';
        echo '<td class="text-left"><a href="add_form.php?CourseID=' . $courses['Course_ID'] . '">Add PPT</a></td>';
        echo '<td class="text-left"><a href="add_video.php?CourseID=' . $courses['Course_ID'] . '">Add Video</a></td>';
        echo "</tr>"; 

    }
} else {
    echo "0 results";
}

?>
</tbody>

</table>
</body>
  </body>
</html>





























