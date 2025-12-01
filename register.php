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
        <link href="style.css" rel="stylesheet" type="text/css">
        <title>Login</title>
    </head>
    <body>
        <div class="login">

            <h1>Registrazione</h1>

            <form action="register_process.php" method="post" class="form login-form">

                <label class="form-label" for="username">Username</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="username" placeholder="Username" id="username" required>
                </div>

                <label class="form-label" for="username">Nome</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="name" placeholder="Nome" id="name" required>
                </div>

                <label class="form-label" for="username">Cognome</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="surname" placeholder="Cognome" id="surname" required>
                </div>

                <label class="form-label" for="username">Email</label>
                <div class="form-group">
                    <input class="form-input" type="text" name="email" placeholder="Email" id="email" required>
                </div>

                <label class="form-label" for="password">Password</label>
                <div class="form-group">
                    <input class="form-input" type="password" name="password" placeholder="Password" id="password" required>
                </div>

                <label class="form-label" for="confirm_password">Conferma password</label>
                <div class="form-group">
                    <input class="form-input" type="password" name="confirm_password" placeholder="Conferma Password" id="confirm_password" required>
                </div>

                <button class="btn blue" type="submit">Registrazione</button>
            </form>
        </div>
    </body>
</html>
