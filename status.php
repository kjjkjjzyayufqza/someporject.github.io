<?php
	session_start();
	require_once("conn.php");
	extract($_POST);
	if(empty($airWaybillNo)) // check airWaybillNo empty or not
	{
		header('Location: Update_Delivery.php');
		//pass variable to Update_Delivery.php
		$_SESSION['error'] = true;
	}
	else
	{
		// insert a new record in airwaybilldeliveryrecord table
		$sql = "INSERT INTO airwaybilldeliveryrecord (deliveryStatusID, airWaybillNo, currentLocation) VALUES (\"" . $deliveryStatusID . "\", \"" . $airWaybillNo . "\", \"" . $currentLocation . "\")";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	}

	if(mysqli_affected_rows($conn) > 0) { // check any change to database
		header('Location: Update_Delivery.php');
		//pass variable to Update_Delivery.php
		$_SESSION['error'] = false;
	}else{
		//pass variable to Update_Delivery.php
		$_SESSION['error'] = true;
	}
?>
		