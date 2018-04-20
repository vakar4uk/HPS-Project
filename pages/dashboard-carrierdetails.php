<?php 
    include('navbars_footers/header.php');
    include('navbars_footers/top-navbar.php');
?>

<div class="col-lg-12">
    <div id="carierdetails-container" class="container">    
            <div class="carrier-details">
                <!-- Header text -->             
                <div class="header-notification">
                    <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>               
                    <div id="toggle-notification" class="jumbotron">                                
                        <h3>We would need a few details to get you started!</h3>
                        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                        </p>
                    </div>                   
                </div>
                <!-- Header text -->

                <div class="my-container">
                    <div class="carrier-name">
                        <p>Name of the Carrier</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                        <hr id="hr">
                        <input id="carriername-input" type="text" class="form-control" placeholder="Enter name here...">
                        
                    </div>
                </div>

                <div class="my-container">
                    <div class="carrier-name">
                        <p>Carrier Logo</p>

                        <label id="image-upload">
                            <input type="file" id="logo-input"><i id="img-upload-icon" class="fas fa-upload fa-5x"></i>
                        </label> 


                        <span id="icons"><i class="far fa-list-alt"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                    </div>
                </div>

                <a id="save-next-btn"  href="dashboard-businessdetails.php" class="btn btn-lg btn-primary pull-right">Next</a>

            </div>
        </div>   
</div>

<?php
    include('navbars_footers/footer.php');
?>
