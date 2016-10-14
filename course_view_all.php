<!DOCTYPE html>
<?php
include_once 'dbconnect.php';
$courseid=$_GET["CourseID"];
function display_ppt($conn,$num,$courseid){
    $query1=mysqli_query($conn,"select * from course_content where Course_ID=$courseid and Unit='Unit$num' and Type='ppt'");
    
    if(mysqli_num_rows($query1)>0){
        while($ppt=mysqli_fetch_assoc($query1)) {    
        echo "<a href=".$ppt['FileTarget'].">".$ppt['FileTarget']."<a/><br><br>";
        }
    }


}

function display_vid($conn,$num,$courseid){

    $query1=mysqli_query($conn,"select * from course_content where Course_ID=$courseid and Unit='Unit$num' and Type='vid'");

    if(mysqli_num_rows($query1)>0){
        while($vid=mysqli_fetch_assoc($query1)) {    
             $url = $vid['FileTarget'];
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
            $id = $matches[1];
        echo "<br><br>";
        echo '<iframe id="ytplayer" type="text/html" width="420" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0&showinfo=0&color=white&iv_load_policy=3 frameborder="0" allowfullscreen">';
        echo "</iframe>";

        }
    }


}



$coursedetails=mysqli_query($conn,"select * from course_details where Course_ID=$courseid");
$row=mysqli_fetch_assoc($coursedetails);


$coursename=$row['CourseName'];
$coursedescription=$row['CourseDesc'];
$courselevel=$row['CourseLevel'];
$courseimage=$row['CourseImage'];
$coursecoordinator=$row['CourseCordinator'];

$unit1=$row['Unit1'];
$unit2=$row['Unit2'];
$unit3=$row['Unit3'];
$unit4=$row['Unit4'];
$unit5=$row['Unit5'];

$unit1_content=$row['Unit1_content'];
$unit2_content=$row['Unit2_content'];
$unit3_content=$row['Unit3_content'];
$unit4_content=$row['Unit4_content'];
$unit5_content=$row['Unit5_content'];

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
	<title><?php echo $coursename; ?></title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<style type="text/css">
    .hide_item{
        display: none;
    }
</style>

</head>
<body>

<div id="container" class="fixed-header">

    <header> 
   	
	<div class="width">
    		<h1><a href="/">SRMOCW</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">

			
        			<li><a href="index.php">Home</a></li>

            			<li class="selected">

					<a href="view_all.php">View Course</a>
            			
					

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


    <div id="body" class="width">


<aside class="sidebar big-sidebar left-sidebar">
	
            <ul>	
               <li class="color-bg">
                    <h4>Content</h4>
                    <ul>
                        <li><a href="#"  item="unit1" onclick="change($(this))">Unit 1 : <?php echo $unit1 ?></a></li>
                        <li><a href="#"  item="unit2"onclick="change($(this))">Unit 2 : <?php echo $unit2 ?></a></li>
                        <li><a href="#"  item="unit3" onclick="change($(this))">Unit 3 : <?php echo $unit3 ?></a></li>
                        <li><a href="#" item="unit4"  onclick="change($(this))">Unit 4 : <?php echo $unit4 ?></a></li>
                        <li><a href="#"  item="unit5" onclick="change($(this))">Unit 5 : <?php echo $unit5 ?></a></li>
                    </ul>
                </li>
                
            </ul>
		
        </aside>



		<section id="content" class="two-column with-left-sidebar" style="display: block;	">

	    <article class="item" id="main">
				
			
			<h2><?php echo $coursename;?></h2>
			<div class="article-info"> By <a href="#" rel="author"><?php echo $coursecoordinator;?></a></div>
			<img src="<?php echo $courseimage;?>" style="max-width: 320px;height: auto; float: left;    margin-right: 25px;" alt="Course Image">
			<h4 ><span style="color:#D1333B">Course Level</span> : <span style="color: #D13294"><?php echo $courselevel?></span></h4>
            <p ><?php echo $coursedescription;?></p>
            
            
            
		</article>


		<article class="item hide_item" id="unit1" >
			        	
        	<h2><?php echo $unit1;?></h2>
            <p ><?php echo $unit1_content;?></p>
            <?php display_ppt($conn,1,$courseid);?>
            <?php display_vid($conn,1,$courseid);?>
            


		</article>


        <article class="item hide_item" id="unit2" >
                        
            <h2><?php echo $unit2;?></h2>
            <p ><?php echo $unit2_content;?></p>
            <?php display_ppt($conn,2,$courseid);?>
            <?php display_vid($conn,2,$courseid);?>
            

        </article>
    
    <article class="item hide_item" id="unit3" >
                        
            <h2><?php echo $unit3;?></h2>
            <p ><?php echo $unit3_content;?></p>
            <?php display_ppt($conn,3,$courseid);?>
            <?php display_vid($conn,3,$courseid);?>
            

        </article>
    
    <article class="item hide_item" id="unit4" >
                        
            <h2><?php echo $unit4;?></h2>
            <p ><?php echo $unit4_content;?></p>
            <?php display_ppt($conn,4,$courseid);?>
            <?php display_vid($conn,4,$courseid);?>
            
        </article>
<article class="item hide_item" id="unit5" >
                        
            <h2><?php echo $unit5;?></h2>
            <p ><?php echo $unit5_content;?></p>
            <?php display_ppt($conn,5,$courseid);?>
            <?php display_vid($conn,5,$courseid);?>
            

        </article>
        </section>   
    	<div class="clear"></div>
    </div>
    <footer class="width">
        <div class="footer-content">
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; SRMCOW 2014 by IT STUDENTS</p>
         </div>
    </footer>
</div>
<script type="text/javascript">
	function change(t){
		var item = t.attr("item");
        $(".item").addClass("hide_item");
        $("#"+item).removeClass("hide_item");
	}


</script>
</body>
</html>