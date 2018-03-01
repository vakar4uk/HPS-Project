<?php

// not working yet!!!
// class DAL {

//     function __construct(){}
    
//     function db_connect() {
//         static $con;        
        
//         $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB, DB_PORT)
//             or die("Failed to connect to MySQL: " . mysqli_connect_error());
        
//         return $con;        
//     }   
// }  


// Connecting to database using credentials form config.php file
function db_connect() {
    static $connection;
            
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB, DB_PORT)
        or die("Failed to connect to MySQL: " . mysqli_connect_error());
            
    return $connection;
}   

?>