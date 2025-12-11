<?php
    session_start();

    require 'config.php';

    if (!isset($_POST['username'], $_POST['password'])) {
        exit('Inserisci sia Username che Password!');
    }

    // Prepare our SQL, which will prevent SQL injection
    if ($stmt = $con->prepare('SELECT username, name, surname, email, password, registration FROM users WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($username, $name, $surname, $email, $password, $registration);
            $stmt->fetch();
            if (password_verify($_POST['password'], $password)) {
                // Regenerate the session ID to prevent session fixation attacks
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $name;
                $_SESSION['surname'] = $surname;
                $_SESSION['email'] = $email;
                $_SESSION['registration'] = $registration;
                header('Location: ../home.php');
            } else {
                echo 'Username e/o Password incorretti.';
            }
        } else {
            echo 'Username e/o password incorretti';
        }

        $stmt->close();
    }
?>
