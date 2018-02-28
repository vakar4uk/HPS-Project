<?php



$host     = "localhost";
$socket   = "";
$user     = "root";
$dbPassword = "root";
$dbname   = "hps_login";

$connection = mysqli_connect($host,  $user, $dbPassword) or die("Could not connect to database!");

if (!$connection)
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$selectedDB = mysqli_select_db("hps_login", $connection);

$userName = $_POST['username'];    
$userPassword = $_POST['password']; 
    
$userName = stripslashes($userName);
$userPassword = stripslashes($userPassword);

$query = "SELECT * FROM hps_login.users WHERE username='$userName' AND password='$userPassword'";
echo $query;

$result = mysqli_query($query);
echo $result;

if (!$result) {
    echo "Could not run query: " . mysqli_connect_error();
    exit;
}


$count = mysqli_num_rows($result);

if($count > 0) {
    echo "It worked!";
}

else {
    echo "It didn't";    
}

?>