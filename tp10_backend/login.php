<?php

$user = $_POST["user"];
$pass = $_POST["pass"];

$usuario = "admin";
$contrasenia = "1234";

if($user == $usuario && $pass == $contrasenia){
    header("location: listar.php");
}else{
    header("location: error.html");
}

?>