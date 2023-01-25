<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mensaje = "";

    if (isset($_POST['btnAccion'])) {
        switch ($_POST['btnAccion']) {
            case 'Agregar':
                if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                    $id = openssl_decrypt($_POST['id'], COD, KEY);
                    $mensaje = "Ok ID correcto".$id;
                } else {
                    $mensaje = "Ups.. ID incorrecto".$id;
                }
                break;

                if (is_numeric(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                    $id = openssl_decrypt($_POST['nombre'], COD, KEY);
                    $mensaje = "Ok ID correcto".$id;
                } else {
                    $mensaje.= "Ups.. ID incorrecto".$id;
                }
                break;

                if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                    $id = openssl_decrypt($_POST['precio'], COD, KEY);
                  $mensaje.= "Ok ID correcto".$id;
                } else {
                    $mensaje.= "Ups.. ID incorrecto".$id;
                }
                break;

                if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                    $id = openssl_decrypt($_POST['cantidad'], COD, KEY);
                    $mensaje.= "Ok ID correcto".$id;
                } else {
                    $mensaje.= "Ups.. ID incorrecto".$id;
                }
                break;

                if(!isset($_SESSION['CARRITO'])){
                    $producto = array(
                        'id' => $id,
                        'nombre'=> $nombre,
                        'precio'=> $precio,
                        'cantidad'=>$cantidad

                    );
                    $_SESSION['CARRITO'][0] = $producto;
                }else{
                    $numeroProductos = count($_SESSION['CARRITO']);
                    $producto = array(
                        'id' => $id,
                        'nombre'=> $nombre,
                        'precio'=> $precio,
                        'cantidad'=>$cantidad);
                        $_SESSION['CARRITO'][0] = $producto;

                }
                break;
        }
    }
    ?>

</body>

</html>