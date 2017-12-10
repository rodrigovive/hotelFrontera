$(document).ready(function() {
    "use strict";
    if ($('#map').length) {
        var styles = [{
            featureType: "administrative",
            elementType: "all",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "landscape",
            elementType: "all",
            stylers: [{
                color: '#aaaaaa'
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "poi",
            elementType: "all",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "road",
            elementType: "all",
            stylers: [{
                visibility: "on"
            }, {
                lightness: -30
            }]
        }, {
            featureType: "transit",
            elementType: "all",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "water",
            elementType: "all",
            stylers: [{
                color: '#cccccc'
            }]
        }];
        var map;
        var mapOptions = {
            center: new google.maps.LatLng(-34.4407487,-58.5486687),
            zoom: 7,
            scrollwheel: false,
            panControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            disableDefaultUI: false,
            zoomControl: false,
            styles: styles
        };

        function initMap() {
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var bounds = new google.maps.LatLngBounds();
            var myIcon = new google.maps.MarkerImage("images/marker-pin.png", null, null, null, new google.maps.Size(10, 10));
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-34.4407487,-58.5486687),
                map: map,
                title: 'Agencia GAM',
                icon: myIcon
            });
        }

        initMap();
        google.maps.event.addDomListener(window, 'load', initMap);
        //google.maps.event.addDomListener(window, 'resize', initMap);
    }
});