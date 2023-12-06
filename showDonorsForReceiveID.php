<?php
include("dbcon.php");

$mid = $_GET['Donor_ID']; 


$sql = "SELECT * FROM Receive
        INNER JOIN donor ON Receive.Donor_ID = donor.id
        WHERE Receive.Donor_ID = $mid";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Donor ID</th><th>First Name</th><th>Surname</th><th>Date of Birth</th><th>Age</th><th>Blood Group</th><th>Contact Number</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $donorID = $row['Donor_ID']; 
        $fn = $row['firstname'];
        $sn = $row['surname'];
        $dob = $row['dateofbirth'];
        $age = $row['age'];
        $blood_group = $row['blood_group'];
        $contactNumber = $row['contactNumber'];

        echo "<tr><td>$donorID</td><td>$fn</td><td>$sn</td><td>$dob</td><td>$age</td><td>$blood_group</td><td>$contactNumber</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found for the provided Donor ID.";
}

mysqli_close($conn);
?>
