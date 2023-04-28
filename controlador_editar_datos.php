<?php


session_start();

if(!isset($_SESSION["user"])){
    header("Location: index.php");
}

if(isset($_POST["salir"])){
    header("Location: game.php");
}


if(isset($_POST["guardar_cambios"])){

    require_once("conexion.php");

    $conexion = Conectar::conexion();

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $user = $_POST["usuario"];
    $usuario = $_SESSION['user'];

    echo $nombre,$apellidos,$email, $user, $_SESSION["user"] ;
    

   try {
    $sql = "UPDATE users SET NOMBRE = :nom, APELLIDOS = :ape, USUARIO = :user, EMAIL = :email WHERE USUARIO = '$usuario'";

    $stmt= $conexion->prepare($sql);
    if($stmt == false){
        echo "error";
    }
    $update = $stmt->execute(array(":nom"=>$nombre,":ape"=>$apellidos,":user"=>$user,":email"=>$email));
   } catch (Exception $e) {
       if ($e->getCode() == 23000){
           header("Location:editar_perfil.php?user=$user&error=23000");
       }else{
           die("Se ha producido un error al insertar" . $e->getMessage());
       }
   }

    if($update){
        session_reset();
        $_SESSION["user"] = $user;
        header("Location: editar_perfil.php?update=yes");
    }


}

if(isset($_POST["nueva_pass"])){

    $pass1 = $_POST["n_pass1"];
    $pass2 = $_POST["n_pass2"];
    $user_pass = $_SESSION["user"];


    if ($pass1 == ""){
        header("Location: editar_perfil.php?passvacia=vacia");
    }
    else if($pass1 === $pass2){
        require_once("conexion.php");
        $conexion = Conectar::conexion();
        $pass_cifrada = password_hash($_POST["n_pass1"],PASSWORD_DEFAULT);

        try{
        $sql = "UPDATE users SET PASSWORD = :pass WHERE USUARIO = '$user_pass'";
        $stmt= $conexion->prepare($sql);
        $update = $stmt->execute(array(":pass"=>$pass_cifrada));
        }catch (Exception $e) {
            die("Se ha producido un error al insertar" . $e->getMessage());
            
        }

        if($update){
            header("Location: editar_perfil.php?updatep=yes");
        }
 
    }else{
        header("Location: editar_perfil.php?passnoigual=error");
    }

    
    

}