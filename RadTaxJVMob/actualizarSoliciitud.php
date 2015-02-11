<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("127.13.165.2:3306", "adminEHXtNmV", "3QPx-SZY4u1_", "taxicall") or die("Error " . mysqli_error($link));

$id = addslashes(htmlspecialchars($_GET['cedula']));

if($conexion->query("Update inv_cliente Set asignacion='2'  where cedula='$id'")){
    echo "Su Solicitud Cancelada";
}else{
    echo "error actualizar solicitud";
}