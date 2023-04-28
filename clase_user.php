<?php

class User{

    private $id;
    private $nombre;
    private $apellidos;
    private $usuario;
    private $password;
    private $correo;
    private $perfil;
    private $conexion;
    private $partidas_jugadas;
    private $partidas_ganadas;
    private $partidas_perdidas;


    public function __construct()
    {
        
        require("conexion.php");
        $this->conexion = Conectar::conexion();

    }

    
    public function getIdUser(){
        return $this->id;
    }
    public function getNombreUser(){
        return $this->nombre;
    }
    public function getApellidosUser(){
        return $this->apellidos;
    }
    public function getUsuarioUser(){
        return $this->usuario;
    }
    public function getpassUser(){
        return $this->password;
    }
    public function getcorreoUser(){
        return $this->correo;
    }
    public function getperfilUser(){
        return $this->perfil;
    }

    public function getpartidas_ganadasUser(){
        return $this->partidas_ganadas;
    }
    public function getpartidas_perdidasUser(){
        return $this->partidas_perdidas;
    }
    public function getpartidasUser(){
        return $this->partidas_jugadas;
    }

    public function setIdUser($param){
        $this->id = $param;
    }
    public function setNombreUser($param){
        $this->nombre = $param;
    }
    public function setApellidosUser($param){
        $this->apellidos =$param;
    }
    public function setUsuarioUser($param){
        $this->usuario = $param;
    }
    public function setPassUser($param){
        $this->password = $param;
    }
    public function setCorreoUser($param){
        $this->correo = $param;
    }
    public function setPerfilUser($param){
        $this->perfil = $param;
    }


    public function getUsuariosAll(){

        $sql = "SELECT * FROM users";
        $stmt = $this->conexion->query($sql);

        $registros = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $registros;
    }

    public function getUsuario($user){
        $sql = "SELECT * FROM users WHERE USUARIO = '$user'";
        $stmt = $this->conexion->query($sql);

        $registro = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->setIdUser($registro["ID"]);
        $this->setNombreUser($registro["NOMBRE"]);
        $this->setApellidosUser($registro["APELLIDOS"]);
        $this->setUsuarioUser($registro["USUARIO"]);
        $this->setPassUser($registro["PASSWORD"]);
        $this->setCorreoUser($registro["EMAIL"]);
        $this->setPerfilUser($registro["PERFIL"]);
    }

    public function getPartidas($cod_usuario){
        $sql = "SELECT COUNT(COD_JUGADOR) FROM partidas WHERE COD_JUGADOR = $cod_usuario";
        $stmt = $this->conexion->query($sql);
        $registros = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->partidas_jugadas = $registros["COUNT(COD_JUGADOR)"];

        $sql = "SELECT COUNT(COD_JUGADOR) FROM partidas WHERE COD_JUGADOR = $cod_usuario AND RESULTADO ='ganada'";
        $stmt = $this->conexion->query($sql);
        $registros = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->partidas_ganadas = $registros["COUNT(COD_JUGADOR)"];

        $this->partidas_perdidas = $this->partidas_jugadas - $this->partidas_ganadas;
        
        
    }

    public function getUltimasPartidas($num_partidas,$cod_usuario){
        $sql = "SELECT * FROM partidas WHERE COD_JUGADOR = $cod_usuario  ORDER BY ID_PARTIDA DESC LIMIT $num_partidas";
        $stmt = $this->conexion->query($sql);

        if($stmt==false){
            return false;
        }else{
            $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $registros;
        }
        
    }


}