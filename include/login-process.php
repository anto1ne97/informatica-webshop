<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['login'])) {

	// new data 
	$email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

	// retrieve user from database
	$stmt = $conn->prepare("SELECT email, password FROM klanten WHERE email = :email");
	$stmt->bindParam(':email', $email);
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
			$_SESSION['email'] = $email;
			header('location: ../public_html/bestellen.php');
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