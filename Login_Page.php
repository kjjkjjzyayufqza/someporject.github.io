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
	
</head>

<body onload="startTime()">

<div class="container">
  <div class="welcome">
    <div class="pinkbox">
      <!-- 注册 -->
      <div class="signup nodisplay">
        <h1>Register</h1>
        <form autocomplete="off">
          <input type="text" placeholder="Username">
          <input type="email" placeholder="Email">
          <input type="password" placeholder="Password">
          <input type="password" placeholder="Confirm Password">
          <button class="button submit">Create Account</button>
        </form>
      </div>


      <!-- 登录 -->
      <div class="signin">
        <h1>Sign In</h1>
        <form class="more-padding" autocomplete="off" id="login" action="login.php" method="post">
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <div class="checkbox">
            <input type="checkbox" id="remember" /><label for="remember">Remember Me</label>
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