<?php



if(isset($_POST["login"])){

    $user = $_POST["user"];
    $pass = $_POST["pass"];


    require_once("conexion.php");

    try {
        
        $conexion = Conectar::conexion();
        $sql ="SELECT * FROM users WHERE USUARIO = :user";
        $stmt = $conexion->prepare($sql);
        $stmt->execute(array(":user"=>$user));

        if($stmt->rowCount() == 0){
            header("Location: index.php?error=novalid");
        }

        while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($pass,$fila["PASSWORD"])){
                session_start();
                $_SESSION["user"] = $user;
                $_SESSION["perfil"] = $fila["PERFIL"];
                
                header("Location: game.php");
            }else{
                header("Location: index.php?error=novalid");
            }
        }

    } catch (Exception $e) {
        die("Se ha producido un error". $e->getMessage());
    }

}else{
    header("Location: index.php");
}