<?php
session_start();
$errors		= array();
$errflag	= false;

// configuration
$dbhost 	= "localhost";
$dbname		= "website";
$dbuser		= "root";
$dbpass		= "usbw";
$options 	= array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,$options);
?>