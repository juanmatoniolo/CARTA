<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">

    <title>prueba de cars</title>
</head>

<body>

    <nav class="navbar container-fluid navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">BAR</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../pestanias/mostrarCarrito.php">Carrito <?php echo (empty($_SESSION['CARRITO'])) ? 0 : count(($_SESSION['CARRITO']));?> <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>


    <a href="../PHP/panel.php">HOME</a>

   

