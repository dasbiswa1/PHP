<?php 

include('./teacher.php');
include('./student.php');

$teacher = new teacher\joiningDetails();
$teacher->joiningDate();

echo "<br>";
$student = new student\joiningDetails();
$student->admissionDate();

?>