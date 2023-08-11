<?php

require "../modelo/conexion.php";

$db          = new conectar();
$conexion_db = $db->conexion();

session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../vista/login_view.html");
}
// $pub_idd;
// $pub_nombree;
// $pub_publicacionn;
// $pub_comentarioo;
// $id_usuarioo;

// ´--------------------------------------------------------------------------------------------------------------

// $sql        = ' SELECT * FROM publicaciones ';
// $res_contra = $conexion_db->prepare($sql);
// $res_contra->execute();
// while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {

//     $pub_publicacionn = $rel['PUB_PUBLICACION'];

//     $pub_idd     = $rel['PUB_ID'];
//     $pub_nombree = $rel['PUB_NOMBRE'];
//     // $pub_publicacionn;
//     $pub_comentarioo = $rel['PUB_COMENTARIO'];
//     $id_usuarioo     = $rel['USU_ID'];

//     // echo $pub_idd;
//     // echo $pub_nombree;
//     // echo $pub_comentarioo;
//     // echo $id_usuarioo;

//     // echo "<img class='publicacion_img' src='data:image; base64," . base64_encode($pub_publicacionn) . "'>";

//     // ´--------------------------------------------------------------------------------------------------------------

//     echo '

//     <div class="publicacion" >
//                 <div class="logo ">
//                     <img src="../img/miguel.jpg" class="logo_img"> <label class="label_img"> ' . $id_usuarioo . ' </label>
//                 </div>
//                 <div class="nb_cliente">
//                    <div class="nb1">        <img class="publicacion_img" src="data:image; base64,' . base64_encode($pub_publicacionn) . '">
//                    </div>
//                    <div class="nb2"><p class="comentario_img"> ' . $pub_comentarioo . '

//                    </p></div>
//                 </div>
//             </div>

//     ';

// }
// $res_contra->closeCursor();

$sql = ' SELECT  PUB_NOMBRE, PUB_COMENTARIO, PUB_PUBLICACION ,USU_NOMBRE FROM publicaciones
    INNER JOIN usuarios on publicaciones.USU_ID=usuarios.USU_ID';
$res_contra = $conexion_db->prepare($sql);
$res_contra->execute(array());
while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
    $m_usu_nombre      = $rel['USU_NOMBRE'];
    $m_pub_nombre      = $rel['PUB_NOMBRE'];
    $m_pub_comentario  = $rel['PUB_COMENTARIO'];
    $m_pub_publicacion = $rel['PUB_PUBLICACION'];

    echo '

            <div class="publicacion" >
                <div class="logo ">
                    <img src="../img/per.jpeg" class="logo_img"> <label class="label_img"> ' . $m_usu_nombre . ' </label>
                </div>
                <div class="nb_cliente">
                   <div class="nb1">        <img class="publicacion_img" src="data:image; base64,' . base64_encode($m_pub_publicacion) . '">
                   </div>
                   <div class="nb2"><p class="comentario_img"> ' . $m_pub_comentario . '

                   </p></div>
                </div>
            </div>

    ';
}
$res_contra->closeCursor();

?>

