<!doctype html>
<html lang="en">
  <head>
  	<title>EDE Express</title>
    <meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/fontawesome/css/all.css">
	<link rel="stylesheet" href="css/Menu.css">
	<link rel="stylesheet" href="css/search.css">

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
					<li><i class="far fa-edit"></i><a href="Update_AirwayBill.php">Update Air Waybill</a></li>
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
					<div class="row my-5">
						<div class="col-md-4 mb-4">
							<h1 class="h2">Report</h1>
						</div>
						
						<form id="tfnewsearch" method="get" action="">
							<input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
						</form>
						
						<table class="table table-hover">
							<tr>
								<th>Air Waybill’s Number</th>
								<th>Sender Name</th>
								<th>Receiver Name</th>
								<th>Date</th>
								<th></th>
							</tr>
<?php
//check if set show data
if(isset($_GET['q']) && strlen($_GET['q'])!=0){ // show airwaybill with specific airwaybillno
	$sql = "SELECT * FROM airwaybill INNER JOIN customer ON airwaybill.customerEmail=customer.customerEmail WHERE airWaybillNo LIKE \"" . $_GET['q'] . "\" ORDER BY date DESC";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$array = array("airWaybillNo", "customerName", "receiverName", "date");
	while($rc = mysqli_fetch_assoc($rs)){
		echo "<tr>";
		for($i = 0; $i < 4 ; $i++){ // show data in table
			printf('<td>%s</td>', $rc[$array[$i]]);
		}
		// pass airwaybillno to Report_Detail.php
		printf('<td><span><a href="Report_Detail.php?airWaybillNo=%s"></a></span></td></tr>', $rc["airWaybillNo"]);
	}
}else{ // show all airwaybill
	$sql = "SELECT * FROM airwaybill INNER JOIN customer ON airwaybill.customerEmail=customer.customerEmail ORDER BY date DESC";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$array = array("airWaybillNo", "customerName", "receiverName", "date");
	while($rc = mysqli_fetch_assoc($rs)){
		echo "<tr>";
		for($i = 0; $i < 4 ; $i++){
			printf('<td>%s</td>', $rc[$array[$i]]);
		}
		// pass airwaybillno to Report_Detail.php
		printf('<td><span><a href="Report_Detail.php?airWaybillNo=%s"></a></span></td></tr>', $rc["airWaybillNo"]);
	}
}
mysqli_free_result($rs);
mysqli_close($conn);
?>
							</tr>
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

