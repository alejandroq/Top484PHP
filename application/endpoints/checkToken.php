<?php

	include '../../connection.php';
	$data = json_decode(file_get_contents("php://input"));
	$token = $data->token;

	if (strcmp($token,"ERROR")) {
		$db = DB::getInstance();
		$check = $db->query("SELECT * FROM GeneralUser WHERE token = '$token'");
		$check = $check->fetchAll();
	}

	echo $token;

	if (count($check) == 1) {
		echo 'authorized';
	} else {
		echo 'unauthorized';
	};

?>