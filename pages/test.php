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
                            <div class="col-md-6">
                                    <button id="business-individual" class="btn btn-md" type="button">Individual</button>
                            </div>     
                            <div class="col-md-6">        
                                    <button id="business-group" class="btn btn-md" type="button">Group</button>
                            </div>
                            </div>
                          
                               
                                                
                            <div class="form-group row">
                            <div class="col-md-3">
                                    <button id="onexchange" class="btn btn-md" type="button">On Exchange</button>
                            </div>  
                            <div class="col-md-3"> 
                                   <button id="offexchange" class="btn btn-md" type="button">Off Exchange</button>                                   
                            </div>
                            <div class="col-md-3">
                                    <input class="form-control" id="input-code-group" type="text" placeholder="Group Carrier Code">
                            </div>
                            </div>
                         
                        

                            <div class="form-group row">
                            <div class="col-md-3">
                                    <input class="form-control" id="input-code-individual-onexchange" type="text" placeholder="Onexchange Carrier Code">
                            </div>
                            <div class="col-md-3">
                                    <input class="form-control" id="input-code-individual-offexchange" type="text" placeholder="Offexchange Carrier Code">
                            </div>
                            </div>


                            <div class="modal" id="notes">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"></h5>
                                            <button class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                <div class="modal-body">
                                    <div class="list-group">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6>NOTES</h6>
                                            dhkjskjhfksjhfksj

                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
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
