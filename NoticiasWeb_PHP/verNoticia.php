<?php

session_start();

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("127.0.0.1", "root", "", "db_ejercicio") or die("Error " . mysqli_error($link));

$registros = $conexion->query("SELECT * FROM noticias");

while ($reg = mysqli_fetch_array($registros)) {
    $navegador = getenv("HTTP_USER_AGENT");
    if (preg_match("/MSIE/i", "$navegador")) {
        echo $reg['texto'] . "<br/>";
    } else {
        echo $reg['texto'] . "\n";
    }
}
?>
