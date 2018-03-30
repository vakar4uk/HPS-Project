<?php 

    session_start();

    include('navbars&footers/top-navbar.php');
    // include('navbars&footers/second-top-navbar.php');

?>
    <div class="row">
        <?php    

            if($_SESSION['loggedIn'] === 1){
                //allow              
                
                // include('navbars/left-navbar.php');
                // include('dashboard-content.php');           
                include('dashboard-carrierdetails.html');           
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

    include('navbars&footers/footer.php');

?>