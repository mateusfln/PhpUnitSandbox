<?php

namespace App\libraries;
class Student
{
    private array $gradeList = [];
    
    public function addGrade(Grade $grade): void
    {
        $this->gradeList[] = $grade;
    }

    public function getGrades(): array
    {
        return $this->gradeList;
    }

    public function getGradesWithWeigth(): array
    {
        return $this->calculateGradesWithWeight();
    }

    public function getGradesWithoutWeigth(): array
    {
        $arrGrades = [];
        foreach ($this->getGrades() as $item) {
            $gradeWithoutWeight = $item->getGrade();
            $arrGrades[] = $gradeWithoutWeight;
        }

        return $arrGrades;
    }

    public function calculateGradesWithWeight(): array
    {
        $arrCalculatedGrades = [];
        foreach ($this->getGrades() as $item) {
            $calculatedGrade = $item->getWeight() * $item->getGrade();
            $arrCalculatedGrades[] = $calculatedGrade;
        }

        return $arrCalculatedGrades;
    }
}