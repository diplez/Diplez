<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start(); //actualiza la noticia 
header('Content-Type:text/plain'); //texto de tipo plano
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate'); //para que no controle la cache.control de seguridad.

//$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error " . mysqli_error($link));
$conexion = mysqli_connect("db4free.net:3306", "diplez12345", "ecuador", "diplez12345") or die("Error ");

$usuario = addslashes(htmlspecialchars($_POST['usuario']));
$clave = addslashes(htmlspecialchars($_POST['clave']));

if ( ($usuario!="") && ($clave!="")) {
    $result = $conexion->query("select * from inv_cliente where correo='$usuario' and clave='$clave'") or die("Error de consulta");    
    if(mysqli_num_rows($result)==1){
        echo "Bienvenido";
    }else{
        echo "Usuario Incorreto";
    }
}else{
    echo "Verifique de nuevo";
}