<!doctype html>
<html lang="en">
  <head>
  	<title>EDE Express</title>
    <meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/Menu.css">
	<link rel="stylesheet" href="css/search.css">

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
					<li><a href="Menu_Staff.php">Home</a></li>
					<li><a href="Personal_Profile_Staff.php">Personal Profile</a></li>
					<li><a href="Update_AirwayBill.php">Update Airway Bill</a></li>
					<li class="colorlib-active"><a href="Update_Delivery.php">Update Delivery</a></li>
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
					<div class="row">
						<div class="col-md-12 mb-4">
								<h1 class="h2">Update Delivery</h1>
						</div>
						<div class="col-md-2 my-4">
							<h2 class="h4">Airway Bill No: </h2>
						</div>
						<form id="tfnewsearch" method="get" action="">
								<input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
						</form>
					</div>
				</div>
				<div class="container-fluid px-3 px-md-0 ">
				<form method="post" action="status.php" id="status">
					<div class="row">
						<div class="col-md-6">
							<h2 class="h4">Airwaybill’s Number :</h2>
						</div>
						<div class="col-md-6">
						<?php
							if(isset($_GET["q"])){
								//require_once("conn.php");
								$sql = "SELECT * FROM airwaybill WHERE airWaybillNo = \"". $_GET["q"] ."\"";
								$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
								if(mysqli_num_rows($rs) != 0){
									printf("<h2 class='h4'>%s</h2>", $_GET["q"]);
									printf("<input type='hidden' name='airWaybillNo' value='%s' >", $_GET["q"]);
								}
							}
						?>
						</div>
						<div class="col-md-6">
							<h2 class="h4">Shipment Status :</h2>
						</div>
						<div class="col-md-6">
							<h2 class="h3">
								<select name="deliveryStatusID" id="status">
									<option value="1">Waiting for Confirmation</option>
									<option value="2">Confirmed</option>
									<option value="3">In Transit</option>
									<option value="4">Delivering</option>
									<option value="5">Completed</option>
								</select>
							</h2>
						</div>
						<div class="col-md-6">
							<h2 class="h4">Current Location :</h2>
						</div>
						<div class="col-md-6">
							<h2 class="h5"><input type="text" maxlength="255" name="currentLocation" /></h2>
						</div>
						<div class="col-md-12">
							<h2 class="h4"><input type="submit" class="float-right mx-5 custom-btn btn-3" value="Update" /></h2>	
						</div>
					</div>
				</form>
				</div>
				<div class="row my-5">
					<table class="table table-hover">
						<tr>
							<th>Record’s Datetime</th>
							<th>Shipment Status</th>
							<th>Current Location</th>
						</tr>

						<?php
						
							if(isset($_GET["q"]) && $_GET["q"]!=""){
								//require_once("conn.php");
								$sql = "SELECT * FROM airwaybilldeliveryrecord WHERE airWaybillNo = ". $_GET["q"] ." ORDER BY recordDateTime DESC";
								$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
								$shipStatus = array("Waiting for Confirmation", "Confirmed", "In Transit", "Delivering", "Completed");
									while($rc = mysqli_fetch_assoc($rs)){
										$array = array($rc['recordDateTime'], $shipStatus[$rc['deliveryStatusID']-1], $rc['currentLocation']);
										echo "<tr>";
										for($i = 0; $i < 3 ; $i++){
											printf('<td>%s</td>', $array[$i]);
										}
										echo "</tr>";
									}
							}
							
							mysqli_free_result($rs);
							mysqli_close($conn);
						?>

					</table>
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

