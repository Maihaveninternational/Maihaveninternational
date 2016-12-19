<ul>
	<a href="#"><li class="logo">Self Pinnacle</li></a>
</ul>

<ul>  
	<a href="#"><li class="bar_buttons" id="forum">Forum</li></a>		
	<a href="#"><li class="bar_buttons" id="search">Search</li></a>		
	<a href="#"><li class="bar_buttons" id="login">Login</li></a>		
	<a href="#"><li class="bar_buttons" id="signUp">Sign Up</li></a>	 
</ul>

	<script>
		$(document) .ready(function() {                                               
			$("#search").click(function () {
				$(".search").slideToggle("fast");
				$(".login").slideUp("fast");
				$(".signUp").slideUp("fast");
			});
		});
    </script>

	<script>
		$(document) .ready(function() {                                               
			$("#login").click(function () {
				$(".login").slideToggle("fast");
				$(".search").slideUp("fast");
				$(".signUp").slideUp("fast");
			});
		});
    </script>

	<script>
		$(document) .ready(function() {                                               
			$("#signUp").click(function () {
				$(".signUp").slideToggle("fast");
				$(".login").slideUp("fast");
				$(".search").slideUp("fast");
			});
		});
    </script>


<div class="search">
	<p class="search_title">Search</p>
    <input class="search_bar" type="text" name="search" value="" />
    <a href=""><div class="button_search"></div></a>
</div>

<div class="login">
	 <p class="login_title">Login</p>
                            
         <form action="" method="post" class="loginForm">
         	<input type="text" name="" value="" class="detailsInput" placeholder="Username" /><br><br>
            <input type="text" name="" value="" class="detailsInput" placeholder="Password" /><br><br>
            <input type="submit" name="" value="Login" class="loginLogin" />
         </form>
                            
                            <button class="closeBox">Close</button>                           
                            <script>
								$(document).ready(function() {                                              
									$(".closeBox").click(function () {
										$(".login").slideUp("fast");								
									});
								});
							</script>
</div>


<div class="signUp">
	<p class="signUp_title">Sign Up</p>
                            
         <form action="" method="post" class="signUpForm">
         	<input type="text" name="" value="" class="detailsInput" placeholder="First Name" />
            <input type="text" name="" value="" class="detailsInput" placeholder="Last Name" /><br><br>
            <input type="text" name="" value="" class="detailsInput" placeholder="Email" />
            <input type="text" name="" value="" class="detailsInput" placeholder="Password" /><br><br>
            <input type="submit" name="" value="Sign Up" class="signUpLogin" />
         </form>
                            
                            <button class="closeBox">Close</button>                           
                            <script>
								$(document).ready(function() {                                              
									$(".closeBox").click(function () {
										$(".signUp").slideUp("fast");								
									});
								});
							</script>
                        </div>    