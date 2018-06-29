<?php
    include('navbars_footers/header.php');
    include('navbars_footers/top-navbar.php');
?>

<<<<<<< HEAD
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
                                		<button id="on" class="btn btn-info btn-lg selected-business">Individual On Exchange</button>                    
                                    </div>  
                                    <div id="business-type" class="col-lg-4 col-md-4">                            
                                		<button id="off" class="btn btn-info btn-lg selected-business">Individual Off Exchange</button>                    
                            		</div>  <div id="business-type" class="col-lg-4 col-md-4">                            
                                		<button id="group" class="btn btn-info btn-lg selected-business">Group</button>                    
                            		</div>            
          			            
							
						</div>
					</div>
					<div class="row">
                        <!-- <div class="col-lg-6 col-md-6">
                            <button class="btn btn-lg btn-default">Copy from off exchange for individual</button>
                        </div> -->

                       
                    </div>
                    
                    
                </div>
            </div>

<!-- pick a line -->
<!--             
            <div id="slide-btn"><i class="fas fa-times fa-2x"></i></div> -->

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
                                		<button id="selected-business-type" class="btn btn-info btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">
                        <!-- <div class="col-lg-6 col-md-6">
                            <button class="btn btn-lg btn-default">Copy from off exchange for individual</button>
                        </div> -->

                        <div id="business-type" class="col-lg-12 col-md-12">   
                            
                            <button id="clear-business-btn" class="btn btn-lg btn-danger pull-right">Clear All</button>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

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
                                		<button id="selected-business-type" class="btn btn-info btn-block btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">
                        <!-- <div class="col-lg-6 col-md-6">
                            <button class="btn btn-lg btn-default">Copy from off exchange for individual</button>
                        </div> -->

                        <div id="business-clear" class="col-lg-12 col-md-12">   
                            
                            <button id="clear-business-btn" class="btn btn-lg btn-danger pull-right">Clear All</button>
=======
    <div class="col-lg-12">
        <div id="carierdetails-container" class="container">
            <div class="carrier-details">
                <!-- Header text -->
                <div class="header-notification">
                    <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>
                    <div id="toggle-notification" class="jumbotron">
                        <h3>Great! Now let's select your line of business</h3>
                        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <!-- Header text -->
                <div class="lineofbusiness-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="my-container">
                                <div class="carrier-name">
                                    <p>Business Type</p><span id="icons" style="margin-right: 20px"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                                    <br><hr id="hr">   
                                </div>
                                <div id="business-selection-btn" class="lineofbusiness-options">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="on-exchange" class="btn btn-default btn-lg btn-block">Individual On Exchange</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="off-exchange" class="btn btn-default btn-lg btn-block">Individual Off Exchange</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <button id="group-exchange" class="btn btn-default btn-lg btn-block">Group</button>
                                        </div>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="my-container">
                                <div class="carrier-name">
                                    <p>Line of Business</p><span id="icons" style="margin-right: 20px"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                                    <hr id="hr">   
                                </div>
                                <div id="lineofbusiness-selection-btn" class="lineofbusiness-types">
                                    <div class="row">
                                        <?php foreach($lineOfBusiness as $line) { ?>
                                        <div class="col-lg-12 col-md-12">
                                            <button class="btn btn-default btn-lg btn-block selected-business"><?php echo $line['name']; ?></button>
                                        </div>
                                        <?php } ?>                                                                        
                                    </div>
                                    <div id="select-clear-container" class="row">
                                        <div class="col-lg-6 pull-right" id="clear-business-container">
                                            <button id="clear-business-btn" class="btn btn-danger btn-md">Clear All</button>
                                        </div>    
                                    </div>                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="my-container">                       
                                <div class="carrier-name">
                                    <p>States</p><span id="icons" style="margin-right: 20px"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                                    <hr id="hr">   
                                </div>
                                <div id="states-selection-btn" class="lineofbusiness-states">
                                    <div class="row">
                                        <?php foreach ($allStates as $shortName => $name) { ?>                        
                                        <div class="col-lg-2 col-md-2">                            
                                            <button class="btn btn-default btn-block btn-sm selected-states"><?php echo $shortName; ?></button>                    
                                        </div>            
                                        <?php } ?>
                                                                                                              
                                    </div>
                                    <div class="row">
                                        <div id="select-clear-container">
                                            <div class="col-lg-4 col-md-4">
                                                <button id="select-allstates-btn" class="btn btn-warning btn-block">Select All</button>
                                            </div>
                                            <div class="col-lg-4 col-md-4 ">
                                                <button id="copy-states-btn" class="btn btn-success btn-block">Copy All</button>     
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <button id="clear-states-btn" class="btn btn-danger btn-block">Clear All</button>     
                                            </div>                                        
                                        </div>   
                                    </div>
                                                      
                                </div>                         
                            </div>
>>>>>>> Combining
                        </div>
                    </div>

                </div>
            </div>
<<<<<<< HEAD



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
                                		<button id="selected-business-type" class="btn btn-info btn-lg selected-business"><?php echo $line["name"]; ?></button>                    
                            		</div>            
          			            <?php } ?>
							
						</div>
					</div>
					<div class="row">
                        <!-- <div class="col-lg-6 col-md-6">
                            <button class="btn btn-lg btn-default">Copy from off exchange for individual</button>
                        </div> -->

                        <div  class="col-lg-12 col-md-12">   
                            
                            <button id="clear-business-btn" class="btn btn-lg btn-danger clear-business-btn pull-right">Clear All</button>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="row">
            <div id="business-type"  class="col-lg-12 col-md-12">   
                    
					<a class="btn btn-lg btn-success pull-right" href="dashboard-legalentity.php">Next</a>
				</div>
		</div>
        </div>
		
=======
            <div class="row">
				<div class="col-lg-12">
                    <a id="save-next-btn" href="dashboard-legalentity.php" class="btn btn-lg btn-primary pull-right">Next</a>
				</div>
		    </div>		
        </div>
>>>>>>> Combining
    </div>
                

<<<<<<< HEAD
<?php
    include('navbars_footers/footer.php');
?>
=======
    <?php
    include('navbars_footers/footer.php');
?>
>>>>>>> Combining
