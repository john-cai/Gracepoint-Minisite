<?php 
	// Config file for the Gracepoint Riverside Minisite
	
	// DYNAMIC VARIABLES
	// Things that might potentially change from week to week, quarter to quarter
	// =================================================================================

	// special announcement message: will be flashed above every page if this isn't null
	// $UPDATE_MSG = "This Sunday, we'll be holding our service on the UCR campus, at the Materials Science and Engineering Building (MSE 104)! More info about it <a href=\"time-location.php\">here</a>. ";
	// $UPDATE_MSG = "This Sunday (10/7), we'll be having our New Student Welcome Event at 2pm and 5pm. It will be held at the Materials Science and Engineering Building (MSE 104). Come join us!";

	$USE_LOCATION_INDEX = 0;				// use the right $LOCATION
	$USE_RIDES_ARRAY = array(0, 1, 2, 3, 4);		// given the larger array of $RIDES, choose the right pickup spots

	$SERVICE_TIME = '1:30pm';
	$RIDES_TIME = '1:00pm';					// if null, then entire rides section will not show

	date_default_timezone_set('America/Los_Angeles');
	$SERVICE_DAY = 7;						// 1 = Monday; 6 = Saturday; 7 = Sunday
	$numdays = $SERVICE_DAY - date('N');	// date('N') is today's weekdate in numbers (1 = Monday, etc)
	if ($numdays < 0) $numdays += 7;		// this is required in the rare event that service is not held on Sunday
	$NEXTSERVICE_TIMESTAMP = time() + ($numdays * 86400);		// 86400 = seconds in a day

	// GLOBAL VARIABLES
	// Mainly variables used for the header and footer
	// =================================================================================
	
	// Flag to switch on/off development mode. When off, it uses .less files (instead of .css) and skips analytic trackers
	// When going live, this should be off (0)
	$DEV_MODE = 1;
	
	$TITLE = 'Gracepoint Riverside';
	$DESCRIPTION = 'Gracepoint Riverside Church is a Christian ministry committed to serving the students of University of California, Riverside with biblical teaching, discipleship, and simply growing together. If you need a ride, we provide pickups from the dorms and campus apartments.';
	$KEYWORDS = 'church, ucr, ucr church, ucr church rides, churches near ucr, churches near uc riverside, ucr ride to church church rides, dorm rides, riverside-ca, riverside, university of california riverside, uc riverside, christian, college, young, ministry, christianity, discipleship, biblical teaching, Asian-American church, dorm, pickup, rides, campus';
	$CONTACT_EMAIL = 'info@gracepointriverside.org';
	
	$GMAPS_KEY = 'AIzaSyAKgayMmKfoK-f_-6QB1TVsS1OTQqZPkfM';		// Google Maps key
	$ANALYTICS_KEY = 'UA-97361-35';								// Google Analytics key
	
	
	// TIME + LOCATION
	// find latitude and longitude coordinates:
	// http://itouchmap.com/latlong.html
	//
	// thumbnail: small (320px) in flickr
	// helpinfo: if you use double quotes, make sure to escape them (use \" instead of just ")
	// =================================================================================
	
	$LOCATION = array(
		0 => array(
			'name' => 'First Baptist',
			'line1' => '5500 Alessandro Blvd',
			'line2' => 'Riverside, CA 92507',
			'lat' => 33.95167,
			'long' => -117.3584,
			'thumbnail' => 'http://farm9.staticflickr.com/8310/8054169105_79b34c6792_n.jpg'
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
			'long' => -117.327343,
			'thumbnail' => 'http://farm9.staticflickr.com/8039/8013663868_f89a4885dc_n.jpg',
			'helpinfo' => 'Located near AI and the Rec. <br />For parking, please park on Linden or Canyon Crest.'
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
			'desc' => 'In front of the UV Theater',
			'lat' => 33.976891,
			'long' => -117.338072
		),
		3 => array(
			'location' => 'Lot 26',
			'desc' => 'Next to baseball field',
			'lat' => 33.981242,
			'long' => -117.331345
		),
		4 => array(
			'location' => 'Blaine Starbucks',
			'desc' => 'On Blaine &amp; Iowa',
			'lat' => 33.982709,
			'long' => -117.339392
		)

	);


	// RECENT EVENTS
	// =================================================================================

?>
