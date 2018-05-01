<?php 
    include('navbars_footers/header.php');
    include('navbars_footers/top-navbar.php');
?>


<div id="carierdetails-container" class="container">    
        <div class="carrier-details">
            <!-- Header text -->             
            <div class="header-notification">
                <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>               
                <div id="toggle-notification" class="jumbotron">                                
                    <h3>We would need a few details to get you started!</h3>
                    <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua.
                    </p>
                </div>                   
            </div>
   
                <form id="entity-address" action="">
                    <div class="my-container">
                        <div class="carrier-name">
                            <p>Business Type</p>
                                <span id="icons">
                                   
                    




                            <ul class="nav navbar-nav navbar-right">
                                <li><a href=""><i class="far fa-file-alt" style="color:rgba(60, 222, 204, 0.91);"></i></a>
                                </li>
                               
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="color:rgba(60, 222, 204, 0.91);"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#notes"><i class="far fa-file-alt" style="color:rgba(60, 222, 204, 0.91); margin-right: 13px;"></i>Notes</a></li>
                                        <li><a href=""><i class= "fas fa-sliders-h" style="color:rgba(60, 222, 204, 0.91); margin-right: 8px;"></i>Customizations</a></li>
                                        <li><a href=""><i class="fas fa-clipboard-check" style="color:rgba(60, 222, 204, 0.91); margin-right: 13px;"></i>Add To-Do</a></li>
                                    </ul>
                                    </li>
                            </ul>




          
                            </span>
                            <hr id="hr">
                            <br>
                            
                            <div class="form-group row">
                            <div class="col-sm-2 col-md-2">
                                    <button id="individual-onexchange" class="btn btn-lg" type="button" onclick="GetValue();">Individual Onexchange</button>
                            </div>  
                            <div class="col-sm-2 col-md-2">  
                                    <p id="onexchange-code" ></p> 
                            </div>
                            <div class="col-sm-2 col-md-2">
                                    <button id="individual-offexchange" class="btn btn-lg" type="button" onclick="GetValue1();">Individual Offexchange</button>
                            </div>   
                            <div class="col-sm-2 col-md-2" id="test1">  
                                    <p id="offexchange-code" ></p> 
                            </div> 
                            <div class="col-sm-2 col-md-2">        
                                    <button id="group" class="btn btn-lg" type="button" onclick="GetValue2();">Group</button>
                            </div>
                            <div class="col-sm-2 col-md-2">  
                                    <p id="group-code" ></p> 
                            </div>

                            <div class="col-sm-2 col-md-2">
                            <button id="clear-carriercode" class="btn btn-lg btn-danger">Clear All</button>
                            </div>
                            </div>
                                    


                       
                          
                            <div class="modal" id="notes">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Notes</h4>
                                  </div>
                                  <div class="container"></div>
                                  <div class="modal-body">
                                    <input class="form-control form-control-lg no-border" id="title" type="text" placeholder="Title goes here...">
                                    <br>
                                    <textarea class="form-control" id="textarea" rows="10" placeholder="Text goes here..."></textarea>   
                                    <a id= "CancelNoteBtn" class="btn btn-primary">Cancel</a>
                                    <a id= "AddNoteBtn" class="btn btn-primary">+ Add Note</a>
                                    <br><br><br>
                                  </div>
                                  <div class="modal-footer">
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                            
                           



                    </div>
                </div>
            </div>
            <a id="save-next-btn"  href="dashboard-states.php" class="btn btn-lg btn-primary pull-right">Next</a>
        </div>        
    </div>    
<?php
    include('navbars_footers/footer.php');
?>
