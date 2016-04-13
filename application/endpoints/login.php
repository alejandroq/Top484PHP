<?php
	include '../../connection.php';
	$db = DB::getInstance();

	$data = json_decode(file_get_contents("php://input"));

	$username = $data->username;
	$password = $data->password;

	$sql = "SELECT EmailAddress FROM GeneralUser WHERE LOWER(EmailAddress) = LOWER('$username') AND password = '$password'";
	$userInfo = $db->query($sql);
	$userInfo = $userInfo->fetchAll();

	$token;

	if(count($userInfo) == 1) {
		// user is logged in and given a token
		$token = $username . " | " . uniqid() . uniqid() . uniqid();
		$sql = "UPDATE GeneralUser SET $token = :token WHERE EmailAddress = :email AND password = :password";
		$query=$db->prepare($sql);
		$execute = $query->execute(array(
			":token"=>$token,
			":email"=>$username,
			":password"=>$password
		));
		echo json_encode($token);
	} else {
		echo "ERROR";
	}
	// token has been added to the GeneralUser table 
?>