<?php

session_start(); //actualiza la noticia 
header('Content-Type:text/plain'); //texto de tipo plano
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate'); //para que no controle la cache.control de seguridad.

$conexion = mysqli_connect("127.13.165.2:3306", "adminEHXtNmV", "3QPx-SZY4u1_", "taxicall") or die("Error " . mysqli_error($link));

$cedula = addslashes(htmlspecialchars($_POST['cedula']));
$nombre = addslashes(htmlspecialchars($_POST['nombre']));
$ape = $_POST['apellido'];
$direccion = addslashes(htmlspecialchars($_POST['direccion']));
$telefono = addslashes(htmlspecialchars($_POST['telefono']));

if ( ($nombre!="") && ($cedula!="") &&($ape!="")&& $direccion!=''&&$telefono!='') {
    $consulta = "INSERT INTO inv_cliente (cedula, nombre, apellido,direccion,telefono,asignacion,correo,clave) values ('$cedula','$nombre','$ape','$direccion','$telefono',2,'$nombre','$cedula')";
    $conexion->query($consulta) or die("Error de consulta");
    echo "Registro Exitoso";
}else{
    echo "Verifique de nuevo";
}
