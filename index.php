<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos2.css">
    
    <title>Ahorcado - Home</title>
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
                <li><a href="highscore.php">Highscore</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="tronco-s">
            <img src="images/tronco-superior.jpg" alt="tronco">
        </div>
        <div class="contenedor3">
            <div class="contenedor-imagen">
                <img src="images/horca.jpg" alt="horca">
            </div>
            <div class="contenedor-login">
                <form action="controlador_log_reg.php" method="post">
                    <h2>Iniciar sesión</h2>
                    <?php
                        if (isset($_GET["error"])){
                            echo "<p class='error'>Usuario/contraseña incorrectos</p>";  
                        }
                    ?>
                    <input type="text" name="user" placeholder="Introduce usuario...">
                    <input type="password" name="pass" placeholder="Introduce password...">
                    <input type="submit" name="login" value="Inciar Sesión">
                    <input type="submit" name="registrarse" value="Registrarse">
                </form>
                    
            </div>

        </div>

        <div class="tronco-i">
            <img src="images/tronco-inferior.jpg" alt="tronco">
        </div>
        <div class="contenedor">
            <div>
            <img src="images/ahorcado1.jfif" alt="munieco">
            </div>
            <div class="textos">
                <p class="text-izq">Clásico juego de adivinar palabras para toda la familia. Ahorcado en español y en inglés.</p>
                <p class="text-der">Comprueba tu puntuación máxima en el ranking y compara tu record con tus amigos y el resto de jugadores</p>
            </div>
            <div>
            <img src="images/ahorcado5.jpg" alt="munieco2">
            </div>

        </div>

        <div class="contenedor2">
            <div class="sub-contenedor">

                <img src="images/1000.jpg" alt="1000 words">
                <p>Más de 1000 palabras diferentes y ampliandose cada día.</p>
            </div>
            <div class="sub-contenedor">
                <img src="images/number-one.jpg" alt="number-one">
                <p>Eres capaz de convertirte en el rey del ahorcado y alcanzar el top del Highscore</p>
                
            </div>
            <div class="sub-contenedor">
                <img src="images/spain_england.jpg" alt="spain_england">
                <p>Ponte a prueba con palabras tanto en español y en inglés.</p>
            </div>

        </div>

    </main>
    <footer>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(8, 103, 192)" fill-opacity="1" d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,42.7C840,32,960,32,1080,26.7C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <div id="marca-pie">
        <p>Xeky´s Games</p>
    </div>
    </footer>
    
</body>
</html>