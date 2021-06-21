<!doctype html>
<html lang="en">
  <head>
  	<title>Menu</title>
    <meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/Menu.css">

	</head>
	<body>
	<div class="container-fluid py-1 bg-secondary shadow-sm text-right text-white">
		<i class="fa fa-user" aria-hidden="true"></i>  Staff - Joe Chan |
		<a class="text-white font-weight-bold" href="index.html">Logout</a>
	</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Menu_Staff.php">Home</a></li>
					<li><a href="Personal_Profile_Staff.php">Personal Profile</a></li>
					<li><a href="Update_AirwayBill.php">Update Airway Bill</a></li>
					<li><a href="Update_Delivery.php">Update Delivery</a></li>
					<li class="colorlib-active"><a href="Generate_Report.php">Generate Report</a></li>
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
								<img src="image/pack.jpg" class="float-right" width="300" height="200" />
							</div>
								<div class="col-md-4">
									<br /><br />
									<h2 class="h4">Air Waybill’s Number :</h2>
									<h2 class="h4">xxxxxx</h2>
								</div>
								<div class="col-md-4">
									<br /><br />
									<h2 class="h4">Staff’s ID :</h2>
									<h2 class="h4">xxxxxx</h2>
								</div>
								<div class="col-md-4">
									<br /><br />
									<h2 class="h4">Date :</h2>
									<h2 class="h4">xxxxxx</h2>
								</div>
							
						<div class="col-md-6">
							<br />
							<h2 class="h4">Sender's Information</h2>
							<hr />
							<h2 class="h5">Email :</h2>
							<h2 class="h5">Name :</h2>
						</div>

						<div class="col-md-6">
							<br />
							<h2 class="h4">Receiver's Information</h2>
							<hr />
							<h2 class="h5">Name :</h2>
							<h2 class="h5">Phone Number :</h2>
							<h2 class="h5">Address :</h2>
						</div>
						<div class="col-md-12">
						<hr />
						<h2 class="h4">Shipment Detail</h2>
							<table class="table table-hover">
										<tr style="background-color: #ff6768;">
											<th>Weight</th>
											<th>Total Price</th>
										</tr>

										<tr>
											<td>xxxxxxx</td>
											<td>xxxxxxx</td>
										</tr>

										<tr>
											<td>xxxxxxx</td>
											<td>xxxxxxx</td>
										</tr>
							</table>
						</div>	
					</div>
					
						<div class="col-md-6 my-5">
							<a href="Generate_Report.php"><input type="button" value="Back"></a>
							<button onclick="window.print();">Print</button>
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

