<?php

require_once("conf.php");

class Conectar{

    public static function conexion(){
        try {
            $conexion = new PDO("mysql:host=". DB_HOST ."; dbname=" . DB_NAME , DB_USER, DB_PASS);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->query("SET NAMES utf8");
            
        } catch (Exception $e) {
            die("Se ha producido un error al conectar con la BBDD". $e->getMessage());
            echo "Error en la linea" . $e->getline;
        }

        return $conexion;
    }







}

