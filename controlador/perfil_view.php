<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"/>
        <meta charset="utf-8"/>
        <link rel="icon" href="guino.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="perfil.css"/>
        <title>
            Boseto
        </title>
    </head>
    <body>

        <div class="header">

            <div class="hea">
                <H3 class="hea-h3">Bio-Proyect</H3>
            </div>
            <ul class="hea-ul">
                <li class="hea-ul.li"> <a class="hea-ul-li-a" href="../controlador/publicaciones.php"> Inicio </a> </li>
                <li class="hea-ul.li"> <a class="hea-ul-li-a" href="../controlador/subir_publicacion_view.php"> Subir Publicaciones</a></li>
            </ul>
            <!-- <div class="heac">
                <H3 class="hea-h3c">Bienvenido</H3>
            </div> -->
            <ul class="hea-ulc">
                <li class="hea-ul.li"> <a class="hea-ul-li-ac" href="logout.php"> Cerrar Sesion</a></li>
            </ul>

        </div>






        <div class="main">

            <!-- <div class="perfil">
                 <h1 class="p_h1"> Mi Perfil </h1>

                <div class="p_caja">

                    <img class="p_img" src="../img/dayron.jpg" >
                    <p class="p_nb"> Nombre : </p>
                    <p class="p_nombre">  MIGUEL </p>
                    <p class="p_cr"> Correo : </p>
                    <p class="p_correo"> Correo =  jhejei@ksok.com</p>

                </div>

            </div> -->



            <!--
             <div class="pf_publicaciones">

                <h1 class="p_h1"> Publicaciones </h1>

                <div class="publicacion" >
                    <div class="logo ">
                        <img src="../img/miguel.jpg" class="logo_img"> <label class="label_img"> miguel espitia </label>
                    </div>
                    <div class="nb_cliente">
                       <div class="nb1"> <img src="../img/publicacion.jpg" class="publicacion_img">
                       </div>
                       <div class="nb2"><p class="comentario_img"> Loeiusmodrem ipsum dolor sit, amet consectetur adipisicing, elit. Repellendus illum autem sapiente, tenetur, assumenda sint placeat alias fuga cum laboriosam,Lorem ipsum dolor sit amet, consectetur adipisicing loremelit

                       </p></div>
                    </div>
                </div>

            </div>
             -->




             <?php

require '../controlador/1_perfil.php';

?>

        </div>
        <div class="footer">
            <p class="fo">
                Nombre De Proyecto
                <br/>
                _______________________________
                <br/>
                BIOPROYECT
            </p>
        </div>
    </body>
</html>
