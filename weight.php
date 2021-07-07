<?php
	extract($_POST);
	if(strlen($weight) > 0){
		require_once("conn.php");
		$sql = "UPDATE airwaybill SET weight = \"" . $weight . "\" WHERE airWaybillNo = \"" . $airWaybillNo ."\"";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header('Location: http://127.0.0.1:8080/api/discountCalculator/2');
		if(mysqli_affected_rows($conn) > 0) {
			//header('Location: Update_AirwayBill.php');
		}
		//mysqli_free_result($rs);
		//mysqli_close($conn);
	}else{
		echo "Please fill in the weight";
	}
?>
								
