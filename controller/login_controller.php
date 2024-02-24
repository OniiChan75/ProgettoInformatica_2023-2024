<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$mysqli = new mysqli('localhost', 'username', 'password', 'nome_database');
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
} else {
    echo 'Connesso. ' . $mysqli->host_info . "\n";
}

// Recupera i dati inviati dal form
$username = $_POST['username'];
$password = $_POST['password'];

// Dichiara la query
$sql = "SELECT * FROM users WHERE UserID='$username' AND Password='$password'";

// Esegui la query
$result = $mysqli->query($sql);

// Controlla se l'utente è presente nel database
if ($result->num_rows === 1) {
    // L'utente è stato trovato
    // Reindirizza l'utente alla pagina negozio
    header("Location: ../pages/negozio.php");
} else {
    // L'utente non è stato trovato
    // Imposta un messaggio di errore
    $errorMessage = "Errore: username o password errati.";
    // Reindirizza l'utente alla pagina index con il messaggio di errore
    header("Location: ../index.php?error=$errorMessage");
}

// Chiudi la connessione al database
$mysqli->close();

?>