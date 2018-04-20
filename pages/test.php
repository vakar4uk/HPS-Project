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
                            <h3>Business Type</h3>
                                <span id="icons">
                                   
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">

                        
                        <li><a href=""><i class="far fa-file-alt" style="color:rgba(60, 222, 204, 0.91);"></i></a></li>
                    
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-ellipsis-v" style="color:rgba(60, 222, 204, 0.91);"></i></a>
                        <ul class="dropdown-menu">

                            <li><a href="#notes"><i id= "notes" class="far fa-file-alt dropdown-item" data-toggle="modal" data-target="#notes"></i>Notes</a></li>
              
                            <li><a href=""><i id= "custom" class="fas fa-sliders-h dropdown-item"></i>Customizations</a></li>
                            <li><a href=""><i id= "todo" class="fas fa-clipboard-check dropdown-item""></i>Add To-Do</a></li>
                        </ul>
                        </li>
                        </ul>

                    </div>  
          
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
                                    <input class="form-control" id="input-code-individual-offexchange" type="text" placeholder="Offexchange Carrier Code"
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
          <h6>Responsibilities</h6>

        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




                            
<script>

$(document).ready(function(){

    /*buttons toggle*/

    $("button[id*=onexchange], button[id*=offexchange], input[id*=input-code-individual-onexchange], input[id*=input-code-individual-offexchange], input[id*=input-code-group]").hide();

    
    $("button[id*=business-individual]").click(function(){
        $("button[id*=onexchange], button[id*=offexchange]").toggle();
    });

    $("button[id*=business-individual]").click(function(){
        $("input[id*=input-code-individual-onexchange], input[id*=input-code-individual-offexchange]").hide();
    });

    $("button[id*=onexchange]").click(function(){
        $("input[id*=input-code-individual-onexchange]").toggle();
    });

    $("button[id*=offexchange]").click(function(){
        $("input[id*=input-code-individual-offexchange]").toggle();
    });
    
    $("button[id*=business-group]").click(function(){
        $("input[id*=input-code-group]").toggle();
    });    


    /*menu font awesome icon*/

    

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