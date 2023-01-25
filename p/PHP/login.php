<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>login</title>
    

</head>

<body>
    <?php
    $user = trim($_POST['nombre']);
    $pass = trim($_POST['contrasenia']);
    session_start();
    $_SESSION["usuario"]= $user;

   // $consulta = "SELECT * FROM 'usuario' = $_SESSION["usuario"]  ";

    $chekuserroot = "juanma";
    $checkpassroot = "asdf";

    if ($user == $chekuserroot && $pass == $checkpassroot) {
    
        header("location: ../php/panel.php");
    } else { 
       header( "location: ./login.php") ;
        printf( "Usuario o contraseña incorrctos, intente nuevamente");
    }
    ?>
   
</body>

</html>