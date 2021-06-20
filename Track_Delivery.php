<!doctype html>
<html lang="en">
<head>
  	<title>Menu</title>
    <meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/Menu.css">
	<link rel="stylesheet" href="css/search.css">

</head>
<body>
<div class="container-fluid py-1 bg-secondary shadow-sm text-right text-white">
	<i class="fa fa-user" aria-hidden="true"></i>  Customer - Joe Chan |
	<a class="text-white font-weight-bold" href="index.html">Logout</a>

</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Menu_Customer.php">Home</a></li>
					<li><a href="Personal_Profile_Customer.php">Personal Profile</a></li>
					<li><a href="Create_Delivery.php">Create Delivery</a></li>
					<li class="colorlib-active"><a href="Track_Delivery.php">Track Delivery</a></li>
					<li><a href="Contact.php">Contact</a></li>
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
								<h1 class="h2">Track Delivery</h1>
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
					<div class="row">
						<div class="col-md-6">
							<h2 class="h4">Air Waybill’s Number :</h2>
							<h2 class="h4">Sender’s Name :</h2>
							<h2 class="h4">Receiver’s Name :</h2>
							<h2 class="h4">Receiver’s Phone Number :</h2>
							<h2 class="h4">Parcel’s Weight :</h2>
						</div>

						<div class="col-md-6">
							<h2 class="h4">xxxxxxx</h2>
							<h2 class="h4">xxxxxxx</h2>
							<h2 class="h4">xxxxxxx</h2>
							<h2 class="h4">xxxxxxx</h2>
							<h2 class="h4">xxxxxxx</h2>
						</div>
					</div>
				</div>
				<div class="row my-5">
					<table class="table table-hover">
						<tr>
							<th>Record’s Datetime</th>
							<th>Shipment Status</th>
							<th>Current Location</th>
						</tr>

						<tr>
							<td>xxxxxxx</td>
							<td>xxxxxxx</td>
							<td>xxxxxxx</td>
						</tr>

						<tr>
							<td>xxxxxxx</td>
							<td>xxxxxxx</td>
							<td>xxxxxxx</td>
						</tr>

					</table>
				</div>
			</section>
		</div>
	</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


