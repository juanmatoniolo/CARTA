<?php
include ("../conexion/conexion.php");

session_start();
 $id = $_GET['id'];

$consulta = "DELETE FROM `registro` WHERE `id`=$id";


  mysqli_query($conexion,$consulta);

  header('location: usuarios.php');

  ?>