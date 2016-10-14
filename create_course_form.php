<!DOCTYPE html>

<?php
include_once 'session_start.php';
?>

<html>
<head>
	<title>Course Details</title>
</head>

<style type="text/css">
	

	@import "http://fonts.googleapis.com/css?family=Droid+Serif";  /* This Line is to import Google font style */
.content{
width:960px;
margin:20px auto
}
.main{
float:left;
width:650px;
margin-top:70px;
margin-left: 150px;
}
#progressbar{
margin:0;
padding:0;
font-size:18px
}
#active1{
color:red
}
fieldset{
display:none;
width:350px;
padding:20px;
margin-top:50px;
margin-left:85px;
border-radius:5px;
box-shadow:3px 3px 25px 1px gray
}
#first{
display:block;
width:350px;
padding:20px;
margin-top:50px;
border-radius:5px;
margin-left:85px;
box-shadow:3px 3px 25px 1px gray
}
input[type=text],input[type=password],select{
width:100%;
margin:10px 0;
height:40px;
padding:5px;
border:3px solid #ecb0dc;
border-radius:4px
}
textarea{
width:100%;
margin:10px 0;
height:70px;
padding:5px;
border:3px solid #ecb0dc;
border-radius:4px
}
input[type=submit],input[type=button]{
width:120px;
margin:15px 25px;
padding:5px;
height:40px;
background-color:#a0522d;
border:none;
border-radius:4px;
color:#fff;
font-family:'Droid Serif',serif
}
h2,p{
text-align:center;
font-family:'Droid Serif',serif
}
li{
margin-right:36px;
display:inline;
color:black;
font-family:'Droid Serif',serif
}
</style>
<body style="background-image: url(images/create_bg.png);">
<div style="float: right;">Hi <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a></div>

<div class="content">
<!-- Multistep Form -->
<div class="main">
<form action="create_course.php" class="regform" method="post" enctype="multipart/form-data">
<!-- Progressbar -->
<ul id="progressbar">
<li id="active1">Create Course</li>
<li id="active2">Unit 1</li>
<li id="active3">Unit 2</li>
<li id="active4">Unit 3</li>
<li id="active5">Unit 4</li>
<li id="active6">Unit 5</li>

</ul>
<!-- Fieldsets -->

<fieldset id="first">
<h2 class="title">Create Course</h2>
<p class="subtitle">Step 1</p>
<input class="text_field" name="course_name" placeholder="COURSE NAME" type="text" required>
<textarea class="text_field" placeholder="SHORT DESCRIPTION" name="sdescrptn" required></textarea>

<select class="options" name="level" required>
<option>--Select Difficulty--</option>
<option>BEGINNERS</option>
<option>INTERMEDIATE</option>
<option>EXPERT</option>
</select>

<input type="file" name="fileToUpload" id="fileToUpload" required>

<input id="next_btn1" onclick="next_step1()" type="button" value="Next">
</fieldset>

<fieldset id="second">

<h2 class="title">Course Content</h2>
<p class="subtitle">Step 2</p>
<p class="subtitle">Unit 1</p>

<input class="text_field" name="unit1" placeholder="NAME OF UNIT" type="text" required>
<textarea class="text_field" name="unit1_sub" placeholder="ENTER THE SUB TOPICS"></textarea>
<input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">
<input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Next">
</fieldset>

<fieldset id="third">

<p class="subtitle">Unit 2</p>
<input class="text_field" name="unit2" placeholder="NAME OF UNIT" type="text" required>
<textarea class="text_field" name="unit2_sub" placeholder="ENTER THE SUB TOPICS"></textarea>
<input id="pre_btn1" onclick="prev_step2()" type="button" value="Previous">
<input id="next_btn2" name="next" onclick="next_step3()" type="button" value="Next">
</fieldset>

<fieldset id="forth">

<p class="subtitle">Unit 3</p>
<input class="text_field" name="unit3" placeholder="NAME OF UNIT" type="text" required>
<textarea class="text_field" name="unit3_sub" placeholder="ENTER THE SUB TOPICS"></textarea>
<input id="pre_btn1" onclick="prev_step3()" type="button" value="Previous">
<input id="next_btn2" name="next" onclick="next_step4()" type="button" value="Next">
</fieldset>


<fieldset id="fifth">

<p class="subtitle">Unit 4</p>
<input class="text_field" name="unit4" placeholder="NAME OF UNIT" type="text" required>
<textarea class="text_field" name="unit4_sub" placeholder="ENTER THE SUB TOPICS"></textarea>
<input id="pre_btn1" onclick="prev_step4()" type="button" value="Previous">
<input id="next_btn2" name="next" onclick="next_step5()" type="button" value="Next">
</fieldset>

<fieldset id="sixth">

<p class="subtitle">Unit 5</p>
<input class="text_field" name="unit5" placeholder="NAME OF UNIT" type="text" required>
<textarea class="text_field" name="unit5_sub" placeholder="ENTER THE SUB TOPICS"></textarea>
<input id="pre_btn2" onclick="prev_step5()" type="button" value="Previous">
<input class="submit_btn" type="submit" value="Submit">
</fieldset>



</form>
</div>
</div>

<script type="text/javascript">
/*---------------------------------------------------------*/
// Function that executes on click of first next button.
function next_step1() {
document.getElementById("first").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "red";
}
function next_step2() {
document.getElementById("second").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "red";
}

function next_step3() {
document.getElementById("third").style.display = "none";
document.getElementById("forth").style.display = "block";
document.getElementById("active4").style.color = "red";
}
function next_step4() {
document.getElementById("forth").style.display = "none";
document.getElementById("fifth").style.display = "block";
document.getElementById("active5").style.color = "red";
}
function next_step5() {
document.getElementById("fifth").style.display = "none";
document.getElementById("sixth").style.display = "block";
document.getElementById("active6").style.color = "red";
}

// Function that executes on click of first previous button.
function prev_step1() {
document.getElementById("first").style.display = "block";
document.getElementById("second").style.display = "none";
document.getElementById("active1").style.color = "red";
document.getElementById("active2").style.color = "gray";
}

// Function that executes on click of second previous button.
function prev_step2() {
document.getElementById("third").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "red";
document.getElementById("active3").style.color = "gray";
}
function prev_step3() {
document.getElementById("forth").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "red";
document.getElementById("active4").style.color = "gray";
}
function prev_step4() {
document.getElementById("fifth").style.display = "none";
document.getElementById("forth").style.display = "block";
document.getElementById("active4").style.color = "red";
document.getElementById("active5").style.color = "gray";
}
function prev_step5() {
document.getElementById("sixth").style.display = "none";
document.getElementById("fifth").style.display = "block";
document.getElementById("active5").style.color = "red";
document.getElementById("active6").style.color = "gray";
}

</script>

</body>
</html>