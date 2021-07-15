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
	if ($_POST['Password'] == $_POST['cPassword'] && $check){ // use AES to encrypt
		$aes_key = 'bUYJ3nTV6VBasdJF'; 
		$str = array($_POST['Email'], $_POST['Username'], $_POST['Password']);
		$data = array();
		for($i = 0; $i < 3; $i++){
			$data[$i] = openssl_encrypt($str[$i], 'AES-128-ECB', $aes_key, OPENSSL_RAW_DATA);
			$data[$i] = base64_encode($data[$i]);
		}
		
		$to = $_POST['Email'];
        $subject = "EDEexpress Account Creation Verification";
		$message = "Please verify your email by clicking the link below \n http://127.0.0.1/G20/AccountVerification.php?customerEmail=".urlencode($data[0])."&customerName=".urlencode($data[1])."&customerPassword=".urlencode($data[2]);
        $header = "From: edeexpress11@gmail.com";
         
        if(mail($to,$subject,$message,$header)) {
           session_start(); // pass variable to index.php
			$_SESSION['Rerror'] = false;
        }
	}else{
		session_start(); // pass variable to index.php
		$_SESSION['Rerror'] = true;
	}
		
	mysqli_free_result($rs);
	mysqli_close($conn);
	header('Location: index.php');
	
	
?>