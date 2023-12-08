<?php
date_default_timezone_set('Europe/London');
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$bloodGroup = $_POST['blood_group'];
$contactNumber = $_POST['number'];

$dateOfBirth = new DateTime($dob);
$today = new DateTime();
$age = $today->diff($dateOfBirth)->y;

include("dbcon.php");

$sql = "INSERT INTO donor (firstname, surname, dateofbirth, age, blood_group, contactNumber) 
        VALUES ('$fn', '$sn', '$dob', $age, '$bloodGroup', '$contactNumber')";

//echo $sql; 
mysqli_query($conn, $sql); 
mysqli_close($conn); 

echo "Donor inserted"; 
?>
