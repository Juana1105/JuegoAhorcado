<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorcado Game</title>
    <link rel="stylesheet" href="css/player.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/player.js"></script>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: index.php");
    }

    require_once("clase_user.php");
    require_once("clase_palabra.php");
    $jugador = new User();

    $jugador->getUsuario($_SESSION["user"]);
    $jugador->getPartidas($jugador->getIdUser());



    $jugador->getpartidas_ganadasUser();

    $jugador->getpartidas_perdidasUser();

    $ultimasPartidas = $jugador->getUltimasPartidas(10, $jugador->getIdUser());





    ?>

    <div class="contenedor-cabecera">
        <h1>El ahorcado</h1>
        <h2>Jugador: <?php echo $jugador->getUsuarioUser(); ?></h2>
    </div>

    <div class="contenedor-principal">

        <h2 class="titulo">PARTIDAS</h2>

        <div class="partidas totales">
            <h2>Jugadas</h2>
            <h3><?php echo $jugador->getPartidasUser(); ?></h3>
        </div>
        <div class="partidas ganadas">
            <h2>Ganadas</h2>
            <h3><?php echo $jugador->getpartidas_ganadasUser(); ?></h3>
        </div>
        <div class="partidas perdidas">
            <h2>Perdidas</h2>
            <h3><?php echo $jugador->getpartidas_perdidasUser(); ?></h3>
        </div>

        <h2 class="titulo">RESULTADOS ULTIMAS PARTIDAS</h2>
        <div class="ultimas-partidas">
            <table>
                <thead>
                    <tr>
                        <td>Jugador</td>
                        <td>Puntuacion</td>
                        <td>Palabra</td>
                        <td>Resultado</td>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $palabra = new Palabra;

                    foreach ($ultimasPartidas as $fila) {

                    ?>
                        <tr>
                            <td><?php echo $jugador->getUsuarioUser(); ?></td>
                            <td><?php echo $fila["PUNTUACION"]; ?></td>
                            <td><?php echo $palabra->getNombrePalabra($fila["COD_PALABRA"]); ?></td>
                            <td><?php echo $fila["RESULTADO"]; ?></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>


    </div>


    <div class="menu_player">
        <ul>
            <li><a href="new_game.php">Jugar</a></li>
            <li><a href="editar_perfil.php">Editar perfil</a></li>
            <li><a id="score" href="highscore.php">Highscores</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            
        </ul>
        
    </div>



</body>
<footer>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(8, 103, 192)" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,42.7C840,32,960,32,1080,26.7C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <div id="marca">
        <p>Xeky´s Games</p>
    </div>
</footer>

</html>