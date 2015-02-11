<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("127.13.165.2:3306", "adminEHXtNmV", "3QPx-SZY4u1_", "taxicall") or die("Error coneccion" . mysqli_error($link));

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


