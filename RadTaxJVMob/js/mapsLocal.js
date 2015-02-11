/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function initialize() {
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(-4.001636, -79.208038)
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

    var marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        title: 'Click to zoom'
    });

    google.maps.event.addListener(map, 'center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        window.setTimeout(function() {
            map.panTo(marker.getPosition());
        }, 3000);
    });

    google.maps.event.addListener(marker, 'click', function() {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
    });
}

google.maps.event.addDomListener(window, 'load', initialize);