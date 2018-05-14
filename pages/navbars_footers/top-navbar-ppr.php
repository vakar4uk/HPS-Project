<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div id="text">       
          <div class="navbar-header">
            <a class="navbar-brand btn float-left" href="landing.php">
              <i class="fas fa-th-large"></i>
            </a>            
          </div>
          <ul class="nav nav-pills navbar-nav">
            <li><a class="lead" href="#">DYNAMIC NAME</a></li>
            <li><a href="dashboard-carrierdetails.php">CORE</a></li>
            <li class="active"><a href="plan-info.php">PPR</a></li>
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
      <div id="text" class="container-fluid">
        <ul class="nav nav-pills navbar-nav core-nav">
          <li <?php if($currentLocation=='plan-info.php' ) {echo 'class="active"';} ?>><a href="#">Plans Information</a></li>
          <li><a href="#">Benefits and CSR</a></li>
          <li><a href="#">Rates</a></li>
          <li><a href="#">Plan Coverage</a></li>
        </ul>
      </div>
    </nav>