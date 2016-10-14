<?php 
session_start();
session_destroy();
unset($_SESSION['student']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="layout/styles/input_style.css">
</head>
<body style="background-image: url(images/bg.jpg);">
<div style="position: absolute; margin-top: 10%;margin-left: 15%">

<form name="myForm" action="registration_student.php" method="post">
	
<ul class="input-list style-2 clearfix">
    	<li>
      		<input type="text" name="name" placeholder="NAME" required>
    	</li>
    	<li>
      		<input type="email" name="email" placeholder="E-MAIL" class="focus" required>
    	</li>
    	<li>
    		<input type="password" name="pass" placeholder="PASSWORD" id="pass" required>
    	</li>
    	<li>
    		<input type="password" name="cpass" placeholder="CONFIRM PASSWORD" id="cpass" required>
    	</li>
    	<li>
    		<input type="submit" name="btn-signup" value="Submit">
    	</li>
  	</ul>

</form>
</div>

</body>
<script type="text/javascript">
			var pass = document.getElementById("pass")
		  , cpass = document.getElementById("cpass");

		function validatePassword(){
		  if(pass.value != cpass.value) {
		    cpass.setCustomValidity("Passwords Don't Match");
		  } else {
		    cpass.setCustomValidity('');
		  }
		}

		pass.onchange = validatePassword;
		cpass.onkeyup = validatePassword;


</script>
</html>