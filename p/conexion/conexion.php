<?php
/* $user = "root";
$pass = "";
$server = "localhost";
$db= "probando";
$conexion = mysqli_connect("127.0.0.1", $user, $pass, $db) or die ("Eroor al conectar");
*/


$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;
try {
    $pdo = new PDO(
        $servidor,
        USUARIO,
        PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    echo "<script> alert('Conectado..')</script>";
} catch(PDOException $e)
{     print_r($e); }


?>