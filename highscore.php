<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorcado - Highscore</title>
    <link rel="stylesheet" href="css/player3.css">
</head>
<body>
<?php

session_start();
require_once("conexion.php");

$conexion = Conectar::conexion();

$sql = "SELECT COD_JUGADOR, SUM(PUNTUACION), USUARIO, ID FROM `partidas` INNER JOIN users ON partidas.COD_JUGADOR = users.ID GROUP BY COD_JUGADOR ORDER BY SUM(PUNTUACION) DESC;";


$stmt = $conexion->query($sql);

$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="contenedor-cabecera">
        <h1>El ahorcado</h1>
        <h2>Jugador: <?php if(isset($_SESSION["user"])){echo $_SESSION["user"];}else{echo "Invitado";}?></h2>
        <a href="game.php">Volver</a>
    </div>

    <div class="contenedor-principal">

        <h2 class="titulo">Highscores</h2>

        <table class="tabla-scores">
            <thead>
                <tr>
                    <td>Posición</td>
                    <td>Jugador</td>
                    <td>Puntuación</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $contador = 0;
                    foreach($registros as $player){
                        $contador +=1;
                ?>
                    <tr>
                        <td><?php echo $contador ?></td>
                        <td><?php echo $player["USUARIO"];?></td>
                        <td><?php echo $player["SUM(PUNTUACION)"];?></td>
                    </tr>



                <?php
                    }
                ?>
            </tbody>
        </table>

    
</body>
</html>