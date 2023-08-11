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
        <link rel="stylesheet" type="text/css" href="../vista/subir_publicacion.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
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
                <li class="hea-ul.li"> <a class="hea-ul-li-a" href="#"> Publicaciones </a></li>
            </ul>
            <!-- <div class="heac">
                <H3 class="hea-h3c">Bienvenido</H3>
            </div> -->
            <ul class="hea-ulc">
                <li class="hea-ul.li"> <a class="hea-ul-li-ac" href="logout.php"> Cerrar Sesion</a></li>
            </ul>

        </div>



        <div class="main">

            <form class="form-register"  action="1_subir_publicaciones.php" method="POST" enctype="multipart/form-data">

                <h2 id="12">Registro </h2>
                    Nombre De Publicacion  <input class="nombre_publicacion"type="text" name="clasica"  placeholder="Escribir aqui el nombre de la publicacion">

                    Comentario<textarea name="comentario_publicacion" maxlength="500"  class="comentario" rows="3" placeholder="Escribir un comentario maximo de 6 lineas y media" cols="80"></textarea>

                    Archivo <input class="controls"type="file" name="publicacion_img"   placeholder="">
                    <input type="submit" name="enviar" value="ENVIAR" class="btn_publicacion">

            </form>

            <!-- <section class="form-register"  method="POST" >
                <h2 id="12">Registro </h2>
                    Nombre De Publicacion  <input class="nombre_publicacion"type="text" name="clasica"  placeholder="Escribir aqui el nombre de la publicacion">

                    Comentario<textarea name="comentario_publicacion" class="comentario" rows="3" placeholder="Escribir un comentario maximo de 6 lineas y media" cols="80"></textarea>

                    Archivo <input class="controls"type="file" name="publicacion"   placeholder="">
                    <input type="submit" name="enviar" value="ENVIAR" class="btn_publicacion">

            </section> -->



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
