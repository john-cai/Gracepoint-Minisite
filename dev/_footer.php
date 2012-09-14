
		<!-- FOOTER -->
		
		<div id="footer">
			<div class="container">
				<div class="row">
					<footer class="span12">
						<?php echo $FOOTER; ?>
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
	<script src="js/leaflet.js" type="text/javascript"></script>
	<script type="text/javascript">
		less.env = "development";
		
		$(function() {
			$('.video').fitVids();
			$('.carousel').carousel();
			
			<?php if ($PAGE_ID == 'time-location') { ?>
			var leaflet_api = '8ee2a50541944fb9bcedded5165f09d9';

			// #map
			var latitude = <?php echo $LOCATION[$USE_LOCATION_INDEX]['lat']; ?>;
			var longitude = <?php echo $LOCATION[$USE_LOCATION_INDEX]['long']; ?>;
			var name = '<?php echo $LOCATION[$USE_LOCATION_INDEX]['name']; ?>';
			var line1 = '<?php echo $LOCATION[$USE_LOCATION_INDEX]['line1']; ?>';
			var line2 = '<?php echo $LOCATION[$USE_LOCATION_INDEX]['line2']; ?>';

			var map = L.map('map').setView([latitude, longitude], 14);
			
			// add a CloudMade tile layer with style #997
			L.tileLayer('http://{s}.tile.cloudmade.com/' + leaflet_api + '/997/256/{z}/{x}/{y}.png', {
				attribution: '',
				maxZoom: 18
			}).addTo(map);
			
			// add a marker in the given location, attach some popup content to it and open the popup
			L.marker([latitude, longitude]).addTo(map).bindPopup(name + '<br />' + line1 + '<br />' + line2).openPopup();
			
			// #rides_map
			var rides_map = L.map('rides_map').setView([latitude, longitude], 14);
			
			L.tileLayer('http://{s}.tile.cloudmade.com/' + leaflet_api + '/997/256/{z}/{x}/{y}.png', {
				attribution: '',
				maxZoom: 18
			}).addTo(rides_map);
			
			// markers
			L.marker([latitude, longitude]).addTo(rides_map).bindPopup(name + '<br />' + line1 + '<br />' + line2).openPopup();

			<?php } ?>
		});
	</script>
	
</body>
</html>