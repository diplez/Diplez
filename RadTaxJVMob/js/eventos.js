/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function() {    

    if (localStorage.length !== 0) {
        $('#pag1').hide();
        $('#pag2').hide();
        $('#pag3').load('solicitud.html');
        $('#pag3').show();
    } else {        
        $('#pag1').show();
        $('#pag2').hide();
        $('#pag3').hide();
    }

    $('#btn_cerrar').on('click', function() {
        localStorage.clear();
        localStorage.removeItem(1);
        $('#pag3').fadeOut(1000, function() {
            $('#pag1').fadeIn(1000);
        });        
    });

    $('#btn_registrar').on('click', function() {
        $('#pag1').fadeOut(1000, function() {
            $('#pag2').fadeIn(1000);
        });
    });

    $('#btn_atras').on('click', function() {
        $('#pag2').fadeOut(1000, function() {
            $('#pag1').fadeIn(1000);
        });
    });
});