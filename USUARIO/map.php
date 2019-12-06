 <div class="form-group">
						<html>
						  <head>
						    <style>
						      /* Set the size of the div element that contains the map */
						      #map {
						        height: 300px;  /* The height is 400 pixels */
						        width: 100%;  /* The width is the width of the web page */
						       }
						    </style>
						  </head>

						  <body>
						    
						    <!--The div element for the map -->
						    <div id="map"></div>  
						    <script>

						    	//INICIO JAVASCRIPT
						
						function initMap() {
						  
						  var uluru = {lat: 24.143123, lng: -110.312280};
						  
						  var map = new google.maps.Map(
						      document.getElementById('map'), {zoom: 14, center: uluru});
						  

							 var marker;
							  marker = new google.maps.Marker({
							      position: uluru,
							      map: map,
							      draggable: true

							  }); 


							  google.maps.event.addListener(map, 'click', function(event) {

							   placeMarker(event.latLng);
							    NuevaLat = event.latLng.lat();
							    NuevaLng = event.latLng.lng();
							   console.log( "Latitude: "+NuevaLat+" "+", longitude: "+NuevaLng ); 
							   var lat = NuevaLat;
							   var lng = NuevaLng;
					           document.cookie ='lat='+lat+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
					           document.cookie ='lng='+lng+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';

							});

							google.maps.event.addListener(marker, 'dragend', function(event) {

							   placeMarker(event.latLng);
							    NuevaLat = event.latLng.lat();
							    NuevaLng = event.latLng.lng();
							   console.log( "Latitude: "+NuevaLat+" "+", longitude: "+NuevaLng ); 
							   var lat = NuevaLat;
							   var lng = NuevaLng;
					           document.cookie ='lat='+lat+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
					           document.cookie ='lng='+lng+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';

							});

 							

 
							function placeMarker(location) {

							 if (marker == null)
							 {
							  
							} else {   marker.setPosition(location); } }

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
