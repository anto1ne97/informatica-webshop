<?php
// Starts the session
if(!isset($_SESSION)) {
	session_start();
}

// Checks if the user is logged in
if (!isset($_SESSION['email']) || $_SESSION['email'] == "") {
	header ("location: ../public_html/login.php");
}
?>