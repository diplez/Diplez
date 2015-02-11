<?php

session_start();

header('Content-Type:text/plain');
header( 'Content-type: text/html; charset=iso-8859-1' ); //Para mostrar las ñ y acentos
header('Content-Type: text/html; charset=UTF-8'); 
header('Cache-Control: no-store, no-cache, must-revalidate');

$tiempo = time();
$mysqltiempo = date ("Y-m-d H:i:s", $tiempo);

$nombre= addslashes(htmlspecialchars($_POST['nombre']));
$texto=addslashes(htmlspecialchars($_POST['textoC']));

$conexion = mysqli_connect("127.0.0.1", "root", "", "db_ejercicio") or die("Error " . mysqli_error($link));


$conexion->query("insert into comentarios (nombre,texto,tiempo) values ('$nombre','$texto','$mysqltiempo')");

$registros=$conexion->query("SELECT * FROM comentarios ORDER BY tiempo DESC LIMIT 10");

echo "Guardado Exitosamente";
?>