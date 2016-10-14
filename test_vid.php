<?php
include_once 'session_start.php'
    
    $query1=mysqli_query($conn,"select * from course_content where Course_ID=$courseid and Unit='Unit$num' and Type='vid'");
    
    if(mysqli_num_rows($query1)>0){
        while($ppt=mysqli_fetch_assoc($query1)) {    
        echo "<a href=".$ppt['FileTarget'].">".$ppt['FileTarget']."<a/><br><br>";
        echo '<iframe width="420" height="315" src="'.$ppt['FileTarget'].'">';
        echo "</iframe>";
        }
    }



?>