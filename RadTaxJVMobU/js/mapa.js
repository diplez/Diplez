/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function initMap() {
    var n = 1;
    var options = {
        zoom: 14
        , center: new google.maps.LatLng(-4, -79.2167)
        , mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById('map'), options);

    var place = new Array();
    var tam = $("#datosMaps li").size();
    for (var i = 0; i < tam; i++) {
        place[$("#datosMaps li").get(i).innerHTML.split("=")[0]] = new google.maps.LatLng($("#datosMaps li").get(i).innerHTML.split("=")[1], $("#datosMaps li").get(i).innerHTML.split("=")[2]);
    }
    //place['Fajardo'] = new google.maps.LatLng(-3.999298, -79.201968);

    for (var i in place) {
        var marker = new google.maps.Marker({
            position: place[i]
            , map: map
            , title: i
            , icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/red/marker' + n++ + '.png'
        });

        google.maps.event.addListener(marker, 'click', function() {
            var popup = new google.maps.InfoWindow();
            var note = this.title + " Esta Ubicado Aqui";
            popup.setContent(note);
            popup.open(map, this);
        });
    }
}
;