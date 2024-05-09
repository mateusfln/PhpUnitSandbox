<?php

namespace App\libraries;
class Grade
{
    private float $weight;
    private float $grade;

    public function __construct(float $grade, float $weight)
    {
        $this->setGrade($grade);
        $this->setWeight($weight);
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }
    public function setGrade(float $grade): void
    {
        $this->grade = $grade;
    }

    public function getgrade(): float
    {
        return $this->grade;
    }
}