<?php

	include '../../connection.php';	

	$data = json_decode(file_get_contents("php://input"));

	//TEST DATA
	// $data = array(
	// 	"EmailAddress"=>"DobbsEL@gmail.com",
	// 	);

	// $data = json_encode($data, JSON_PRETTY_PRINT);
	// $data = json_decode($data);
	//END TEST DATA

	$EmailAddress = $data->EmailAddress;

	$db = DB::getInstance();
	$sql =  "SELECT FirstName, LastName, EmailAddress, CellPhone, HomePhone, DOB, ShirtSize, Gender, Race, HomeAddress, City, State, Zip FROM GeneralUser WHERE EmailAddress= '" . $EmailAddress . "'";
	print_r($sql);
	$req = $db->query($sql);

	$data = array();

	foreach ($req->fetchAll() as $rows) {
		$data[] = $rows;
	}

	print json_encode($data, JSON_PRETTY_PRINT);

?>