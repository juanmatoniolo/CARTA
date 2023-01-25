<?php
include("../conexion/conexion.php");

$tipo = trim($_POST['tipo']);
$nombre = trim($_POST['nombre']);
$descripcion = trim($_POST['descripcion']);
$precio = trim($_POST['precio']);
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));



$consulta = "INSERT INTO bar (id,tipo, nombre,descripcion,precio, foto)
          VALUES ('','$tipo', '$nombre','$descripcion', '$precio', '$foto')";


mysqli_query($conexion, $consulta);

header('location: ../pestanias/agregar.html');

?>