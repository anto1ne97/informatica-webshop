<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr>
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
		
		$_SESSION['group3'] = !empty($_POST['group3']);
		$_SESSION['group6'] = !empty($_POST['group6']);
		
	try {
		$stmt = $conn->prepare("SELECT Productweergave, Prijs FROM producten WHERE Productnummer = :group3 OR Productnummer = :group6");
		$stmt->bindParam(':group3', $_SESSION['group3']);
		$stmt->bindParam(':group6', $_SESSION['group6']);
		$stmt->execute();
	
		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $key=>$value) { 
			echo $value;
		}
	}
	catch (Exception $e) {
		echo $e->getMessage();
	}
	
}
$conn = null;
echo "</table>";
?>