<?php
header('Content-Type:text/plain');
header('Content-type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$conexion = mysqli_connect("db4free.net:3306", "diplez12345", "ecuador", "diplez12345") or die("Error ");
//$conexion = mysqli_connect("localhost", "root", "", "radioTaxijvm") or die("Error ");
//$conexion = mysqli_connect("mysql7.000webhost.com", "a2758215_root", "ecuador123", "a2758215_taxra") or die("Error ");

$hola = "";

$registros = $conexion->query("SELECT * FROM inv_cliente");
echo "<table class='container table table-bordered table-hover'>";
$i = 0;
while ($reg = mysqli_fetch_array($registros)) {
    if ($reg['asignacion'] != 1 && $reg['asignacion'] != 2) {
        //$datos = array('latitud' => $reg['latitud'], 'longitud' => $reg['longitud'],'cedula'=>$reg['cedula']);
        echo "<tr>"
        . "<th style='width: 30%'><form method='post' id='form-asignar" . $i++ . "'>"
        . '<input style="display:none" value="' . $reg["id"] . '" name="idC" id="idC" type="text"/>'
        . '<input style="display:none" value="' . $reg["cedula"] . '" name="key" type="text"/>'
        . '<input type="button" value="+" style="border-radius: 50%;background: red" id="btn-asignarU"/>'
        . '  ' . $reg['nombre'] . ' ' . $reg['apellido'] .
        "</form></th>" .
        "<th>" .
        $reg['direccion'] . $hola .
        "</th>";
        echo "</tr>";
    }
}
echo '</table>';
?>
<script src="js/jquery.min.js"></script>
<script>
    $('form #btn-asignarU').click(function() {
        var url = "cargaDatos.php"; // El script a dónde se realizará la petición.
        $.ajax({
            type: "POST",
            url: url,
            data: $("#form-asignar" + $('form #btn-asignarU').index(this)).serialize(), // Adjuntar los campos del formulario enviado.
            success: function(data) {
                $.get('cargasUnidad.php', {Idcliente: $('#idC').val(), Idunidad: localStorage.getItem(1)}, function(resultado) {
                    alert(data);
                });
            }
        });
        return false; // Evitar ejecutar el submit del formulario.                    
    });

    function alertDGC(mensaje)
    {
        var dgcTiempo = 500;
        var ventanaCS = '<div class="dgcAlert"><div class="dgcVentana"><div class="dgcCerrar"></div><div class="dgcMensaje">' + mensaje + '<br><div class="dgcAceptar">Aceptar</div></div></div></div>';
        $('body').append(ventanaCS);
        var alVentana = $('.dgcVentana').height();
        var alNav = $(window).height();
        var supNav = $(window).scrollTop();
        $('.dgcAlert').css('height', $(document).height());
        $('.dgcVentana').css('top', ((alNav - alVentana) / 2 + supNav - 100) + 'px');
        $('.dgcAlert').css('display', 'block');
        $('.dgcAlert').animate({opacity: 1}, dgcTiempo);
        $('.dgcCerrar,.dgcAceptar').click(function(e) {
            $('.dgcAlert').animate({opacity: 0}, dgcTiempo);
            setTimeout("$('.dgcAlert').remove()", dgcTiempo);
        });
    }
    window.alert = function(message) {
        alertDGC(message);
    };
</script>
<style>
    .dgcAlert {top: 0;position: absolute;width: 100%;display: block;height: 1000px; background: url(http://www.dgcmedia.es/recursosExternos/fondoAlert.png) repeat; text-align:center; opacity:0; display:none; z-index:999999999999999;}
    .dgcAlert .dgcVentana{width: 80%; background: white;min-height: 150px;position: relative;margin: 0 auto;color: black;padding: 10px;border-radius: 10px;}
    .dgcAlert .dgcVentana .dgcCerrar {height: 25px;width: 25px;float: right; cursor:pointer; background: url(http://www.dgcmedia.es/recursosExternos/cerrarAlert.jpg) no-repeat center center;}
    .dgcAlert .dgcVentana .dgcMensaje { margin: 0 auto; padding-top: 45px; text-align: center; font-size: 20px;}
    .dgcAlert .dgcVentana .dgcAceptar{background:#09C; bottom:20px; display: inline-block; font-size: 12px; font-weight: bold; height: 24px; line-height: 24px; padding-left: 5px; padding-right: 5px;text-align: center; text-transform: uppercase; width: 75px;cursor: pointer; color:#FFF; margin-top:50px;}
</style>