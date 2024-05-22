<?php

namespace Database\Seeders;

use App\Models\MotherQualification;
use App\Models\User;
use App\Models\Batch;
use App\Models\FatherOccupation;
use App\Models\Classes;
use App\Models\FatherQualification;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\MotherOccupation;
use App\Models\Subject;
use App\Models\Teachers;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $classes = [
            ['class_name' => 'Class 1', 'teacher_id' => 1, 'batch_id' => 1],
            ['class_name' => 'Class 2', 'teacher_id' => 2, 'batch_id' => 2],
            // Add more classes as needed
        ];

        foreach ($classes as $class) {
            Classes::create($class);
        }

        // User::factory(10)->create();
        $batches = [
            ['batch_name' => 'Batch 1', 'batch_status' => true,'class_id'=>1],
            ['batch_name' => 'Batch 2', 'batch_status' => false,'class_id'=>2],
            // Add more batches as needed
        ];

        foreach ($batches as $batch) {
            Batch::create($batch);
        }

        $fatheroccupations = [
            ['name' => 'MiliteryOfficer'],
            ['name' => 'DailyWorker'],
            // Add more batches as needed
        ];

        foreach ($fatheroccupations as $fatheroccupation) {
            FatherOccupation::create($fatheroccupation);
        }


        $motheroccupations = [
            ['name' => 'MiliteryOfficer'],
            ['name' => 'DailyWorker'],
            // Add more batches as needed
        ];

        foreach ($motheroccupations as $motheroccupation) {
            MotherOccupation::create($motheroccupation);
        }

    
        $fatherQualtifications = [
            ['name' => 'Elitrate'],
            ['name' => '12th Grade'],
            // Add more batches as needed
        ];

        foreach ($fatherQualtifications as $fatherQualtification) {
            FatherQualification::create($fatherQualtification);
        }


        $motherQualifications = [
            ['name' => 'Elitrate'],
            ['name' => '12th Grade'],
        ];
        foreach ($motherQualifications as $motherQualification) {
            MotherQualification::create($motherQualification);
        }

        $teachers = [
            ['name' => 'John', 'lastname' => 'Doe', 'gender_id' => 1, 'date_of_birth' => '1990-01-01', 'start_date' => '2022-01-01', 'end_date' => '2025-12-31'],
            ['name' => 'Jane', 'lastname' => 'Doe', 'gender_id' => 2, 'date_of_birth' => '1991-01-01', 'start_date' => '2022-01-01', 'end_date' => '2025-12-31'],
            // Add more users as needed
        ];

        foreach ($teachers as $teacher) {
            Teachers::create($teacher);
        }

      

        $grades = [
            ['name' => 'Grade 1', 'grade_disc' => 'Description 1', 'grade_status' => true],
            ['name' => 'Grade 2', 'grade_disc' => 'Description 2', 'grade_status' => true],
            // Add more grades as needed
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
        $genders = [
            ['name' => 'Male'],
            ['name' => 'Female'],
            // Add more grades as needed
        ];
        foreach ($genders as $gender) {
            Gender::create($gender);
        }
        $Subjects = [
            ['name' => 'ODE', 'grade_id' => 1],
            ['name' => 'Maths', 'grade_id' => 1],
            // Add more grades as needed
        ];

        foreach ($Subjects as $sub) {
            Subject::create($sub);
        }
    }
}
