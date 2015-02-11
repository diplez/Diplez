

// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.


$(function() {
    var center = new google.maps.LatLng(-4.001636, -79.208038);

    var options = {
        map: ".map_canvas",
        center: new google.maps.LatLng(-4.001636, -79.208038)
    };

    var map = $("#geocomplete").geocomplete(options);
    map.setCenter(center);
    map.setZoom(15);
});