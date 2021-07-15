<!DOCTYPE html>

<html class="no-js" lang="en"> 
<head>


   <meta charset="utf-8">
	<title>as</title>
	<meta name="description" content="">
	<meta name="author" content="">


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
	

	<script src="js/modernizr.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
	//check all data
		function Check(){
			var Email = document.getElementById('Email').value;
			var password = document.getElementById('Password').value;
			var cpassword = document.getElementById('cPassword').value;
			var Register = document.getElementById('Register');

			if(isEmail(Email)) // check the email format
			{
				if(password == cpassword) // check two password entered the same
				{
					if(password.length >= 5 && cpassword.length >= 5) // check the length of password
					{
						Register.submit();
					}
					else
					{
						alert("Password length must be between 5-25 characters！")
					}
				}
				else
				{
					alert("The two passwords entered are inconsistent！");
				}
			}
			else
			{
				alert("Please confirm that your email address is correct！");   
			}

		}

		function isEmail(email) { // check email format
			var strEmail = email;
			if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1) 
			{ 
					return true; 
			}else{ 

					return false; 
			}
		}
	</script>
	
</head>

<body onload="startTime()">
	<?php
		session_start();
		//receive variable
		if(isset($_SESSION['Rerror'])){ // Register
			if($_SESSION['Rerror'] == true){ //show error message
				echo '<script>alert("Creation failed, reason: email already exists !!!")</script>';	
			}else{ // show success message
				echo '<script>alert("Please go to your email to activate you account !!!")</script>';
			}
			unset($_SESSION['Rerror']);
		}else if(isset($_SESSION['Lerror'])){ // Login
			echo '<script>alert("Invalid username or password !!!")</script>';
			unset($_SESSION['Lerror']);
		}else if(isset($_SESSION['deleteMsg'])){ // Delete account
			echo '<script>alert("Delete account successfully !!!")</script>';
			unset($_SESSION['deleteMsg']);
		}
			
	?>
<div class="container">

  <div class="welcome">
    <div class="pinkbox">


      <!-- 注册 -->
      <div class="signup nodisplay">
        <h1>Register</h1>
		<form class="more-padding" autocomplete="off" id="Register" action="createAccount.php" method="post">
          <input type="text" placeholder="Username" id="Username" name="Username">
          <input type="email" placeholder="Email" id="Email" name="Email">
          <input type="password" placeholder="Password" id="Password" name="Password">
          <input type="password" placeholder="Confirm Password" id="cPassword" name="cPassword">
          
        </form>
		<button class="button submit" id="sbutton"  Onclick="Check();">Create Account</button>


	 </div>


      <!-- 登录 -->
      <div class="signin">
        <h1>Sign In</h1>
        <form class="more-padding" autocomplete="off" id="login" action="login.php" method="post">
		<?php
			//show the login information if cookie exists
			if(isset($_COOKIE['account'])){
				echo "<input type='text' name='user' value='{$_COOKIE['account']}' placeholder='Username'>";
			}else{
				echo "<input type='text' name='user' placeholder='Username'>";
			}
			
			if(isset($_COOKIE['password'])){
				echo "<input type='password' name='pwd' value='{$_COOKIE['password']}' placeholder='Password'>";
			}else{
				echo "<input type='password' name='pwd' placeholder='Password'>";
			}
		?>
          <div class="checkbox">
            <input type="checkbox" id="remember" name="remember" /><label for="remember">Remember Me</label>
          </div>
        </form>
		<br />
		<button type="submit" class="buttom sumbit" form="login" value="Submit">Login</button>
		
      </div>
    </div>

    <div class="leftbox">
      <h2 class="title"><span>SAFETY</span>&<br>FAST</h2>
      <p class="desc">Hurry up and try to use <span>use</span></p>
      <img class="flower smaller" src="image/handshake.png" />
      <p class="account">Have an account?</p>
      <button class="button" id="signin">Login</button>
    </div>

    <div class="rightbox">
      <h2 class="title"><span>SAFETY</span>&<br>FAST</h2>
      <p class="desc">Hurry up and try to use <span>use</span></p>
      <img class="flower" src="image/space-dog-laika1.png" />
      <p class="account">Don't have an account?</p>
      <button class="button" id="signup">Sign Up</button>
    </div>
  </div>
</div>


   <script src="js/login.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
	<script src="js/date.js"></script>
	<script src="js/music.js"></script>
</body>

</html>