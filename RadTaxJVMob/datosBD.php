<?php

session_start(); //actualiza la noticia 
header('Content-Type:text/plain'); //texto de tipo plano
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate'); //para que no controle la cache.control de seguridad.

//$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error " . mysqli_error($link));
$conexion = mysqli_connect("db4free.net:3306", "diplez12345", "ecuador", "diplez12345") or die("Error ");

$cedula = addslashes(htmlspecialchars($_POST['cedula']));
$nombre = addslashes(htmlspecialchars($_POST['nombre']));
$ape = $_POST['apellido'];
$direccion = addslashes(htmlspecialchars($_POST['direccion']));
$telefono = addslashes(htmlspecialchars($_POST['telefono']));

if ( ($nombre!="") && ($cedula!="") &&($ape!="")&& $direccion!=''&&$telefono!='') {
    $consulta = "INSERT INTO inv_cliente (cedula, nombre, apellido,direccion,telefono,asignacion,correo,clave) values ('$cedula','$nombre','$ape','$direccion','$telefono',2,'$nombre','$cedula')";
    $conexion->query($consulta) or die("Error de consulta");
    echo "Registro Exitoso<br/>Usuario: nombre<br/>Clave: cedula";
}else{
    echo "Verifique de nuevo";
}
