<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');

//This will cancel a pending gift
	$giftId = $_GET['giftId'];

	//for testing purposes
	echo '{"giftId":"'.$giftId.'"}';
?>
