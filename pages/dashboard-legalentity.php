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
            
<style>
table {
    font-family: arial, sans-serif;
     border-collapse: collapse; 
    width: 100%;

}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 12px;
    color: #7272C8;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


<table>
  <tr>
    <th>Business Type</th>
    <th>Line of Business</th>
    <th>State</th>
    <th>Legal Entities</th>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td><select id="rec_mode">        
      </select></td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
          


    <script>
 var options =
[
  {
    "text"  : "Option 1",
    "value" : "Value 1"
  },
  {
    "text"     : "Option 2",
    "value"    : "Value 2",
    "selected" : true
  },
  {
    "text"  : "Option 3",
    "value" : "Value 3"
  }
];

var selectBox = document.getElementById('rec_mode');

for(var i = 0, l = options.length; i < l; i++){
  var option = options[i];
  selectBox.options.add( new Option(option.text, option.value, option.selected) );
} 
    
                
    </script>     
        
          
           <br>
           <br>
      
  <div class="my-container">

       <p>Legal Entites</p>
        <hr id="hr">
    
        <ul style="list-style-type:none" id="dynamic-list"></ul> 
       <p id="dText"></p> 
    <input type="text" name="text" id="inputText"/>
    <button onclick="pushData();">Show</button>   
            
    <script>
                
    var myArr = [];
    
    function pushData(){
        
        var inputText = document.getElementById('carriername').value;
        
        myArr.push(inputText);
        
        var pval = "";
        
        for(i = 0; i < myArr.length; i++){
            
        pval = pval + myArr[i] + "<br/>";
            
        }
        
        document.getElementById('dText').innerHTML = pval;
        
    }
                
                
                
    </script>
         
         
         
       <!-- <input type="text" id="candidate"/>
        <button onclick="removeItem()">Remove Legal Entity</button> -->

    </div>  
    
    
    
    
    
    <!--  <script>
   function addItem(){
        var ul = document.getElementById("dynamic-list");
        var candidate = document.getElementById("carriername");
        var li = document.createElement("li");
        li.setAttribute('id',candidate.value);
        li.appendChild(document.createTextNode(candidate.value));
        ul.appendChild(li);
}

        function removeItem(){
	    var ul = document.getElementById("dynamic-list");
        var candidate = document.getElementById("candidate");
        var item = document.getElementById(candidate.value);
        ul.removeChild(item);
}
                 </script>   -->     
            
            
            
            <br>
            <br>
            <!-- Header text -->  
                <form id="entity-address" action="" name="entity-address">
                    <div class="my-container">
                        <div class="carrier-name">
                            <p>Name of and Code of Legal Entity *</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">
                            <input id="carriername" name="carriername" type="text" class="form-control" placeholder="John Doe, XC78" required>
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
                                        <select class="selectpicker form-group required" name="address-type" data-style="btn-default"data-width=290px>                                        
                                            <option value="">Select address type...</option>
                                            <option value="business-address">Business</option>
                                            <option value="home-address">Home</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="addressLine1" name="addressLine1" placeholder="Address Line 1 *" data-width=385px required>
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
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="selectpicker form-group" name="state" data-style="btn-default" data-width=280px required>
                                            <option value="" selected disabled hidden>Select State...</option>

                                        <?php foreach ($allStates as $shortName => $name) { ?>                                                               
                                            <option value="business-address"><?php echo $name; ?></option>                                               
                                        <?php } ?>  

                                    </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group" id="zipcodeField">
                                            <input type="number" name="zipcode" class="form-control" id="zipcode" placeholder="Zipcode *" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container-fluid">
                                    <div class="col-lg-4">
                                        <select class="selectpicker form-group" name="phone-type" data-style="btn-default" data-width=300px required>
                                            <option value="" selected disabled hidden>Select phone type...</option>
                                            <option value="work-phone">Work</option>
                                            <option value="cell-phone">Cell</option>
                                            <option value="home-phone">Home</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" id="phone-number" placeholder="Enter a phone number. *" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address *" required>                               
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



<button id="add-bank-address" class="btn btn-lg btn-success btn-block" type="submit">Add Address</button>                       
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
                                <input type="number" name="account-number" class="form-control" id="account-number" placeholder="Account Number *" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" name="bank-num-code" class="form-control" id="bank-num-code" placeholder="Bank Num Code *" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" name="batch-code-number" class="form-control" id="batchCoNumber" placeholder="Batch Co Number *" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" name="site-code" class="form-control" id="siteCode" placeholder="Site Code *" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="batch-description" class="form-control" id="accountNumber" placeholder="Batch Description *" required>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input type="text" name="additional-batch-info"class="form-control" id="additionalBatchInfo" placeholder="Additional Batch Info *" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" name="batch-group-code" class="form-control" id="batchGroupCode" placeholder="Batch Group Code *" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" name="bank-name" class="form-control" id="bankName" placeholder="Bank Name *" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="number" name="merchant-id" class="form-control" id="merchantId" placeholder="Merchant ID *" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="number" name="security-key" class="form-control" id="securityKey" placeholder="Security Key *" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="textbox-n form-control" name="security-expiration-date" type="text" onfocus="(this.type='date')"  id="date" placeholder="Security Exp Date *" required> 
                            </div>                            
                        </div>                        
                    </div>
                </div>
                
               
                
                 </div>
               
            </div>           
        <!-- </form>   -->
        <br>
           <!-- <div class="col-lg-12"> -->
                            <button id="add-bank-details" class="btn btn-lg btn-success btn-block" type="submit">Add Bank Details</button>                       
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
                  

    </div>
       <input id="legalentity-submit-btn" onclick="addItem()" type="submit" class="btn btn-lg btn-primary pull-right" placeholder="Save" value="Submit">  
</form>  
 
    <!-- <div class="row">
            <div id="business-type"  class="col-lg-12 col-md-1">   
                    
					<a class="btn btn-lg btn-success pull-right" href="dashboard.php">Submit</a>
				</div>
		</div>
        <br> -->

        <!-- Submit Button -->
</div>
<br>
<br>

<?php
    include('navbars_footers/footer.php');
?>