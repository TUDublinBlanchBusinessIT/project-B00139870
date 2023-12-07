<?php

$user = $_POST['username'];
$pass = $_POST['password'];

require("dbcon.php"); 

echo "username".$user;
echo "<br>";
echo "password".$pass;
echo "<br>";

$sql = "SELECT password FROM user WHERE username = '$user'";
$result = mysqli_query($conn, $sql);

$dbpassword = null; 

while ($row = $result->fetch_assoc()) {
    $dbpassword = $row['password'];
}
echo "dbpass". $dbpassword;
echo "<br>";
echo "pass".$password;
if ($dbpassword == $password) {
    session_start();
    $_SESSION['username'] = $username; 
    //header('Location: loggedIn.html'); 
    echo 'matched';
     
} else {
    //header('Location: loginTryAgain.html'); 
    echo 'not matched';
}
?>
