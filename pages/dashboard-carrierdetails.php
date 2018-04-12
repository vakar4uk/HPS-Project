<?php 

    include('navbars_footers/top-navbar.php');

?>

<div class="col-lg-12">
    <div id="carierdetails-container" class="container">    
        
            <div class="carrier-details">
                <!-- Header text -->
                <div class="jumbotron">
                    <span class="hide-show-btn"><i id="toggle-notification" class="fas fa-chevron-up fa-2x pull-right"></i></span>
                    <div id="notification-message">
                        <h3>We would need a few details to get you started!</h3>
                        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                    
                </div>
                <!-- Header text -->

                <div class="my-container">
                    <div class="carrier-name">
                        <p>Name of the Carrier</p><span id="icons"><i class="far fa-envelope fa-1x"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                        <hr id="hr">
                        <input id="carriername-input" type="text" class="form-control" placeholder="Enter name here...">
                        
                    </div>
                </div>

                <div class="my-container">
                    <div class="carrier-name">
                        <p>Carrier Logo</p>
                        <label>
                                <input class="btn btn-block btn-sm btn-info" type="file">
                        </label>
                        <span id="icons"><i class="far fa-list-alt"></i><i class="fas fa-ellipsis-v fa-1x"></i></span>
                    </div>
                </div>

                <a href="dashboard-businessdetails.php" class="btn btn-lg btn-primary pull-right">Next</a>

            </div>
        </div>   
</div>

<!-- SHOW/HIDE notification's message -->
<script>
    var toggleNotification = document.getElementsByClassName("hide-show-btn");
var isVisible = true;
for(var i = 0; i < toggleNotification.length; i++) {
    toggleNotification[i].addEventListener("click", function() {
        if(isVisible) {
            $('#notification-message').slideUp('slow');
            document.getElementById('toggle-notification').classList.remove('fa-chevron-up');
            document.getElementById('toggle-notification').classList.add('fa-chevron-down');
            isVisible = false;
        } else {
            $('#notification-message').slideDown('slow');
            document.getElementById('toggle-notification').classList.remove('fa-chevron-down');
            document.getElementById('toggle-notification').classList.add('fa-chevron-up');                
            isVisible = true;
        }
        
    });
}
</script>