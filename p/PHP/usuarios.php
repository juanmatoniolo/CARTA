<?php
include("../conexion/conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <title>LISTAR</title>
</head>

<body>


  <!-- LISTAR LOS ELEMENTOS -->

  <table style="text-align: center" border="3px" class="table">
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>APELIDO</th>
      <th>CORREO</th>
      <th>CELULAR</th>
    </tr>

    <a href="./panel.php">
      <p> INICIO</p>
    </a>
    <a href="../registros/agregarusuario.html">
      <p> Agregar usuario </p>
    </a>

    <?php

    $consulta = "SELECT*FROM registro";

    $datos = mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_array($datos)) {
      ?>
      <tr>
        <td>
          <?php echo $fila['id']; ?>
        </td>
        <td>
          <?php echo $fila['nombre']; ?>
        </td>
        <td>
          <?php echo $fila['apellido']; ?>
        </td>

        <td>
          <?php echo $fila['correo']; ?>
        </td>
        <td>
          <?php echo $fila['celular']; ?>
        </td>

        <!-- EDITAR Y BORRAR -->
        <td><a href="editar_usuario.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
        <td><a href="eliminar_usuario.php?id=<?php echo $fila['id']; ?>">Borrar</a></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>