<?php

    session_start();

    echo "You have been succesfuly logged out";
    session_destroy();

?>

<a href="/index.php">Go to Login Page</a>