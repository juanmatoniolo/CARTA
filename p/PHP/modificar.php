<?php

include ("../conexion/conexion.php");

session_start();
$id = $_GET['id'];


$consulta = "SELECT * FROM bar WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar producto</title>
    </head>
    <body>
       

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos.</p>
        <?php 
        
        $tipo = $datos['tipo'];
        $nombre = $datos['nombre'];
        $descripcion = $datos['descripcion'];
        $precio = $datos['precio'];
        ?>
        
        <form action="" method="post" enctype="multipart/form-data">
        <label>tipo</label>
            <input type="text" name="tipo" placeholder="comida/bebida" value=" <?php echo $tipo ?>" >

           
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="nombre" value=" <?php echo $nombre ?>" >

            <label>Descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion" value=" <?php echo $descripcion ?>" >
           
            <label>Imagen</label>
            <input type="file" name="foto" placeholder="foto" >

            
            <br>
            <label>Precio</label>
            <input type="text" name="precio" placeholder="precio" value=" <?php echo $precio ?> " >
            <br><br><br>
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="./listar.php">Cancelar</button>


        </form>
    
        <?php 
       
       
        if (array_key_exists('guardar_cambios', $_POST)) {
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))

            $tipo = trim($_POST['tipo']);
            $nombre = trim($_POST['nombre']);
            $descripcion = trim($_POST['descripcion']);
            $precio = trim($_POST['precio']);
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            

          
            $consulta = "UPDATE bar SET  tipo='$tipo', nombre='$nombre', descripcion='$descripcion',  precio='$precio', foto='$foto'  WHERE id =$id";

            mysqli_query($conexion, $consulta);
            header('location: listar.php');
        } ?>
    </body>
</html>