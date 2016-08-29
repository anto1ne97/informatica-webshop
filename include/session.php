<?php
// Starts the session
session_start();

// Checks if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['username'] == "") {
	header ("location: ../public_html/login.php");
}
?>