<?php

  session_start(); 

  include('../inc/arrays.php');

  define("TITLE", "Dashboard");

  // Get the current page currently loaded
  $currentLocation = basename($_SERVER['PHP_SELF']);

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="../styles/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


    <link rel="icon" href="../images/icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/classlist/1.2.20171210/classList.min.js"></script>
    <title>Should be a Dynamic Title Here</title>
  </head>

  <body>