<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


	$inputEmail = $_POST['inputEmail'];
	$inputStoreID = $_POST['inputStoreID'];

	//for testing purposes
	echo '{"store id":"'.$inputStoreID.'"}';

?>
