<?php

require "../modelo/conexion.php";

$db          = new conectar();
$conexion_db = $db->conexion();

if (isset($_POST['submit'])) {
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);
    $contra    = 0;
    $id_contra = 0;
    /*-----------------------------------------------------------------------------------*/
    if ($password == $cpassword) {
        $contra = $cpassword;

        $sql       = ' INSERT INTO passwords (PAS_PASSWORD ) VALUES (:contra)  ';
        $resultado = $conexion_db->prepare($sql);
        $resultado->execute(array(":contra" => $contra));
        echo "<script>alert('regitro password insertado.')</script>";
        $resultado->closeCursor();

        /*-----------------------------------------------------------------------------------*/

        $sql        = ' SELECT PAS_ID FROM passwords WHERE PAS_PASSWORD=?';
        $res_contra = $conexion_db->prepare($sql);
        $res_contra->execute(array($contra));
        while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
            $id_contra = $rel['PAS_ID'];
        }
        $res_contra->closeCursor();

        /*-----------------------------------------------------------------------------------*/

        $sql = 'INSERT INTO usuarios (usu_nombre,usu_correo,pas_id )VALUES(:username, :email, :id_contra)';

        $resultado = $conexion_db->prepare($sql);
        $resultado->execute(array(":username" => $username, ":email" => $email, ":id_contra" => $id_contra));
        echo "<script>alert('regitro usuario insertado.')</script>";
        $resultado->closeCursor();

        /*-----------------------------------------------------------------------------------*/

        $contra    = 0;
        $id_contra = 0;
        header("Location:../vista/login_view.html");
    } else {
        echo "<script>alert('Woops! no son iguales las contraseñas.')</script>";
    }

}

?>


<!--


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href=" bio.ico">

    <title>BioProyect | Registrar</title>

</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registrate</p>
            <div class="input-group">
                <input type="text" placeholder="Nombre de usuario" name="username" >
            </div>
            <div class="input-group">
                <input type="email" placeholder="Correo" name="email" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="contraseña" name="password" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirmar contraseña" name="cpassword" >
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Registrar</button>
            </div>
            <p class="login-register-text">ya tienes una cuenta? <a href="index.php">Entre aqui</a>.</p>
        </form>
    </div>
</body>
</html>


 -->