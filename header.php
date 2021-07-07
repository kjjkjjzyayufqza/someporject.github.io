<?php
	session_start();
	$user = $_SESSION['user'];
	$role = $_SESSION['role'];
	require_once("conn.php");
	if($role == "customer"){
		$sql = "SELECT * from customer WHERE customerEmail = \"" . $user ."\"";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		while($rc = mysqli_fetch_assoc($rs)){
			$name = array("Name :", "Email :", "Phone :", "Address :", "Account Create Date :");
			$array = array("customerName", "customerEmail", "phoneNumber", "address", "accountCreationDate");
			printf('
				<div class="container-fluid py-1 bg-secondary shadow-sm text-right text-white">
				<i class="fa fa-user" aria-hidden="true"></i>  Customer - %s|
				<a class="text-white font-weight-bold" href="Login_Page.php">Logout</a>',$rc[$array[0]]);
		}
	}
	else if($role == "staff"){
		$sql = "SELECT * from staff WHERE staffID = \"" . $user ."\"";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		while($rc = mysqli_fetch_assoc($rs)){
			$name = array("Name :", "Email :", "Phone :", "Address :", "Account Create Date :");
			$array = array("staffID");
			printf('
				<div class="container-fluid py-1 bg-secondary shadow-sm text-right text-white">
				<i class="fa fa-user" aria-hidden="true"></i>  Staff - %s|
				<a class="text-white font-weight-bold" href="index.html">Logout</a>',$rc[$array[0]]);
		}
	}
	
	
?>