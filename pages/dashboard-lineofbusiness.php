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
                <h3>Great! Now let's select your line of business</h3>
                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                </p>
            </div>                   
            </div>
            <!-- Header text -->      

            <div class="my-container">
                <div class="carrier-name">
                <p>Line of business available for Individual off Exchange</p>
                <span id="icons">
                    <i class="far fa-envelope fa-1x"></i>
                    <i class="far fa-sliders-v fa-1x"></i>                                     
                    <i class="fas fa-ellipsis-v fa-1x"></i>
                    
                   
                </span>
                    <hr id="hr">
                    
                    <div class="row"><br>
                        <div class="col-lg-12 col-md-12">
							                    
                    			<?php foreach ($lineOfBusiness as $line) { ?>                        
                            		<div id="business-type" class="col-lg-3 col-md-3">                            
                                		<button id="selected-business-type" class="btn btn-info btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">
                        <div class="col-lg-6 col-md-6">
                            <button class="btn btn-lg btn-default">Copy from off exchange for individual</button>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <button id="clear-business-btn" class="btn btn-lg btn-danger">Clear All</button>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a id="save-next-btn" href="dashboard-legalentity.php" class="btn btn-lg btn-primary pull-right">Next</a>
            </div>
        </div>	
        </div>
		
    </div>
</div>

<?php
    include('navbars_footers/footer.php');
?>
