<?php

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');

    $actualEmail = 'kimglover@gmail.com';
    $actualPassword = 'password';

    $userEmail = $_POST['emailInput'];
    $userPass = $_POST['passInput'];


    $status = "";

    if( $actualEmail == $userEmail && $actualPassword == $userPass){
    	$status = "success";
    } else {
    	$status = "failure";
    };

    echo json_encode($status);

?>