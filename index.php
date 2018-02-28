


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/bootstrap-3.3.7-dist/css/bootstrap.css">

    <title>Login</title>
</head>
<body>
    
    <div id="content">
        <div><span><img src="images/logo2.png" alt=""></span></div>


        <div class="container-fluid">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="What's your username?">
                </div>

                <div class="form-group">
						<label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="What's your password?">
                </div>
                
                <?php
                    if(!$count) {
                     <p>Incorrect user name or password</p>
                    }
                ?>

                <button type="submit" id="login-btn" value="LOGIN" class="btn btn-lg btn-info">Login</button>
            </form>
        </div>
    </div>

</body>
</html>