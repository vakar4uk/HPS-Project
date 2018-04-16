<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div id="text">       
          <div class="navbar-header">
            <a class="navbar-brand btn float-left" href="dashboard.php">
              <i class="fas fa-th-large"></i>
            </a>            
            </div>
          <ul class="nav nav-pills navbar-nav">
            <li><a class="lead" href="#">Florida Blue</a></li>
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
      <div id="text" class="container-fluid">
        <ul class="nav nav-pills navbar-nav">
          <li <?php if($currentLocation=='dashboard-carrierdetails.php' ) {echo 'class="active"';} ?>><a href="dashboard-carrierdetails.php">Carrier Details</a></li>
          <li <?php if($currentLocation=='dashboard-businessdetails.php' ) {echo 'class="active"';} ?>><a href="dashboard-businessdetails.php">Business Details</a></li>
          <li <?php if($currentLocation=='dashboard-states.php' ) {echo 'class="active"';} ?>><a href="dashboard-states.php">States</a></li>
          <li <?php if($currentLocation=='dashboard-lineofbusiness.php' ) {echo 'class="active"';} ?>><a href="dashboard-lineofbusiness.php">Line of Business</a></li>
          <li <?php if($currentLocation=='dashboard-legalentity.php' ) {echo 'class="active"';} ?>><a href="dashboard-legalentity.php">Legal Entity</a></li>
        </ul>
      </div>
    </nav>