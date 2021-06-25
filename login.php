<?php
	require_once("conn.php");
	extract($_POST);
	$sql = "SELECT customerEmail, customerPassword FROM customer";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		if($user == $rc['customerEmail'] && $pwd == $rc['customerPassword']){
			header('Location: Menu_Customer.php');
		}
	}
	
	$sql = "SELECT staffID, staffPassword FROM staff";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		if($user == $rc['staffID'] && $pwd == $rc['staffPassword']){
			header('Location: Menu_Staff.php');
		}
	}
	
	
?>