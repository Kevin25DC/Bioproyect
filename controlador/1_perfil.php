<?php

// class perfil {

require "../modelo/conexion.php";

$db          = new conectar();
$conexion_db = $db->conexion();

session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../vista/login_view.html");}

$nob = $_SESSION['nombre'];
$ema = $_SESSION['email'];
$idd = $_SESSION['id'];

echo '

<div class="perfil">
                 <h1 class="p_h1"> Mi Perfil </h1>

                <div class="p_caja">

                    <img class="p_img" src="../img/per.jpeg" >
                    <p class="p_nb"> Nombre : </p>
                    <p class="p_nombre"> ' . $nob . ' </p>
                    <p class="p_cr"> Correo : </p>
                    <p class="p_correo"> ' . $ema . ' </p>

                </div>
        </div>

';

// ----

$sql = ' SELECT  PUB_NOMBRE, PUB_COMENTARIO, PUB_PUBLICACION ,USU_NOMBRE FROM publicaciones
    INNER JOIN usuarios on publicaciones.USU_ID=usuarios.USU_ID WHERE publicaciones.USU_ID=? ';
$res_contra = $conexion_db->prepare($sql);
$res_contra->execute(array($idd));
while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
    $l_usu_nombre      = $rel['USU_NOMBRE'];
    $l_pub_nombre      = $rel['PUB_NOMBRE'];
    $l_pub_comentario  = $rel['PUB_COMENTARIO'];
    $l_pub_publicacion = $rel['PUB_PUBLICACION'];

    echo '



        <div class="pf_publicaciones">

                <h1 class="p_h1"> Publicaciones </h1>

                <div class="publicacion" >
                    <div class="logo ">
                        <img src="../img/per.jpeg" class="logo_img"> <label class="label_img"> ' . $l_usu_nombre . ' </label>
                    </div>
                <div class="nb_cliente">
                   <div class="nb1">        <img class="publicacion_img" src="data:image; base64,' . base64_encode($l_pub_publicacion) . '"></div>
                   <div class="nb2"><p class="comentario_img"> ' . $l_pub_comentario . '</p></div>
                </div>
            </div>

        </div>

';

}
$res_contra->closeCursor();

// ----

?>