<?php
    session_start();
    if (isset($_SESSION['loggedin'])) {
        header('Location: home.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <title>Login</title>
    </head>
    <body>
        <div class="login">

            <h1>Login</h1>

            <form action="includes/auth_login.php" method="post" class="form login-form">
                <label class="form-label" for="username">Username</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="username" placeholder="Username" id="username" required>
                </div>

                <label class="form-label" for="password">Password</label>
                <div class="form-group">
                    <input class="form-input" type="password" name="password" placeholder="Password" id="password" required>
                </div>

                <button class="btn blue" type="submit">Login</button>
                <br></br>
                <p class="register-link">Non hai un account? <a href="register.php" class="form-link">Registrati</a></p>
            </form>
        </div>
    </body>
</html>
