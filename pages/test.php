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
                                    <input class="form-control" id="input-code-individual-offexchange" type="text" placeholder="Offexchange Carrier Code"
                            </div>
                            
                            </div>
                            
                            


                         

                                                


<script>
$(document).ready(function(){
    $("button[id*=onexchange]").hide();

    $("button[id*=business-individual]").click(function(){
        $("button[id*=onexchange]").show();
    });

    $("button[id*=offexchange]").hide();

    $("button[id*=business-individual]").click(function(){
        $("button[id*=offexchange]").show();
    });

    
    $("p[id*=1]").hide();

    $("button[id*=business-individual]").click(function(){
        $("p[id*=1]").show();
    });

    $("p[id*=2]").hide();

    $("button[id*=onexchange]").click(function(){
        $("p[id*=2]").show();
    });

    $("p[id*=3]").hide();

    $("button[id*=offexchange]").click(function(){
        $("p[id*=3]").show();
    });

    $("p[id*=4]").hide();

    $("button[id*=business-group]").click(function(){
        $("p[id*=4]").show();
    });

    $("input[id*=input-code-individual-onexchange]").hide();

    $("button[id*=onexchange]").click(function(){
        $("input[id*=input-code-individual-onexchange]").show();
    });

    $("input[id*=input-code-individual-offexchange]").hide();

    $("button[id*=offexchange]").click(function(){
        $("input[id*=input-code-individual-offexchange]").show();
    });

    $("input[id*=input-code-group]").hide();

    $("button[id*=business-group]").click(function(){
        $("input[id*=input-code-group]").show();
    });

});
</script>
                            
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