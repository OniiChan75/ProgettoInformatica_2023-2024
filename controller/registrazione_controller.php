<?php

include 'connessione_database.php';

// Recupera i dati inviati dal form
$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$province = $_POST['province'];
$city = $_POST['city'];
$cap = $_POST['cap'];
$via = $_POST['via'];
$numeroCivico = $_POST['numerocivico'];

$sql = "INSERT INTO ecommerce.users (UserID, Nome, Cognome, Password, Email, Telefono, Provincia, Città, CAP, Via, NumeroCivico) 
    VALUES ('$username', '$name', '$surname', '$password', '$email', '$phone', '$province', '$city','$cap', '$via', '$numeroCivico')";

if ($result = $connessione->query($sql)) {
    header('Location: ../pages/negozio.php');
} else {
    $errorMessage = "Errore: c'è stato un problema nella registrazione.";
    header('Location: ../index.php?error=$errorMessage');
}

// Chiudi la connessione al database
$connessione->close();
?>