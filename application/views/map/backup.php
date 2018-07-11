<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>

  <button id="lala">Lala</button> <hr>
    <div id="map"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
  <script>

    var markers = [];
    var map = "";
    var bounds = "";
    function initMap() {  
      var infoWindow = new google.maps.InfoWindow;
      bounds = new google.maps.LatLngBounds(); 
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: -6.885500, lng: 107.615407},
        mapTypeId: 'roadmap'
      });
    }



     function addMarker(lat, lng) {
        var lokasi = new google.maps.LatLng(lat, lng);
        bounds.extend(lokasi);
        var marker = new google.maps.Marker({
            map: map,
            position: lokasi,
        });       
        map.fitBounds(bounds);
      
        markers.push(marker);
        return marker;
      }

    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var _lat  = position.coords.latitude
        var _lng  =  position.coords.longitude
        var pos = {
          lat: _lat,
          lng: _lng,
        };
        kirim_lokasi(_lat, _lng);
        
      }, function(err) {
        console.log("error : " + err)
      });
    } else {
      console.log("Tidak BErfungsi")
    }

    function kirim_lokasi(lat, lng) {
      $.ajax({
          method:"POST",
          url:'<?php echo "maps/getlokasi" ?>',
          data:{latitude:lat, longitude:lng},
          dataType: "json",
          success:function(data){
          
            for (let i = 0; i <data.length; i++) {
              addMarker(data[i]['lat'], data[i]['lng']);
            }


            

            
          
              // function bindInfoWindow(marker, map, infoWindow, html) {
              //   google.maps.event.addListener(marker, 'click', function() {
              //     infoWindow.setContent(html);
              //     infoWindow.open(map, marker);
              //   });
              // }


            
          }
      });
    }  
  //  });
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpALWzkNO7VH_pCSX30bt43_7h3sIeqQI&libraries=places&callback=initMap" async defer></script>
   
  </body>
</html>