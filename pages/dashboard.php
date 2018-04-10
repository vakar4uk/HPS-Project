<?php 

    session_start();

    include('navbars_footers/top-navbar.php');
    // include('navbars&footers/second-top-navbar.php');

?>
    <div class="row">
        <?php    

            if($_SESSION['loggedIn'] === 1){
                //allow              
                
                // include('navbars/left-navbar.php');
                // include('dashboard-content.php');           
                include('dashboard-carrierdetails.php');           
            }
            
                else {
                    //redirect to the login page
                    echo "You need to log in!";
                    header('Location: ../../index.php');
                    session_destroy();
                }
            

            
            // include('navbars/second-top-navbar.php');      
            
        ?>

    </div>
    

<?php

    include('navbars_footers/footer.php');

?>