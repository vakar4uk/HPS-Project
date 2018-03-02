<?php

// Including config.php file to get credentials and run conecting fucntion
require_once('conf\config.php');

$dal = new DAL();

// running connection function from DAL.php and assigning it to $connection value for further use
$connection = $dal->db_connect();

$dal->setUsername($_POST['username']);
$userName = $dal->getUsername();

echo "<br><br>Username is: " . $userName;

$dal->setPassword($_POST['password']);
$userPassword = $dal->getPassword();
echo "<br><br>Password is: " . $userPassword;

    
$userName = stripslashes($userName);
$userPassword = stripslashes($userPassword);

$query = "SELECT * FROM user_login WHERE user_name='$userName' AND user_password='$userPassword'";



$result = mysqli_query($connection, $query);

if (!$result) {
    echo "Could not run query: " . mysqli_connect_error();
    exit;
}


$count = mysqli_num_rows($result);

if($count == 1) {
    header("Location: signup.php"); /* Redirect browser */
} else {
    header("Location: failed.php"); /* Redirect browser */
}



?>