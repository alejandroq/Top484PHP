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

	$FirstName = $data->FirstName;
	$LastName = $data->LastName;
	$Gender = $data->Gender;
	$HomePhone = $data->HomePhone;
	$HomeAddress = $data->HomeAddress;
	$City = $data->City;
	$State = $data->State;
	$ZIP = $data->ZIP;
	$DOB = $data->DOB;
	$Password = $data->Password;
	$UserType = $data->UserType;	
	$ShirtSize = $data->ShirtSize;
	$Race = $data->Race;
	$CellPhone = $data->CellPhone;

	$db = DB::getInstance();

	$sql = "UPDATE GeneralUser SET FirstName='$FirstName', LastName='$LastName', Gender='$Gender', HomePhone='$HomePhone', HomeAddress='$HomeAddress', City='$City', State='$State', ZIP='$ZIP', DOB='$DOB', Password='$Password', UserType='$UserType', ShirtSize='$ShirtSize', Race='$Race', CellPhone='$CellPhone' WHERE EmailAddress = '$EmailAddress'";
	print_r($sql);
	$query = $db->query($sql);
?>
