<?php
	require_once("conn.php");
	extract($_POST);
	$sql = "UPDATE airwaybill SET weight = \"" . $weight . "\" WHERE airWaybillNo = \"" . $airWaybillNo ."\"";
	$item='1';
    $tmp = exec("calculator.py ".$item);
    echo $tmp;
	//header('Location: Update_AirwayBill.php');
?>
								
