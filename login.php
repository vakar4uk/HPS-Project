<?php



$host     = '127.0.0.1';
$user     = "root";
$dbPassword = "root";
$dbname   = "hps";

$connection = mysqli_connect($host,  $user, $dbPassword, $dbname, "8889") or die("Failed to connect to MySQL: " . mysqli_connect_error());

if (!$connection)
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$selectedDB = mysqli_select_db("hps_login", $connection);

$userName = $_POST['username'];    
$userPassword = $_POST['password']; 
    
$userName = stripslashes($userName);
$userPassword = stripslashes($userPassword);

$query = "SELECT * FROM user_login WHERE user_name='$userName' AND user_password='$userPassword'";


$result = mysqli_query($connection,$query);

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