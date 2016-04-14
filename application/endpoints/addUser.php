<?php
	
	//ADMIN ADDING USER

	include '../../connection.php';	

	$data = json_decode(file_get_contents("php$//input"));

	//Email Validation (no multiple emails)

	//TEST DATA
	// $data = array(
	// 	"EmailAddress"=> uniqid() ."@test.com",
	// 	"FirstName"=>"Bob",
	// 	"LastName"=>"Robert",
	// 	"Gender"=>"Male",
	// 	"HomePhone"=>"8009991111",
	// 	"HomeAddress"=>"1234 Address",
	// 	"City"=>"Fairfax",
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
	// 	"ManagerEmail"=>"Mazi@WBL.org",
	// 	"AdminTitle"=>"President of Africa",
	// 	"HireDate"=>"2000/01/01",
	// 	"AdminEmailAddress" => "SUPAHOTFIRE@WBL.org",
	// 	"StaffType"=>"Intern",
	// 	"Specialty"=>"Rapping",
	// 	"LetterCount"=>3,
	// 	"Relationship"=>"Grandfather",
	// 	"BoolPaid"=>1
	// 	);

	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// $data = json_decode($data);
	//END TEST DATA

	$EmailAddress = filter_var($data->EmailAddress, FILTER_SANITIZE_STRING);
	$FirstName = filter_var($data->FirstName, FILTER_SANITIZE_STRING);
	$LastName = filter_var($data->LastName, FILTER_SANITIZE_STRING);
	$Gender = filter_var($data->Gender, FILTER_SANITIZE_STRING);
	$HomePhone = filter_var($data->HomePhone, FILTER_SANITIZE_STRING);
	$HomeAddress = filter_var($data->HomeAddress, FILTER_SANITIZE_STRING);
	$City = filter_var($data->City, FILTER_SANITIZE_STRING);
	$State = filter_var($data->State, FILTER_SANITIZE_STRING);
	$ZIP = filter_var($data->ZIP, FILTER_SANITIZE_STRING);
	$DOB = filter_var($data->DOB, FILTER_SANITIZE_STRING);
	$Password = filter_var($data->Password, FILTER_SANITIZE_STRING);
	$UserType = filter_var($data->UserType, FILTER_SANITIZE_STRING);
	$PasswordHash = filter_var($data->PasswordHash, FILTER_SANITIZE_STRING);
	$ShirtSize = filter_var($data->ShirtSize, FILTER_SANITIZE_STRING);
	$UserPermission = filter_var($data->UserPermission, FILTER_SANITIZE_STRING);
	$LastLogin = filter_var($data->LastLogin, FILTER_SANITIZE_STRING);
	$Race = filter_var($data->Race, FILTER_SANITIZE_STRING);
	$CellPhone = filter_var($data->CellPhone, FILTER_SANITIZE_STRING);
	$JoinDate = filter_var($data->JoinDate, FILTER_SANITIZE_STRING);
	$Activated = filter_var($data->Activated, FILTER_SANITIZE_STRING);
	$token = "LOGGED OUT";

	$db = DB::getInstance();
	$sql = "INSERT INTO GeneralUser(EmailAddress, FirstName, LastName, Gender, HomePhone, HomeAddress, City, State, ZIP, DOB, Password, UserType, PasswordHash, ShirtSize, UserPermission, LastLogin, Race, CellPhone, JoinDate, ActivatedBool, token) VALUES (
		'" . $EmailAddress .
		"', '" . $FirstName . 
		"', '" . $LastName .
		"', '" . $Gender .
		"', '" . $HomePhone .
		"', '" . $HomeAddress .
		"', '" . $City . 
		"', '" . $State . 
		"', '" . $ZIP .
		"', '" . $DOB .
		"', '" . $Password .
		"', '" . $UserType . 
		"', '" . $PasswordHash .
		"', '" . $ShirtSize .
		"', " . $UserPermission .
		", '" . $LastLogin .
		"', '" . $Race .
		"', '" . $CellPhone .
		"', '" . $JoinDate . 
		"', " . $Activated .
		", '" . $token ."')";
		print_r($sql);
	$db->query($sql);

	switch ($UserType) {
		case 'Administrator':
			$EmailAddress = filter_var($data->EmailAddress, FILTER_SANITIZE_STRING);
			$ManagerEmail = filter_var($data->ManagerEmail, FILTER_SANITIZE_STRING);
			$AdminTitle = filter_var($data->AdminTitle, FILTER_SANITIZE_STRING);
			$HireDate = filter_var($data->HireDate, FILTER_SANITIZE_STRING);

			$sql = "Insert INTO Administrator(EmailAddress, ManagerEmail, AdminTitle, HireDate) Values('$EmailAddress', '$ManagerEmail', '$AdminTitle', '$HireDate')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Staff':
			$EmailAddress = filter_var($data->EmailAddress, FILTER_SANITIZE_STRING);
			$AdminEmailAddress = filter_var($data->AdminEmailAddress, FILTER_SANITIZE_STRING);
			$HireDate = filter_var($data->HireDate, FILTER_SANITIZE_STRING);
			$StaffType = filter_var($data->StaffType, FILTER_SANITIZE_STRING);
			$Specialty = filter_var($data->Specialty, FILTER_SANITIZE_STRING);

			$sql = "Insert INTO Staff(EmailAddress, AdminEmailAddress, HireDate, StaffType, Specialty) Values('$EmailAddress', '$AdminEmailAddress', '$HireDate', '$StaffType', '$Specialty')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Student':
			$EmailAddress = filter_var($data->EmailAddress, FILTER_SANITIZE_STRING);
	
			$sql = "Insert INTO Student(EmailAddress) Values('$EmailAddress')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Parent':
			$EmailAddress = filter_var($data->EmailAddress, FILTER_SANITIZE_STRING);
			$LetterCount = filter_var($data->LetterCount, FILTER_SANITIZE_STRING);
			$Relationship = filter_var($data->Relationship, FILTER_SANITIZE_STRING);
	
			$sql = "Insert INTO Parent(EmailAddress, LetterCount, Relationship) VALUES ('$EmailAddress', $LetterCount, '$Relationship')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Cipher':
			$EmailAddress = filter_var($data->EmailAddress, FILTER_SANITIZE_STRING);
			$BoolPaid = filter_var($data->BoolPaid, FILTER_SANITIZE_STRING);

			$sql = "Insert INTO Cipher(EmailAddress, BoolPaid) Values('$EmailAddress', $BoolPaid)";
			print_r($sql);
			$db->query($sql);
			break;

		default: break;
	}
?>
