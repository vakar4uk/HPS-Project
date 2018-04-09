<?php

session_start();

// Including config.php file to get credentials and run conecting fucntion
require_once('conf/config.php');

$dal = new DAL();

// running connection function from DAL.php and assigning it to $connection value for further use
$connection = $dal->db_connect();

// Get the username form the input using function in DAL
$dal->setUsername($_POST['username']);
$userName = $dal->getUsername();
// Check the variable for possible injections
$userName = stripslashes($userName);

// Get the password form the input using function in DAL
$dal->setPassword($_POST['password']);
$userPassword = $dal->getPassword();
// Check the variable for possible injections
$userPassword = stripslashes($userPassword); 

// Run the query using fucntion in DAL 
$query = $dal->getLoginCredentials($userName, $userPassword, $connection);

$validate = $dal->loginValidation($query);

// Always login without database
$isValid = true;

if($isValid) {
    $_SESSION['loggedIn'] = 1;  
} else $_SESSION['loggedIn'] = 0;  


?>