<div id="content">
    <div class="logo-container"><img src="images/logo2.png" alt=""></div>
    <div class="container-fluid">
        <!-- All login logic is in login.php file -->
        <form action='/login-logic.php' method="post" class="form-1">
            <p>
                <label for="username" class="sr-only">Username</label>
                <input type="text" class="form-control" id="username" 
                    name="username" placeholder="What's your username?" required />
            </p>
            <p>
                <label for="password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="password" 
                    name="password" placeholder="What's your password?" required/>
                
                <?php 
                    
                    if (isset($_GET['error'])) {
                        echo "<div id='alert-message' class='alert alert-danger'>Invalid password/username. Please try again!</div>";
                    }

                ?>
                
            </p>
            <p class="submit">
                <button id="submit-button" type="submit" name="submit" value="submit"><i class="fa fa-arrow-right"></i></button>
            </p>
        </form>
    </div>
</div>

