<?php

class DAL {

    private $userName;
    private $userPassword;

    function __constructor() {}

    // Connecting to database using credentials form config.php file    
    function db_connect() {
        static $connection;
        
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB, DB_PORT)
            or die("Failed to connect to MySQL: " . mysqli_connect_error());
            
        if($connection) {
            echo "MySQL database connected successfully.<br><br>";
        }        
        return $connection;
    }
    

    // Get username
    function getUsername() {
        return $this->userName;                     
    }

    // Get password
    function getPassword() {
        return $this->userPassword;                     
    }

    // Set username
    function setUsername($userName) {
        $this->userName = $userName;
               
    }    

    // Set password
    function setPassword($userPassword) {
        $this->userPassword = $userPassword;
        // return $this->userPassword;
    } 
    
    // Create query to take username and password from database
    function getLoginCredentials($userName, $userPassword, $db) {
       $sql = "SELECT * FROM users WHERE userName='$userName' AND password='$userPassword'";
       $result = mysqli_query($db, $sql);
       if (!$result) {
            return mysqli_connect_error();        
        } else {
            return $result;
        }     
    }
    
    // Chech match of the credentials in database
    function loginValidation($query) {
        $count = mysqli_num_rows($query);
        if($count == 1) {
            header("Location: /pages/signup.php"); /* Redirect browser */
        } else {
            header("Location: /pages/failed.php"); /* Redirect browser */
        }
        
    }
}    

?>