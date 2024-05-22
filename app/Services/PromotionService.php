<?php


namespace App\Services;
use App\Models\Student;
use App\Models\Grade;

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
            $currentGrade = $student->grade;
            $nextGrade = Grade::where('id', '>', $currentGrade->id)->first();
            if ($nextGrade) {
                $student->grade()->associate($nextGrade);
                $student->save();
            }
        }
    }
}