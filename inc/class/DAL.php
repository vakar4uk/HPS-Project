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
        // return $this->userName;        
    }    

    // Set password
    function setPassword($userPassword) {
        $this->userPassword = $userPassword;
        // return $this->userPassword;
    } 
    
    // Create query to take username and password from database
    function queryUnamePassowrd($userName, $userPassword) {
        $sql = "SELECT * FROM user_login WHERE user_name='$userName' AND user_password='$userPassword'";
        return query($sql);
    }     
}    

?>