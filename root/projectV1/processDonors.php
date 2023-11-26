<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$bloodGroup = $_POST['blood_group'];
$contactNumber = $_POST['number'];

include("dbcon.php");

$sql = "INSERT INTO donor (firstname, surname, dateofbirth, age, blood_group, contactNumber) 
        VALUES ('$fn', '$sn', '$dob', $age, '$bloodGroup', '$contactNumber')";

//echo $sql; 
mysqli_query($conn, $sql); 
mysqli_close($conn); 

echo "Donor inserted"; 
?>
