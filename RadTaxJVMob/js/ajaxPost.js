/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("#btn_logueo").click(function() {
    var url = "autentificacionDB.php"; // El script a dónde se realizará la petición.
    $.ajax({
        type: "POST",
        url: url,
        async: true,
        data: $("#form-Login").serialize(), // Adjuntar los campos del formulario enviado.
        success: function(data) {
            //$("#respuesta").html(data); // Mostrar la respuestas del script PHH
            alert(data);
            if (data === "Bienvenido") {
                initializeCliente();
                localStorage.setItem(1, $("#clave").val());
                $("#usuario").val("");
                $("#clave").val("");
                $('#pag1').hide();
                $('#pag3').load('solicitud.html');
                $('#pag3').show();
            }
        }
    });
    return false; // Evitar ejecutar el submit del formulario.                    

});


$("#btn_guardarReg").click(function() {
    var url = "datosBD.php"; // El script a dónde se realizará la petición.
    $.ajax({
        type: "POST",
        url: url,
        async: true,
        data: $("#formRegistro").serialize(), // Adjuntar los campos del formulario enviado.
        success: function(data) {
            //$("#respuesta").html(data); // Mostrar la respuestas del script PHH
            alert(data);
            if (data === "Registro Exitoso") {
                setInterval(initializeCliente(), 1000);
                localStorage.setItem(1, $("#cedula").val());
                $("#nombre").val("");
                $("#apellido").val("");
                $("#direccion").val("");
                $("#cedula").val("");
                $("#telefono").val("");
                $('#pag2').fadeOut(1000, function() {
                    $('#pag3').load('solicitud.html');
                    $('#pag3').fadeIn(1000);
                });
            }
        }
    });
    return false; // Evitar ejecutar el submit del formulario.                    

});