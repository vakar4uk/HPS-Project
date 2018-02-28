<?php



$host     = '127.0.0.1';
$port     = "8889";
$socket   = "";
$user     = "root";
$password = "";
$dbname   = "user_login";




    $uname = $_POST['username'];    
    $password1 = $_POST['password'];   
   
   
    $uname = mysqli_real_escape_string($uname);       
    $password1 = mysqli_real_escape_string($password1);

  
    

    $connection = mysqli_connect($host,  $user, $password, $dbname);
    
    if (!$connection) {
        die('Could not connect: ' . mysqli_connect_error());
        
    } else {
        echo 'Connected successfully';
    }

        
    
    

/*

    $host = "localhost";
    $username= "root";
    $password = "root";
    $db = "user_login";*/

    //mysqli_connect($host, $username, $password);
    //mysqli_select_db($db);

    


    if(isset($_GET['username'])) {

        
        
        

        $result = "select * from login where username='$uname'AND password='$password1'";
        $row = mysqli_fetch_array($result);    
        

        if($row['username'] === $uname && $row['password'] === $password1){
            echo "Login success!";

            header( "Location: signup.php" ); die;
        }

        else{
            echo "Failed";
            header( "Location: failed.php" ); die;
        }
    

        // if(mysqli_num_rows($result) === 1) {
        //     echo "You have successfully logged in!";
        //     exit();
            
        // } else {
        //     echo "You have entered incorrect password!";
        //     exit();
        // }

    }

    mysqli_close($connection);

?>