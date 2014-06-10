<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Content-type: application/json');


	$businessName = $_POST['bName'];
	$businessDescription = $_POST['bDescription'];

	$businessAddress1 = $_POST['bAddress'];
	$businessAddress2 = $_POST['bAddress2'];
	$businessCity = $_POST['bCity'];
	$businessState = $_POST['bState'];
	$businessZip = $_POST['bZip'];

	$businessPhone = $_POST['bAddress'];

	$rewardTitle = $_POST['bReward'];
	$rewardDetail = $_POST['bRewardDetail'];

	$businessLogo = $_POST['bLogo'];
	$businessImage = $_POST['bImage'];

	$businessFacebook = $_POST['bFacebook'];
	$businessTwitter = $_POST['bTwitter'];
	$businessGoogle = $_POST['bG+'];
	$businessYelp = $_POST['bYelp'];
	$businessPinterest = $_POST['bPinterest'];
	$businessInstagram = $_POST['bInstagram'];

	$businessCategory = $_POST['bCategory'];
	$businessSubCat1 = $_POST['bSubCat1'];
	$businessSubCat2 = $_POST['bSubCat2'];
	$businessSubCat3 = $_POST['bSubCat3'];

	$businessProfile1 = $_POST['bProfile1'];
	$businessProfile2 = $_POST['bProfile2'];
	$businessProfile3 = $_POST['bProfile3'];

	$saturdayOpen = $_POST['Saturday1'];
	$saturdayClose = $_POST['Saturday2'];
	$sundayOpen = $_POST['Sunday1'];
	$sundayClose = $_POST['Sunday2'];
	$mondayOpen = $_POST['Mondayday1'];
	$mondayClose = $_POST['Mondayday2'];
	$tuesdayOpen = $_POST['Tuesday1'];
	$tuesdayClose = $_POST['Tuesday2'];
	$wednesdayOpen = $_POST['Wednesday1'];
	$wednesdayClose = $_POST['Wednesday2'];
	$thursdayOpen = $_POST['Thursday1'];
	$thursdayClose = $_POST['Thursday2'];
	$fridayOpen = $_POST['Friday1'];
	$fridayClose = $_POST['Friday2'];

	echo '{"data":"'.$action.'"}';

?>
