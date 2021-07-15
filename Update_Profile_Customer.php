<!doctype html>
<html lang="en">
  <head>
  	<title>EDE Express</title>
    <meta charset="utf-8">
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/fontawesome/css/all.css">
	<link rel="stylesheet" href="css/Menu.css">
	
	<script type="text/javascript">
	    //check if it is number
		function isNumberKey(evt){
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
			return true;
		}
	</script>
	</head>
	<body>
<?php
	// header of page
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

<?php
	//get data for showing on the textbox
	require_once("conn.php");
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$array = array("customerName", "phoneNumber", "address");
	$arrayShow = array();
	while($rc = mysqli_fetch_assoc($rs)){
		for($i = 0; $i < 3; $i++){
			$arraryShow[] = $rc[$array[$i]];
		}
	}
?>
<form action="" method="post">
		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					
						<div class="row">
							<div class="col-md-12 mb-4">
								<h1 class="h2">Update Profile</h1>
							</div>
							<div class="col-md-6">
								<div class="row mt-3">
									<div class="col-12 col-sm-4">
										<h2 class="h5">Name</h2>
									</div>
									<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="text" class="form-control" name="name" value="<?php echo $arraryShow[0]; ?>">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-4">
									<h2 class="h5">Phone</h2>
								</div>
								<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="phone" value="<?php echo $arraryShow[1]; ?>">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-4">
									<h2 class="h5">Address</h2>
								</div>
								<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="text" class="form-control" name="address" value="<?php echo $arraryShow[2]; ?>">
								</div>
							</div>
							</div>
							<div class="col-md-6">

							</div>

						</div>
					
				</div>
				<br />
				<a href="Personal_Profile_Customer.php" class="custom-btn btn-3 mr-4" ><font size="3" color="red"><center>Back</center></font></a>
					<input type="submit" name="submit" value="Submit" class="custom-btn btn-3 mr-4">
					<input type="reset" name="reset" value="Reset" class="custom-btn btn-3 mr-4">
			</section>
		</div>
	</div>
</form>
<?php
if(isset($_POST['submit']))
{	
	//get data
	require_once("conn.php");
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		$array = array("customerName", "customerEmail", "phoneNumber", "address", "accountCreationDate");
		$arrarysave = $rc[$array[1]];
	}
	
	//set update
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

//check if empty
if(empty($name) && empty($phone) && empty($address))
{
		printf('<div id="colorlib-main">
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2"><font color="red">no information updated !!</font></h1></div></div></div></div>');

}
else
{
		printf('<div id="colorlib-main">
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2"><font color="red">Update completed !!</font></h1></div></div></div></div>');

}
//set name
if(!empty($name)){
	$sql = "UPDATE customer SET customerName ='{$name}'  WHERE customerEmail = '{$arrarysave}'";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//set phone
if(!empty($phone)){
	$sql = "UPDATE customer SET phoneNumber ='{$phone}'  WHERE customerEmail = '{$arrarysave}'";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//set address
if(!empty($address)){
	$sql = "UPDATE customer SET address ='{$address}'  WHERE customerEmail = '{$arrarysave}'";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

mysqli_free_result($rs);
mysqli_close($conn);
}


?>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

