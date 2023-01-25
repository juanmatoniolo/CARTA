<?php
include ("../conexion/conexion.php");

session_start();
$id = $_GET['id'];

$consulta = "SELECT * FROM bar WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar foto del producto</title>
    </head>
    <body>
        <?php
        $foto = $datos['foto'];

        ?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos.</p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label>Imagen</label>
            <input type="file" name="foto" placeholder="foto">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>


        </form>
        <?php 
        if (array_key_exists('guardar_cambios', $_POST)) {   
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            $consulta = "UPDATE bar SET foto='$foto' WHERE id =$id";
            mysqli_query($conexion, $consulta);
            header('location: listar.php');
        } ?>
    </body>
</html>