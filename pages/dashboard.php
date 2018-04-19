<?php
    include('navbars_footers/header.php')
?>
    <!-- main-dasbboard container fluid -->
    <div class="main-dashboard container-fluid">
        <!-- HEADER -->
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
        <!-- HEADER -->

        <!-- on boarder carriers -->
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
                                    <a href="dashboard-carrierdetails.php">
                                        <div class="thumbnail onboarded"><img src="../images/logos/<?php echo $carrier['logo']; ?>.png" alt=""></div>
                                    </a>
                                    <!-- Company's INFO -->
                                    <div class="carrier-info">
                                        <h3>
                                            <?php echo $carrier['name']; ?>
                                        </h3>
                                        <h5>Last Updated: 12/12/12</h5>
                                        <h5>Last Updated By: John Dow</h5>
                                    </div>
                                    <div class="carrier-status">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-danger">PROD</button></div>
                                            <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-info">QUI</button></div>
                                            <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-warning">SUI</button></div>
                                            <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-success">DEV</button></div>
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
        <!-- on boarder carriers -->

        <!-- Current onboarding -->
        <div class="current-onboarding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="lead">Current Onboarding</p>
                    </div>

                    <!-- Individual Carrier Display -->
                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <div class="carrier">
                                <div class="color-coding"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumbnail onboarding">
                                            <img src="../images/logos/wellmark.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="carrier-info">
                                            <h4>
                                                Wellmark
                                            </h4>
                                            <div class="last-updated">
                                                <h5>Last Updated: 12/12/12</h5>
                                                <h5>Last Updated By: John Dow</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <div class="carrier">
                                <div class="color-coding"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="thumbnail onboarding">
                                            <img src="../images/logos/united.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="carrier-info">
                                            <h4>
                                                United Healthcare
                                            </h4>
                                            <div class="last-updated">
                                                <h5>Last Updated: 12/12/12</h5>
                                                <h5>Last Updated By: John Dow</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Individual Carrier Display -->
                </div>
            </div>
        </div>
        <!-- Current onboarding -->

    </div>
    <!-- main-dasbboard container fluid -->

    <?php
    include('navbars_footers/footer.php')
?>