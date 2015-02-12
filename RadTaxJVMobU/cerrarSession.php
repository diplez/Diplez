<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-Type:text/plain'); //texto de tipo plano
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate'); //para que no controle la cache.control de seguridad.

//$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error " . mysqli_error($link));
$conexion = mysqli_connect("db4free.net:3306", "diplez12345", "ecuador", "diplez12345") or die("Error ");

$codigo = $_GET['codigo'];

echo $conexion->query("Update inv_unidad Set estado='0' where id=$codigo");