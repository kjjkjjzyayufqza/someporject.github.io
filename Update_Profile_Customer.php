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
	<i class="fa fa-user" aria-hidden="true"></i>  Customer - Joe Chan |
	<a class="text-white font-weight-bold" href="index.html">Logout</a>

</div>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Menu_Customer.php">Home</a></li>
					<li class="colorlib-active"><a href="Personal_Profile_Customer.php">Personal Profile</a></li>
					<li><a href="Create_Delivery.php">Create Delivery</a></li>
					<li><a href="Track_Delivery.php">Track Delivery</a></li>
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
					<form action="updateProfile.php" method="post">
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
									<input type="text" class="form-control" name="name" value="">
								</div>
								</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-4">
									<h2 class="h5">Email</h2>
								</div>
								<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="text" class="form-control" name="email" value="">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-4">
									<h2 class="h5">Phone</h2>
								</div>
								<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="text" class="form-control" name="phone" value="">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-sm-4">
									<h2 class="h5">Address</h2>
								</div>
								<div class="col-12 col-sm-8 text-secondary font-weight-bold">
									<input type="text" class="form-control" name="address" value="">
								</div>
							</div>
							</div>
							<div class="col-md-6">

							</div>
							
							
							<div class="col-sm-2">
								<br /><a href="Personal_Profile_Customer.php"><button type="button" >Back</button></a>
								<input type="reset" value="Clear" />
								<input type="submit" value="Submit" name="submit"/>
							</div>
						</div>
					</form>
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
