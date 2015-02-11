<?php

session_start();//actualiza la noticia 
header('Content-Type:text/plain');//texto de tipo plano
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');//para que no controle la cache.control de seguridad.

$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];

$conexion = mysqli_connect("127.0.0.1", "root", "", "db_ejercicio") or die("Error " . mysqli_error($link));
$consulta = "select password from login where usuario = '$usuario' && password = '$password';";
$result = $conexion->query($consulta) or die($mysqli->error . __LINE__);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $noticia = addslashes(htmlspecialchars($_POST['texto']));  //decifra el serializable.
    $conexion->query("update noticias SET texto='$noticia' WHERE 1 ");//actualizador.
    echo "Actualizado Correctamente.".$_SESSION['usuario'];
} else {
    echo "No se ha podido actualizar.".$_SESSION['usuario'];
}
?>