<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva partida - Ahorcado Game</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jsgame.js"></script>
    <link rel="stylesheet" href="css/gaming.css">
</head>

<body>
    <?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
    }
    require_once("clase_partida.php");
    require_once("clase_ahorcado.php");
    $new_partida = new Partida($_SESSION["user"]);
    $ahorcado = new Ahorcado;

    ?>
    <div class="contenedor-cabecera">

        <h1>Ahorcado</h1>
        <h2>Player: <?php echo $_SESSION["user"]; ?></h2>
        <h2 id="puntuacion">Puntuación: <?php echo $new_partida->getPuntosGanados(); ?></h2>
        <h2 id="vidas">Vidas: <?php echo $new_partida->getVidas(); ?></h2>


    </div>

    <div class="contenedor-principal">

        <div class="contenedor-palabra">

            <?php

            for ($i = 0; $i < strlen($ahorcado->palabra); $i++) {

            ?>

                <div class="card">
                    <div class="face front">
                        <h3>?</h3>

                    </div>
                    <div class="face back">
                        <h3 class="letras-ocultas"><?php echo $ahorcado->palabra[$i]; ?></h3>

                    </div>

                </div>

            <?php
            }
            ?>
        </div>
        <div class="contenedor-secundario">
            <div class="contenedor-abc">
                <?php
                for ($i = 0; $i < count($ahorcado->abecedario); $i++) {
                ?>
                    <div class="contenedor-btn">
                        <button class="btn-letra" id="<?php echo $ahorcado->abecedario[$i]; ?>"><?php echo $ahorcado->abecedario[$i]; ?></button>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen">

                </div>
            </div>
        </div>
    </div>
    <footer>
        <h2 class="foot-izq">Xeky´s</h2>
        <h2 class="foot-der">Games s.l.</h2>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(8, 103, 192)" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,42.7C840,32,960,32,1080,26.7C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <img src="images/ahorcado1.jfif" alt="monigote-colgando">
        
    
    </footer>

    <div class="final-partida-i" id="final">
        <h1>EL AHORCADO</h1>
        <div class="salir-new">
            <h2>Game Over</h2>
            <h3>Jugador: <?php echo $_SESSION["user"];?></h3>
            <h3 id="puntuacion-final">Puntuacion: </h3>
            <form action="controlador_partida.php" method="POST">
                <input type="hidden" name="puntuacion" id="punt-final">
                <input type="hidden" name="resultado" id="resultado">
                <input type="hidden" value="<?php echo $_SESSION["user"];?>" name="jugador">
                <input type="hidden" value="<?php echo $ahorcado->palabra;?>" name="palabra">
                
                <input type="submit" name="newgame" value="Nueva partida">
                <input type="submit" name="salir" value="Salir">
            </form>

        </div>
    </div>
</body>

</html>