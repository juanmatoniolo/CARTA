<?php
include("../conexion/conexion.php");
session_start();

$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$correo = trim($_POST['correo']);
$celular = trim($_POST['celular']);

//Ver porque no puedo cargar las imagenes 



$consulta = "INSERT INTO registro (id,nombre, apellido ,correo, celular)
          VALUES ('','$nombre', '$apellido', '$correo', '$celular')";


mysqli_query($conexion, $consulta);

header('location: ./usuarios.php');

?>