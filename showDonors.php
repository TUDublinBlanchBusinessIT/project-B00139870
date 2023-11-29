<?php


include("dbcon.php");

$sql = "select * from donor";



//echo $sql; 
$result = mysqli_query($conn, $sql); 
echo "<TABLE broder ='1'>";
while($row=mysqli_fetch_assoc($result)) {
    $fn = $row['firstname'];
    $sn = $row['surname'];   
    $dob = $row['dateofbirth'];
    $age = $row['age'];
    $blood_group = $row['blood_group'];
    $contactNumber = $row['contactNumber'];
    
    echo "<tr><td>$fn</td><td>$sn</td><td>$dob</td><td>$age</td><td>$blood_group</td><td>$contactNumber</td></tr>";

}
echo "</TABLE>";


mysqli_close($conn); 

echo "Donor inserted"; 
?>
