<?php

  session_start(); 

  include('C:\Users\DM387091\Documents\HPS Project\Login page\inc\arrays.php');

  define("TITLE", "Dashboard");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="..\styles\dashboard.css?version=1">
    <link rel="stylesheet" href="..\styles\bootstrap-3.3.7-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    
    <link rel="icon" href="../images/icon.png">
    <script src="\inc\lib\jquery-3.3.1.min.js"></script>

 <title>Dashboard</title>
</head>

<body>
  <div class="col-lg-12 col-md-12">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="text">
          <div class="navbar-header">      
                <a class="navbar-brand" href="#">Florida Blue</a>
          </div>
          
          <ul class="nav navbar-nav center">            
            <li><a href="#">CORE</a></li>
            <li><a href="#">PPR</a></li>
            <li><a href="#">EXCHANGELINK</a></li>
            <li><a href="#">SLP</a></li>
            <li><a href="#">SALESLINK</a></li>
            <li><a href="#">OPERATIONS</a></li>
            <li><a href="#">FINANCE & BILLING</a></li>
              
          </ul>
        </div>
      </div>      
    </nav>

    <div class="col-lg-12 col-md-12 my-container">
      <nav class="navbar navbar-inverse navbar-fixed-top center">
          <div id="text" class="container">    
          <ul class="nav navbar-nav">       
              <li><a href="dashboard-carrierdetails.php">Carrier Details</a></li>
              <li><a href="dashboard-businessdetails.php">Business Details</a></li>
              <li><a href="dashboard-states.php">States</a></li>
              <li><a href="dashboard-lineofbusiness.php">Line of Business</a></li>
              <li><a href="dashboard-legalentity.php">Legal Entity</a></li>   
          </ul>
      </nav>
  </div>

</div>   
  