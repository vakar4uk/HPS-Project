<?php 
    include('..\inc\arrays.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="\styles\dashboard.css?version=1">
    <link rel="stylesheet" href="\styles\bootstrap-3.3.7-dist\css\bootstrap.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    
    <link rel="icon" href="../images/icon.png">
    <script src="\inc\lib\jquery-3.3.1.min.js"></script>

 <title>Dashboard</title>
</head>

<body>
    <div class="row">
        <?php
            session_start();
    

            if($_SESSION['loggedIn'] === 1){
                //allow            
                include('navbars/top-navbar.php');
                // include('navbars/left-navbar.php');
                // include('dashboard-content.php');           
                include('dashboard-carrierdetails.html');           
            }
            
                else {
                    //redirect to the login page
                    echo "You need to log in!";
                    header('Location: ../../index.php');
                    session_destroy();
                }
            

            
            // include('navbars/second-top-navbar.php');      
            
        ?>

    </div>
    

   

<script src="../app.js"></script>
</body>

</html>