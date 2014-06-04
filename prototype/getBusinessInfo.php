<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


    // return array of zero items if the date last updated 
    // here is an array of all the information that we send as JSON to the app
    $businessInfo = array(
    	'11782' => array(
    		'lastUpdatedDate' => '20150112',
		    'bName' => 'Weyland-Yutani',
		    'bDescription' => 'Cybernetic Organisms',
		    'bWebsite' => 'http://www.Weyland-Yutani.com',
		    'bAddress' => '2001 Manteo St',
			'bAddress2' => 'Unit 7',
	    	'bCity' => 'Norfolk',
	    	'bState' => 'VA',
	    	'bZip' => '23509',
	    	'bPhone' => '757-555-4853',
	    	'bReward' => 'LED',
	    	'bRewardDetail' => 'LED Array with 256 Values Per Color',
	    	'bRewardImage' => 'img/plant1.jpeg',
	    	'bLogo' => 'img/adodsons.png',
	    	'bGetReward' => 'urlPathToReward',
			'bFacebook' => 'http://www.facebook.com/greenlifeadventuresports',
			'bTwitter' => 'http://www.twitter.com/gselevator',
			'bG+' => 'http://www.google.com/someuser',
			'bYelp' => 'http://www.yelp.com/someuser',
			'bInstagram' => 'http://www.instagram.com/someuser',
			'bPinterest' => 'http://www.pinterest.com/someuser',
			'bCategory' => 'Eat',
			'bSubCat1' => 'Restaurants',
			'bSubCat2' => 'Asian',
			'bSubCat3' => 'Pho 79',

			'bProfile1' => 'Multiple Locations',
			'bProfile2' => 'Family Owned',
			'bProfile3' => 'Fresh From the Farm',

			//hours of operation
			'Saturday1' => '500',
			'Saturday2' => '600',
			'Sunday1' => '900',
			'Sunday2' => '1700',
			'Monday1' => '900',
			'Monday2' => '1700',
			'Tuesday1' => 'closed',
			'Tuesday2' => '',
			'Wednesday1' => '1133',
			'Wednesday2' => '1230',
			'Thursday1' => '1900',
			'Thursday2' => '2100',
			'Friday1' => '630',
			'Friday2' => '900',
			//admin section
			'bLastVisit' => '3/12/2014',
			'bNextVisit' => '3/18/2014',
			'bQRCount' => '8',
			'bNotes' => 'Random Text',

			'bStatus' => 'Pending',
			//qr code url
			'bQRCode' => 'img/qrcode.png',
			'bDirections' => 'https://www.google.com/maps/place/2001+Manteo+St/@36.86936,-76.294072,17z/data=!3m1!4b1!4m2!3m1!1s0x89ba98389dd2afc5:0xafdf4ccfcb995aee'
			),
		'11783' => array(
			'lastUpdatedDate' => '20150313',
			'bName' => 'Dog and Burger',
		    'bDescription' => 'Home of the Good Burger',
		    'bWebsite' => 'www.dognburger.com',
		    'bAddress' => '111 Granby St',
			'bAddress2' => 'PO Box 11111',
	    	'bCity' => 'Norfolk',
	    	'bState' => 'VA',
	    	'bZip' => '23509',
	    	'bPhone' => '757-555-4853',
	    	'bReward' => 'Burger Combo',
	    	'bRewardDetail' => 'Number 1 Dog and Burger combo',
	    	'bRewardImage' => 'img/plant1.jpeg',
	    	'bGetReward' => 'urlPathToReward',
	    	'bLogo' => 'img/townebank.png',
			'bFacebook' => 'http://www.facebook.com/greenlifeadventuresports',
			'bTwitter' => 'http://www.twitter.com/gselevator',
			'bG+' => 'http://www.google.com/someuser',
			'bYelp' => 'http://www.yelp.com/someuser',
			'bInstagram' => 'http://www.instagram.com/someuser',
			'bPinterest' => 'http://www.pinterest.com/someuser',
			'bCategory' => 'Health',
			'bSubCat1' => 'Free Weights',
			'bSubCat2' => 'Barbells',
			'bSubCat3' => 'Bumpers',

			'bProfile1' => 'opt1',
			'bProfile2' => 'opt2',
			'bProfile3' => 'opt3',

			//hours of operation
			'Saturday1' => '500',
			'Saturday2' => '600',
			'Sunday1' => '900',
			'Sunday2' => '1700',
			'Monday1' => '900',
			'Monday2' => '900',
			'Tuesday1' => 'closed',
			'Tuesday2' => '',
			'Wednesday1' => '930',
			'Wednesday2' => '930',
			'Thursday1' => '1900',
			'Thursday2' => '2100',
			'Friday1' => '700',
			'Friday2' => '900',
			//admin section
			'bLastVisit' => '3/12/2014',
			'bNextVisit' => '3/18/2014',
			'bQRCount' => '8',
			'bNotes' => 'Random Text',

			'bStatus' => 'Active',

			//qr code url
			'bQRCode' => 'img/qrcode.png',
			'bDirections' => 'https://www.google.com/maps/place/2001+Manteo+St/@36.86936,-76.294072,17z/data=!3m1!4b1!4m2!3m1!1s0x89ba98389dd2afc5:0xafdf4ccfcb995aee'
			)
	);

	$infoToSend = array();
	//echo $_GET['lastUpdated'];
	foreach ($businessInfo as $key => $value) {
		# code...
		if ($value['lastUpdatedDate'] > $_GET['lastUpdated']){
			$infoToSend[$key] = $value;
		}
	}

	echo json_encode($infoToSend);

?>