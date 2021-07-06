<!doctype html>
<html lang="en">
  <head>
  	<title>EDE Express</title>
    <meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/Menu.css">

	</head>
	<body>
	<?php
							require_once("conn.php");
							$sql = "SELECT * from staff";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
							while($rc = mysqli_fetch_assoc($rs)){
								$name = array("Name :", "Email :", "Phone :", "Address :", "Account Create Date :");
								$array = array("staffID");
								printf('
									<div class="container-fluid py-1 bg-secondary shadow-sm text-right text-white">
									<i class="fa fa-user" aria-hidden="true"></i>  Staff - %s|
									<a class="text-white font-weight-bold" href="Login_Page.php">Logout</a>',$rc[$array[0]]);
							}

?>

</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Menu_Staff.php">Home</a></li>
					<li class="colorlib-active"><a href="Personal_Profile_Staff.php">Personal Profile</a></li>
					<li><a href="Update_AirwayBill.php">Update Airway Bill</a></li>
					<li><a href="Update_Delivery.php">Update Delivery</a></li>
					<li><a href="Generate_Report.php">Generate Report</a></li>
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
								<input type="text" class="form-control" name="originalpass" value="">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">New</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="text" class="form-control" name="newpass" value="">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">Re-enter </h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="text" class="form-control" name="repass" value="">
							</div>
						</div>
						</div>


					</div>
					<br />
				</div>
							<a href="Personal_Profile_Staff.php" class="custom-btn btn-3" ><font size="3" color="red"><center>Back</center></font></a>
					<input type="submit" name="submit" value="Submit" class="custom-btn btn-3">
					<input type="reset" name="reset" value="Reset" class="custom-btn btn-3">
					</form>
			</section>
		</div>
	</div>

	</section>
<?php
if(isset($_POST['submit']))
{	

							//get data
							$sql = "SELECT * from staff";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
							while($rc = mysqli_fetch_assoc($rs)){
								$name = array("Name :", "Email :", "Phone :", "Address :", "Account Create Date :");
								$array = array("staffName", "staffPassword");
								$arrarysave = $rc[$array[0]];
								$arrarysavepass = $rc[$array[1]];
							}
								//set updata
	$originalpass = $_POST['originalpass'];
	$newpass = $_POST['newpass'];
	$repass = $_POST['repass'];
	require_once("conn.php");
	
	//check pass
	if($originalpass == $arrarysavepass && $newpass == $repass){
		$sql = "UPDATE staff SET staffPassword ='{$newpass}' WHERE staffName = '{$arrarysave}'";

		if (mysqli_query($conn, $sql)) {
		  printf('<div id="colorlib-main">
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2"><font color="red">Password Change 成功</font></h1></div></div></div></div>');
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}
		mysqli_close($conn);
	}else{
		printf('<div id="colorlib-main">
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2"><font color="red">Original or Re-enter Password Error !!</font></h1></div></div></div></div>');
							
	}

}


?>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

