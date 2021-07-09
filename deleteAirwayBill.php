<?php
	require_once("conn.php");
	if(isset($_POST["delete"])){
		$sql = "DELETE FROM airwaybilldeliveryrecord WHERE airWaybillNo = \"" . $_POST["airwaybill"] . "\"" ;
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		$sql = "DELETE FROM airwaybill WHERE airWaybillNo = \"" . $_POST["airwaybill"] . "\"" ;
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		header('Location: Update_Airwaybill.php');
	}
?>