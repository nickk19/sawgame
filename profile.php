<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Home</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header class="header">
            <div class="wrapper">
                <h1>SAWGame Home</h1>

                <nav class="menu">
                    <a href="home.php">Home</a>
                    <a href="game.php">Gioca</a> 
                    <a href="profile.php">Profilo</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>

        <div class="content">
            <div class="page-title">
                <div class="wrap">
                    <h2>Informazioni sul profilo</h2>
                </div>
            </div>

            <div class="block">
                <div class="profile-detail">
                    <strong>Username: </strong>
                    <?=htmlspecialchars($_SESSION['username'])?>
                </div>

                <div class="profile-detail">
                    <strong>Nome e Cognome: </strong>
                    <?=htmlspecialchars($_SESSION['name'])?>
                    <?=htmlspecialchars($_SESSION['surname'])?>
                </div>

                <div class="profile-detail">
                    <strong>Email: </strong>
                    <?=htmlspecialchars($_SESSION['email'])?>
                </div>

                <div class="profile-detail">
                    <strong>Registered: </strong>
                    <?=htmlspecialchars($_SESSION['registration'])?>
                </div>
            </div>
        </div>
    </body>
</html>
