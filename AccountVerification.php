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
<?php
		$aes_key = 'bUYJ3nTV6VBasdJF';
		$str = array($_GET['customerEmail'], $_GET['customerName'], $_GET['customerPassword']);
		$decrypted = array();
		for($i = 0; $i < 3; $i++){
			$decrypted[$i] = openssl_decrypt(base64_decode($str[$i]), 'AES-128-ECB', $aes_key, OPENSSL_RAW_DATA);
		}
		require_once("conn.php");
		$sql = "INSERT INTO Customer (customerEmail, customerName,customerPassword,accountCreationDate) VALUES (\"" . $decrypted[0] . "\",\"" . $decrypted[1] ."\",\"" . $decrypted[2] ."\", \"" . date("Y/m/d") . "\")";
		//$sql = "INSERT INTO Customer (customerEmail, customerName,customerPassword,accountCreationDate) VALUES (\"" . $_GET['customerEmail'] . "\",\"" . $_GET['customerName'] ."\",\"" . $_GET['customerPassword'] ."\",\"" . date("Y/m/d") . "\")";
		$rs = mysqli_query($conn, $sql);
		if(mysqli_error($conn)){
			echo '<script>alert("Account had been activated before.")</script>';
		}
		
?>
<body>

<div class="container">
  <div class="welcome">
	 <div>
		 <h1 style="color:blue"> Login Now? </h1>
		 <a href="http://127.0.0.1/G20/index.php"><button class="signin">Click here to login page</button></a>
	 </div>
		
  </div>
  <h1 style="color:black">Create Account Successfully!</h1>
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