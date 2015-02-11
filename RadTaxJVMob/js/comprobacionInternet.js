/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function updateOnlineStatus(msg) {
    var status = document.getElementById("status");
    var condition = navigator.onLine ? "ONLINE" : "OFFLINE";
    status.setAttribute("class", condition);
    var state = document.getElementById("state");
    state.innerHTML = condition;
    var log = document.getElementById("log");
        log.appendChild(document.createTextNode("Event: " + msg + "; status=" + condition + "\n"));
}
function loaded() {
    updateOnlineStatus("load");
    document.body.addEventListener("offline", function() {
        updateOnlineStatus("offline");
    }, false);
    document.body.addEventListener("online", function() {
        updateOnlineStatus("online");
    }, false);
}

window.onload = function() {
    loaded();
};

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