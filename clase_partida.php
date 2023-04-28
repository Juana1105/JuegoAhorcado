<?php

include("conf.php");

class Partida{

    private $jugador;
    private $vidas;
    private $puntos_ganados;
    private $resultado;


    public function __construct($player)
    {
        $this->jugador = $player;
        $this->vidas = 5;
        $this->puntos_ganados = 0;
        $this->resultado = "";

    }

    public function getVidas(){
        return $this->vidas;
    }

    public function setVidas($vidas){
        $this->vidas = $vidas;

    }

    public function restarVida(){
        $this->vidas -= 1;
    }

    public function getPlayer(){
        return $this->jugador;
    }

    public function setPuntosGanados($puntos){
        $this->puntos_ganados = $puntos;

    }

    public function getPuntosGanados(){
        return $this->puntos_ganados;
    }

    public function setResultado($resultado){
        $this->resultado = $resultado;
    }

    public function getResultado(){
        return $this->resultado;
    }




}