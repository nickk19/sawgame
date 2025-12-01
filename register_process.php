<?php
    $con = mysqli_connect('localhost', 'nico', 'bdpass', 'saw');

    if (mysqli_connect_errno()) {
        exit('Connessione a MySQL fallita: ' . mysqli_connect_error());
    }

    if (!isset($_POST['username'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
        exit('Inserisci tutti i dati richiesti!');
    }
 
    if ($_POST['password'] !== $_POST['confirm_password']) {
        exit('Le password non coincidono!');
    }

    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // 4. Controllo se l'utente esiste già
    if ($stmt = $con->prepare('SELECT username FROM users WHERE username = ?')) {
    	$stmt->bind_param('s', $username);
    	$stmt->execute();
        $stmt->store_result();

	    if ($stmt->num_rows > 0) {
	    	echo 'Un account con questo Username esiste già';
	    } else {
            if ($stmt = $con->prepare('INSERT INTO users (username, name, surname, email, password) VALUES (?, ?, ?, ?, ?)')) {
            	$stmt->bind_param('sssss', $username, $name, $surname, $email, $password);
            	$stmt->execute();
            	
            	echo 'Registrazione completata con successo! Puoi ora fare il <a href="index.php">Login</a>.';
            } else {
            	echo 'Impossibile comunicare con il database durante la registrazione.';
            }
	    }
    	$stmt->close();
    } else {
	    echo 'Impossibile verificare lo username.';
    }

    $con->close();
?>
