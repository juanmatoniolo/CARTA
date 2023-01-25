<?php
include ("../conexion/conexion.php");

session_start();
$id = $_GET['id'];


$consulta = "SELECT * FROM registro WHERE id=$id";

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
        
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $correo = $datos['correo'];
        $celular = $datos['celular'];
        ?>
        
        <form action="" method="post" enctype="multipart/form-data">
        <label>Nombre</label>
            <input type="text" name="nombre" placeholder="nombre" value=" <?php echo $nombre ?>" >

        <label>Apellido</label>
            <input type="text" name="apellido" placeholder="Apellido" value=" <?php echo $apellido ?>" >

           
          

            <label>Correo</label>
            <input type="text" name="correo" placeholder="Correo" value=" <?php echo $correo ?>" >
           
            <label>Celular</label>
            <input type="tel" name="celular" placeholder="celular" >

            
            <br>
           
            <br><br><br>
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <input type="button" onclick="history.back()" name="volver atrás" value="Cancelar">


            <!--<button type="submit" name="Cancelar" formaction="./listar.php">Cancelar</button>
-->

        </form>
    
        <?php 
       
       
        if (array_key_exists('guardar_cambios', $_POST)) {
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))

            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $correo = trim($_POST['correo']);
            $celular = trim($_POST['celular']);
        
            $consulta = "UPDATE registro SET  nombre='$nombre', apellido='$apellido', correo='$correo',  celular='$celular'  WHERE id =$id";

            mysqli_query($conexion, $consulta);
            header('location: usuarios.php');
        } ?>
    </body>
</html>