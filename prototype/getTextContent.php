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
    	'screen8' => array( 
    		"text1" => "Lorems ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tortor dolor. Nunc tempus molestie odio sit amet id risus velit.",
   			"passwordMustMatch" => "Your password must match the requirements", 		
			 ),
		'screen8b' => array( 
    		"text1" => "Lorems ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tortor dolor. Nunc tempus molestie odio sit amet id risus velit.",
   			 ),
   			 
		'screen13' => array( 
    		"headline1" => "You've Earned a Heart!",
    		"text1" => "We suspected you were a good person, but you've just confirmed it. Let's seal our friendship with a high five.",
   			 ),
   		'screen15' => array( 
    		"headline1" => "You've Earned a Reward!",
    		"text1" => "Congratulations on making it to the<BR> \"let's buy each other gifts\" phase <BR>of this relationship.",
   			 ),
   		'screen16' => array( 
    		"title" => "Reward Detail"
   			 ),
   		'screen17' => array( 
    		"filterYourResults" => "Filter Your Results"
   			 ),
   		'screen24' => array( 
    		"title" => "Your Badges"
   			 ),
   			 
	);

	echo json_encode($textContent);

?>