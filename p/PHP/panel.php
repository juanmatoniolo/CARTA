<?php
include("../conexion/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="../pestanias/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
  </header>
  <h1>Panel de control</h1>

  <nav>
    <a href="./cerrar.php">Cerrar sesion</a>
    <br><br>
  </nav>

  <button>
    <a href="../pestanias/comidas.php">COMIDAS</a>
  </button>
  <button>
    <a href="../pestanias/bebidas.php">BEBIDAS</a>
  </button>
  <button>
    <a href="../pestanias/mostrarCarrito.php">CARRITO</a>
  </button>

  <br /><br />
  <button>
    <a href="./listar.php">LISTAR</a>
  </button>
  <button>
    <a href="../pestanias/agregar.html">AGREGAR</a>
  </button>
  <hr><br>
  <button>
    <a href="./usuarios.php">LISTA DE USUARIOS</a>
  </button><br>
  <hr>

  <form action="./panel.php" method="get">
    <input type="text" name="bus">
    <input type="submit" name="enviar" value="buscar">

    <?php
  
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['bus'];

      $consulta = ("SELECT * FROM bar WHERE nombre LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' ");

      $datos = mysqli_query($conexion, $consulta);

      while ($fila = mysqli_fetch_array($datos)) {
        ?>
        <div class="container-fluid principal">
            <table>
                <tr class="producto">
                    <td rowspan="3" class="img col-sm">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($fila['foto']) ?>" alt="" width="150"
                            height="175">
                    </td>
                    <td colspan="3" class="textos col-sm">
                        <h1>
                            <?php echo $fila['nombre']; ?>
                        </h1>
                        <p>
                            <?php echo $fila['descripcion']; ?>
                        </p>
                        <h4>$
                            <?php echo $fila['precio']; ?>
                        </h4>
                    </td>
                </tr>
            </table>
            <hr>
        </div>
    <?php }

    } 
    ?>


  </form>


</body>

</html>