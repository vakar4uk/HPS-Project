<?php
    include('navbars&footers/top-navbar.php');
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
                            <p>Business type</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                            <hr id="hr">
                            <br>
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="container col-lg-6 col-md-6">
                                        <button id="business-individual" class="btn btn-lg btn-block btn-info" type="submit">Individual</button>                                    
                                    </div>                                
                                    <div class="container col-lg-6 col-md-6">
                                        <button id="business-group" class="btn btn-lg btn-block btn-info" type="submit">Group</button>
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
    include('navbars&footers/footer.php');
?>