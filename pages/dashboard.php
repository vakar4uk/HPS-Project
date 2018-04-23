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
                   
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                                                        <h4 id="modal-logo" class="modal-title thumbnail" id="myModalLabel"><img src="../images/logos/<?php echo $carrier['logo']; ?>.png" alt=""></h4>
                                                        <span id="modal-carrier-info" class="pull-right">                                                           
                                                            <h5>Last Updated: 12/12/12</h5>
                                                            <h5>Last Updated By: John Dow</h5>
                                                        </span>
                                                    </div>
                                                    <div class="modal-body">
                                                    <table id="modal-table" class="table table-bordered">                                                        
                                                        <tbody class="text-center align-middle">
                                                        <tr>
                                                            <td class="active">Core</td>
                                                            <td class="success"><a href="dashboard-carrierdetails.php">Carrier Details</a></td>
                                                            <td class="success"><a href="dashboard-businessdetails.php">Business Details</a></td>
                                                            <td class="success"><a href="dashboard-states.php">States</a></td>
                                                            <td class="success"><a href="dashboard-legalentity.php">Legal Entities</a></td>
                                                        </tr>
                                                        <tr>
                                                            <div class="row">
                                                                <td class="active">Product, Plans & Rating</td>
                                                                <td class="success">Plan Info.</td>
                                                                <td class="success">Load Plans & Rates</td>
                                                                <td class="danger">Coverage Edits</td>          
                                                            </div>
                                                                                                              
                                                        </tr>
                                                        <tr>
                                                            <td class="active">Finance & Billing</td>
                                                            <td class="success">Billing & Finance Info.</td>
                                                            <td class="warning">Configure Batch Jobs</td>
                                                            <td class="success">Set Program Rules</td>                                                            
                                                            <td class="success">Manage db Entries</td>                                                            
                                                        </tr>
                                                        <tr>
                                                            <td class="active">Exchangelink</td>
                                                            <td class="success">WTX/WMB</td>
                                                            <td class="success">EMC</td>
                                                            <td class="success">Core Services</td>                                                                                                                
                                                        </tr>                                                        
                                                        </tbody>
                                                  </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->

                    
                    
                    <div class="carrier-display">
                        <div class="col-lg-3 col-md-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="carrier">
                                        <!-- COLOR-CODED squares -->
                                        <div class="color-coding" data-toggle="modal" data-target="#myModal"></div>
                                        
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
                                                <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-danger">PRO</button></div>
                                                <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-info">QUI</button></div>
                                                <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-warning">SUI</button></div>
                                                <div class="col-lg-3 col-md-3 btn btn-lg"><button class="btn btn-lg btn-block btn-success">DEV</button></div>
                                            </div>
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
                    </div> <!-- Individual Carrier Display -->

                    <!-- Individual Carrier Display -->
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
                    </div>  <!-- Individual Carrier Display -->

                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <a href="dashboard-carrierdetails.php">
                                <div id="new-carrier-btn" class="pull-right">
                                    <button class="btn btn-default vertical">+NEW</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- Individual Carrier Display -->

                </div>
            </div>
        </div>
        <!-- Current onboarding -->

    </div>
    <!-- main-dasbboard container fluid -->

    <!-- MODAL -->
    
    <!-- MODAL -->

    <?php
    include('navbars_footers/footer.php')
?>