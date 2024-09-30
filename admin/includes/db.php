<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magia_inclusion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
