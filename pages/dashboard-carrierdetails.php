<?php 

    include('navbars_footers/top-navbar.php');

?>

<div class="col-lg-12">
    <div id="carierdetails-container" class="container">    
        
            <div class="carrier-details">
                <!-- Header text -->
                <div class="jumbotron">
                    <span><i class="fas fa-times fa-1x"></i></span>
                    <h3>We would need a few details to get you started!</h3>
                    <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                    </p>
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
                        <label>
                                <input class="btn btn-block btn-sm btn-info" type="file">
                        </label>
                        <span id="icons"><i class="far fa-list-alt"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                    </div>
                </div>

                <button class="btn btn-lg btn-block btn-success">Submit</button>

            </div>
        </div>
   
</div>