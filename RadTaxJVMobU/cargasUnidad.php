<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("127.13.165.2:3306", "adminEHXtNmV", "3QPx-SZY4u1_", "taxicall") or die("Error coneccion" . mysqli_error($link));

$idC = $_GET['Idcliente'];
$idU = $_GET['Idunidad'];

if (isset($idC)&&isset($idU)) {
    if ($conexion->query("Insert into inv_unidad_inv_cliente (unidads_id,cliente_id) values($idU,$idC)")) {        
        echo "Datos Actualizados";
    } else {
        echo  "error";
    }
}
