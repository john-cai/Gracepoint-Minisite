<?php 
	$PAGE_ID = 'time-location';
	$PAGE_TITLE = "Time and Location";
	require('_header.php'); 
?>
	
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>When and Where We Meet</h3>
					<p class="lead">We meet for our Sunday service every week at <?php echo $SERVICE_TIME; ?>. Hope to see you there!</p>
				</div>
			</div>
				
			<div class="row info">
				<div class="span4"><div id="date"><?php echo date('l, M j', $NEXTSERVICE_TIMESTAMP); ?></div></div>
				<div class="span3"><div id="time"><?php echo $SERVICE_TIME; ?></div></div>
				<div class="span5"><div id="location"><?php if ($LOCATION[$USE_LOCATION_INDEX]['line1']) echo $LOCATION[$USE_LOCATION_INDEX]['line1']; else echo $LOCATION[$USE_LOCATION_INDEX]['name']; ?></div></div>
			</div>
			
			<div class="row">
				<div id="map" class="map span12"></div>
			</div>
			
			<form>
				<div class="row">
					<div class="span9"><input id="startAddr" type="text" class="span9" placeholder="Enter your starting address"></div>
<!-- 					<input type="text" class="span3" placeholder="Enter your starting address"> -->
					<div class="span3"><button id="getDir" type="button" class="btn btn-primary btn-block">Get Directions</button></div>
				</div>
			</form>
			

<!-- 			<div id="dirSteps" style="display:none;"></div> -->

			
			<div class="breaker"></div>

			<div class="row">
				<div class="span12"> 
					<h3>Need a Ride?</h3>
					<p class="lead">We've got you covered! All rides will be leaving at <span class="label label-warning"><?php echo $RIDES_TIME; ?></span> from these locations:</p>
				</div>
				
<!--
				<div class="span4">
					<div class="video">
						<iframe src="http://player.vimeo.com/video/29915285?title=0&amp;byline=0&amp;portrait=0" width="500" height="275" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
-->
			</div>
			
			<div class="row">
				<?php
					$list = '';
					$i = 1;
					foreach($USE_RIDES_ARRAY as $index) {
						$list .= '<li class="span3"><span id="rides-' . $index . '" class="rides-nav"><span class="ordinal">' . $i++ . '</span>' . $RIDES[$index]['location'] . '<small>' . $RIDES[$index]['desc'] . '</small></span></li>';
					}
				?>
				
				<ul class="rides">
					<?php echo $list; ?>
				</ul>


				<div id="rides_map" class="map span12"></div>

			</div>
			

		</div> <!-- /.container -->

		
<?php require('_footer.php'); ?>