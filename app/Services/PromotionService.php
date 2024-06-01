<?php


namespace App\Services;
use App\Models\Student;
use App\Models\Classes;

class PromotionService
{
    public function promoteStudent(Student $student)
    {
        $marks = $student->marks()->get();
        $totalSubjects = $marks->count();
        $passedSubjects = $marks->filter(function ($mark) {
            return ($mark->midterm_marks + $mark->final_marks) / 2 >= 60;
        })->count();

        if ($passedSubjects / $totalSubjects >= 0.60) {
            $currentClass = $student->classes;
            $nextClass = Classes::where('id', '>', $currentClass->id)->first();
            if ($nextClass) {
                $student->classes()->associate($nextClass);
                $student->save();
            }
        }
    }
}