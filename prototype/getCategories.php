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
    			'Asian' => array(
                    'Pho 79' => '12948',
                    'Bangkok Garden' => '12949'
                    ),
    			'Bakery/Delicatessan' =>array(
                    'Pendulum' => '12950'
                    ),
    			'Bar/Tavern' => array(
                    'Cogans' => '12951',
                    'Taphouse' => '12952'
                    ),
    			'Barbeque' => array(),
    			'Breakfast' => array(),
    			'Coffee Shops/Cafes' => array(),
    			'European' => array(),
    			'Gastro Pub' => array(),
                'Greek' => array(),
                'Hebrew' => array(),
    			'Ice Cream/Desserts' => array(),
                'Italian' => array(),
                'Japanese' => array()
    			),
    		'Groceries' => array(
                'Food Lion' => '19230',
                'Kroger' => '19231',
                'Harris Teeter' => '19232'
                ),
    		'Markets' => array(),
    		'Food Trucks' => array(),
    		'Breweries/Pubs' => array(),
    		'Catering' => array()
    		),
    	'Stay' => array(
            'Option 1' => array(
                'Final Option' => '12953',
                'Final Option 2' => '12954'
                )
            ),
    	'Shop' => array(),
    	'Play' => array(),
    	'Bank' => array(),
    	'Hire' => array(),
    	'Repair' => array(),
    	'Community' => array()
    	);

	echo json_encode($categoryInfo);

?>