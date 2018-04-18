<?php
  session_start(); 
  include('../inc/arrays.php');
  define("TITLE", "Dashboard");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../styles/dashboard.css?version=2">
    <link rel="stylesheet" href="../styles/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    
    <link rel="icon" href="../images/icon.png">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
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
          <ul class="nav nav-pills navbar-nav">
            <li class="active"><a href="#">CORE</a></li>
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


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div id="text" class="container">
        <ul class="nav nav-pills navbar-nav">
          <li <?php if($currentLocation=='dashboard-carrierdetails.php' ) {echo 'class="active"';} ?>><a href="dashboard-carrierdetails.php">Carrier Details</a></li>
          <li <?php if($currentLocation=='dashboard-businessdetails.php' ) {echo 'class="active"';} ?>><a href="dashboard-businessdetails.php">Business Details</a></li>
          <li <?php if($currentLocation=='dashboard-states.php' ) {echo 'class="active"';} ?>><a href="dashboard-states.php">States</a></li>
          <li <?php if($currentLocation=='dashboard-lineofbusiness.php' ) {echo 'class="active"';} ?>><a href="dashboard-lineofbusiness.php">Line of Business</a></li>
          <li <?php if($currentLocation=='dashboard-legalentity.php' ) {echo 'class="active"';} ?>><a href="dashboard-legalentity.php">Legal Entity</a></li>
        </ul>
      </div>
    </nav>