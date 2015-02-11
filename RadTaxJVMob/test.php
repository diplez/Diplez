<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error ");

$cedula = $_GET['cedula'];

$registros = $conexion->query("SELECT * FROM inv_cliente where cedula='$cedula'");
while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['asignacion']."="."h";
}