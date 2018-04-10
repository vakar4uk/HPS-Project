<div id="content">
<<<<<<< HEAD
<div class="logo-container"><img src="images/logo2.png" alt=""></div>
<div class="container-fluid">
    <!-- All login logic is in login.php file -->
    <form action='/login-logic.php' method="post" class="form-1">
        <p>
            <label for="username" class="sr-only">Username</label>
            <input class="form-control" type="text"  id="username" required="" 
                placeholder="What's your username?" name="username"
                oninvalid="this.setCustomValidity('Please enter your username.')"
                oninput="setCustomValidity('')"></input>
        </p>
        <p>
            <label for="password" class="sr-only">Password</label>
            <input class="form-control" type="password"  id="password" required="" 
                placeholder="What's your password?" name="password"
                oninvalid="this.setCustomValidity('Please enter your password.')"
                oninput="setCustomValidity('')"></input>
            
            <?php 
=======
    <div class="logo-container"><img src="images/whiteoutline.png" alt=""></div>
    <div class="container-fluid">
        <!-- All login logic is in login-logic.php file -->
        <form action="../login-logic.php" method="POST" class="form-1">
            <p>
                <label for="username" class="sr-only">Username</label>
                <input class="form-control" type="text"  id="username" required="" 
                    placeholder="What's your username?" name="username"
                    oninvalid="this.setCustomValidity('Please enter your username.')"
                    oninput="setCustomValidity('')"></input>
            </p>
            <p>
                <label for="password" class="sr-only">Password</label>
                <input class="form-control" type="password"  id="password" required="" 
                    placeholder="What's your password?" name="password"
                    oninvalid="this.setCustomValidity('Please enter your password.')"
                    oninput="setCustomValidity('')"></input>
>>>>>>> master
                
<<<<<<< HEAD
                if (isset($_GET['error'])) {
                    echo "<div id='alert-message' class='alert alert-danger'>Invalid password/username. Please try again!</div>";
                }
            ?>
            
        </p>
        <p class="submit">
            <button id="submit-button" type="submit" name="submit" value="submit"><i class="fa fa-arrow-right"></i></button>
        </p>
    </form>
=======
                <?php 
                    
                    if (isset($_GET['error'])) {
                        echo "<div id='alert-message' class='alert alert-danger'>Invalid password/username. Please try again!</div>";
                    }

                ?>
                
            </p>
            <p class="submit">
                <button id="submit-button" type="submit" name="submit" value="submit"><i class="fa fa-arrow-right fa-2x"></i></button>
            </p>
        </form>
    </div>
>>>>>>> Dmytro
</div>
</div>