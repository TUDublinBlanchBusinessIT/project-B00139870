<?php
session_start();


$inactive = 600; // 10 minute


if (isset($_SESSION['username']) && isset($_SESSION['last_activity'])) {
    // Calculate the time since the user was last active
    $session_life = time() - $_SESSION['last_activity'];

    // If the user has been inactive for too long, destroy the session
    if ($session_life > $inactive) {
        session_unset();
        session_destroy();
        header("Location: loginTryAgain.html"); // Redirect to logout or login page
        exit();
    }
}

// Update the last activity time stamp
$_SESSION['last_activity'] = time();
?>
