<?php
session_start();
if(isset($_SESSION['student'])){
  header("Location: index1.php");


}
?>

<!DOCTYPE html>
<html>
<head>
<title>SRM OCW</title>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
</head>

<body class="">
<div class="wrapper row1">
  <header id="header" class="full_width clear">
    <div id="hgroup">

      <h1><a href="index.php">SRM OPEN COURSEWARE</a></h1>
      <h2>Never Stop Learning Because Life Never Stops Teaching</h2>
    </div>
    <div id="header-contact">
      <ul style="position: absolute;margin-left: 187px;margin-top: 40px" class="list none">
        <li><a href="login_student.php">Login</a></li>
        <li><a href="registration_student_form.php">Register</a></li>
      </ul>
      <ul class="list none">
        <li><span class="icon-envelope"></span> <a href="#">info@srmocw.com</a></li>
        <li><span class="icon-phone"></span> +12 345 67891011</li>
      </ul>
    </div>
  </header>
</div>

<div class="wrapper row2">
  <nav id="topnav">
    <ul class="clear">
      <li class="active"><a href="index.php" title="Homepage">Home</a></li>
      <li><a class="drop" href="view_all.php" title="Pages">Find Course</a>
      </li>
      <li><a class="drop" href="#" title="Elements">Contact</a>
        <ul>
       
        </ul>
      </li>
    
    
     <!-- <li class="last-child"><a href="#" title="A Very Long Link Text">A Very Long Link Text</a></li>-->
    </ul>
  </nav>
</div>
<!-- content -->

<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
      <div class="main_slider clear bg_dkgrey push60">
        <div class="one_half nogutter first">&nbsp;</div>
        <div class="one_half nogutter">
          <div class="pad20">
            <h1 class="emphasise nospace" style="text-shadow: 0px 0px 7px rgba(150, 150, 150, 1);">Education is the most powerful weapon which you can use to change the world.</h1>
        <!--    <p>Donec a erat in enim cursus gravida id non urna. Integer imperdiet vestibulum leo ut tincidunt. In sagittis diam ut leo convallis vel rutrum mauris ullamcorper. Vestibulum adipiscing erat sit amet justo luctus molestie. In hac habitasse platea dictumst. In lacinia erat id ante faucibus tristique. Integer egestas elementum risus vel rutrum. Mauris vel augue sit amet lectus hendrerit auctor non nec purus.</p>
        -->
        <p></p> 
            <a href="#" class="button large gradient orange rnd5">Read More &raquo;</a></div>
        </div>
      </div>
      <!-- #### -->
      <div class="clear push60">
        <div class="one_half nogutter first">
          <div class="one_half nogutter first"><a href="#"><img src="images/demo/mem.jpg" alt="Computer Memory"></a></div>
          <div class="one_half nogutter bg_orange">
            <div class="pad20">
              <h2>Computer Memory</h2>
              <p class="push30">What Every <b>Programmer</b>   Should Know about <b>Memory</b></p>
              
              <br>
              <a href="cpumemory.pdf" class="button small gradient orange rnd5">Read More &raquo;</a></div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="one_half nogutter">
          <div class="one_half nogutter first"><a href="#"><img src="images/demo/seo.jpg" alt=""></a></div>
          <div class="one_half nogutter bg_orange">
            <div class="pad20">
              <h2>Search Engine Optimization</h2>
              <p class="push30">What Every <b>Programmer</b> Should Know about <b>SEO</b></p>
              <a href="seo.pdf" class="button small gradient orange rnd5">Read More &raquo;</a></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <!-- #### -->
      <div class="clear">
        
        <div class="one_quarter first">
          
          <!<h2>Meet Our Instructor</h2>
          <h6>Dr. R. Subburaj<br><sub>Professor and Consultant</sub></h6>

          <p>OCW can be valuable for faculty who are creating their own courses. It allows anyone to get an inside look at how other professors are organizing and teaching their classes.</p>
         
          <a href="#" class="button small gradient orange rnd5">Learn More &raquo;</a> </div>
          <br><br><br>
        <div class="three_quarter">
          <ul class="nospace clear">
            <li class="one_third nogutter first">
              <figure class="showtext"><img src="images/demo/300x220lt.gif" alt="">
                <figcaption class="caption">
                  <div class="pad30">
                    <p class="font-medium push20">Introduction To Programming</p>
                    <a href="#">View This Course &raquo;</a></div>
                </figcaption>
              </figure>
            </li>
            <li class="one_third nogutter">
              <figure class="showtext"><img src="images/demo/300x220dk.gif" alt="">
                <figcaption class="caption">
                  <div class="pad30">
                    <p class="font-medium push20">Data Structures & Algorithms</p>
                    <a href="#">View This Course &raquo;</a></div>
                </figcaption>
              </figure>
            </li>
            <li class="one_third nogutter">
              <figure class="showtext"><img src="images/demo/300x220lt.gif" alt="">
                <figcaption class="caption">
                  <div class="pad30">
                    <p class="font-medium push20">Introduction To <b>BIG DATA</b></p>
                    <a href="#">View This Course &raquo;</a></div>
                </figcaption>
              </figure>
            </li>
            <li class="one_third nogutter first">
              <figure class="showtext"><img src="images/demo/300x220dk.gif" alt="">
                <figcaption class="caption">
                  <div class="pad30">
                    <p class="font-medium push20">Web System Technologies</p>
                    <a href="#">View This Course &raquo;</a></div>
                </figcaption>
              </figure>
            </li>
            <li class="one_third nogutter">
              <figure class="showtext"><img src="images/demo/300x220lt.gif" alt="">
                <figcaption class="caption">
                  <div class="pad30">
                    <p class="font-medium push20">Introduction To Java</p>
                    <a href="#">View This Course &raquo;</a></div>
                </figcaption>
              </figure>
            </li>
            <li class="one_third nogutter">
              <figure class="showtext"><img src="images/demo/300x220dk.gif" alt="">
                <figcaption class="caption">
                  <div class="pad30">
                    <p class="font-medium push20">Design Algorithm & Analysis</p>
                    <a href="#">View This Course &raquo;</a></div>
                </figcaption>
              </figure>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
  
    

  </div>
</div>
<div class="wrapper row4">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">SRM OPEN COURSEWARE  </a></p>
    <p class="fl_right">Developed by <a href="http://www.os-templates.com/" title="Free Website Templates">IT STUDENTS</a></p>
  </div>
</div>
<!-- Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="layout/scripts/custom.js"></script>
</body>
</html>