<?php

// Recupera il messaggio di errore dall'URL
$errorMessage = $_GET['error'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="mt-5">
        <h1>
            Progetto Informatica (2023-2024)
        </h1>
        <p class="lead">
            E-commerce online di libri, film, musica e videogames
        </p>
    </header>
    <main>
        <form action="controller/login_controller.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il tuo UserName">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Inserisci la tua password">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
        <?php if (isset($errorMessage)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php } ?>
        <br><br>
        <a href="pages/registrati.php" class="btn btn-primary">Registrati</a>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
