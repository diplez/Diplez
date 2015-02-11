<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error ");
//$conexion = mysqli_connect("mysql7.000webhost.com", "a2758215_root", "ecuador123", "a2758215_taxra") or die("Error ");

$key = $_POST['key'];
$idC = $_POST['idC'];

$date = new DateTime();

if (isset($key)) {
    if ($conexion->query("Update inv_cliente Set asignacion='1' where cedula='$key'")) {        
        $conexion->query("Insert into inv_llamada (fecha,hora, cliente_id) values ('".$date->format('Y-m-d H:i:s')."','".$date->format('Y-m-d')."',$idC)");
        echo $date->format('Y-m-d H:i:s').'gf'.$idC;
    } else {
        echo  "error";
    }
}


