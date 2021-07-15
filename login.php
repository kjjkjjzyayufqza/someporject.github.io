<?php
	require_once("conn.php");
	extract($_POST);
	$sql = "SELECT customerEmail, customerPassword FROM customer";
	$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while($rc = mysqli_fetch_assoc($rs)){
		if($user == $rc['customerEmail'] && $pwd == $rc['customerPassword']){
			if($remember == true){ // set cookie if remember checkbox is checked
				
				setcookie("account", $user, time() + (10 * 365 * 24 * 60 * 60));
				setcookie("password", $pwd, time() + (10 * 365 * 24 * 60 * 60));
			}
			//set session for customer login
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['role'] = "customer";
			header('Location: Menu_Customer.php');
		}
	}
	if (!isset($_SESSION['user'])) { 
		$sql = "SELECT staffID, staffPassword FROM staff";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		while($rc = mysqli_fetch_assoc($rs)){
			if($user == $rc['staffID'] && $pwd == $rc['staffPassword']){
				if($remember == true){ // set cookie if remember checkbox is checked
					setcookie("account", $user, time() + (10 * 365 * 24 * 60 * 60));
					setcookie("password", $pwd, time() + (10 * 365 * 24 * 60 * 60));
				}
				//set session for staff login
				session_start();
				$_SESSION['user'] = $user;
				$_SESSION['role'] = "staff";
				header('Location: Menu_Staff.php');
			}
		}
	}
	
	if (!isset($_SESSION['user'])) { // invalid username or password
		session_start(); // pass variable to index.php
		$_SESSION['Lerror'] = true;
       header('Location: index.php');
	   
    }
	
	mysqli_free_result($rs);
	mysqli_close($conn);

?>