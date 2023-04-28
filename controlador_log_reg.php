<?php


if(isset($_POST["login"])){
    require_once("login.php");
}
else if(isset($_POST["registrarse"])){
    header("Location: form_registro.php");
}
else{
    header("Location: index.php");
}