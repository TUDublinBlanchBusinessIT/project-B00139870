<?php
date_default_timezone_set('Europe/London'); // Corrected timezone identifier

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donors";
$port = 3307;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
