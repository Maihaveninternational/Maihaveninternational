
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
	<link href="css/adminLargeDesktop.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="bodyContainer">
	
    <div class="login">
    		 <p class="login_title">Login</p>
                            
         <form action="" method="post" class="loginForm">
         	<input type="text" name="username" value="" class="detailsInput" placeholder="Username" /><br><br>
            <input type="text" name="password" value="" class="detailsInput" placeholder="Password" /><br><br>
            <input type="submit" name="submit" value="Login" class="loginLogin" />
         </form>

<?php
if(isset($_POST['submit'])){
	if($_POST['username'] && $_POST['password'] == 'admin'){
?>	
		          <script> location = "admin.php"; </script>
<?php
	}
}
?>				

    </div>
    
</div>

</body>

</html>