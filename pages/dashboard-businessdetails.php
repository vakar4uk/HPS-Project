<?php
    include('navbars_footers/header.php');
    include('navbars_footers/top-navbar.php');
?>

<div class="row">
    <div class="col-lg-12">
        <div id="carierdetails-container" class="container">
            <div class="carrier-details">
                <!-- Header text -->             
                <div class="header-notification">
                <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>               
                <div id="toggle-notification" class="jumbotron">                                
                    <h3>Great! Tell us more about your business!</h3>
                    <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua.
                    </p>
                </div>                   
            </div>
            <!-- Header text -->
                <form id="entity-address" action="">
                    <div class="my-container">
                        <div class="carrier-name">
                            <p>Business type</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">
                            <br>
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="container col-lg-6 col-md-6">
                                        <button id="business-individual" class="btn btn-lg btn-block btn-info" type="button">Individual</button>
                                        <div id="individual-business-display" style="display:none;">
                                            <br>                                                                                                                           
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <button id="business-individual-onexchange" class="btn btn-lg btn-block btn-info exchange-type-btn" type="button">On Exchange</button>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <button id="business-individual-offexchange" class="btn btn-lg btn-block btn-info exchange-type-btn" type="button">Off Exchange</button>
                                                </div>                                       
                                            </div>
                                            <div class="row">
                                                    <br>
                                                    <div id="carrier-code-individual" class="col-lg-12 col-md-12" style="display: none;">
                                                        <p>Carrier Code for Individual</p>
                                                        <input id="input-code-individual" class="form-group" type="text" name="">
                                                    </div>                                        
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <button id="submit-individual" class="btn btn-lg btn-block btn-success" type="submit" style="display: none;">Submit</button>
                                                </div>
                                            </div>
                                            
                                        </div>                                    
                                    </div>                                
                                    <div class="container col-lg-6 col-md-6">
                                        <button id="business-group" class="btn btn-lg btn-block btn-info" type="button">Group</button>
                                        <div id="group-business-display" style="display:none;">
                                            <br>                                                                                                                           
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <button id="business-group-onexchange" class="btn btn-lg btn-block btn-info exchange-type-btn" type="button">On Exchange</button>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <button id="business-group-offexchange" class="btn btn-lg btn-block btn-info exchange-type-btn" type="button">Off Exchange</button>
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                    <br>
                                                    <div id="carrier-code-group" class="col-lg-12 col-md-12" style="display: none;">
                                                        <p>Carrier Code for Group</p>
                                                        <input id="input-code-group" class="form-group" type="text" name="">
                                                    </div>                                         
                                            </div>
                                            
                                        </div>
                                    </div>                                    
                                </div>     
                                </div>                               
                            </div> 
                                                      
                        </div>
                    </div>
                    <a id="save-next-btn"  href="dashboard-states.php" class="btn btn-lg btn-primary pull-right">Next</a>
                </div>
                                  
            </form>
            
            </div>
            
        </div>
    </div>
</div>



<?php
    include('navbars_footers/footer.php');
?>