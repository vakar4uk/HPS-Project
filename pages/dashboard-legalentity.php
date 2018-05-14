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
                    <h3>We are almost there! Now let's select a legal entity</h3>
                    <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua.
                    </p>
                </div>                   
            </div>
            
            </div>

            <!-- Header text -->  
               <div class= "legal-container">
                <form id="entity-address" action="">
                    <div class="my-container">
                        <div class="carrier-name">
                            <p>Name of and Code of Legal Entity</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">
                            <input id="carriername-input" type="text" class="form-control" placeholder="John Doe, XC78" required>
                        </div>
                        <!-- <input type="submit" class="btn btn-lg btn-success btn-block"> -->
                        <!-- <button id="add-bank-address" class="btn btn-lg btn-success btn-block" type="submit">Submit</button> -->
                    </div>
                   
             <br>
                

                    <div class="address-container">
                       <div class="my-container">
                        <div class="carrier-name">
                            <p>Address</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">

                            <div class="row">
                            <br>
                                <div class="container-fluid">
                                    <div class="col-lg-4">
                                        <select required class="selectpicker form-group" data-style="btn-default" data-width=290px >
                                    <option value="" selected disabled hidden>Select address type...</option>
                                    <option value="business-address">Business</option>
                                    <option value="home-address">Home</option>
                                </select>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1" data-width=385px required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container-fluid">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container-fluid">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="addressLine2" placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="selectpicker form-group" data-style="btn-default" data-width=280px>
                                        <option value="" selected disabled hidden>Select State...</option>

                                        <?php foreach ($allStates as $shortName => $name) { ?>                                                               
                                            <option value="business-address"><?php echo $name; ?></option>                                               
                                        <?php } ?>  

                                    </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group" id="zipcodeField">
                                            <input type="number" class="form-control" id="zipcode" placeholder="Zipcode" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container-fluid">
                                    <div class="col-lg-4">
                                        <select class="selectpicker form-group" data-style="btn-default" data-width=300px>
                                    <option value="" selected disabled hidden>Select phone type...</option>
                                    <option value="work-phone">Work</option>
                                    <option value="cell-phone">Cell</option>
                                    <option value="home-phone">Home</option>
                                </select>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="phone-number" placeholder="Enter a phone number..." required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Enter your email address..." required >
                                       
                                       
                                       
                                        </div>
                                   
                                    </div>
                                    
                                </div>
                            </div>
                    
             <!-- <button id="add-bank-address" class="btn btn-lg btn-success btn-block" type="submit">Submit</button> -->
             <br>   
            </div> 
        
            
        </div>
        
    </div>
<!-- ADD ADDRESS BUTTON -->



<button id="add-bank-address" class="btn btn-lg btn-success btn-block" type="add">Add Address</button>                       
           <br>
            <script>
                (function(){

                  var input = $('.address-container');
                    $('#add-bank-address').on('click', function(e){
                    $(this).before(input.clone());
                    e.preventDefault();
                                });
                    })();
                </script> 
                
                
                <!-- &nbsp; -->
      
  <!-- ADD ADDRESS BUTTON --> 
<!-- 
        <form id="entity-bank" action=""> -->
            <div class="bank-details">
               <div class="my-container">
                <div class="carrier-name">
                    <p>Bank Details</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                    <hr id="hr">
                </div>

                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="accountNumber" placeholder="Account Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="bankNumCode" placeholder="Bank Num Code">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="accountNumber" placeholder="Batch Co Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="bankNumCode" placeholder="Site Code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="accountNumber" placeholder="Batch Description">
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="additionalBatchInfo" placeholder="Additional Batch Info">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" class="form-control" id="batchGroupCode" placeholder="Batch Group Code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="bankName" placeholder="Bank Name">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="number" class="form-control" id="merchantId" placeholder="Merchant ID">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="number" class="form-control" id="securityKey" placeholder="Security Key">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="date" placeholder="Security Exp Date"> 
                            </div>                            
                        </div>                        
                    </div>
                </div>
                
               
                
                 </div>
               
            </div>           
        <!-- </form>   -->
        <br>
           <!-- <div class="col-lg-12"> -->
                            <button id="add-bank-details" class="btn btn-lg btn-success btn-block" type="add">Add Bank Details</button>                       
           <!-- </div>  --> <br>
           
               <script>
             
                    
                    (function(){

                  var input = $('.bank-details');
                    $('#add-bank-details').on('click', function(e){
                    $(this).before(input.clone());
                    e.preventDefault();
                                });
                    })();
                </script> 
                 
                       &nbsp;
    </div>
        <!-- Submit Button -->
        <button id="add-entity" class="btn btn-lg btn-success btn-block" type="add">Add Legal Entity</button>     
        
         <script>
             
                    
                    (function(){

                  var input = $('.legal-container');
                    $('#add-entity').on('click', function(e){
                    $(this).before(input.clone());
                    e.preventDefault();
                                });
                    })();
                </script> 
                
                 &nbsp;
</form>  
    
</div>

    <!-- <div class="row">
            <div id="business-type"  class="col-lg-12 col-md-1">   
                    
					<a class="btn btn-lg btn-success pull-right" href="dashboard.php">Submit</a>
				</div>
		</div>
        <br> -->

        <!-- Submit Button -->

                 &nbsp;
                 
                 

<?php
    include('navbars_footers/footer.php');
    include('navbars_footers/reviewfooter.php');
?>