<?php
session_start();
if (isset($_SESSION)){
	// Destroy the session and all the variables inside
	session_destroy();
	header('Location: Login_Page.html');
}
?>