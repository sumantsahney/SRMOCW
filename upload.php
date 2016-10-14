<?php
include_once 'session_start.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Information</title>
</head>
<body>

<form action="upload_file.php" method="post" enctype="multipart/form-data">
    Select File to Be upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


</body>
</html>