<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map</title>
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
<body>

<div id="map"></div>


<script src="https://maps.googleapis.com/maps/api/js?key=apikey&callback=initMap" async defer></script>
<script>

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 40.409264, lng: 49.867092},
            zoom: 12
        });

        var markers = @json($markers);

        markers.forEach(marker => {
            new google.maps.Marker({
                position: {lat: Number(marker.latitude), lng: Number(marker.longitude)},
                map: map,
                title: marker.title,
            });
        });
    }
</script>
</body>
</html>
