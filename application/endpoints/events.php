<?php 
header('Content-Type: application/json');

include '../../connection.php';

$db = DB::getInstance();
$sql = 'SELECT EventName, EventType, EventDateTime, EventLocation from WBLEvent';
$req = $db->query($sql);

$data = array();

foreach ($req->fetchAll() as $rows) {
	$data[] = $rows;
}

print json_encode($data, JSON_PRETTY_PRINT);
?>