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
							$sql = "SELECT * from customer";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
							while($rc = mysqli_fetch_assoc($rs)){
								$name = array("Name :", "Email :", "Phone :", "Address :", "Account Create Date :");
								$array = array("customerName", "customerEmail", "phoneNumber", "address", "accountCreationDate");
								printf('
									<div class="container-fluid py-1 bg-secondary shadow-sm text-right text-white">
									<i class="fa fa-user" aria-hidden="true"></i>  Customer - %s|
									<a class="text-white font-weight-bold" href="index.html">Logout</a>',$rc[$array[0]]);
							}

?>
	</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Menu_Staff.php">Home</a></li>
					<li><a href="Personal_Profile_Staff.php">Personal Profile</a></li>
					<li class="colorlib-active"><a href="Update_AirwayBill.php">Update Airway Bill</a></li>
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
				<div class="container-fluid px-3 px-md-0">
					<div class="row my-5">
						<div class="col-md-12 mb-4">
							<h1 class="h2">Airway Bill</h1>
						</div>
						<table class="table table-hover">
							<tr>
								<th>Airway Bill No</th>
								<th>Sender Name</th>
								<th>Date</th>
								<th></th>
							</tr>

							<?php
							require_once("conn.php");
							$sql = "SELECT * FROM airwaybill INNER JOIN customer ON airwaybill.customerEmail=customer.customerEmail WHERE airWaybillNo = '1'";
							$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
							$array = array("airWaybillNo", "customerName", "date");
							while($rc = mysqli_fetch_assoc($rs)){
								echo "<tr>";
								for($i = 0; $i < 3 ; $i++){
								printf('<td>%s</td>', $rc[$array[$i]]);
								}
								echo '<td><span><a href="AirwayBill_Detail.php"></a></span></td></tr>';
							}
							?>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

