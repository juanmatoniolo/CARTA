<?php
include("../conexion/conexion.php");
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
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">

  <title>LISTAR</title>
</head>

<body>


  <!-- LISTAR LOS ELEMENTOS -->
  <div class="container-fluid">

    <table style="text-align: center" border="3px" class="table container">
      <tr class="container-sm">
        <th>ID</th>
        <th>TIPO</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
        <th>FOTO</th>
      </tr>

      <a href="./panel.php">
        <p> INICIO</p>
      </a>
      <a href="../pestanias/agregar.html">
        <p> Agregar productos </p>
      </a>

      <?php
      $consulta = "SELECT*FROM bar";

      $datos = mysqli_query($conexion, $consulta);
      while ($fila = mysqli_fetch_array($datos)) {
        ?>
        <tr>
          <td>
            <?php echo $fila['id']; ?>
          </td>
          <td>
            <?php echo $fila['tipo']; ?>
          </td>
          <td>
            <?php echo $fila['nombre']; ?>
          </td>
          <td>
            <?php echo $fila['descripcion']; ?>
          </td>
          <td>
            <?php echo $fila['precio']; ?>
          </td>
          <td><img src="data:image/jpg;base64, <?php echo base64_encode($fila['foto']) ?>" alt="" width="100px"
              height="100px"></td>

          <!-- EDITAR Y BORRAR -->
          <td><a href="modificar.php?id=<?php echo $fila['id']; ?>">Editar</a></td>
          <td><a href="borrar.php?id=<?php echo $fila['id']; ?>">Borrar</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>

</html>