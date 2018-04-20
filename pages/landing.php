<!-- Check whether the user has been logged in -->
<?php 

    session_start();

    if($_SESSION['loggedIn'] !== 1){
        echo "You need to log in!";
        header('Location: ../../index.php');
        session_destroy();
    }

    // Setting temporary name and last name
    // should come from database
    $firstName = "John";
    $lastName = "Dow";

?>
<!-- Check whether the user has been logged in -->

<?php
    include('navbars_footers/header.php')
?>
    <!-- The whole screen wrapped by .main-dashboard -->
    <div class="main-landing">
        <div class="container dashboard-container">
            <div class="row"> <!-- row -->
                <div class="col-lg-4">
                    <div class="pull-left">
                        <i class="far fa-user fa-5x"></i>                        
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <p><img src="../../images/whiteoutline.png" alt="" srcset=""></p>                       
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="pull-right text-center user-greeter">
                        <p class="lead">Hello!</p>
                        <p class="lead"><strong><?php echo $firstName . " " . $lastName; ?></strong></p>
                    </div>   
                </div>
            </div> <!-- row -->
            
            <div class="dashboard-table">
                <div class="row container-fluid"> <!-- row -->
                    <div class="col-lg-4 col-md-4 cell cell-left">
                        <div class="text-center btn btn-block">
                            <a href="dashboard.php">
                                <i class="fas fa-th fa-5x"></i>
                                <p class="lead">Dashboard</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 cell cell-middle">
                        <div class="text-center btn btn-block">
                            <a href="#">
                                <i class="fas fa-archive fa-5x"></i>
                                <p class="lead">Manage Metadata</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 cell cell-right">
                        <div class="text-center btn btn-block">
                            <a href="#">
                                <i class="far fa-file-alt fa-5x"></i>
                                <p class="lead">Review & Approve</p>
                            </a>
                        </div>
                    </div>
                </div> <!-- row -->
                <div class="row container-fluid"> <!-- row -->
                    <div class="col-lg-4 col-md-4 cell-left">
                        <div class="text-center btn btn-block">
                            <a href="#">
                                <i class="fas fa-upload fa-5x"></i>
                                <p class="lead">Publish</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 cell-middle">
                        <div class="text-center btn btn-block">
                            <a href="#">
                                <i class="fas fa-male fa-5x"></i>
                                <p class="lead">System Administrator</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 cell-right">
                        <div class="text-center btn btn-block">
                            <a href="../logout-logic.php">
                                <i class="fas fa-sign-out-alt fa-5x"></i>
                                <p class="lead">Sign Out</p>
                            </a>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>
            
        </div>
    </div>
    <!-- The whole screen wrapped by .main-landing -->
    

<?php
    include('navbars_footers/footer.php');
?>