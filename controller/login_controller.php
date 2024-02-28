<?php

include 'connessione_database.php';

// Recupera i dati inviati dal form
$username = $_POST['username'];
$password = $_POST['password'];

// Dichiara la query
$sql = "SELECT * FROM users WHERE UserID='$username' AND Password='$password'";

// Esegui la query
$result = $connessione->query($sql);

// Controlla se l'utente è presente nel database
if ($result->num_rows === 1) {
    header('Location: ../pages/negozio.php');
} else {
    $errorMessage = "Errore: username o password errati.";
    header('Location: ../index.php?error=$errorMessage');
}

// Chiudi la connessione al database
$connessione->close();
?>