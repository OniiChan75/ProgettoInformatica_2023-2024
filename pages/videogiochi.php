<?php
?><!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header>
    <h1>MelesCommerce</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <!-- <a class="nav-item nav-link     " href="negozio.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link     " href="negozio.php">Home</a>
                <a class="navbar-brand" href="videogiochi.php">Videogiochi</a>
                <a class="nav-item nav-link" href="musica.php">Musica</a>
                <a class="nav-item nav-link " href="film.php">Film</a>
                <a class="nav-item nav-link " href="libri.php">Libri</a>
            </div>
        </div>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
        </form>
    </nav>
</header>
<main>
    <section id="prodotti">
        <h2>Videogiochi</h2>
        <ul>
            <li>
                <img src="immagini/videogioco1.jpg" alt="Videogioco 1">
                <h3>Titolo Videogioco 1</h3>
                <p>Descrizione Videogioco 1</p>
                <a href="#">Acquista</a>
            </li>
            <li>
                <img src="immagini/videogioco2.jpg" alt="sssss 2">
                <h3>Titolo Videogioco 2</h3>
                <p>Descrizione Videogioco 2</p>
                <a href="#">Acquista</a>
            </li>
        </ul>
    </section>


</main>
<footer>
    <p>Amo i pelati e leccare le loro teste liscie</p>
</footer>
</body>
</html>
