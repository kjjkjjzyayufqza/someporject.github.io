<?php
	session_start();
	extract($_POST);
	require_once("conn.php");
	

		
	$sql = "SELECT rate FROM chargetable WHERE weight = '{$weight}' AND locationID = '{$locationID}'";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
	while($rc = mysqli_fetch_assoc($rs)){
		$currentDateTime = date('Y');
		$date = new DateTime($accountCreationDate);
		$custDate = $date->format('Y');
		$year = $currentDateTime - $custDate;
		
		$url = "http://127.0.0.1:8080/api/discountCalculator/$year";   
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl);   
		curl_close($curl);
		
		echo $response;
		
		if(strlen($response) == 0){
			$_SESSION['error'] = true;
		}
		else
		{
			$sql2 = "UPDATE airwaybill SET weight = \"" . $weight . "\" WHERE airWaybillNo = \"" . $airWaybillNo ."\"";
			mysqli_query($conn, $sql2) or die(mysqli_error($conn));
			$price = $rc["rate"]*((100-$response)/100);
			$sql3 = "UPDATE airwaybill SET totalPrice = \"" . $price . "\" WHERE airWaybillNo = \"" . $airWaybillNo ."\"";
			mysqli_query($conn, $sql3) or die(mysqli_error($conn));
			$_SESSION['error'] = false;
		}
	}
	
	header('Location: Update_AirwayBill.php');
	mysqli_free_result($rs);
	mysqli_close($conn);
?>
								
