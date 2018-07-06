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
                            <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;

                    }

                    td,
                    th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 12px;
                        color: #7272C8;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                    }
                </style>
                <table class="legal-entities-table">
                    <tr>
                        <th>Business Type</th>
                        <th>Line of Business</th>
                        <th>State</th>
                        <th>Legal Entities</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td class="BT">Individual On Exchange</td>
                        <td class="LOB">Dental</td>
                        <td><span>TX,</span> <span>CA,</span> <span>WA,</span> <span>AL,</span> <span class="last">FL</span></td>
                        <td><select>
                                <option value='Legal Entity 1'>Legal Entity 1</option>
                                <option value='Legal Entity 2'>Legal Entity 2</option>
                                <option value='Legal Entity 3'>Legal Entity 3</option>
                            </select>
                        </td>
                        <td>
                            <div class="btn-toolbar">
                                    <button type="button" class="add btn btn-sm btn-success col-lg-5" data-toggle="modal" data-target=".add-modal">Add</button>
                                    <button type="button" class="split btn btn-sm btn-danger col-lg-5 pull-right">Split</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="BT">Group</td>
                        <td class="LOB">Health</td>
                        <td><span>CA,</span> <span>NY,</span> <span>FL,</span> <span>ND,</span> <span class="last">NC</span></td>
                        <td><select id="rec_mode1">        
                            </select></td>
                        <td>
                            <div class="btn-toolbar">
                                    <button type="button" class="add btn btn-sm btn-success col-lg-5" data-toggle="modal" data-target=".add-modal">Add</button>
                                    <button type="button" class="split btn btn-sm btn-danger col-lg-5 pull-right">Split</button>                                    
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="BT">Group</td>
                        <td class="LOB">Vision</td>
                        <td><span>CO,</span> <span>SD,</span> <span>WY,</span> <span>WA,</span> <span class="last">IL</span></td>
                        <td><select id="rec_mode3">        
                            </select></td>
                        <td>
                            <div class="btn-toolbar">
                                    <button type="button" class="add btn btn-sm btn-success col-lg-5" data-toggle="modal" data-target=".add-modal">Add</button>
                                    <button type="button" class="split btn btn-sm btn-danger col-lg-5 pull-right">Split</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="BT">Indivdual Off Exchange</td>
                        <td class="LOB">Pediatric Dental</td>
                        <td><span>NY,</span> <span>FL,</span> <span>MA,</span> <span>VA,</span> <span class="last">RI</span></td>
                        <td><select id="rec_mode4">        
                            </select></td>
                        <td>
                            <div class="btn-toolbar">
                                    <button type="button" class="add btn btn-sm btn-success col-lg-5" data-toggle="modal" data-target=".add-modal">Add</button>
                                    <button type="button" class="split btn btn-sm btn-danger col-lg-5 pull-right">Split</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="BT">Individual On Exchange</td>
                        <td class="LOB">Short Term Life</td>
                        <td><span>WA,</span> <span>OR,</span> <span>CA,</span> <span>ID,</span> <span class="last">NV</span></td>
                        <td><select id="rec_mode5">        
                            </select></td>
                        <td>
                            <div class="btn-toolbar">
                                <button type="button" class="add btn btn-sm btn-success col-lg-5" data-toggle="modal" data-target=".add-modal">Add</button>
                                <button type="button" class="split btn btn-sm btn-danger col-lg-5 pull-right">Split</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="BT">Individual Off Exchange</td>
                        <td class="LOB">Health</td>
                        <td><span>MA,</span> <span>TX,</span> <span>NM,</span> <span>AZ,</span> <span class="last">CO</span></td>
                        <td><select id="rec_mode6">
                            </select></td>
                        <td>
                            <div class="btn-toolbar">
                                    <button type="button" class="add btn btn-sm btn-success col-lg-5" data-toggle="modal" data-target=".add-modal">Add</button>
                                    <button type="button" class="split btn btn-sm btn-danger col-lg-5 pull-right">Split</button>
                            </div>
                        </td>
                    </tr>
                </table>

                <!-- Code for Add Modal -->

                <div class="modal fade add-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                                <div class="modal-header">
                                        <h3 class="modal-title">Add
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </h3>
                                </div>
                                <div class="modal-body">
                                        <h1>Stuff Goes here</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                    </button>
                                </div>
                          </div>
                        </div>
                </div>


                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];

                    var selectBox = document.getElementById('rec_mode');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>


                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];

                    var selectBox = document.getElementById('rec_mode1');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>


                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];

                    var selectBox = document.getElementById('rec_mode2');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>

                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];
                    var selectBox = document.getElementById('rec_mode3');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>




                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];
                    var selectBox = document.getElementById('rec_mode4');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>


                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];

                    var selectBox = document.getElementById('rec_mode5');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>

                <script>
                    var options = [{
                            "text": "Legal Entity 1",
                            "value": "Value 1"
                        },
                        {
                            "text": "Legal Entity 2",
                            "value": "Value 2",
                            "selected": true
                        },
                        {
                            "text": "Legal Entity 3",
                            "value": "Value 3"
                        }
                    ];
                    var selectBox = document.getElementById('rec_mode6');

                    for (var i = 0, l = options.length; i < l; i++) {
                        var option = options[i];
                        selectBox.options.add(new Option(option.text, option.value, option.selected));
                    }
                </script>

                <br>
                <br>



                <table>
                    <tr>
                        <th>Legal Entities</th>
                        <th>Address</th>

                    </tr>
                    <tr>
                        <td>Legal Entity 1</td>
                        <td>3421 Forrest Lane, Fayetteville, Arkansas, 72701</td>

                    </tr>
                    <tr>
                        <td>Legal Entity 2</td>
                        <td>3309 Sedona Lane, Plano, Texas, 75075</td>


                    </tr>
                    <tr>
                        <td>Legal Entity 2</td>
                        <td>4523 Chariot Drive, Seattle, Washington, 98101</td>


                    </tr>
                </table>

                <!--  
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
        <button onclick="removeItem()">Remove Legal Entity</button> 

    </div> -->





                <script>
                    function addItem() {
                        var ul = document.getElementById("dynamic-list");
                        var candidate = document.getElementById("carriername");
                        var li = document.createElement("li");
                        li.setAttribute('id', candidate.value);
                        li.appendChild(document.createTextNode(candidate.value));
                        ul.appendChild(li);
                    }

                    function removeItem() {
                        var ul = document.getElementById("dynamic-list");
                        var candidate = document.getElementById("candidate");
                        var item = document.getElementById(candidate.value);
                        ul.removeChild(item);
                    }
                </script>

                <style>
                    .toggle-content {
                        display: none;

                    }

                    .toggle-content.is-visible {
                        display: block;

                    }
                </style>


                <script>
                    // Show an element
                    var show = function (elem) {
                        elem.classList.add('is-visible');
                    };

                    // Hide an element
                    var hide = function (elem) {
                        elem.classList.remove('is-visible');
                    };

                    // Toggle element visibility
                    var toggle = function (elem) {
                        elem.classList.toggle('is-visible');
                    };

                    // Listen for click events
                    document.addEventListener('click', function (event) {

                        // Make sure clicked element is our toggle
                        if (!event.target.classList.contains('toggle')) return;

                        // Prevent default link behavior
                        event.preventDefault();

                        // Get the content
                        var content = document.querySelector(event.target.hash);
                        if (!content) return;

                        // Toggle the content
                        toggle(content);

                    }, false);
                </script>

                <br>
                <br>
                <!-- Header text -->
                <button class="btn btn-lg btn-primary" class="toggle"><a class="toggle" href="#example" style="color: #ffffff">Add Legal Entity</a></button>

                <br>
                <br>

                <div class='toggle-content' id="example">
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
                                                <select class="selectpicker form-group required" name="address-type" data-style="btn-default" data-width=290px>                                        
                                            <option value="">Select address type...</option>
                                            <option value="business-address">Business</option>
                                            <option value="home-address">Home</option>
                                        </select>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="addressLine1" name="addressLine1" placeholder="Address Line 1 *" data-width=385px
                                                        required>
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
                            (function () {

                                var input = $('.address-container');
                                $('#add-bank-address').on('click', function (e) {
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
                                                <input type="text" name="additional-batch-info" class="form-control" id="additionalBatchInfo" placeholder="Additional Batch Info *"
                                                    required>
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
                                                <input class="textbox-n form-control" name="security-expiration-date" type="text" onfocus="(this.type='date')" id="date"
                                                    placeholder="Security Exp Date *" required>
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
                        <!-- </div>  --><br>

                        <script>
                            (function () {

                                var input = $('.bank-details');
                                $('#add-bank-details').on('click', function (e) {
                                    $(this).before(input.clone());
                                    e.preventDefault();
                                });
                            })();
                        </script>



                        <input id="legalentity-submit-btn" onclick="addItem()" type="submit" class="btn btn-lg btn-primary pull-right" placeholder="Save"
                            value="Submit">
                    </form>

                </div>


                <!-- <div class="row">
            <div id="business-type"  class="col-lg-12 col-md-1">   
                    
					<a class="btn btn-lg btn-success pull-right" href="dashboard.php">Submit</a>
				</div>
		</div>
        <br> -->

                <!-- Submit Button -->

                <br>
                <br>

                <?php
    include('navbars_footers/footer.php');
?>