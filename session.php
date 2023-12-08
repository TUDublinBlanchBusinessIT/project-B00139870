<?php
session_start();
if ($_SESSION['lastAccessed'] < (time() - 600)) {
    session_destroy();
    echo "Your session has expired. Please log in again";
} else {
    $_SESSION['lastAccessed'] = time();
}

?>
