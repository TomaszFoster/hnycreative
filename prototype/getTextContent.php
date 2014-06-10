<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


    // here is an array of all the information that we send as JSON to the app
    $textContent = array(
    	'screen6' => array( 
    		"headline" => "Confirmation Headlines",
    		"text1" => "Lorems ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tortor dolor. Nunc tempus molestie odio sit amet id risus velit.",
    		
			 ),
    	
	);

	echo json_encode($textContent);

?>