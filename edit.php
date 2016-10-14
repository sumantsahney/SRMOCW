<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>

</head>
<body style='background-image: url("lab.jpg"); color: white'>

<?php

include_once 'session_start.php';
$CourseCordinator=$_SESSION['user'];
$courseid=$_GET["CourseID"];

if($_SESSION['user']!=""){
	$query=mysqli_query($conn,"select * from course_details where Course_ID=$courseid");

		if(mysqli_num_rows($query)>0){
			$row=mysqli_fetch_assoc($query);

			$Unit1=$row['Unit1'];
			$Unit2=$row['Unit2'];
			$Unit3=$row['Unit3'];
			$Unit4=$row['Unit4'];
			$Unit5=$row['Unit5'];

			$Unit1_content=$row['Unit1_content'];
			$Unit2_content=$row['Unit2_content'];
			$Unit3_content=$row['Unit3_content'];
			$Unit4_content=$row['Unit4_content'];
			$Unit5_content=$row['Unit5_content'];




		}
		else{
			header('location : welcome.php');

		}

}
else{

	header('location : welcome.php');
}

?>


<form method="post" action="update.php">
<ul class="form-style-1">

<input type="hidden" name="courseid" value="<?php echo $courseid?>;">

<li>
<label>Unit 1</label><br> 
Title <input type="text" class="field-long" value="<?php echo $Unit1;?>" name="unit1" required><br><br>
Content <textarea  class="field-long field-textarea" name="unit1_content" required><?php echo $Unit1_content;?></textarea><br><br>
</li>

<li>
<label>Unit 2</label><br> 
Title <input type="text" class="field-long" value="<?php echo $Unit2;?>" name="unit2" required><br><br>
Content <textarea  class="field-long field-textarea" name="unit2_content" required><?php echo $Unit2_content;?></textarea><br><br>
</li>

<li>
<label>Unit 3</label><br> 
Title <input type="text" class="field-long" value="<?php echo $Unit3;?>" name="unit3" required><br><br>
Content <textarea  class="field-long field-textarea" name="unit3_content" required><?php echo $Unit3_content;?></textarea><br><br>
</li>
<li>
<label>Unit 4</label><br> 
Title <input type="text" class="field-long" value="<?php echo $Unit4;?>" name="unit4" required><br><br>
Content <textarea  class="field-long field-textarea" name="unit4_content" required><?php echo $Unit4_content;?></textarea><br><br>
</li>
<li>
<label>Unit 5</label><br> 
Title <input type="text" class="field-long" value="<?php echo $Unit5;?>" name="unit5" required><br><br>
Content <textarea  class="field-long field-textarea" name="unit5_content" required><?php echo $Unit5_content;?></textarea><br><br>
</li>

<input type="submit" value="Update">
</ul>
</form>




</body>
</html>