<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['update'])) {

	// new data
	$voornaam = !empty($_POST['voornaam']) ? trim($_POST['voornaam']) : null;
	$achternaam = !empty($_POST['achternaam']) ? trim($_POST['achternaam']) : null;
	$passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
	$straat = !empty($_POST['straat']) ? trim($_POST['straat']) : null;
	$huisnummer = !empty($_POST['huisnummer']) ? trim($_POST['huisnummer']) : null;
	$toevoeging = !empty($_POST['toevoeging']) ? trim($_POST['toevoeging']) : null;
	$woonplaats = !empty($_POST['woonplaats']) ? trim($_POST['woonplaats']) : null;
	$postcode = !empty($_POST['postcode']) ? trim($_POST['postcode']) : null;
	$telefoonnummer = !empty($_POST['telefoonnummer']) ? trim($_POST['telefoonnummer']) : null;
	
	// retrieve user from database
	$stmt = $conn->prepare("SELECT email, password FROM klanten WHERE email = :email");
	$stmt->bindParam(':email', $_SESSION['email']);
	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($user) {
		// compare the passwords
		$validPassword = password_verify($passwordAttempt, $user['password']);

		// if $validPassword is true, login successful
		if ($validPassword) {
			// add info to database
			$stmt = $conn->prepare("UPDATE klanten
									SET voornaam = :voornaam,
										achternaam = :achternaam,
										straat = :straat,
										huisnummer = :huisnummer,
										toevoeging = :toevoeging,
										woonplaats = :woonplaats,
										postcode = :postcode,
										telefoonnummer = :telefoonnummer
									WHERE email = :email");
			$stmt->bindParam(':email', $_SESSION['email']);
			$stmt->bindParam(':voornaam', $voornaam);
			$stmt->bindParam(':achternaam', $achternaam);
		//	$stmt->bindParam(':password', $passwordHash);
			$stmt->bindParam(':straat', $straat);
			$stmt->bindParam(':huisnummer', $huisnummer);
			$stmt->bindParam(':toevoeging', $toevoeging);
			$stmt->bindParam(':woonplaats', $woonplaats);
			$stmt->bindParam(':postcode', $postcode);
			$stmt->bindParam(':telefoonnummer', $telefoonnummer);
			$result = $stmt->execute();
			if($result) {
				header('location: ../public_html/bestellen.php');
				exit;
			} else {
				echo "fail";
			}
		}
		else{
			// $validPassword is false, passwords don't match
			die('Incorrect username / password combination.');
		}
	}
}
$conn = null;
?>