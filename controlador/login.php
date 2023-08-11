<?php
require "../modelo/conexion.php";

$db          = new conectar();
$conexion_db = $db->conexion();

if (isset($_POST['submit'])) {
    $usuario_id  = 0;
    $nbr_usuario = "";

    // ´--------------------------------------------------------------------------

    $sql = "SELECT  USU_CORREO, PAS_PASSWORD FROM passwords INNER JOIN usuarios
               on passwords.PAS_ID=usuarios.PAS_ID
               WHERE USU_CORREO = :email AND  PAS_PASSWORD= :password;";
    $result   = $conexion_db->prepare($sql);
    $email    = htmlentities(addslashes($_POST['email']));
    $password = htmlentities(addslashes($_POST['password']));
    $result->bindValue(":email", $email);
    $result->bindValue(":password", $password);
    $result->execute();
    $nr_re = $result->rowCount();
ñ
    // ´--------------------------------------------------------------------------

    $sql        = ' SELECT USU_ID, USU_NOMBRE FROM usuarios WHERE USU_CORREO=?';
    $res_contra = $conexion_db->prepare($sql);
    $res_contra->execute(array($email));
    while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
        $usuario_id  = $rel['USU_ID'];
        $nbr_usuario = $rel['USU_NOMBRE'];

    }
    $res_contra->closeCursor();

    // ´--------------------------------------------------------------------------

    if ($nr_re != 0) {

        echo "<script>alert('Bienbenido, Datos correctos.')</script>";
        session_start();
        $_SESSION['id']     = $usuario_id;
        $_SESSION['nombre'] = $nbr_usuario;
        $_SESSION['email']  = $_POST['email'];
        header("Location:../controlador/publicaciones.php");
        $usuario_id  = 0;
        $nbr_usuario = "";

    } else {
        echo "<script>alert('Woops! El correo o la contraseña son incorrectos.')</script>";
    }

    // ´--------------------------------------------------------------------------
    // $sql        = ' SELECT USU_ID FROM usuarios WHERE USU_CORREO=?';
    // $res_contra = $conexion_db->prepare($sql);
    // $res_contra->execute(array($email));
    // while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
    //     $usuario_id = $rel['USU_ID'];
    //     echo $usuario_id;
    // }
    // $res_contra->closeCursor();

    // ´--------------------------------------------------------------------------

}

?>




<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href=" bio.ico">

    <title>BioProyect | Inciar Session</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Inicia sesión</p>
            <div class="input-group">
                <input type="email" placeholder="Correo" name="email" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="Contraseña" name="password" >
            </div>
            <div class="input-group">
                <button name="submit" class="btn">acceder</button>
            </div>
            <p class="login-register-text">No tienes cuenta? <a href="register.php">Registrate aqui</a>.</p>
        </form>
    </div>
</body>
</html> -->