<!DOCTYPE html>

<html class="no-js" lang="en"> 
<head>

   <meta charset="utf-8">
	<title>EDE Express</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

</head>
<?php
		//decrypt the information
		$aes_key = 'bUYJ3nTV6VBasdJF';
		$str = array($_GET['customerEmail'], $_GET['customerName'], $_GET['customerPassword']);
		$decrypted = array();
		for($i = 0; $i < 3; $i++){
			$decrypted[$i] = openssl_decrypt(base64_decode($str[$i]), 'AES-128-ECB', $aes_key, OPENSSL_RAW_DATA);
		}
		
		//insert new record into customer table
		require_once("conn.php");
		$sql = "INSERT INTO Customer (customerEmail, customerName,customerPassword,accountCreationDate) VALUES (\"" . $decrypted[0] . "\",\"" . $decrypted[1] ."\",\"" . $decrypted[2] ."\", \"" . date("Y/m/d") . "\")";
		$rs = mysqli_query($conn, $sql);
		if(mysqli_error($conn)){
			//show success registration message
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

</body>

</html>