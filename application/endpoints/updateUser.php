<?php
	include '../../connection.php'; //self update and admin

	$data = json_decode(file_get_contents("php://input"));

	//TEST DATA
	// $data = array(
	// 	"EmailAddress"=> "570d92dcb4824@test.com",
	// 	"FirstName"=>"Hey",
	// 	"LastName"=>"John",
	// 	"Gender"=>"Female",
	// 	"HomePhone"=>"8009991111",
	// 	"HomeAddress"=>"1234 Address",
	// 	"City"=>"Monastary",
	// 	"State"=>"VA",
	// 	"Zip"=>"22220",
	// 	"DOB"=>"2000/01/01",
	// 	"Password"=>"password",
	// 	"UserType"=>"Cipher",
	// 	"PasswordHash"=>"hash",
	// 	"ShirtSize"=>"XL",
	// 	"UserPermission"=>1,
	// 	"LastLogin"=>"2000/01/01",
	// 	"Race"=>"Other",
	// 	"CellPhone"=>"8009991111",
	// 	"JoinDate"=>"2000/01/01",
	// 	"Activated"=>1,
	// 	);

	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// $data = json_decode($data);
	//END TEST DATA

	$FirstName = filter_var($data->FirstName,FILTER_SANITIZE_STRING);
	$LastName = filter_var($data->LastName,FILTER_SANITIZE_STRING);
	$Gender = filter_var($data->Gender,FILTER_SANITIZE_STRING);
	$HomePhone = filter_var($data->HomePhone,FILTER_SANITIZE_STRING);
	$HomeAddress = filter_var($data->HomeAddress,FILTER_SANITIZE_STRING);
	$City = filter_var($data->City,FILTER_SANITIZE_STRING);
	$State = filter_var($data->State,FILTER_SANITIZE_STRING);
	$ZIP = filter_var($data->ZIP,FILTER_SANITIZE_STRING);
	$DOB = filter_var($data->DOB,FILTER_SANITIZE_STRING);
	$Password = filter_var($data->Password,FILTER_SANITIZE_STRING);
	$UserType = filter_var($data->UserType;,FILTER_SANITIZE_STRING)	
	$ShirtSize = filter_var($data->ShirtSize,FILTER_SANITIZE_STRING);
	$Race = filter_var($data->Race,FILTER_SANITIZE_STRING);
	$CellPhone = filter_var($data->CellPhone,FILTER_SANITIZE_STRING);

	$db = DB::getInstance();

	$sql = "UPDATE GeneralUser SET FirstName='$FirstName', LastName='$LastName', Gender='$Gender', HomePhone='$HomePhone', HomeAddress='$HomeAddress', City='$City', State='$State', ZIP='$ZIP', DOB='$DOB', Password='$Password', UserType='$UserType', ShirtSize='$ShirtSize', Race='$Race', CellPhone='$CellPhone' WHERE EmailAddress = '$EmailAddress'";
	print_r($sql);
	$query = $db->query($sql);
?>
