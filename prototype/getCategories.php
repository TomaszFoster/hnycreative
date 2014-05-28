<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


    // here is an array of all the information that we send as JSON to the app
    $categoryInfo = array(
    	'Eat' => array( 
    		'Restaurants' => array(
    			'Asian' => array(),
    			'Bakery/Delicatessan' =>array(),
    			'Bar/Tavern' => array(),
    			'Barbeque' => array(),
    			'Breakfast' => array(),
    			'Coffee Shops/Cafes' => array(),
    			'European' => array(),
    			'Gastro Pub' => array(),
    			'Ice Cream/Desserts' => array()
    			),
    		'Groceries' => array(),
    		'Markets' => array(),
    		'Food Trucks' => array(),
    		'Breweries/Pubs' => array(),
    		'Catering' => array()
    		),
    	'Stay' => array(),
    	'Shop' => array(),
    	'Play' => array(),
    	'Bank' => array(),
    	'Hire' => array(),
    	'Repair' => array(),
    	'Community' => array()
    	);

	echo json_encode($categoryInfo);

?>