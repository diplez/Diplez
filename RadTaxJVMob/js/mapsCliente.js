/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var map;

function drawMap(position) {

    var myLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    $('#latitud').val(position.coords.latitude);
    $('#longitud').val(position.coords.longitude);
    $('#key').val(localStorage.getItem(1));

    var mapOptions = {
        zoom: 15,
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions);


    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: "Tu ubicación"
    });



}

//En caso de no soportar Geolozalizacion
function initializeCliente() {
    var x = document.getElementById("demo");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(drawMap);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
google.maps.event.addDomListener(window, 'load', initializeCliente);