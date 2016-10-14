<?php 
session_start();
 session_destroy();
 unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="layout/styles/input_style.css">
</head>
<body style="background-image: url(images/bg1.jpg);">
<div style="position:absolute; margin-top: 14%;margin-left: 17%">
<form name="myForm" action="check.php" method="post">	
<ul class="input-list style-2 clearfix">

    	<li>
      		<input type="email" name="email" placeholder="E-MAIL" class="focus" required>
    	</li>
    	<li>
    		<input type="password" name="pass" placeholder="PASSWORD" id="pass" required>
    	</li>
      <li>
    		<input type="submit" name="btn-login" value="Submit"></input>	
    	</li>
  	</ul>

</form>
</div>
</body>
</html>