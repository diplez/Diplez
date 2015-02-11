<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error ");
//$conexion = mysqli_connect("mysql7.000webhost.com", "a2758215_root", "ecuador123", "a2758215_taxra") or die("Error ");

$idC = $_GET['Idcliente'];
$idU = $_GET['Idunidad'];

if (isset($idC)&&isset($idU)) {
    if ($conexion->query("Insert into inv_unidad_inv_cliente (unidads_id,cliente_id) values($idU,$idC)")) {        
        echo "Datos Actualizados";
    } else {
        echo  "error";
    }
}
