<?php
    include('navbars_footers/top-navbar.php');
?>

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
                            <h3>Business Type</h3><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">
                            <br>

                            
                    
                            <div class="row">
                                <div class="container col-md-4">
                                    <button id="business-individual" class="btn btn-md" type="button" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Individual</button>
                                </div>
                            </div>

                               
                                                
                            <div class="row">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="col-md-4">
                                    <p>On or Off Exchange?</p>
                                    <button id="onexchange" class="btn btn-md" type="button" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">On Exchange</button>
                                </div>
                                
                                <div class="col-md-4">
                                    <button id="offexchange" class="btn btn-md" type="button" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Off Exchange</button>
                                </div>
                                                                      
                            </div>
                            </div>

                            

                            <div class="row">   
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="container col-md-4">
                               <br>
                                        <p>Carrier Code for On Exchange</p>
                                                <input id="input-code-individual-onexchange" class="form-group" type="text" placeholder="X7">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                        <p>Carrier Code for Off Exchange</p>
                                                <input id="input-code-individual-offexchange" class="form-group" type="text" placeholder="X7">
                                </div>                                        
                            </div>
                            </div>
                            </div>
                                
                            



                            <div class="row">
                                <div class="container col-md-4">
                                    <button id="business-group" class="btn btn-md" type="button" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4"">Group</button>
                                </div>
                            </div>

                                                
                            <div class="row">
                            <div class="collapse multi-collapse" id="multiCollapseExample4">
                            <div class="container col-md-4">
                            <br>
                                     <p>Carrier Code for Group</p>
                                             <input id="input-code-group" class="form-group" type="text" placeholder="X7">
                                     
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
<?php
    include('navbars_footers/footer.php');
?>