<?php 
header('Content-Type: application/json');

// Lesson Plan should be TEXT data type or a link to file for future reference.

include '../../connection.php';

//$data = json_decode(file_get_contents("php://input"));

//TEST DATA
$data = array(
	"CourseID"=>8,
	"CourseName"=>"UpdatedTestCourse",
	"CourseElement"=>"Graffiti",
	"CourseDescription"=>"Tis been updated",
	"LessonPlan"=>"Sylabi Here"
	);

$data = json_encode($data, JSON_PRETTY_PRINT);
$data = json_decode($data);
//END TEST DATA

$CourseID=$data->CourseID;
$CourseName=$data->CourseName;
$CourseDescription=$data->CourseDescription;
$CourseElement=$data->CourseElement;
$LessonPlan=$data->LessonPlan;

$db= DB::getInstance();
$sql = "UPDATE Course SET CourseName ='$CourseName',CourseElement='$CourseElement',CourseDescription='$CourseDescription',LessonPlan='$LessonPlan' WHERE CourseID = $CourseID";
print_r($sql);
$req = $db->query($sql);
?>