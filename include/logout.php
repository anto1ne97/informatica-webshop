<?php

// Initialise session
session_start();

// Delete certain session
unset($_SESSION['username']);

// Delete all session variables
session_destroy();

// Jump to login page
header('location: ../public_html/logoutpage.php');

?>