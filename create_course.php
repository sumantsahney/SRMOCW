<?php

include_once 'session_start.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$course_name=$_POST["course_name"];
$level=$_POST['level'];
$desc=$_POST['sdescrptn'];
$course_coordinator=$userRow['username'];
$_SESSION["CourseName"]=$course_name;
$unit1=$_POST['unit1'];
$unit2=$_POST['unit2'];
$unit3=$_POST['unit3'];
$unit4=$_POST['unit4'];
$unit5=$_POST['unit5'];

$unit1_sub=$_POST['unit1_sub'];
$unit2_sub=$_POST['unit2_sub'];
$unit3_sub=$_POST['unit3_sub'];
$unit4_sub=$_POST['unit4_sub'];
$unit5_sub=$_POST['unit5_sub'];

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
    echo "Sorry, only JPG, JPEG,  & PNG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if($uploadOk==1){
    if(mysqli_query($conn,"insert into course_details(CourseName,CourseDesc,CourseLevel,CourseImage,CourseCordinator,Unit1,Unit2,Unit3,Unit4,Unit5,Unit1_content,Unit2_content,Unit3_content,Unit4_content,Unit5_content) values('$course_name','$desc','$level','$target_file','$course_coordinator','$unit1','$unit2','$unit3','$unit4','$unit5','$unit1_sub','$unit2_sub','$unit3_sub','$unit4_sub','$unit5_sub')")){
        echo "Course Successfully Created";
        header("Location: course_view.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
