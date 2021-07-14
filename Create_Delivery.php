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
					<li><i class="far fa-user-circle"></i><a href="Personal_Profile_Customer.php">Personal Profile</a></li>
					<li class="colorlib-active"><i class="fas fa-truck"></i><a href="Create_Delivery.php">Create Delivery</a></li>
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
						

						
<form id="createdelivery" method="post" action="">
		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h1 class="h2">Create Delivery</h1>
						</div>
						<div class="col-md-6">
						<!--<h2 class="h3">Sender:</h2>
							<div class="row mt-3">
								<div class="col-12 col-sm-4">
									<h2 class="h5">Email</h2>
								</div>
								<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="Email" class="form-control" name="Email" value="">
								</div>
								
							</div>
							<br />-->
						<h2 class="h3">Receiver:</h2>
						<div class="row mt-3">
						
							<div class="col-12 col-sm-4">
								<h2 class="h5">Name</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="text" class="form-control" name="Name" value="">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">Phone</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="text" onkeypress="return isNumberKey(event)" class="form-control" name="Phone" value="">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">Address</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
								<input type="text" class="form-control" name="Address" value="">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-sm-4">
								<h2 class="h5">Location</h2>
							</div>
							<div class="col-12 col-sm-8 text-secondary font-weight-bold">
							<h2 class="h3">
								<select name="location" id="location" onChange="checkselect(this.options[this.selectedIndex].text)">
										<option value="1">China Shanghai</option>
										<option value="2">Japan</option>
										<option value="3">Australia</option>
								</select>
							</h2>
							</div>
						</div>
						
						<br />
						<div class="col-12">

<?php
//print the button
	$sql = "SELECT phoneNumber, address FROM customer WHERE customerEmail = \"" . $_SESSION['user'] ."\"";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		while($rc = mysqli_fetch_assoc($rs)){
			if(strlen($rc['phoneNumber']) == 0 || strlen($rc['address']) == 0){
				print('<input type="submit" name="submit" value="Submit" class="custom-btn btn-3 mr-4" disabled>');
			}else{
				print('<input type="submit" name="submit" value="Submit" class="custom-btn btn-3 mr-4">');
			}
		}
		
?>

								<input type="reset" name="reset" value="Reset" class="custom-btn btn-3 mr-4">

							</div>
						</div>
					</div>
				</div>
<?php
	require_once("conn.php");// Using database connection file here

	if(isset($_POST['submit']))
	{
		//$Email = $_POST['Email']; empty($Email) || 
		$Name = $_POST['Name'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];
		$Location = $_POST['location'];
		//check data
		if(empty($Name) || empty($Phone) || empty($Address)){ // set constraint -> every field should be filled in
				printf('<br />
						<div class="container-fluid px-3 px-md-0">
						<div class="row">
						<div class="col-md-12 mb-4">
						<h1 class="h2"><font color="red">Please fill in all the information !!!</font></h1></div></div></div>');
		}else{ // insert new record into airwaybill table
			$sql = "INSERT INTO airwaybill(customerEmail, locationID, receiverName, receiverPhoneNumber, receiverAddress) VALUES (\"" . $_SESSION['user'] . "\", \"" .$Location. "\", \"" . $Name . "\", \"" . $Phone . "\", \"" . $Address . "\")";
			mysqli_query($conn, $sql) or die(mysqli_error($conn));
			$sql = "SELECT airWaybillNo FROM airwaybill ORDER BY date DESC LIMIT 1";
			$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			while($rc = mysqli_fetch_assoc($rs)){ // insert new record into airwaybilldeliveryrecord table
				$sqlIn = "INSERT INTO airwaybilldeliveryrecord (airWaybillNo, deliveryStatusID) VALUES (\"" . $rc['airWaybillNo'] . "\", \"1\")";
				$rsIn = mysqli_query($conn, $sqlIn) or die(mysqli_error($conn));
			}
			
			if(mysqli_affected_rows($conn) == 0){// if no table is affected -> pop error message
				echo mysqli_error();
			}else{ // pop successful creation message
				printf('<br />
						<div class="container-fluid px-3 px-md-0">
						<div class="row">
						<div class="col-md-12 mb-4">
						<h1 class="h2"><font color="red">Created successfully !!!</font></h1></div></div></div>');
			}
		}
	}

	//show message
	$sql = "SELECT phoneNumber, address FROM customer WHERE customerEmail = \"" . $_SESSION['user'] ."\"";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){ // tell the customer to fill in required personal information before creating delivery request
		if(strlen($rc['phoneNumber']) == 0 || strlen($rc['address']) == 0){
			printf('<br />
					<div class="container-fluid px-3 px-md-0">
					<div class="row">
					<div class="col-md-12 mb-4">
					<h1 class="h1"><font color="red">Please fill in all account information before creating delivery!!!</font></h1></div></div></div>');
		}
	}
	mysqli_free_result($rs);
	mysqli_close($conn);
?>
			</section>
		</div>
		
</form>
						
	<script language="javascript">
	function fuzhi(a){
		document.getElementById("select_content").value=a;//
		}
	</script>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

