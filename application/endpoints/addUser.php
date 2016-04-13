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
	// 	"AdminEmailAddress" => "Mazi@WBL.org",
	// 	"StaffType"=>"Intern",
	// 	"Specialty"=>"Rapping",
	// 	"LetterCount"=>3,
	// 	"Relationship"=>"Grandfather",
	// 	"BoolPaid"=>1
	// 	);

	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// $data = json_decode($data);
	//END TEST DATA

	$EmailAddress = $data->EmailAddress;
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
	$PasswordHash = $data->PasswordHash;
	$ShirtSize = $data->ShirtSize;
	$UserPermission = $data->UserPermission;
	$LastLogin = $data->LastLogin;
	$Race = $data->Race;
	$CellPhone = $data->CellPhone;
	$JoinDate = $data->JoinDate;
	$Activated = $data->Activated;
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
			$EmailAddress = $data->EmailAddress;
			$ManagerEmail = $data->ManagerEmail;
			$AdminTitle = $data->AdminTitle;
			$HireDate = $data->HireDate;

			$sql = "Insert INTO Administrator(EmailAddress, ManagerEmail, AdminTitle, HireDate) Values('$EmailAddress', '$ManagerEmail', '$AdminTitle', '$HireDate')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Staff':
			$EmailAddress = $data->EmailAddress;
			$AdminEmailAddress = $data->AdminEmailAddress;
			$HireDate = $data->HireDate;
			$StaffType = $data->StaffType;
			$Specialty = $data->Specialty;

			$sql = "Insert INTO Staff(EmailAddress, AdminEmailAddress, HireDate, StaffType, Specialty) Values('$EmailAddress', '$AdminEmailAddress', '$HireDate', '$StaffType', '$Specialty')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Student':
			$EmailAddress = $data->EmailAddress;
	
			$sql = "Insert INTO Student(EmailAddress) Values('$EmailAddress')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Parent':
			$EmailAddress = $data->EmailAddress;
			$LetterCount = $data->LetterCount;
			$Relationship = $data->Relationship;
	
			$sql = "Insert INTO Parent(EmailAddress, LetterCount, Relationship) VALUES ('$EmailAddress', $LetterCount, '$Relationship')";
			print_r($sql);
			$db->query($sql);
			break;

		case 'Cipher':
			$EmailAddress = $data->EmailAddress;
			$BoolPaid = $data->BoolPaid;

			$sql = "Insert INTO Cipher(EmailAddress, BoolPaid) Values('$EmailAddress', $BoolPaid)";
			print_r($sql);
			$db->query($sql);
			break;

		default: break;
	}
?>
