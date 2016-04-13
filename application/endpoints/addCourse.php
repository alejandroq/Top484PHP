<?php 
header('Content-Type: application/json');

// Lesson Plan should be TEXT data type or a link to file for future reference.

include '../../connection.php';

$data = json_decode(file_get_contents("php://input"));

//TEST DATA
// $data = array(
// 	"CourseName"=>"TestCourse",
// 	"CourseElement"=>"Graffiti",
// 	"CourseDescription"=>null,
// 	"LessonPlan"=>"Sylabi Here"
// 	);

// $data = json_encode($data, JSON_PRETTY_PRINT);
// $data = json_decode($data);
//END TEST DATA

$CourseName=$data->CourseName;
$CourseDescription=$data->CourseDescription;
$CourseElement=$data->CourseElement;
$LessonPlan=$data->LessonPlan;

$db = DB::getInstance();
$sql = "SELECT COUNT(*)Count FROM Course";
print_r($sql);
$req = $db->query($sql);

$count=$req->fetchColumn(0);
$count++; //fake Auto_Increment

$sql = "INSERT INTO Course (CourseID,CourseName,CourseElement,CourseDescription,LessonPlan) VALUES ($count,'$CourseName','$CourseElement','$CourseDescription','$LessonPlan')";
print_r($sql);
$req = $db->query($sql);

$data = array();

foreach ($req->fetchAll() as $rows) {
	$data[] = $rows;
}

print json_encode($data, JSON_PRETTY_PRINT);
?>