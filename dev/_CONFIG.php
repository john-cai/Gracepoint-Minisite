<?php 
	// Config file for the Gracepoint Riverside Minisite
	
	// DYNAMIC VARIABLES
	// Things that might potentially change from week to week, quarter to quarter
	// =================================================================================

	$UPDATE_MSG = 'For the next three weeks, we\'ll be meeting at MSE 104!';		// message will be flashed above every page if this isn't null

	$USE_LOCATION_INDEX = 2;
	$USE_RIDES_ARRAY = array(0, 1, 2, 3);
	$SERVICE_TIME = '1:30pm';
	$RIDES_TIME = '1:00pm';

	$SERVICE_DAY = 7;		// 1 = Monday; 6 = Saturday; 7 = Sunday
	$numdays = $SERVICE_DAY - date('N');	// date('N') is today's weekdate in numbers (1 = Monday, etc)
	if ($numdays < 0) $numdays += 7;
	$NEXTSERVICE_TIMESTAMP = time() + ($numdays * 86400);		// 86400 = seconds in a day

	// GLOBAL VARIABLES
	// Mainly variables used for the header and footer
	// =================================================================================
	
	$TITLE = 'Gracepoint Riverside';
	$DESCRIPTION = 'Gracepoint Riverside Church is a Christian ministry committed to serving the students of University of California, Riverside with biblical teaching, discipleship, and simply growing together. If you need a ride, we provide pickups from the dorms and campus apartments.';
	$KEYWORDS = 'church, ucr, ucr church, ucr church rides, churches near ucr, churches near uc riverside, ucr ride to church church rides, dorm rides, riverside-ca, riverside, university of california riverside, uc riverside, christian, college, young, ministry, christianity, discipleship, biblical teaching, Asian-American church, dorm, pickup, rides, campus';
	$CONTACT_EMAIL = 'info@gracepointriverside.org';
	
	// TIME + LOCATION
	// http://itouchmap.com/latlong.html
	// =================================================================================
	
	$LOCATION = array(
		0 => array(
			'name' => 'First Baptist',
			'line1' => '5500 Alessandro Blvd',
			'line2' => 'Riverside, CA 92507',
			'lat' => 33.95167,
			'long' => -117.3584
		),
		1 => array(
			'name' => 'Stratton Community Center',
			'line1' => '2008 Martin Luther King Blvd.',
			'line2' => 'Riverside, CA 92507',
			'lat' => 33.97,
			'long' => -117.3551
		),
		2 => array(
			'name' => 'MSE 104',
			'line1' => '',
			'line2' => 'Riverside, CA 92507',
			'lat' => 33.976206,
			'long' => -117.327343
		)
	);
	
	$RIDES = array(
		0 => array(
			'location' => 'Aberdeen-Inverness',
			'desc' => 'Main entrance',
			'lat' => 33.97835,
			'long' => -117.32554
		),
		1 => array(
			'location' => 'Lot 15',
			'desc' => 'Between Pentland and the parking lot',
			'lat' => 33.976847,
			'long' => -117.323824
		),
		2 => array(
			'location' => 'University Village',
			'desc' => 'In front of Theatre',
			'lat' => 33.976891,
			'long' => -117.338072
		),
		3 => array(
			'location' => 'Lot 26',
			'desc' => '',
			'lat' => 33.981242,
			'long' => -117.331345
		)
	);


	// RECENT EVENTS
	// =================================================================================

?>