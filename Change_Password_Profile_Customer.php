<!doctype html>
<html lang="en">
  <head>
  	<title>EDE Express</title>
    <meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/fontawesome/css/all.css">
	
	<link rel="stylesheet" href="css/Menu.css">

	</head>
	<body>
<?php
    require_once("header.php");
?>

</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li ><i class="fas fa-home"></i><a href="Menu_Customer.php">Home</a></li>
					<li class="colorlib-active"><i class="far fa-user-circle"></i><a href="Personal_Profile_Customer.php">Personal Profile</a></li>
					<li><i class="fas fa-truck"></i><a href="Create_Delivery.php">Create Delivery</a></li>
					<li><i class="fas fa-file-contract"></i><a href="Track_Delivery.php">Track Delivery</a></li>
					<li><i class="fas fa-question"></i><a href="Contact.php">Contact</a></li>
					<li><div class="brand">
							<div class="logo">
							  <svg width="200px" height="200px" >
									<path stroke="#ffffff" stroke-width="0" fill="#ff004e" d="M140.773,59.227C137.316,55.771,130.055,50,100,50
									s-37.317,5.771-40.774,9.227C55.77,62.684,49.999,69.104,50,100c-0.001,30.896,5.77,37.316,9.227,40.773
									C62.683,144.229,69.103,150,100,150c30.895,0,37.317-5.771,40.772-9.227C144.229,137.316,150,130.896,150,100
									S144.229,62.683,140.773,59.227z"/>
							  
									<path stroke="#ff004e" stroke-width="0" fill="#ff004e" d="M140.773,59.227C137.316,55.771,130.055,50,100,50
									s-37.317,5.771-40.774,9.227C55.77,62.684,49.999,69.104,50,100c-0.001,30.896,5.77,37.316,9.227,40.773
									C62.683,144.229,69.103,150,100,150c30.895,0,37.317-5.771,40.772-9.227C144.229,137.316,150,130.896,150,100
									S144.229,62.683,140.773,59.227z"/>
							  
									<path stroke="#ff004e" stroke-width="0" fill="#ff004e" d="M140.773,59.227C137.316,55.771,130.055,50,100,50
									s-37.317,5.771-40.774,9.227C55.77,62.684,49.999,69.104,50,100c-0.001,30.896,5.77,37.316,9.227,40.773
									C62.683,144.229,69.103,150,100,150c30.895,0,37.317-5.771,40.772-9.227C144.229,137.316,150,130.896,150,100
									S144.229,62.683,140.773,59.227z"/>
							  </svg>
							</div>
							</div>
					</li>
				</ul>
			</nav>
		</aside> 


		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
			<form  method="post">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2">Change Password</h1>
						</div>
						<div class="col-md-6">
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">Original</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="password" minlength="5" maxlength="40" placeholder="5 to 40 characters" title="5-40" class="form-control" name="originalpass" value="" required />
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">New</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="password" minlength="5" maxlength="40" placeholder="5 to 40 characters" class="form-control" name="newpass" value="" required>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">Re-enter </h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="password" minlength="5" maxlength="40" placeholder="5 to 40 characters" class="form-control" name="repass" value="" required>
							</div>
						</div>
						</div>

					</div>
				</div>
				<br />
					<a href="Personal_Profile_Customer.php" class="custom-btn btn-3 mr-4" ><font size="3" color="red"><center>Back</center></font></a>
					<input type="submit" name="submit" value="Submit" class="custom-btn btn-3 mr-4">
					<input type="reset" name="reset" value="Reset" class="custom-btn btn-3 mr-4">
				</form>
					
			</section>

		</div>

	</div>


	</section>
<?php
if(isset($_POST['submit']))
	{	

	//get data
	require_once("conn.php");
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		$array = array("customerName", "customerEmail", "customerPassword","phoneNumber", "address", "accountCreationDate");
		$arrarysave = $rc[$array[1]];
		$arrarysavepass = $rc[$array[2]];
	}
							
	//set updata
	$originalpass = $_POST['originalpass'];
	$newpass = $_POST['newpass'];
	$repass = $_POST['repass'];
	require_once("conn.php");
	
	//check password
	if(strlen($newpass) >= 5 && strlen($repass) >= 5)
	{
		
		if($originalpass == $arrarysavepass && $newpass == $repass){
			$sql = "UPDATE customer SET customerPassword ='{$newpass}' WHERE customerEmail = '{$arrarysave}'";

			if (mysqli_query($conn, $sql)) {
			  printf('<div id="colorlib-main">
						<div class="container-fluid px-3 px-md-0">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h1 class="h2"><font color="red">Password change successfully !!!</font></h1></div></div></div></div>');
			} else {
			  echo "Error updating record: " . mysqli_error($conn);
			}
			mysqli_close($conn);
		}else if($originalpass == $newpass){
			printf('<div id="colorlib-main">
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
					<div class="col-md-12 mb-4">
					<h1 class="h2"><font color="red">Original password cannot be the same as new password !!!</font></h1></div></div></div></div>');
		}else{
			printf('<div id="colorlib-main">
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
					<div class="col-md-12 mb-4">
					<h1 class="h2"><font color="red">Original or Re-enter Password Error !!!</font></h1></div></div></div></div>');
		}
	}
	else{
			printf('<div id="colorlib-main">
						<div class="container-fluid px-3 px-md-0">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h1 class="h2"><font color="red">Password must be more than 4 characters !!!</font></h1></div></div></div></div>');
				
	}
	mysqli_free_result($rs);
	mysqli_close($conn);
}


?>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

