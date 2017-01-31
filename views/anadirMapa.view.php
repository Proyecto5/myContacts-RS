<?php 
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
    }
    $_SESSION['con_id'] = $con_id;
    extract($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyContacts login page">
    <meta name="author" content="Sergi, Roger">
    <style type="text/css">
      /*html, body { height: 50%; margin: 0; padding: 0; }*/
      #map { height: 50%; width: 80%;}
    </style>

    <!-- TITULO -->
    <title>MyContacts</title>

    <!-- BOOTSTRAP -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- FUENTES -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- <script>function formulario(f) { 
    if (f.inputUsuario.value   == '') { alert ('El nombre de usuario esta vacío.');  
    f.inputUsuario.focus(); return false; } 
    if (f.inputEmail.value  == '') { alert ('El email esta vacío'); 
    f.inputEmail.focus(); return false; }  
    }
    </script> -->
</head>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            <!-- LOGO -->
                <h1 id="homeHeading">Añadir mapa</h1>
                <hr>
            <!-- FORMULARIO -->
                
            <!-- INPUT NOMBRE -->
                  

                  <br/>
                  <?php 

                  if (isset($error)){
                  echo "<h4>" . $error . "</h4>";
                  unset($error);
                  unset($_SESSION['error']); 
                  }
                  ?>
            <!-- ENVIAR -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                    <form name="formulario" method="POST" action="pruebas.php">
                      <input type="text" id="direccion" name="direccion" value="<?php if (isset($_SESSION['dir_residencia'])) {
                        echo $_SESSION['dir_residencia'];
                      }else{
                        echo '';
                      } 

                      ?>">
                      
                      <button type="submit" class="btn btn-primary btn-xl">Modificar <i class="fa fa-envelope" aria-hidden="true"></i></button><br/><br/>
                    </form>
                    <div  style="width: 860px;">
                      <div id="map"></div>
    <script type="text/javascript">
      /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Casa de Roger</b>, esta es mi casa.</b>, aqui vivo ' +
            '</p>'+
            '</div>'+
            '</div>';
      
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
          var marker;
          var map;
      function initMap() {
        var myLatLng = {lat: 41.3497778, lng: 2.1077222222222223};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng,
        });

      
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      
        function placeMarker(location) {
                      if(marker){ //on vérifie si le marqueur existe
                          marker.setPosition(location); //on change sa position
                      }else{
                          marker = new google.maps.Marker({ //on créé le marqueur
                              position: location, 
                              map: map
                          });
                      }
                      document.getElementById('lat').value=location.lat();
                      document.getElementById('lng').value=location.lng();
                      getAddress(location);
                  
                  function getAddress(latLng) {
    geocoder.geocode( {'latLng': latLng},
      function(results, status) {
        if(status == google.maps.GeocoderStatus.OK) {
          if(results[0]) {
            document.getElementById("address").value = results[0].formatted_address;
          }
          else {
            document.getElementById("address").value = "No results";
          }
        }
        else {
          document.getElementById("address").value = status;
        }
      });
    alert(document.getElementById("address").value);
    }
            }

            google.maps.event.addListener(map, 'click', function(event) {

                marker = new google.maps.Marker({position: event.latLng, map: map});
           
                geocoder.geocode({
                  'latLng': event.latLng
                }, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                    
                     //alert(results[0].formatted_address);
                     //document.formulario.direccion.value =  ;
                     //document.formulario.direccion.value.write()
                      document.getElementById("direccion").value=  results[0].formatted_address;
                    }
                  }
                });

            });
            
            
            google.maps.event.addDomListener(window, 'load', initialize); 
      }

function codeAddress(lat, lng) {
  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode(
    {'latLng': latLng},
    function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var direccion = results[0].formatted_address;
        alert('Nueva dirección : ' + direccion);
      } else {
        alert('Se desconoce la dirección debido a : ' + status);
      }
    }
  );
}
google.maps.event.addDomListener(window, 'load', initialize);
      
      function geocodeAddress(geocoder, resultsMap) {
        var address = "08901";
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              animation: google.maps.Animation.BOUNCE,
              position: results[0].geometry.location
            });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASxAHcsLZPQze91ew2CQqiO2pZw9BrcuU&callback=initMap"></script>

                    </div>
                      <a href="javascript:history.back()">Volver atrás</a>
                    </div>
                  </div>
                                </div>
                <br/>
        </div>
    </header>
    

</body>

</html>
