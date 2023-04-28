<?php


class Palabra{

    private $cod_palabra;
    private $palabra;
    private $veces_jugada;
    private $veces_ganada;
    private $veces_perdida;
    private $conexion;

    public function __construct()
    {
        require_once("conexion.php");
        $this->conexion = Conectar::conexion();
    }

    public function getNombrePalabra($cod_palabra){
        $sql = "SELECT * FROM palabras WHERE COD_PALABRA = $cod_palabra";
        $stmt = $this->conexion->query($sql);

        $registro = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->palabra = $registro["PALABRA"];

        return $this->palabra;
    }


}