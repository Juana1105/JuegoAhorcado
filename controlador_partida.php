<?php


if(isset($_POST["salir"]) || isset($_POST["newgame"])){


require_once("conexion.php");

    $conexion = Conectar::conexion();

    $jugador =  $_POST["jugador"];
    $palabra = $_POST["palabra"];
    $resultado_partida = $_POST["resultado"];
    $puntuacion_partida =  $_POST["puntuacion"];

    $sql = "SELECT ID FROM users WHERE USUARIO = '$jugador'";
    $stmt = $conexion->query($sql);
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    $ID_jugador = $registro["ID"];
    $stmt->closeCursor();

    $sql = "SELECT COD_PALABRA FROM palabras WHERE PALABRA = '$palabra'";
    $stmt = $conexion->query($sql);
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    $COD_palabra = $registro["COD_PALABRA"];
    $stmt->closeCursor();

    
  
    $sql = "INSERT INTO partidas(COD_JUGADOR, COD_PALABRA,PUNTUACION, RESULTADO) VALUES($ID_jugador,$COD_palabra,$puntuacion_partida,'$resultado_partida')";

    $stmt=$conexion->query($sql);
    $id_partida = $conexion->lastInsertId();
    $stmt->closeCursor();


    $sql = "UPDATE palabras INNER JOIN partidas ON palabras.COD_PALABRA = partidas.COD_PALABRA
            SET palabras.VECES_ACERTADA = IF(partidas.RESULTADO = 'ganada', palabras.VECES_ACERTADA+1, PALABRAS.VECES_ACERTADA),
                palabras.VECES_JUGADA = palabras.VECES_JUGADA+1,
                palabras.VECES_FALLADA = IF(partidas.RESULTADO = 'perdida', palabras.VECES_FALLADA+1, PALABRAS.VECES_FALLADA)
            WHERE partidas.ID_PARTIDA = $id_partida";

    $stmt=$conexion->query($sql);
    $stmt->closeCursor();


if(isset($_POST["salir"])){
    header("Location: game.php");
}

if(isset($_POST["newgame"])){
    header("Location: new_game.php");

}

}else{
    header("Location: index.php");
}