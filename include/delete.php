<?php
require '../include/db_conn_website.php';

$stmt = $conn->prepare("DELETE FROM klanten WHERE email = :email");
$stmt->bindParam(':email', $_SESSION['email']);
$stmt->execute();

$conn = null;
?>