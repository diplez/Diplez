<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title></title>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing-1.3.js"></script>
        <script src="js/jquery.iosslider.min.js"></script>                
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=es"></script>        
        <script src="js/mapa.js"></script>            
        <link rel="stylesheet" href="css/bootstrap.min.css" /> 
        <link rel="stylesheet" href="css/common.css" />
        <link rel="stylesheet" href="css/default.css" /> 
        <script type="text/javascript">
            $(document).ready(function() {
                $('.iosSlider').iosSlider({
                    snapToChildren: true,
                    desktopClickDrag: true
                });
            });
        </script>       
        <script type="text/javascript">

            function cambioTiempo() {
                setInterval(function() {
                    recuperarDatos();
                }, 2000);
            }

            var clientes = "";
            function recuperarDatos() {
                $.ajax({
                    type: 'POST',
                    url: "datosBD.php",
                    dataType: "text",
                    success: function(data) {
                        $('#lista').html(data);
                    }
                });
            }
        </script>
    </head>
    <body onload="cambioTiempo(), initMap();">        
        <div class = 'sliderContainer'id="principal">
            <div class = 'iosSlider'>
                <div class = 'slider' style="width: 100%">
                    <div class = 'item item1'>
                        <div style="height: 100%; overflow: auto;">
                            <div style="width: 70%; margin: 0 auto;text-align: center;padding-top: 5%;" class="container" >
                                <center><h2>Bienvenido al Sistema</h2></center>
                                <p>
                                    A continuacion se presenta la lista de clientes<br/>
                                    Para Asignar
                                </p>
                                <table class='container table table-bordered table-hover'>
                                    <tr class='btn-primary'>
                                        <th style="width: 30%">Usuario</th><th style="width: 70%">Direccion</th>
                                    <tr/>
                                </table>
                                <div id="lista" style="height: 250px; overflow: auto">                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = 'item item2'>                        
                        <div id="map" style="width: 100%; height: 100%;"></div>
                    </div>                                                            

                    <div class = 'item item3'>
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error ");

                        $registros = $conexion->query("SELECT * FROM inv_cliente");
                        echo "<ul id='datosMaps' style='display:none'>";
                        while ($reg = mysqli_fetch_array($registros)) {
                            if ($reg['asignacion'] == 0) {
                                //$datos = array('latitud' => $reg['latitud'], 'longitud' => $reg['longitud'],'cedula'=>$reg['cedula']);
                                echo "<li>" . $reg['nombre'] . "=" . $reg['latitud'] . '=' . $reg['longitud'] . "</li>";
                            }
                        }
                        echo "</ul>";
                        ?>
                        <div style="width: 70%;text-align: center;color:white;margin: 0 auto;padding-top: 15%">
                            <h2>TaxisCall</h2>
                            <p>& Derechos Reservados</p>                            
                            <input class="btn btn-danger" id="cerrarSession" type="button" value="Cerrar Session"/>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>        
        <script src="js/autenticacionCod.js"></script>        
    </body>
</html>