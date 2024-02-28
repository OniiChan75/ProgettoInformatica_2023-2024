<?php
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="../assets/styles/registrazione_controller.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="mt-5">
        <h1>
            Registrati
        </h1>
        <p class="lead">
            unisciti alla grande famiglia del miglior sito di e-commerce online di libri, film, musica e videogames
        </p>
    </header>
    <main>
        <form action="../controller/registrazione_controller.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control">

                    <label for="name">name</label>
                    <input type="text" id="name" name="name" class="form-control">

                    <label for="surname">surname</label>
                    <input type="text" id="surname" name="surname" class="form-control">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">

                    <label for="numerocivico">Numero Civico</label>
                    <input type="text" id="numerocivico" name="numerocivico" class="form-control">

                    <br>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </div>
                <div class="col-md-6">
                    <label for="phone">Telefono</label>
                    <input type="text" id="phone" name="phone" class="form-control">

                    <label for="province">Provincia</label>
                    <input type="text" id="province" name="province" class="form-control">

                    <label for="city">Città</label>
                    <input type="text" id="city" name="city" class="form-control">

                    <label for="cap">CAP</label>
                    <input type="text" id="cap" name="cap" class="form-control">

                    <label for="via">Via</label>
                    <input type="text" id="via" name="via" class="form-control">

                </div>
            </div>
        </form>
        <?php if (isset($errorMessage)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php } ?>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

