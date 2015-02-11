/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('#listaTareas > li a').on('click', function() {
    var index = $('#listaTareas > li a').index(this);
    var tam = $('#listaTareas li').size();
    for (var i = 0; i < tam; i++) {
        if ((index + 1) === (i + 1)) {
            $('#listaTareas li').eq(index + 1).addClass('active');
        } else {
            $('#listaTareas li').eq(i + 1).removeClass('active');
        }
    }
    cambioTiempo();
});

window.onload = function() {
    $('.principal .derecho').load('http://localhost:8084/RadTaxJVWeb/faces/sistema/lista.xhtml');
    cambioTiempo();
};

$('#inicio').on('click', function() {
    $('.principal .derecho').load('http://localhost:8084/RadTaxJVWeb/faces/sistema/lista.xhtml');
});

$('#unidades').on('click', function() {
    $('.principal .derecho').load('http://localhost:8084/RadTaxJVWeb/faces/sistema/listaUnidad.xhtml');
});


var inicio,unidad;
// PROBLEMA CON INTENDO DE MANIPULACION DE DATOS, AL RECARGARSE TODA LA PAGINA EN EL TIEMPO DADO ES IMPOSIBLE HACER UNA BUSQUEDA NORMAL
function cambioTiempo() {
    if ($('#inicio').hasClass('active')) {
        clearInterval(unidad);
        inicio = setInterval(function() {
            $('.principal .derecho').load('http://localhost:8084/RadTaxJVWeb/faces/sistema/lista.xhtml');
        }, 5000);
    } else {
        clearInterval(inicio);
        unidad = setInterval(function() {
            $('.principal .derecho').load('http://localhost:8084/RadTaxJVWeb/faces/sistema/listaUnidad.xhtml');
        }, 5000);        
    }
}