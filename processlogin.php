<?php
session_start();

// Check for session inactivity
if (isset($_SESSION['username'])) {
    $inactive = 60; // Timeout in seconds (10 minutes)
    $session_life = time() - $_SESSION['login_time_stamp'];

    // If the session is inactive for more than the specified duration, destroy the session
    if ($session_life > $inactive) {
        session_unset();
        session_destroy();
        header("Location: login.html");
        exit(); // Always include an exit() after a header redirect
    }
}

// Process login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    require("dbcon.php");

    $sql = "SELECT password FROM user WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);

    $dbpassword = null;

    while ($row = $result->fetch_assoc()) {
        $dbpassword = $row['password'];
    }

    if ($pass == $dbpassword) {
        $_SESSION['username'] = $user;
        $_SESSION['login_time_stamp'] = time(); // Update login timestamp on successful login
        header("Location: loggedIn.html");
        exit(); // Always include an exit() after a header redirect
    } else {
        header("Location: loginTryAgain.html");
        exit(); // Always include an exit() after a header redirect
    }
}
?>
