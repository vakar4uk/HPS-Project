<?php
    include('navbars_footers/header.php')
?>

    <div class="main-dashboard container-fluid">
        <div class="dashboard-header">
            <div class="row">
                <div class="col-lg-4 icons">
                    <a class="navbar-brand float-left" href="landing.php">
                    <i class="fas fa-th-large"></i>
                </a>
                </div>
                <div class="col-lg-4">
                    <h1 class="text-center">HPS Configurator</h1>
                </div>
                <div class="col-lg-4 icons">
                    <a class="navbar-brand navbar-right float-right" href="#">
                    <span><i class="fas fa-cog"></i></span>                     
                </a>
                    <a class="navbar-brand navbar-right float-right" href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
                </div>
            </div>
        </div>

        <div class="dashboard-onboard-carriers">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach($carriers as $carrier) { ?>
                    <div class="col-lg-3 col-md-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="carrier">
                                    <!-- COLOR-CODED squares -->
                                    <div class="color-coding"></div>
                                    <!-- LOGOs -->
                                    <a href="dashboard-carrierdetails.php"><div class="thumbnail"><img src="../images/logos/<?php echo $carrier['logo']; ?>.png" alt=""></div></a>
                                    <!-- Company's INFO -->
                                    <div class="carrier-info">
                                        <h3>
                                            <?php echo $carrier['name']; ?>
                                        </h3>
                                        <h5>Last Updated: 12/12/12</h5>
                                        <h5>Last Updated By: John Dow</h5>                                                              
                                    </div>
                                    <div class="carrier-status">
                                        <div class="row container-fluid">                                            
                                            <div class="col-lg-3 col-md-3 btn btn-lg btn-danger">PROD</div>
                                            <div class="col-lg-3 col-md-3 btn btn-lg btn-info">QUA</div>
                                            <div class="col-lg-3 col-md-3 btn btn-lg btn-warning">SIT</div>
                                            <div class="col-lg-3 col-md-3 btn btn-lg btn-success">DEV</div>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('navbars_footers/footer.php')
?>