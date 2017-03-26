<?php
require '../include/db_conn_website.php';

// user imput?
if (isset($_POST['order'])) {

	// new data
	$productID = $_POST['group3'];

	// add order to database
	$stmt = $conn->prepare("INSERT INTO orders (sprijs, sweergave)
							SELECT Prijs, Productweergave
							FROM producten
							WHERE Productnummer = :productID
							");
	$stmt->bindParam(':productID', $productID);
	$result = $stmt->execute();
			if($result) {
				header('location: ../public_html/order-success.php');
				exit;
			} else {
				echo "fail";
			}

}
$conn = null;
?>