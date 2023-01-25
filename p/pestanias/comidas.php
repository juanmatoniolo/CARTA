<?php
include("../conexion/conexion.php");
include("../conexion/config.php");
include("./carrito.php");
include("../templates/cabecera.php");
include("../templates/buscador.php");

    ?>


<?php
$consulta = "SELECT*FROM bar WHERE tipo = 'comida' ";
$datos = mysqli_query($conexion, $consulta);
?>
<div class="container-fluid principal">
    <?php
    while ($fila = mysqli_fetch_array($datos)) {
        ?>
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
    </div>

    <form action="../pestanias/carrito.php" method="post">

        <input type="hidden" name="id" value="<?php echo openssl_encrypt($fila['id'], COD, KEY); ?>">
        <input type="hidden" name="nombre" value="<?php echo openssl_encrypt($fila['nombre'], COD, KEY); ?>">
        <input type="hidden" name="precio" value="<?php echo openssl_encrypt($fila['precio'], COD, KEY); ?>">
        <input type="hidden" name="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
        </button>
    </form>
    <br>
    <hr>


<?php } ?>




</body>

</html>