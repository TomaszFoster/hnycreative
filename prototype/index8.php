<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


	$userFirstName = $_POST['fName'];
	$userLastName = $_POST['lName'];
	$userEmail = $_POST['eName'];
	$userPassword = $_POST['passName'];
	$userPassConfirm = $_POST['confirmName'];
	$userAddress = $_POST['address1'];
	$userCity = $_POST['addCity'];
	$userZip = $_POST['addZip'];

	//for testing purposes
	echo '{"user first name":"'.$userFirstName.'"}';

?>
