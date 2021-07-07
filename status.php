<?php
	require_once("conn.php");
	extract($_POST);
	$sql = "INSERT INTO airwaybilldeliveryrecord (deliveryStatusID, airWaybillNo, currentLocation) VALUES (\"" . $deliveryStatusID . "\", \"" . $airWaybillNo . "\", \"" . $currentLocation . "\")";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0) {
		header('Location: Update_Delivery.php');
	}
?>
		