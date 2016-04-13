<?php
	include '../../connection.php';

	//Delete Event, Hide Event, other features, say you will attend event, etc

	$data = json_decode(file_get_contents("php://input"));

	//TEST DATA
	// $data = array(
	// 	"EventName"=>"Third Test Event",
	// 	"EventType"=>"MCcing",
	// 	"EventDescription"=>"This is a Description for an Awesome Event.",
	// 	"EventDateTime"=>"2001/01/01",
	// 	"EventLocation"=>"DC Metro Station",
	// 	"PrimaryContact"=>"Laura Dawbs",
	// 	"PCEmail"=>"larua@dukes.jmu.edu",
	// 	"PCPhone"=>"7037037030"
	// );

	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// $data = json_decode($data);
	//END TEST DATA

	$EventName = $data->EventName;	
	$EventType = $data->EventType;
	$EventDescription = $data->EventDescription;
	$EventDateTime = $data->EventDateTime;
	$EventLocation = $data->EventLocation;
	$PrimaryContact = $data->PrimaryContact;
	$PCEmail = $data->PCEmail;
	$PCPhone = $data->PCPhone;
		
	$db = DB::getInstance();
	$sql = "INSERT INTO WBLEvent (EventName, EventType, EventDescription, EventDateTime, EventLocation, PrimaryContact, PCEmail, PCPhone) VALUES ('$EventName', '$EventType', '$EventDescription', '$EventDateTime', '$EventLocation', '$PrimaryContact', '$PCEmail', '$PCPhone')";
	print_r($sql);
	$query = $db->query($sql);

	echo json_encode($EventName);
?>
