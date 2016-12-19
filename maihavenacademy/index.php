<?php 

error_reporting(0);
require 'db/connect.php';

?>	

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pinnacle Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pinnacle Academy">
    <meta name="author" content="Stephen">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link href="css/index/index.css" rel="stylesheet" type="text/css">
	<link href="css/index/largeDesktop.css" rel="stylesheet" type="text/css">
	<link href="css/index/portraitTabletToLandscapeAndDesktop.css" rel="stylesheet" type="text/css">
	<link href="css/index/landscapePhoneToPortraitTablet.css" rel="stylesheet" type="text/css">
	<link href="css/index/landscapePhonesAndDown.css" rel="stylesheet" type="text/css">   
    
    <script src="javascripts/jquery.min.js"></script>         
 
</head>

<body> 

<div id="bodyContainer">
    
    <!--Topbar-->
    <div id="topbar">
   		<?php include_once('includes/topbarInner.php'); ?>
    </div>
    <!--Topbar ends-->

    <!--Intro-->
    <div id="intro">
    	<p class="introText1">Become Enlightened</p>
        
    	<p class="introText2">Sign Up For Our New Free 5-Day Course That Shows How To Reprogram Yourself For More Health, Love, 
        Wealth & Creativity.</p>
        
        <p class="introButton"><a href="">Get Your Free Course</a></p>
        
        <p class="introText3">Pinnacle Academy is a Home of Learning. It is a Community of Common People, coming together to form a 
        Standard for the Possibility of reaching a Higher Level in Life.</p>
        
        <p class="introText4">Life as we know, is a Process of Creation. We at Pinnacle Academy are dedicated to the believe that every
        individual is expected to know this Processes and be able to use them in the Creation of a Perfect Life just as we want it.</p>
        
        <p class="introText4">We share Courses, Articles, Exercises, Ideas and knowledge on Building a Creative Life, Expanding the 
        Limits in the Level of Living, Connect with the High Level of Mind and Elevating the Spiritual Connection.</p>
        
        <p class="introText4">Interested? Explore Our Universe.</p>        
    </div>
    <!--Intro ends-->

	<!--Free Course-->
    <div id="freeCourse">
    	<div class="freeCourse">
        	<p class="freeCourseText">Explore Our Free Course</p>
            
        	<p class="freeCourseIntroText">We at Pinnacle Academy have a core believe that giving is of a loving nature, which is why 
            we are giving you this free course for the transformation of your ideal life.</p>
            
            <div class="freeCourseImg"><a href=""><img src="images/reprogramyourself.png" alt="" /></a></div>
            
        	<p class="freeCourseImgText"><a href="">Reprogram Yourself</a></p>
            
        	<p class="freeCourseImgIntroText"><a href="">Create your life just as you want it to be by reprogramming yourself into
            new possibilities.</a></p>            
        </div>
    </div>
    <!--Free Course ends-->
        
    <!--Pinnacle Academy-->
    
    <div id="pinnacleAcademy">
   		<?php include_once('includes/pinnacleacademy.php'); ?>
    </div>	
    
    <div class="articlesBoxAllPosts">
	<a href="#">
    	<div class="articlesBoxAllPostsButton">
                    SEE ALL POSTS
        </div>
    </a>
	</div>
    <!--Thoughts and Experiences ends-->
        
    
    <!--Footer-->
    <div id="footer">
    	<?php include_once('includes/footer.php'); ?>
    </div>	
    <!--Footer ends-->

</div>

</body>

</html>