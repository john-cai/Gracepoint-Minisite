<?php 
	$PAGE_ID = 'time-location';
	$PAGE_TITLE = "Time and Location";
	require('_header.php'); 
?>
	
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>When and Where We Meet</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
				
			<div class="row info">
				<div class="span3"><div id="date"><?php echo date('M j', $NEXTSERVICE_TIMESTAMP); ?></div></div>
				<div class="span3"><div id="time"><?php echo $SERVICE_TIME; ?></div></div>
				<div class="span6"><div id="location"><?php echo $LOCATION[$USE_LOCATION_INDEX]['line1']; ?></div></div>
			</div>
			
			<div class="row">
				<div id="map" class="span12"></div>
			</div>

			<div class="row">
				<div class="span5"> 
					<h3>Need a Ride?</h3>
					<p class="lead">We've got you covered! All rides will be leaving at <strong><?php echo $RIDES_TIME; ?></strong> from these locations:</p>
					
					<?php
						$list = '';
						foreach($USE_RIDES_ARRAY as $index) {
							$list .= '<li><a href="#">' . $RIDES[$index]['location'] . '</a><small>' . $RIDES[$index]['desc'] . '</small></li>';
						}
					?>
					
					<ul class="rides">
						<?php echo $list; ?>
					</ul>
				</div>
				
				<div id="ridesmap_container" class="span7">
					<img id="fog" src="img/time-fog.png" width="545" height="500" />
					<div id="rides_map" class="span7"></div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12">
					<div class="video">
						<iframe src="http://player.vimeo.com/video/29915285" width="500" height="275" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
			</div>

		</div> <!-- /.container -->

		
<?php require('_footer.php'); ?>