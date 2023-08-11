<?php

class conectar {

    public function conexion() {

        try {

            $conexion_db = new PDO('mysql:host=localhost; dbname=BIOPROYECT', 'root', '');
            $conexion_db->exec("SET NAMES utf8");

            return $conexion_db;

        } catch (Exception $e) {
            die("ERROR" . $e->getMessage());
            echo " la linea de error es: " . $e->getline();
        }

    }

}

?>