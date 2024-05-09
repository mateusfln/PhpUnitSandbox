<?php
use app\libraries\Grade;
use PHPUnit\Framework\TestCase;


class GradeTest extends TestCase
{

    public function getGradeMock()
    {
        return new Grade(10, 2.0);
    }

    /**
     * @covers Grade::__contruct
     *
     * @return void
     */
    public function test_constuctor_should_create_a_object_with_grade_and_weigth()
    {
        $this->assertIsObject($this->getGradeMock());
    }

    /**
     * @covers Grade::setWeight
     */
    public function test_setWeight_should_set_the_weigth_value()
    {
        $grade = $this->getGradeMock();
        $grade->setWeight(8);
        $this->assertTrue($grade->getWeight() == 8);
    }

    /**
     * @covers Grade::getWeight
     */
    public function test_getWeight_should_return_the_weigth_value()
    {
        $this->assertIsFloat($this->getGradeMock()->getWeight());
    }

    /**
     * @covers Grade::setGrade
     */
    public function test_setGrade_should_set_the_grade_value()
    {
        $grade = $this->getGradeMock();
        $grade->setGrade(8);
        $this->assertTrue($grade->getGrade() == 8);
    }

    /**
     * @covers Grade::getGrade
     */
    public function test_getGrade_should_return_the_grade_value()
    {
        $this->assertIsFloat($this->getGradeMock()->getGrade());
    }
}