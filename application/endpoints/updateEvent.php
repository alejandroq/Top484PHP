<?php

	include '../../connection.php';

	$data = json_decode(file_get_contents("php://input"));

	//TEST DATA
	// $data = array(
	// 	"EventID"=>1,
	// 	"EventName"=>"Test Event",
	// 	"EventType"=>"Visual Art",
	// 	"EventDateTime"=>"2001/01/01",
	// 	"EventDescription"=>"This is a Description for an Awesome Evet.",
	// 	"EventLocation"=>"Down in the DM",
	// 	"PrimaryContact"=>"Sierra Van",
	// 	"PCEmail"=>"sierra@dukes.jmu.edu",
	// 	"PCPhone"=>"7037037030"
	// );
	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// $data = json_decode($data);
	//END TEST DATA

	$EventID = $data->EventID;
	$EventName = $data->EventName;	
	$EventType = $data->EventType;
	$EventDescription = $data->EventDescription;
	$EventDateTime = $data->EventDateTime;
	$EventLocation = $data->EventLocation;
	$PrimaryContact = $data->PrimaryContact;
	$PCEmail = $data->PCEmail;
	$PCPhone = $data->PCPhone;
		

	$db = DB::getInstance();
	$sql = "UPDATE WBLEvent SET EventName='$EventName', EventType='$EventType', EventDescription='$EventDescription', EventDateTime='$EventDateTime', EventLocation='$EventLocation', PrimaryContact='$PrimaryContact', PCEmail='$PCEmail', PCPhone='$PCPhone' WHERE EventID = " .  $EventID;
	$query = $db->query($sql);
	print_r($sql);

?>
