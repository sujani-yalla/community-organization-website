<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "jci_vijaywada_impact";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
