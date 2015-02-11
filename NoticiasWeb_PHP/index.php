<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php session_start(); ?>
        <meta charset="UTF-8">        

        <link rel="stylesheet" href="./css/estilos.css" type="text/css" media="all" />        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                  
        <script>

            function cambioTiempo() {
                setInterval(function() {
                    $('#izComen').load('refresco.php');
                }, parseInt(document.getElementById('tiempoE').value) * 60000);
            }

            function activacionNoticias() {
                if ($('#estado').val() === "1") {
                    $("#noticias #activoN").show();
                    $('#noticias #inactivo').hide();
                } else {
                    $("#noticias #activoN").hide();
                }
            }

            $(function() {
                $('#Cambiotiempo').on('click', function() {
                    cambioTiempo();
                    alert("Cambio Realizado Exitosamente");
                });

                activacionNoticias();
                $("#btn_enviar").click(function() {
                    document.getElementById('texto').value = $('#noticias #inactivo').text();//obtiene el valor que esta 
                    var url = "login.php"; // El script a dónde se realizará la petición.
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
                        success: function(data) {
                            $("#respuesta").html(data); // Mostrar la respuestas del script PHP
                            activacionNoticias();
                        }
                    });
                    return false; // Evitar ejecutar el submit del formulario.                    

                });

                $("#envio-Noticias").click(function() {
                    var url = "noticia.php"; // El script a dónde se realizará la petición.
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#FNoticias").serialize(), // Adjuntar los campos del formulario enviado.
                        success: function(data) {
                            $('#activoN').prepend(data);
                            activacionNoticias();
                        }
                    });
                    return false; // Evitar ejecutar el submit del formulario.                    

                });

                $("#envio-comentario").click(function() {
                    var url = "comentarios.php"; // El script a dónde se realizará la petición.
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#formComentarios").serialize(), // Adjuntar los campos del formulario enviado.
                        success: function(data) {
                            $('#resultado').html(data);
                            $('#izComen').load('refresco.php');//metodo para cargar contenido dinamico
                        }
                    });
                    return false; // Evitar ejecutar el submit del formulario.                    

                });
                $('#inactivo').load("verNoticia.php");
                $('#izComen').load('refresco.php');
            });
        </script>               
        <title></title>
    </head>
    <body>                    
        <section id="login">
            <form method="POST" id="formulario">
                <table>            
                    <tr>
                        <th>Usuario</th>
                        <th><input name="usuario" type="text" placeholder="Ingrese Usuario"/></th>
                    </tr>
                    <tr>
                        <th>Contraseña</th>
                        <th><input name="password" type="text" placeholder="Ingrese Clave"/></th>
                    </tr>
                    <tr>
                        <th colspan="2"><input type="button" value="Ingresar" id="btn_enviar" /></th>
                    </tr>
                </table>                
            </form>
            <div id="respuesta">     
                <input type="hidden" value="0" id="estado"/>
            </div>
        </section>
        <section id="noticias">

            <div id="activoN">
                <form method="POST" id="FNoticias">          
                    <textarea id="texto" name="texto" class="edicion" ></textarea><br/>
                    <input type="button" value="Guardar" id="envio-Noticias"/>                              
                </form>                
            </div>

            <div id="inactivo">
            </div>                

        </section>
        <section id="comentarios">            
            <div id="izComen">                                
            </div>

            <div id="deComen">
                <!--<th>Comentario</th> 
                        <th><textarea cols="30" rows="10"></textarea></th>!-->
                <form method="POST" id="formComentarios">
                    <table>
                        <tr>
                            <th>Usuario</th>
                            <th><input type="text"  name="nombre" placeholder="Ingrese Nombre"/></th>
                        </tr>
                        <tr>
                            <th>Comentario</th>
                            <th><textarea id="textoC" name="textoC" cols="30" rows="10"></textarea></th>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <input type="button" value="Comentar" id="envio-comentario"/>
                            </th>                        
                        </tr>
                        <tr>
                            <th colspan="2" id="resultado"></th>
                        </tr>
                    </table>


                    <br/>
                    <table>
                        <tr>
                            <th>Tiempo de Refresco de Comentarios</th>
                            <th><input type="number" id="tiempoE" /></th>
                        </tr>
                        <tr>
                            <th colspan="2"><input type="button" id="Cambiotiempo" value="cambiar"/></th>
                        </tr>
                    </table>
                </form>
            </div>
        </section>                   
    </body>
</html>