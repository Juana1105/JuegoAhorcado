<?php


if (isset($_POST["registro"])){

    require_once("conexion.php");

    $conexion = Conectar::conexion();

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $user = $_POST["user"];
    $pass_cifrada = password_hash($_POST["pass"],PASSWORD_DEFAULT);

   try {
    $sql = "INSERT INTO users(NOMBRE, APELLIDOS, USUARIO, PASSWORD, EMAIL) VALUES(:nom, :ape, :user, :pass, :email)";

    $stmt= $conexion->prepare($sql);
    $insert = $stmt->execute(array(":nom"=>$nombre,":ape"=>$apellidos,":user"=>$user,":pass"=>$pass_cifrada,":email"=>$correo));
   } catch (Exception $e) {
       if ($e->getCode() == 23000){
           header("Location:form_registro.php?user=$user&error=23000");
       }else{
           die("Se ha producido un error al insertar" . $e->getMessage());
       }
   }

    if($insert){
        header("Location: index.php");
    }




}