<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


    // here is an array of all the information that we send as JSON to the app
    $profileInfo = array(
    	'Multiple Locations' => array( 
    		'Description' => 'Lorem ipsum',
    		'Icon' =>'img/multipleLocation.png'
			),
	   	'Family Owned' => array( 
    		'Description' => 'Lorem ipsum',
    		'Icon' =>'img/familyOwned.png'
			),
		'Fresh From the Farm' => array( 
    		'Description' => 'Lorem ipsum',
    		'Icon' =>'img/freshFromTheFarm.png'
			)
		);

	echo json_encode($profileInfo);

?>