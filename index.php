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
            <form id="login" action="login.php">
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="What's your username?">
                </div>

                <div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="lg_password" placeholder="What's your password?">
                </div>
                
                <button id="login" type="submit" class="btn btn-lg btn-info">Login</button>
            </form>
        </div>
    </div>

</body>
</html>