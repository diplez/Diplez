<?php

header('Content-Type:text/plain');
header( 'Content-type: text/html; charset=iso-8859-1' ); //Para mostrar las ñ y acentos
header('Content-Type: text/html; charset=UTF-8'); 
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("127.0.0.1", "root", "", "db_ejercicio") or die("Error " . mysqli_error($link));


$registros=$conexion->query("SELECT * FROM comentarios ORDER BY tiempo DESC LIMIT 10");
$results = array();

while ($reg=mysqli_fetch_array($registros)) 
{	
	$results[] = $reg;
}

foreach($results as $reg)
{
	$navegador = getenv("HTTP_USER_AGENT");
	if (preg_match("/MSIE/i", "$navegador"))
	{
		echo "<table style='width: 80%;' border='1'>"."<tr>
                        <th colspan='2'>COMENTARIOS</th>
                    </tr>
                    <tr>
                        <th>".$reg['nombre']."</th>
                        <th>".$reg['tiempo']."</th>
                    </tr><tr>
                        <th colspan='2'>".$reg['texto']."</th>
                    </tr>
                </table>";                
	}
	else
	{
		echo "<table style='width: 80%;' border='1'>"."<tr>
                        <th colspan='2'>COMENTARIOS</th>
                    </tr>
                    <tr>
                        <th>".$reg['nombre']."</th>
                        <th>".$reg['tiempo']."</th>
                    </tr><tr>
                        <th colspan='2'>".$reg['texto']."</th>
                    </tr>
                </table>";   
	}	
}

?>
