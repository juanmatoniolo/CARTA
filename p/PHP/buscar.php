<?php
include("../conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="../PHP/buscar.php" method="get">
        <input type="text" name="Buscar"><br>
        <input type="submit" name="enviar" value="buscar">


        <br><br><br>

        <?php

        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['bus'];

            $consulta = ("SELECT * FROM bar WHERE nombre LIKE '%$busqueda%' ");

            $datos = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_array($datos)) {
                ?>
                <div class="contenedor container-fluid">
                    <div class="row">
                        <div class="nombre col-sm-8">
                            <h1>
                                <?php echo $fila['nombre']; ?>
                            </h1>
                            <h4>
                                <?php echo $fila['descripcion']; ?>
                            </h4>
                        </div>
                        <div class="precio col-sm-4">
                            <span>
                                <h3>$
                                    <?php echo $fila['precio']; ?>
                                </h3>
                            </span>
                        </div>
                    </div>
                </div>
                <hr>
            <?php }

        } else {
            echo "ERROR" . mysqli_error($conexion);
        }
        ?>


    </form>

</body>

</html>