
		<!-- FOOTER -->
		
		<div id="footer">
			<div class="container">
				<div class="row">
					<footer>
						<p class="span6"><a href="http://gracepointriverside.org/"><?php echo $TITLE; ?> Church</a> started out as an Asian-American church ministering to college students at UCR &mdash; since then, we have become more multi-ethnic in composition. You'll find those who are learning about Christianity for the first time, as well as those who have been attending church fellowships throughout their lives.</p>
						<p class="span3">We are a member of the <a href="http://www.sbc.net/">Southern Baptist Convention</a> and a part of the <a href="http://www.iesba.org/">Inland Empire Southern Baptist Association</a>, as well as <a href="http://www.gracepointministries.org/">Gracepoint Ministries</a>.</p>
						<p class="span3">If you'd like more info or have questions, please contact us at <a href="mailto:<?php echo $CONTACT_EMAIL; ?>"><?php echo $CONTACT_EMAIL; ?></a>.</p>
					</footer>
				</div>
			</div>
		</div> <!-- /#footer -->
		
		<!-- MODAL -->
		<div id="myModal" class="modal hide fade">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Error</h3>
			</div>
			<div class="modal-body">
				<p>Please enter a valid address.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div> <!-- /#modal -->
		
	</div> <!-- /#outer -->

	<?php if (!$DEV_MODE) { ?>
	<!-- Google Analytics -->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo $ANALYTICS_KEY; ?>']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	<!-- Gaug.es Analytics -->
	<script type="text/javascript">
	  var _gauges = _gauges || [];
	  (function() {
	    var t   = document.createElement('script');
	    t.type  = 'text/javascript';
	    t.async = true;
	    t.id    = 'gauges-tracker';
	    t.setAttribute('data-site-id', '4ebc5cd1613f5d62c3000003');
	    t.src = '//secure.gaug.es/track.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(t, s);
	  })();
	</script>
	<?php } ?>

	<script src="js/less-1.3.0.min.js" type="text/javascript"></script>
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.fitvids.js" type="text/javascript"></script>
	<script src="js/bootstrap-modal.js" type="text/javascript"></script>
	<script src="js/bootstrap-carousel.js" type="text/javascript"></script>
	<script src="js/bootstrap-transition.js" type="text/javascript"></script>
	<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=<?php echo $GMAPS_KEY; ?>&sensor=false">
    </script>
	
	<script type="text/javascript">
		less.env = "development";
<<<<<<< Updated upstream

=======
		
>>>>>>> Stashed changes
		$(function() {
			$('.video').fitVids();
			$('.carousel').carousel();

			$("#getDir_form").submit( function() { 
				calcRoute($('#startAddr').val());
				return false;
			});

			$('#getDir').live('click', function() {
				calcRoute($('#startAddr').val());
			});

			<?php if ($PAGE_ID == 'time-location') { ?>

			// --map info--
			var loc = <?php echo json_encode($LOCATION[$USE_LOCATION_INDEX]); ?>;
			var rides_array = <?php echo json_encode($USE_RIDES_ARRAY); ?>;
			var rides = <?php echo json_encode($RIDES); ?>;
			
			// --map globals--

			// creating custom markers: 
			// http://stackoverflow.com/questions/7095574/google-maps-api-3-custom-marker-color-for-default-dot-marker
			// https://developers.google.com/chart/infographics/docs/dynamic_icons#pins
			var markerUrl = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=';
			
			var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
		        new google.maps.Size(40, 37),
		        new google.maps.Point(0, 0),
		        new google.maps.Point(12, 35)
        	);
        	
        	// fill_color, text_color: in hex, no hash
        	function createPinImage(text, fill_color, text_color) {
	        	return new google.maps.MarkerImage(markerUrl + text + '|' + fill_color + '|' + text_color,
			        new google.maps.Size(21, 34),
			        new google.maps.Point(0,0),
			        new google.maps.Point(10, 34)
			    );
        	}
        	
        	// pinShadow defined above (global)
        	function createMarker(latitude, longitude, map, pinImage) {
/*         	console.log(latitude, longitude); */
	        	return new google.maps.Marker({
					position: new google.maps.LatLng(latitude, longitude),
					map: map,
	                icon: pinImage,
	                shadow: pinShadow
				});
        	}
						
			// requests and displays directions
			function calcRoute(start) {
				var end = new google.maps.LatLng(loc.lat, loc.long);
				var request = {
					origin:start,
					destination:end,
					travelMode: google.maps.TravelMode.DRIVING
				};

				directionsService.route(request, function(result, status) {
					$('#dirSteps').html('');
					if (status == google.maps.DirectionsStatus.OK) {
<<<<<<< Updated upstream
					  directionsDisplay.setDirections(result);

/*
					  $.each(result.routes[0].legs[0].steps, function() {
						$('#dirSteps').append( '<br />'+ this['instructions'] );
					  });
					$('#dirSteps').show();
*/

=======
						directionsDisplay.setDirections(result);
						// removes markers
						// directionsDisplay.setOptions( { suppressMarkers: true } );
						$.each(result.routes[0].legs[0].steps, function() {
							$('#dirSteps').append( '<br />'+ this['instructions'] );
						});
						$('#dirSteps').show();
					} else {
						$('#myModal').modal({keyboard:true});
>>>>>>> Stashed changes
					}
				});
			}
						
			// --#map--
			var mapOptions = {
				zoom: 16,
				center: new google.maps.LatLng(loc.lat, loc.long),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById("map"), mapOptions);
			var directionsService = new google.maps.DirectionsService();
			var directionsDisplay = new google.maps.DirectionsRenderer();
			directionsDisplay.setMap(map);
			
			var pinImage = createPinImage('%E2%80%A2', '4295db', 'ffffff');
			var marker = createMarker(loc.lat, loc.long, map, pinImage);
			
			var infowindow = new google.maps.InfoWindow({
			    content: loc.name + '<br /><small>' + loc.line1 + '<br />' + loc.line2 + '</small>'
			});
			
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
			
			// --#rides_map--
			
			var i = 1;
			$.each(rides_array, function(index, value) {		// use "value", NOT "index" (confusing, I know)
				if (i==1) {
					var mapOptions = {
						zoom: 15,
						center: new google.maps.LatLng(<?php echo $RIDES[$index]['lat'] . ', ' . $RIDES[$index]['long']; ?>),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}

					rides_map = new google.maps.Map(document.getElementById("rides_map"), mapOptions);	
				} // end if
				
				var ridePinImage = createPinImage(i++, 'fa925e', 'ffffff');
				
				var this_ride = rides[value];
				var rides_marker = createMarker(this_ride.lat, this_ride.long, rides_map, ridePinImage); 
				
				var infowindow = new google.maps.InfoWindow({
				    content: this_ride.location + '<br /><small>' + this_ride.desc + '</small>'
				});
				
				google.maps.event.addListener(rides_marker, 'click', function() {
					infowindow.open(rides_map, rides_marker);
				});
				
				google.maps.event.addDomListener(document.getElementById('rides-' + value), 'click', function() {
					infowindow.open(rides_map, rides_marker);
				});

			}); // end $.each()

			<?php } // end if statement ?>
			

		});

	</script>
	
</body>
</html>
