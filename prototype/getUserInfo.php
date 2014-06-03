<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


    // here is an array of all the information that we send as JSON to the app
    $userInfo = array(
    	'lastUpdated' => '20131220',
	    'userName' => 'Jason1411',
	    'firstName' => 'Melissa',
	    'lastName' => 'Yutani',
		'userEmail' => 'Jason@Weyland-Yutani-Corp.org',
    	'userAddress' => '123 21st Street',
    	'userCity' => 'Norfolk',
    	'userZip' => '23509',
    	'badges' => array( 
    		"hardees" => array (
				"address" => "123 Colley Ave",
				"hours" => array (
					"Saturday1" => "0900",
					"Saturday2" => "1700"
					)
				),
    		"A Dodson's" => array (
    			"address" => "456 Colley Ave",
    			"hours" => array (
    				"Saturday1" => "0800",
    				"Saturday2" => "1500"
    				)
    			),
    		"The Dirty Buffalo" => array (
    			"address" => "789 Colley Ave",
    			"hours" => array (
    				"Saturday1" => "1100",
    				"Saturday2" => "2200"
    				)
    			)
			 ),
    	'numberOfHearts' => '5',
    	'latestBadge' => 'img/badgeLatest.png',
    	'latestBadgeLocation' => 'Norfolk, VA',
		'fbOAuth' => '1234567890ABCDEF',
		'fbUserId' => 'FEDCBA987654321',
		'fbURL' => 'http://www.facebook.com/someuser',
		'twitterAuth' => '1234567890ABCDEF',
		'twitterID' => 'FEDCBA987654321',
		'pendingGift' => array( 
			"item" => "plant",
			"giftEmail" => "kimglover@gmail.com",
			"dateSent" => "3/25/2014"
			  ),
		'storeInfo' => array (
			"hardees" => array (
				"address" => "123 Colley Ave",
				"hours" => array (
					"Saturday1" => "0900",
					"Saturday2" => "1700"
					)
			 )
			),
		'categories' => array (
		'health' => array (
			"subcat1" => "personal",
			"subcat2" => "medical",
			"subcat3" => "other"
			)
		)
	);

	echo json_encode($userInfo);

?>