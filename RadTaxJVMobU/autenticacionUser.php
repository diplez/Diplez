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

$conexion = mysqli_connect("127.13.165.2:3306", "adminEHXtNmV", "3QPx-SZY4u1_", "taxicall") or die("Error coneccion" . mysqli_error($link));
$usuario = addslashes(htmlspecialchars($_GET['codigo']));

if ( ($usuario!="")) {
    $result = $conexion->query("select * from inv_unidad where numeroUnidad='$usuario'") or die("Error de consulta");    
    if(mysqli_num_rows($result)<=1){
        $userFind = mysqli_fetch_object($result);
        $conexion->query("Update inv_unidad Set estado='1' where id='$userFind->id'");
        echo $userFind->id.'=true';
    }else{
        echo "Usuario Incorreto";
    }
}else{
    echo "Verifique de nuevo";
}