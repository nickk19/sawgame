<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit;
    }

    http_response_code(404);
    include('notfound.php'); // provide your own HTML for the error page
?>
