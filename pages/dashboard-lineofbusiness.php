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
            

<!-- pick a line -->


<div class="my-container">
                <div class="carrier-name">
                <p>Pick an Option</p>
                <span id="icons">
                    <i class="far fa-envelope fa-1x"></i>
                    <i class="far fa-sliders-v fa-1x"></i>                                     
                    <i class="fas fa-ellipsis-v fa-1x"></i>
                    
                   
                </span>
                    <hr id="hr">
                    
                    <div class="row"><br>
                        <div class="col-lg-12 col-md-12">
							                    
                    			               
                            		<div id="business-type" class="col-lg-4 col-md-4">                            
                                		<button id="on" class="btn btn-default btn-lg ">Individual On Exchange</button>                    
                                    </div>  
                                    <div id="business-type" class="col-lg-4 col-md-4">                            
                                		<button id="off" class="btn btn-default btn-lg ">Individual Off Exchange</button>                    
                            		</div>  <div id="business-type" class="col-lg-4 col-md-4">                            
                                		<button id="group" class="btn btn-default btn-lg ">Group</button>                    
                            		</div>            
          			            
							
						</div>
					</div>              
                    
                </div>
            </div>

<!-- pick a line -->
<!--             
            <div id="slide-btn"><i class="fas fa-times fa-2x"></i></div> -->


   

            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->

            <div id="OnExchange" class="my-container">
                <div class="carrier-name">
                    <p>Line of business available for Individual On Exchange</p>
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
                                        <button id="on"  class="btn btn-default btn-block btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">               
                        <div id="business-type" class="col-lg-12 col-md-12">                         
                            <button id="clear-business-btn" class="btn btn-lg btn-danger clear-business-btn pull-right">Clear All</button>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            <!-- ####################ON EXCHANGE################# -->
            
            <!-- OFF EXCHANGE -->
            <div id="OffExchange"div class="my-container">
                <div class="carrier-name">
                <p>Line of business available for Individual Off Exchange</p>
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
                                		<button class="btn btn-default btn-block btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">               
                        <div id="business-type" class="col-lg-12 col-md-12">                         
                            <button id="clear-business-btn" class="btn btn-lg btn-danger clear-business-btn pull-right">Clear All</button>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->

            <div id="Group1"div class="my-container">
                <div class="carrier-name">
                <p>Line of business available for Group</p>
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
                                		<button id="selected-business-type" class="btn btn-default btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">               
                        <div id="business-type" class="col-lg-12 col-md-12">                         
                            <button id="clear-business-btn" class="btn btn-lg btn-danger clear-business-btn pull-right">Clear All</button>
                        </div>
                    
                    </div>
                    
                    
                </div>
            </div>


            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->
            <!-- ####################GROUP################# -->

            <div class="row">
            <div id="business-type"  class="col-lg-12 col-md-12">   
                    
					<a class="btn btn-lg btn-success pull-right" href="dashboard-legalentity.php">Next</a>
				</div>
		</div>
        </div>
		
    </div>
</div>

<?php
    include('navbars_footers/footer.php');
?>
