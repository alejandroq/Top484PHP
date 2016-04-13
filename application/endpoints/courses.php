<?php 
header('Content-Type: application/json');

include '../../connection.php';

$db = DB::getInstance();
$sql = 'SELECT Course.CourseID, Section.SectionID, CourseName, CourseElement, (Section.Capacity - (SELECT COUNT(EmailAddress) FROM Enrollment))SeatsLeft, Section.Location, Section.Semester, CourseDescription, LessonPlan FROM Course LEFT JOIN Section ON Course.CourseID=Section.CourseID ORDER BY SeatsLeft DESC';
$req = $db->query($sql);

$data = array();

foreach ($req->fetchAll() as $rows) {
	$data[] = $rows;
}

print json_encode($data, JSON_PRETTY_PRINT);

//evaluations 
//events 
//applicant process 
//design 
//canvas 
//include cipher
//how to make it fun 
//tables are very rigid 
//'not distraction, this is a fun system' 
//student to class 
//applicant to student 
//how often has a student logged in (last login, etc)
//student of the week
//paypal link at a minimum 
//dont try to do too much
//think okayplayer and coles website from sweden 
?>