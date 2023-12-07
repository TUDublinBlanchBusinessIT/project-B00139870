<?php
$user = $_POST['username'];
$pass = $_POST['password'];

require("dbcon.php"); 

echo "Username: " . $user . "<br>";
echo "Password: " . $pass . "<br>";

$sql = "SELECT password FROM user WHERE username = '$user'";
$result = mysqli_query($conn, $sql);

$dbpassword = null; 

while ($row = $result->fetch_assoc()) {
    $dbpassword = $row['password'];
}
echo "Database Password: " . $dbpassword . "<br>";
echo "Given Password: " . $password;

 if ($pass == $dbpassword) {
    $_SESSION['username'] = $user;
    header("Location: loggedIn.html"); 
    echo 'Password matched: Access Granted';
} else {
    header("Location: loginTryAgain.html"); 
    echo 'Password does not match: Access Denied';
}
?>
