<?php
session_start();

include("dbcon.php"); 

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, username, password FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $dbpassword = $row['password'];

    if ($dbpassword === $password) {
        echo "Password matched for user: $username";

    } else {
        echo "Password does not match";
    }
} else {
    echo "User not found";
}

mysqli_close($conn);
?>
