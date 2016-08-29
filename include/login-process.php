<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['login'])) {

	// new data 
	$username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

	// retrieve user from database
	$stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username");
	$stmt->bindParam(':username', $username);
	$stmt->execute();
//*	
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($user === false) {
		die("Username is not found");
	}
	else {
		// compare the passwords
		$validPassword = password_verify($passwordAttempt, $user['password']);

		// if $validPassword is true, login successful
		if ($validPassword) {
			$_SESSION['username'] = $username;

			header('location: ../public_html/securedpage.php');
			exit;
		}
		else{
			// $validPassword is false, passwords don't match
			die('Incorrect username / password combination.');
		}
	}
/*/	
	include '../include/error.php';
//*/
}
$conn = null;
?>