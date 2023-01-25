<?php

include ("../conexion/conexion.php");
session_start();

 $id = $_GET['id'];

$consulta = "DELETE FROM `bar` WHERE `id`=$id";


  mysqli_query($conexion,$consulta);

  header('location: listar.php');

  ?>