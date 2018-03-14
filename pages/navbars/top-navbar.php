<?php
  session_start(); 
  define("TITLE", "Dashboard");
?>
<div class="col-sm-9" style="margin-left:300px;">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!--<div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php">
        <img alt="Brand" src="../images/logo2.png">
      </a>
      
    </div>  -->
      
    <p id="dashboard-title" class="navbar-text"><?php echo TITLE; ?></p>      
      
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="fas fa-cog"></i></a></li>
      <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>        
    </ul>

  </div><!-- /.container-fluid -->
</nav>
</div>