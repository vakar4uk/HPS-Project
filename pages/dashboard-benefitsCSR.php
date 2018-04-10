<?php
    include('navbars_footers/top-navbar.php');
?>

<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        
<div class="row">
    <div class="col-lg-12">
        <div id="carierdetails-container" class="container">
            <div class="carrier-details">
                <!-- Header text -->
                <div class="jumbotron">
                    <span><i class="fas fa-times fa-1x"></i></span>
                    <h3>Great!Tell us more about your business!</h3>
                    <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                    </p>
                </div>
                <form id="entity-address" action="">
                    <div class="my-container">
                        <div class="carrier-name">
                            <p>Benefits</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">
                            <br>
                            <input type="search" name="" id="" placeholder="">
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
                                            <div class="row">
                                                <div id="submit-group"  class="col-lg-12 col-md-12" style="display: none;">
                                                    <button class="btn btn-lg btn-block btn-success" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>     
                                </div>                               
                            </div> 
                                                      
                        </div>                            
                    </div>
                </div>                    
            </form>

            </div>
        </div>
    </div>
</div>

<?php
    include('navbars_footers/footer.php');
?>