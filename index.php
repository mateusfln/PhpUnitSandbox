<?php
use app\libraries\Grade;
use app\libraries\Student;

require_once __DIR__ ."/app/libraries/Grade.php";
require_once __DIR__ ."/app/libraries/Student.php";

$student = new Student;

$student->addGrade(new Grade(10.0, 0.2));
$student->addGrade(new Grade(10.0, 0.3));
$student->addGrade(new Grade(10.0, 0.5));

echo '<pre>';
echo (array_sum($student->getGradesWithWeigth()));