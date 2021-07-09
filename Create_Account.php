<?php
	require_once("conn.php");
	extract($_POST);
	
	//getdata
	$check = true;
	$sql = "SELECT customerEmail FROM customer";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		if($_POST['Email'] == $rc['customerEmail']){
			$check = false;
		}
	}
	
	
	//check password and email
	if ($_POST['Password'] == $_POST['cPassword'] && $check){
		$sql = "INSERT INTO Customer (customerEmail, customerName,customerPassword,accountCreationDate) VALUES (\"" . $_POST['Email'] . "\",\"" . $_POST['Username'] ."\",\"" . $_POST['Password'] ."\",\"" . date("Y/m/d") . "\")";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		echo '<script>alert("Created successfully !!! Please Login !!!")</script>';

		
	}else{
		
		echo '<script>alert("Creation failed, reason: email already exists !!!")</script>';
		
	}
		
	mysqli_free_result($rs);
	mysqli_close($conn);
	header('Location: Login_Page.html');
?>