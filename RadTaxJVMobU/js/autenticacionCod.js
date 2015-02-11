/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function logeoUser() {
    var user = prompt("ingresar", "");
    $.get('autenticacionUser.php', {codigo: user}, function(data) {
        if (data.split('=')[1] !== 'true') {
            alert("Error Intente de Nuevo");
            logeoUser();
        } else {
            localStorage.setItem(1, data.split('=')[0]);
            alert("Bienvenido");
        }
    });
}

$(function() {
    if (localStorage.length <= 0) {
        logeoUser();
    }
    $('#cerrarSession').on('click', function() {
        $.get('cerrarSession.php', {codigo: localStorage.getItem(1)}, function(respuesta) {
            localStorage.clear();
            logeoUser();
        });
    });
});