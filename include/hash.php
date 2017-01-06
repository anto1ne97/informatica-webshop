<?php
$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($user === false) {
		die("Email address is not found");
	}
	else {
		// compare the passwords
		$validPassword = password_verify($passwordAttempt, $user['password']);

		// if $validPassword is true, login successful
		if ($validPassword) {
			$_SESSION['email'] = $email;

			header('location: ../public_html/securedpage.php');
			exit;
		}
		else{
			// $validPassword is false, passwords don't match
			die('Incorrect username / password combination.');
		}
	}
?>