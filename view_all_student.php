<?php

include_once 'dbconnect.php';

$result=mysqli_query($conn,"select * from course_details");

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>COURSES</title>
	
	<link rel="stylesheet" href="css/reset_table.css">
	<link rel="stylesheet" href="css/pricing-tables.css">
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css"><![endif]-->

	
<meta name="robots" content="noindex,follow" />
</head>

<body style='background-image: url("ub.jpg");'>
<div style="margin: 50px;">
<table class="pricing-table">
	
<?php
	if (mysqli_num_rows($result) > 0) {
    while($courses = mysqli_fetch_assoc($result)) {
        	
			echo '<thead ><tr class="plan"><td class="orange"><h2>'.$courses['CourseName'].'</h2>';

			echo '</td></tr><tr class="price"><td class="orange">
				<span>'.$courses['CourseLevel'].'</span>';
				
				echo "<a href='course_view_all.php?CourseID=".$courses["Course_ID"]."'>View</a>";
				echo "<br><br><br>";
			echo "</td></tr>";
			echo '<tr class="price"><td class="orange">';
			echo '<span><a href="subscribe.php?CourseID=' . $courses['Course_ID'] . '">Subscribe</a></span>';
			echo "<br><br><br>";
			echo "</tr></td>";




			echo "</thead>";

	}
}
?>
	

</table>
</div>
</body>
</html>
