<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


    // here is an array of all the information that we send as JSON to the app
    $badges = array(
    	'badge1' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			),
    	
    	'badge2' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			),
    	
    	'badge3' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			),
    	
    	'badge4' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			),
    	
    	'badge5' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			),
    	
    	'badge6' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			),
    	
    	'badge7' => array( 
    		'title' => 'Badge Name',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat et neque sed feugiat. Phasellus vitae risus at sapien laoreet sagittis ac ac nibh.',
    		'imageURL' => 'img/displayBadge.png'

    			)
    	);

	echo json_encode($badges);

?>