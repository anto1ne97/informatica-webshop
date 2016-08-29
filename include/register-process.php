<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['register'])) {

	// new data
	$username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
	
	// check whether username exists
	$check = $conn->prepare("SELECT COUNT(username) AS num FROM users WHERE username = :username");
	$check->bindParam(':username', $username);
	$check->execute();
	$rows = $check->fetch(PDO::FETCH_ASSOC);
	if($rows['num'] > 0) {
		die('That username already exists!');
	}
	
	// hash the password
	$passwordHash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 12]);

	// add user to database
	$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $passwordHash);
	$result = $stmt->execute();
	if($result) {
		$_SESSION['username'] = $username;
		header("location: ../public_html/register-success.php");
	}

}
$conn = null;
?>