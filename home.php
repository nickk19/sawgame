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
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header class="header">
            <div class="wrapper">
                <h1>SAWGame Home</h1>

                <nav class="menu">
                    <a href="home.php">Home</a>
                    <a href="profile.php">Profilo</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
 
        <div class="content">
            <div class="page-title">
                <div class="wrap">
                    <h2>Bentornato, <?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?>!</h2>
                </div>
            </div>

            <div class="block">
                <p>Se sei in questa pagina, il login ha avuto successo!</p>
            </div>
        </div>
    </body>
</html>
