<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr>
		<th>Productnummer</th>
		<th>Productweergave</th>
		<th>Prijs</th>
	  </tr>";

class TableRows extends RecursiveIteratorIterator {
	function __construct($it) { 
		parent::__construct($it, self::LEAVES_ONLY);
	}
	function current() {
		return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
	}
	function beginChildren() {
		echo "<tr>"; 
	}
	function endChildren() {
		echo "</tr>" . "\n";
	}
}

include '../include/db_conn_website.php';

if (isset($_POST['order'])) {

	$group3 = !empty($_POST['group3']);
	$group1 = $_POST['group1'];
	$group2 = $_POST['group2'];
/*	foreach($_POST['group4'] as $group4) {
		echo "$group4";
	}*/
//	$group5 = $_POST['group5'];
	$group6 = $_POST['group6'];

try {
	// create table based on user choices
	$stmt = $conn->prepare("SELECT Productnummer, Productweergave, Prijs FROM producten WHERE Productnummer = :group3 OR Productnummer = :group1 OR Productnummer = :group2 OR Productnummer = :group4 OR Productnummer = :group5 OR Productnummer = :group6");
	$stmt->bindParam(':group3', $group3);
	$stmt->bindParam(':group1', $group1);
	$stmt->bindParam(':group2', $group2);
	$stmt->bindParam(':group4', $group4);
	$stmt->bindParam(':group5', $group5);
	$stmt->bindParam(':group6', $group6);
	$stmt->execute();
	

	// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $key=>$value) { 
		echo $value;
	}
/*
	// add order to database
	$stmt = $conn->prepare("INSERT INTO orders (aprijs, aweergave, bprijs, bweergave, t1prijs, t1weergave, eprijs, eweergave, dprijs, dweergave, sprijs, sweergave)
							VALUES (
							(	SELECT prijs			FROM producten WHERE productnummer = :group1),
							(	SELECT productweergave	FROM producten WHERE productnummer = :group1),
							(	SELECT prijs			FROM producten WHERE productnummer = :group2),
							(	SELECT productweergave	FROM producten WHERE productnummer = :group2),
							(	SELECT prijs			FROM producten WHERE productnummer = :group4),
							(	SELECT productweergave	FROM producten WHERE productnummer = :group4),
							(	SELECT prijs			FROM producten WHERE productnummer = :group5),
							(	SELECT productweergave	FROM producten WHERE productnummer = :group5),
							(	SELECT Prijs			FROM producten WHERE Productnummer = :group6),
							(	SELECT Productweergave	FROM producten WHERE Productnummer = :group6),
							(	SELECT prijs			FROM producten WHERE productnummer = :group3),
							(	SELECT productweergave	FROM producten WHERE productnummer = :group3)
							)");
	$stmt->bindParam(':group1', $group1);
	$stmt->bindParam(':group2', $group2);
	$stmt->bindParam(':group4', $group4);
//	$stmt->bindParam(':group5', $group5);
	$stmt->bindParam(':group6', $group6);
	$stmt->bindParam(':group3', $group3);
	$stmt->execute();

	$result = $stmt->execute();
			if($result) {
				header('location: ../public_html/order-success.php');
				exit;
			} else {
				die('Fail');
			}*/
}
catch (PDOException $e) {
	echo $e->getMessage();
}
	

}
$conn = null;
echo "</table>";
?>