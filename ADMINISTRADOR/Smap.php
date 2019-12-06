<?php
// Include the database configuration file
require_once 'db.php';



$result = $con->query("SELECT * FROM denuncias");


$result2 = $con->query("SELECT * FROM denuncias");

?>


<div class="form-group">
  <?php include ("includes/headerAdmin.php");  ?>
                        <html>
                          <head>
                            <style>
                              
                              #map {
                                height: 100%;  
                                width: 100%;  
                               }
                            </style>
                          </head>

                          <body>
                            
                        
                            <div id="map"></div>  
                            <script>

                                //INICIO JAVASCRIPT
                        
                            function initMap() {

                        var uluru = {lat: 24.143123, lng: -110.312280};       
                      
                      var bounds = new google.maps.LatLngBounds();
                               
                     
                      map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 14, center: uluru});
              
                          
                     
                      var markers = [
                          <?php if($result->num_rows > 0){
                              while($row = $result->fetch_assoc()){
                                  echo '["'.$row['tipo'].'", '.$row['latitud'].', '.$row['longitud'].'],';
                              }
                          }
                          ?>
                      ];
                                          
                   
                      var infoWindowContent = [
                          <?php if($result2->num_rows > 0){
                              while($row = $result2->fetch_assoc()){ ?>
                                  ['<div class="info_content">' +
                                  '<h3><?php echo $row['tipo']; ?></h3>' +
                                  '<p><?php echo $row['comentario']; ?></p>' + '</div>'],
                          <?php }
                          }
                          ?>
                      ];
                          
                    
                      var infoWindow = new google.maps.InfoWindow(), marker, i;
                      
                   
                      for( i = 0; i < markers.length; i++ ) {
                          var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                          bounds.extend(position);
                          marker = new google.maps.Marker({
                              position: position,
                              map: map,
                              title: markers[i][0]
                          });
                          
                         
                          google.maps.event.addListener(marker, 'click', (function(marker, i) {
                              return function() {
                                  infoWindow.setContent(infoWindowContent[i][0]);
                                  infoWindow.open(map, marker);
                              }
                          })(marker, i));


                            google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                              return function() {
                                  infoWindow.setContent(infoWindowContent[i][0]);
                                  infoWindow.open(map, marker);
                              }
                          })(marker, i));

                              google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
                              return function() {
                                  infoWindow.setContent(infoWindowContent[i][0]);
                                  infoWindow.close(map, marker);
                              }
                          })(marker, i));



                          

                          
                          map.fitBounds(bounds);
                      }

                      
                      var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                          this.setZoom(14);
                          google.maps.event.removeListener(boundsListener);
                      });
                      
                  }

               


                            // FIN JAVASCRIPT

                            </script>

                            <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkYGMio7haeuKOxAmjUAMZtHbI9GpK0kc&callback=initMap">
                            </script>
                            <?php
                            $lat =  $_COOKIE["lat"];
                            $lng =  $_COOKIE["lng"];
                            //echo $miVariable;
                            ?>
                          </body>
                        </html>

                    </div>