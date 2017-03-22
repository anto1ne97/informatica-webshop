<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['editpassword'])) {

	// new data
	$oldpassword = !empty($_POST['password0']) ? trim($_POST['password0']) : null;
	$password = !empty($_POST['password1']) ? trim($_POST['password1']) : null;
	$password1 = !empty($_POST['password2']) ? trim($_POST['password2']) : null;
	
	// check whether passwords are equal
	if ($password === $password1) {
		// hash the password
		$passwordHash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 12]);
	
		// add user to database
		$stmt = $conn->prepare("UPDATE klanten SET password = :password WHERE email = :email");
		$stmt->bindParam(':email', $_SESSION['email']);
		$stmt->bindParam(':password', $passwordHash);
		$result = $stmt->execute();
		if($result) {
			$_SESSION['email'] = $email;
			header("location: ../public_html/index.php");
		}
	} else {
		die("Passwords are not the same.");
	}

}
$conn = null;
?>