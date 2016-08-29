<?php
session_start();
$errors		= array();
$errflag	= false;

// configuration
$dbhost 	= "localhost";
$dbname		= "website";	#"taupedk35_Antoine";
$dbuser		= "root";		#"taupedk35_DG";
$dbpass		= "usbw";		#"Antoine";
$options 	= array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,$options);
?>