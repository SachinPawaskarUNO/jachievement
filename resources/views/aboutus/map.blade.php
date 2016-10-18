@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<style>
    html, body {
        height: 100%;
        margin: auto;
        padding: auto;
    }
    #map {
        border: 8px solid #4CAF50;
        height: 75%;
        width: 80%;
        margin: auto;
        padding: auto;
        position:relative;
    }
</style>
<title>Schools Map</title>
<meta charset="utf-8">
<body style="background-color: rgba(140,198,62,0.85)">
<div class="container">
    <h1 style="color:white">Get Involved with Junior Achievement!</h1>
    <p style="color:white">If you would like to volunteer, request a program, or volunteer with JA,
        please reach out to a school near you!</p>
</div>

<div id="map"></div>
<script>
    var map;
    function initMap() {
        var PineCreek= {
            info: '<strong>Pine Creek Elementary</strong><br>\
					7801 N HWS Cleveland Blvd<br>Bennington, NE 68007<br>\
					<a id="direction-0">Directions</a>',
            lat: 41.330086,
            long:-96.167939
        };
        var FireRidge = {
            info: '<strong>FireRidge Elementary</strong><br>\
					19660 Farnam St<br> Elkhorn, NE 680227<br>\
					<a id="direction-1">Directions</a>',
            lat: 41.258039,
            long:-96.2225479
        };
        var Hillside = {
            info: '<strong>Hillside Elementary</strong><br>\
					7500 Western Ave <br>Omaha, NE 68114<br>\
					<a id="direction-2">Directions</a>',
            lat: 41.271576,
            long:-96.029346
        };
        var locations = [
            [PineCreek.info, PineCreek.lat, PineCreek.long, 0],
            [FireRidge.info, FireRidge.lat, FireRidge.long, 1],
            [Hillside.info, Hillside.lat, Hillside.long, 3],
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: new google.maps.LatLng(41.2523634, -95.9979883),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow({});
        var currentPosition = new google.maps.LatLng(41.2523634, -95.9979883);
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position){
                currentPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            });
        }
        var marker, i;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                    google.maps.event.addDomListener(document.getElementById("direction-" + i), 'click', function () {
                        window.open(
                                "https://www.google.com/maps/dir/" +
                                currentPosition.lat() +
                                "," +
                                currentPosition.lng() +
                                "/" +
                                locations[i][1] +
                                "," +
                                locations[i][2],
                                '_blank'
                        );
                    });
                }
            })(marker, i));
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqOmmqwN3ZKjnKRqO68H3OnCPHohK2okM&callback=initMap"
        async defer></script>
</body>
</html>
@endsection