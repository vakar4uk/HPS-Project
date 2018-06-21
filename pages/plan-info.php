<?php 
    include('navbars_footers/header.php');
    include('navbars_footers/top-navbar-ppr.php');
?>

<div class="col-lg-12">
    <div id="carierdetails-container" class="container">    
            <div class="carrier-details">
                <!-- Header text -->             
                <div class="header-notification">
                    <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>               
                    <div id="toggle-notification" class="jumbotron">                                
                        <h3>Plan Information</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                        </p>
                    </div>                   
                </div>
                <!-- Header text -->

                <div class="my-container">
                    <div class="carrier-name">
                        <p>Plans Code</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i id="ppr-pc" class="fas fa-ellipsis-v fa-1x"></i></span>
                        <hr id="hr">
                      
                        
                    </div>
                </div>
                
                <div class="my-container">
                    <div class="carrier-name">
                        <p>Rates</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i id="ppr-r" class="fas fa-ellipsis-v fa-1x"></i></span>
                        <hr id="hr">
                       
                    </div>
                </div>
                
                <div class="my-container">
                    <div class="carrier-name">
                        <p>Change Plan</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i id="ppr-cp" class="fas fa-ellipsis-v fa-1x"></i></span>
                        <hr id="hr">
                  
                    </div>
                </div>
                
                <div class="my-container">
                    <div class="carrier-name">
                        <p>Age Rules</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i id="ppr-ar" class="fas fa-ellipsis-v fa-1x"></i></span>
                        <hr id="hr">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-lg-6 select-product">
                                    <div class="form-group">
                                        <input list="products" name="product-choice" class="form-control" id="product" placeholder="Select Product" required>
                                        <datalist id="products">
                                            <option value="Blue Shield"></option>
                                            <option value="Florida Blue"></option>
                                            <option value="United Health Care"></option>
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" name="min-age" class="form-control" id="min-age" placeholder="Applicant Min Age *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" name="max-age" class="form-control" id="max-age" placeholder="Applicant Max Age *" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" name="c-min-age" class="form-control" id="c-min-age" placeholder="Child Min Age *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" name="c-max-age" class="form-control" id="c-max-age" placeholder="Child Max Age *" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- Modal -->

<?php
    include('navbars_footers/footer.php');
?>
