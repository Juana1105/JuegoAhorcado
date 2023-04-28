<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="css/player2.css">
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: index.php");
    }

    require_once("clase_user.php");

    $jugador = new User();

    $jugador->getUsuario($_SESSION["user"]);


    ?>

    <div class="contenedor-cabecera">
        <h1>El ahorcado</h1>
        <h2>Jugador: <?php echo $jugador->getUsuarioUser(); ?></h2>
    </div>

    <div class="contenedor-principal">

        <h2 class="titulo">Editar perfil de usuario</h2>
        <?php
        if (isset($_GET["update"])) {

            echo "<p class='update'> Registro actualizado correctamente</p>";
        }
        ?>

        <form action="controlador_editar_datos.php" method="POST" class="editar_datos">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $jugador->getNombreUser(); ?>">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $jugador->getApellidosUser(); ?>">
            <label for="usuario">Usuario(nick)</label>
            <input type="text" name="usuario" value="<?php echo $jugador->getusuarioUser(); ?>">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $jugador->getcorreoUser(); ?>">

            <div class="botones">
                <input type="submit" name="guardar_cambios" value="Guardar" class="guardar">
                <input type="submit" name="salir" value="Salir" class="salir">
            </div>
        </form>

        <?php

        if (isset($_GET["updatep"])) {

            echo "<p class='update'> Contraseña modificada correctamente</p>";
        }else if(isset($_GET["passvacia"])){
            echo "<p class='update-error'> La contraseña no puede estar en blanco</p>";
        }else if(isset($_GET["passnoigual"])){
            echo "<p class='update-error'>Las contraseñas no coinciden</p>";
        }

        if (isset($_POST["cambiar_pass"])) {
        ?>
            <form action="controlador_editar_datos.php" method="post" class="editar_pass">
                <label for="n_pass1">Password</label>
                <input type="password" name="n_pass1">
                <label for="n_pass2">Repetir Password</label>
                <input type="password" name="n_pass2">
                <input type="submit" name="nueva_pass" value="Guardar Contraseña">
            </form>

        <?php
        } else {
        ?>

            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="editar_pass">
                <input type="submit" name="cambiar_pass" value="Cambiar Contraseña">
            </form>

        <?php
        }
        ?>
    </div>

    <footer>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgb(8, 103, 192)" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,42.7C840,32,960,32,1080,26.7C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
        <div id="marca">
            <p>Xeky´s Games</p>
        </div>
    </footer>

</body>

</html>