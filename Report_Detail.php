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
	//header of page
	require_once("header.php");
?>
	</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li ><i class="fas fa-home"></i><a href="Menu_Staff.php">Home</a></li>
					<li ><i class="far fa-user-circle"></i><a href="Personal_Profile_Staff.php">Personal Profile</a></li>
					<li><i class="far fa-edit"></i><a href="Update_AirwayBill.php">Update Airway Bill</a></li>
					<li><i class="far fa-edit"></i><a href="Update_Delivery.php">Update Delivery</a></li>
					<li class="colorlib-active"><i class="fas fa-scroll"></i><a href="Generate_Report.php">Generate Report</a></li>
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
					<div class="row print-container">
						<div class="col-md-12 mb-4">
						</div>
							<div class="col-md-6">
								<h1 class="font-weight-bolder" style="font-size: 70px;">Report</h1>
							</div>
							<div class="col-md-6">
								<img src="image/logo_3.png" class="float-right" width="300" height="150" />
							</div>
<?php
//show data
	require_once("conn.php");
	$sql = "SELECT * FROM airwaybill INNER JOIN customer ON airwaybill.customerEmail=customer.customerEmail WHERE airWaybillNo = \"" . $_GET["airWaybillNo"] ."\"";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		$array = array("airWaybillNo", "staffID", "date");
		$name = array("Air Waybill’s Number :", "Staff’s ID :", "Date :");
		for($i = 0; $i < 3 ; $i++){
			printf(
			'<div class="col-md-4">
			<br /><br />
			<h2 class="h4">%s</h2>
			<h2 class="h4">%s</h2>
			</div>'
			, $name[$i], $rc[$array[$i]]);
		}
		
		$array = array("customerEmail", "customerName");
		printf(
		'<div class="col-md-6">
		<br />
		<h2 class="h4">Sender\'s Information</h2>
		<hr />
		<h2 class="h5">Email : %s</h2>
		<h2 class="h5">Name : %s</h2>
		</div>'
		, $rc[$array[0]], $rc[$array[1]]
		);
		
		$array = array("receiverName", "receiverPhoneNumber", "receiverAddress");
		printf(
		'<div class="col-md-6">
		<br />
		<h2 class="h4">Receiver\'s Information</h2>
		<hr />
		<h2 class="h5">Name : %s</h2>
		<h2 class="h5">Phone Number : %s</h2>
		<h2 class="h5">Address : %s</h2>
		</div>'
		, $rc[$array[0]], $rc[$array[1]], $rc[$array[2]]
		);
	}
?>
						<div class="col-md-12">
						<hr />
						<h2 class="h4">Shipment Detail</h2>
							<table class="table table-hover">
										<tr style="background-color: #ff6768;">
											<th>Weight</th>
											<th>Total Price</th>
										</tr>
<?php
//show data
$sql = "SELECT * FROM airwaybill INNER JOIN customer ON airwaybill.customerEmail=customer.customerEmail WHERE airWaybillNo = " . $_GET["airWaybillNo"];
$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$array = array("weight", "totalPrice");
while($rc = mysqli_fetch_assoc($rs)){
echo "<tr>";
for($i = 0; $i < 2 ; $i++){
	printf('<td>%s</td>', $rc[$array[$i]]);
}
echo '</tr>';
}
?>
							</table>
						</div>	
					</div>
				</div>
					<a href="Generate_Report.php" class="custom-btn btn-3 mr-4" ><font size="3" color="red"><center>Back</center></font></a>
					<a><button button class="custom-btn btn-3" onclick="window.print();">Print</button></a>
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

