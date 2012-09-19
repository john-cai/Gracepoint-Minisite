
		<!-- FOOTER -->
		
		<div id="footer">
			<div class="container">
				<div class="row">
					<footer class="span12">
						<p>While we started out as an Asian-American church ministering to college students at UCR, we are slowly becoming more multi-ethnic in composition. You'll find those who are seeking to find out about Christianity for the first time as well as those who have been attending church fellowships throughout their lives.</p>
						<p>We are a member of the <a href="http://www.sbc.net/">Southern Baptist Convention</a> and a part of the <a href="http://www.iesba.org/">Inland Empire Southern Baptist Association</a>, as well as <a href="http://www.gracepointministries.org/">Gracepoint Ministries</a>.</p>
						<p>If you'd like more info or have questions, please contact us at <a href="mailto:<?php echo $CONTACT_EMAIL; ?>"><?php echo $CONTACT_EMAIL; ?></a>.</p>
					</footer>
				</div>
			</div>
		</div> <!-- /#footer -->
		
	</div> <!-- /#outer -->

	<script src="js/less-1.3.0.min.js" type="text/javascript"></script>
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.fitvids.js" type="text/javascript"></script>
	<script src="js/bootstrap-carousel.js" type="text/javascript"></script>
	<script src="js/bootstrap-transition.js" type="text/javascript"></script>
	<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAKgayMmKfoK-f_-6QB1TVsS1OTQqZPkfM&sensor=false">
    </script>
	
	<script type="text/javascript">
		less.env = "development";
		
		$(function() {
			$('.video').fitVids();
			$('.carousel').carousel();
			
			<?php if ($PAGE_ID == 'time-location') { ?>

			// --map info--
			var loc = <?php echo json_encode($LOCATION[$USE_LOCATION_INDEX]); ?>;
			
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
	        	return new google.maps.Marker({
					position: new google.maps.LatLng(latitude, longitude),
					map: map,
	                icon: pinImage,
	                shadow: pinShadow
				});
        	}
						
			// --#map--
			var mapOptions = {
				zoom: 16,
				center: new google.maps.LatLng(loc.lat, loc.long),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById("map"), mapOptions);
			
			var pinImage = createPinImage('%E2%80%A2', '4295db', 'ffffff');
			var marker = createMarker(loc.lat, loc.long, map, pinImage);
			
			var infowindow = new google.maps.InfoWindow({
			    content: loc.name + '<br />' + loc.line1 + '<br />' + loc.line2
			});
			
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
			
			// --#rides_map--
			
			<?php
				// ABE: this might be better done if written using all javascript...
				$i = 1;
				foreach($USE_RIDES_ARRAY as $index) {
					if ($i == 1) {
						// display rides map
			?>

			var mapOptions = {
				zoom: 15,
				center: new google.maps.LatLng(<?php echo $RIDES[$index]['lat'] . ', ' . $RIDES[$index]['long']; ?>),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}

			var rides_map = new google.maps.Map(document.getElementById("rides_map"), mapOptions);	

			<?php	} // end if ($i == 1) ?>
			
			var ridePinImage = createPinImage('<?php echo $i++; ?>', 'fa925e', 'ffffff');

        	var rides_marker = createMarker(<?php echo $RIDES[$index]['lat'] . ', ' . $RIDES[$index]['long']; ?>, rides_map, ridePinImage);

			<?php	} // end foreach ?>
			

			<?php } // end if statement ?>
			

		});

	</script>
	
</body>
</html>