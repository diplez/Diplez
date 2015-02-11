<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error ");

$id = addslashes(htmlspecialchars($_POST['key']));
$latitud = addslashes(htmlspecialchars($_POST['latitud']));
$longitud = addslashes(htmlspecialchars($_POST['longitud']));

if($conexion->query("Update inv_cliente Set asignacion='0', latitud='$latitud', longitud='$longitud'  where cedula='$id'")){
    echo "Su Solicitud Aceptada\nEspere su Unidad en su Ibicacion Actual";
}else{
    echo "Su Solicitud Aceptada\nEspere su Unidad en su Ibicacion Actual";
}