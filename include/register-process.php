<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['register'])) {

	// new data
	$email = !empty($_POST['email']) ? trim($_POST['email']) : null;
//	$voornaam = !empty($_POST['voornaam']) ? trim($_POST['voornaam']) : null;
//	$achternaam = !empty($_POST['achternaam']) ? trim($_POST['achternaam']) : null;
	$password = !empty($_POST['password']) ? trim($_POST['password']) : null;
	
	// check whether email address exists
	$check = $conn->prepare("SELECT COUNT(email) AS num FROM klanten WHERE email = :email");
	$check->bindParam(':email', $email);
	$check->execute();
	$rows = $check->fetch(PDO::FETCH_ASSOC);
	if($rows['num'] > 0) {
		die('That email address already exists!');
	}
	
	// hash the password
	$passwordHash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 12]);

	// add user to database
	$stmt = $conn->prepare("INSERT INTO klanten (email, password) VALUES (:email, :password)");
	$stmt->bindParam(':email', $email);
//	$stmt->bindParam(':voornaam', $voornaam);
//	$stmt->bindParam(':achternaam', $achternaam);
	$stmt->bindParam(':password', $passwordHash);
	$result = $stmt->execute();
	if($result) {
		$_SESSION['email'] = $email;
		header("location: ../public_html/register-success.php");
	}

}
$conn = null;
?>