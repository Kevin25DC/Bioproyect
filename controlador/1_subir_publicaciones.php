<?php

require "../modelo/conexion.php";

$db          = new conectar();
$conexion_db = $db->conexion();

if ((isset($_POST['enviar']))) {

    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location:../vista/login_view.html");
    }

    $mm      = $_SESSION['nombre'];
    $id_usuo = $_SESSION['id'];

    $nombreee  = $_POST['clasica'];
    $cometario = $_POST['comentario_publicacion'];
    $usu_id    = 0;
    // $nombre_archivo  = $_FILES['publicacion_img']['name'];
    $tipo_archivo = $_FILES['publicacion_img']['type'];
    // $tamagno_archivo = $_FILES['publicacion_img']['size'];

    // $carpeta_destino = '../img_bd/';
    // // move_uploaded_file($_FILES['publicacion_img']['tmp_name'], $carpeta_destino . $nombre_archivo);
    // $archivo_obj = fopen($carpeta_destino . $nombre_archivo, "r");
    // $contenido   = fread($archivo_obj, $tamagno_archivo);
    // fclose($archivo_obj);

    $check      = getimagesize($_FILES["publicacion_img"]["tmp_name"]);
    $image      = $_FILES['publicacion_img']['tmp_name'];
    $imgContent = file_get_contents($image);
/*-----------------------------------------------------------------------------------*/
    // $sql        = ' SELECT PAS_ID FROM passwords WHERE PAS_PASSWORD=?';
    // $res_contra = $conexion_db->prepare($sql);
    // $res_contra->execute(array($contra));
    // while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
    //     $usu_id = $rel['PAS_ID'];
    // }
    // $res_contra->closeCursor();
    /*-----------------------------------------------------------------------------------*/
    $sql       = ' INSERT INTO publicaciones ( PUB_NOMBRE, PUB_PUBLICACION, PUB_COMENTARIO ,USU_ID ) VALUES (:nombre, :imagen, :comentario ,:usu)';
    $resultado = $conexion_db->prepare($sql);
    $resultado->execute(array(":nombre" => $nombreee, ":imagen" => $imgContent, ":comentario" => $cometario, ":usu" => $id_usuo));
    echo "<script>alert('imagen insertada.')</script>";
    header("Location:../controlador/subir_publicacion_view.php");
/*-----------------------------------------------------------------------------------*/
    $resultado->closeCursor();
}

/*-----------------------------------------------------------------------------------*/
// $contra     = 24;
// $sql        = ' SELECT PUB_PUBLICACION FROM publicaciones WHERE PUB_iD=?';
// $res_contra = $conexion_db->prepare($sql);
// $res_contra->execute(array($contra));
// while ($rel = $res_contra->fetch(PDO::FETCH_ASSOC)) {
//     // echo $rel['PUB_PUBLICACION'];
//     $contt = $rel['PUB_PUBLICACION'];
//     // echo $tipo_archivo;
//     // echo $tipo_archivo;
//     // echo $contt;
//     // echo base64_encode($contt);
//     // echo "<img src='data:image/jpeg; base64," . base64_encode($contt) . "'>";
//     echo "<img src='data:image; base64," . base64_encode($contt) . "'>";
// }
// $res_contra->closeCursor();

?>



