<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


	$userFirstName = $_POST['firstName'];
	$userLastName = $_POST['lastName'];
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['$userPassword'];
	$userPassConfirm = $_POST['confirmName'];
	$userAddress = $_POST['userAddress'];
	$userCity = $_POST['userCity'];
	$userZip = $_POST['userZip'];
	
	
	//save collectedHeartForDataCompletion=true/false in the database when the userAddress/userCity/userZip for the first time.

	//for testing purposes
	echo '{"user first name":"'.$userFirstName.'"}';

?>
