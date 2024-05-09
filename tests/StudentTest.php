<?php

namespace tests;
use app\libraries\Student;
use app\libraries\Grade;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    public function getStudentMock()
    {
        $student = new Student;

        $student->addGrade(new Grade(10.0, 0.2));
        $student->addGrade(new Grade(10.0, 0.3));
        $student->addGrade(new Grade(10.0, 0.5));

        return $student;
    }

    public function test_student_is_aproved()
    {
        $student = $this->getStudentMock();

        $this->assertTrue(array_sum($student->getGradesWithWeigth()) >= 6);
    }

    public function test_student_must_do_exam()
    {
        $student = $this->getStudentMock();

        foreach ($student->getGradesWithoutWeigth() as $grade) {
            $this->assertTrue($grade >= 6);
        }
    }

    public function test_getGrades_should_return_list_of_grades()
    {
        $student = $this->getStudentMock();

        $this->assertTrue(is_array($student->getGrades()));
    }

    public function test_addGrade_should_add_grade_to_student()
    {
        $student = new Student;
        $student->addGrade(new Grade(0,0));

        $this->assertNotNull($student->getGrades());
    }

    public function test_getGradesWithWeigth_should_return_list_of_grades_with_weigth()
    {
        $student = $this->getStudentMock();

        $this->assertTrue(is_array($student->getGradesWithWeigth())); 
    }

    public function test_getGradesWithoutWeigth_should_return_list_of_grades_without_weigth()
    {
        $student = $this->getStudentMock();

        $this->assertTrue(is_array($student->getGradesWithoutWeigth())); 
    }

    public function test_calculateGradesWithWeight_should_return_list_of_calculated_grades()
    {
        $student = $this->getStudentMock();

        $this->assertTrue(is_array($student->calculateGradesWithWeight()));        
    }
}