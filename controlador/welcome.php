
<!DOCTYPE html>
<html>

<head>
    <title>BioProyect | Perfil </title>
    <link rel="stylesheet" href="../vista/estilobienvenido.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>

<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../vista/login_view.html");
}

?>

    <nav>
        <h3>Bio-Proyect</h3>
        <ul>
            <li><a href="../controlador/publicaciones.php">Ver Publicaciones</a></li>
            <li><a href="#">perfil</a></li>
            <li><a href="#">Servicios<i class="icon ion-md-arrow-dropdown"></i></a>
                <ul>
                    <li><a publicar="texto"href="../controlador/subir_publicacion_view.php">Publicar fotos</a></li>
                    <li><a href="#">Soporte</a></li>
                    <li><a href="#">privacidad</a></li>
                </ul>
            </li>
            <div id="derechas">
                    <?php echo "<h1>Welcome " . $_SESSION['nombre'] . "</h1>"; ?>
                    <a href="logout.php">Cerrar sesion</a>
            </div>
        </ul>
    </nav>

</body>

</html>