<?php

    session_start();

    echo "You have been succesfuly logged out";
    session_destroy();
    header('Location: index.php');

?>

