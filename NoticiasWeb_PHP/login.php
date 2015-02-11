<?php

session_start();

$usuario = addslashes(htmlspecialchars($_POST["usuario"]));
$password = addslashes(htmlspecialchars($_POST["password"]));

$_SESSION['usuario'] = $usuario;
$_SESSION['password'] = $password;

$conexion = mysqli_connect("127.0.0.1", "root", "", "db_ejercicio") or die("Error " . mysqli_error($link));

$consulta = "select password from login where usuario = '$usuario' && password = '$password';";
$result = $conexion->query($consulta) or die($mysqli->error . __LINE__);

$count = mysqli_num_rows($result);

if ($count == 1) {  //autentica al usuario guardando variables de sesion  
    $_SESSION['estado'] = "TRUE";
    echo "Usuario Correcto  ".$_SESSION['estado']."<input type='hidden' value='1' id='estado'/>";
} else {
    $_SESSION['estado'] = "FALSE";
    echo "Usuario Incorrecto  ".$_SESSION['estado']."<input type='hidden' value='0' id='estado'/>";
}
?>