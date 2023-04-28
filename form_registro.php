<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ahorcado Game - Registro</title>
</head>
<body>

    <header>
        <div class="cabecera">
        <div id="logo">
            <img src="images/x.png" alt="logo">
        </div>
        <div id="juego">
            <h1>Ahorcado Game</h1>
        </div>

        <div id="marca">
            <h2>Xeky´s Games</h2>
        </div>
    </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Instrucciones</a></li>
                <li><a href="index.php">Highscore</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="tronco-s">
            <img src="images/tronco-superior.jpg" alt="tronco">
        </div>
        <div class="contenedor3">
            <div class="contenedor-login">
                <form action="registro.php" method="post">
                    <h2>Registro</h2>
                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == 23000){
                                echo "<p class='error'>El usuario " . $_GET["user"] . " ya existe</p>";
                            }
                        }
                    ?>
                    <input type="text" name="nombre" placeholder="Nombre..." required>
                    <input type="text" name="apellidos" placeholder="Apellidos..." required>
                    <input type="email" name="correo" placeholder="Email..." required>
                    <input type="text" name="user" placeholder="Usuario..." required>
                    <input type="password" name="pass" placeholder="Password..." required>
                    <input type="submit" name="registro" value="Registrarse">
                </form>
                    
            </div>

        </div>

        </main>
        <footer>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6B3519" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,42.7C840,32,960,32,1080,26.7C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </footer>

    
    
</body>
</html>