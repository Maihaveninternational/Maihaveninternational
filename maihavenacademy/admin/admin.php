
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Self Pinnacle Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Self Pinnacle">
    <meta name="author" content="Stephen">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link href="../css/index/index.css" rel="stylesheet" type="text/css">
	<link href="../css/index/indexLargeDesktop.css" rel="stylesheet" type="text/css">
	<link href="../css/index/indexPortraitTabletToLandscapeAndDesktop.css" rel="stylesheet" type="text/css">
	<link href="../css/index/indexLandscapePhoneToPortraitTablet.css" rel="stylesheet" type="text/css">
	<link href="../css/index/indexLandscapePhonesAndDown.css" rel="stylesheet" type="text/css">   
    
    <script src="../javascripts/jquery.min.js"></script>         
 
</head>

<body> 

<div id="bodyContainer">
    
    
    <!--Articles-->
    <div id="articles">
    
    	<a href="#"><div class="articlesBox">

        <div class="newarticleLightCover">Add New Article!</div>
    
        </div></a>

    <?php include_once('../includes/articles.php'); ?>
    </div>	
    <!--Articles ends-->
    
    
    <!--Footer-->
    <div id="footer">
    <?php include_once('../includes/footer.php'); ?>
    </div>	
    <!--Footer ends-->
    
    
    <!--FooterBar-->
    <div id="footer_bar">
    	<ul>
			<a href="#"><li class="logo">Self Pinnacle</li></a>
		</ul>

    	<ul>  
			<a href="#"><li class="bar_buttons">Home</li></a>		        
			<a href="#"><li class="bar_buttons">Forum</li></a>		
			<a href="#"><li class="bar_buttons">New User</li></a>		
		</ul>
        

    </div>	
    <!--FooterBar ends-->
    

</div>

</body>

</html>