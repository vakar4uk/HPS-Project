<?php
    include('navbars_footers/top-navbar.php');
?>

<div class="col-lg-12">
    <div id="carierdetails-container" class="container">
        <div class="carrier-details">
            <!-- Header text -->
            <div class="jumbotron">
                <span><i class="fas fa-times fa-1x"></i></span>
                <h3>Perfect! So, what all states is the service available in?</h3>
                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>
            <!-- Header text -->   

            <div class="my-container">
                <div class="carrier-name">
                <p>States the service available off exchange for individual</p>
                <span id="icons">
                    <i class="far fa-envelope fa-1x"></i>
                    <i class="far fa-sliders-v fa-1x"></i>                                     
                    <i class="fas fa-ellipsis-v fa-1x"></i>
                    
                   
                </span>
                    <hr id="hr">
                    
                    <div class="row"><br>
                        <div class="col-lg-12 col-md-12">

                    </div>
                        <?php foreach ($allStates as $shortName => $name) { ?>                        
                                <div id="state-list" class="col-lg-2 col-md-2">                            
                                    <button id="selected-business-type" class="btn btn-info btn-lg" onclick="selectBusinessType()"><?php echo $shortName; ?></button>                    
                                </div>            
                        <?php } ?>                        
                    </div>

                    <div class="col-lg-6 col-md-4">
                            <button class="btn btn-lg btn-block btn-default">Copy from off exchange for individual</button>
                    </div>
                    <div class="col-lg-6 col-md-4">
                            <button class="btn btn-lg  btn-block btn-danger">Clear All</button>
                    </div>
                    
                    
                </div>
            </div>

            <!-- <button class="btn btn-lg btn-block btn-success">Submit</button> -->

        </div>

    </div>
</div>

<?php
    include('navbars&footers/footer.php');
?>
