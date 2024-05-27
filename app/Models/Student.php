<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Classes;
use App\Models\Gender;
use App\Models\Mark;
use App\Models\FatherQualification;
use App\Models\FatherOccupation;
use App\Models\MotherOccupation;
use App\Models\Attendance;
use App\Models\Fee;
use App\Models\MotherQualification;
class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'gender_id', 'mother_occupation_id','class_id', 'father_occupation_id', 
        'mother_qualification_id', 'father_qualification_id', 'monthly_income', 'discount','age_when_enrolled',
        'child_number_in_family','any_other_income','admission_fee','Student_Status'
    ];

    public function gender() {
        return $this->belongsTo(Gender::class);
    }
    public function classes() {
        return $this->belongsTo(Classes::class);
    }
    public function motherOccupation() {
        return $this->belongsTo(MotherOccupation::class);
    }

    public function fatherOccupation() {
        return $this->belongsTo(FatherOccupation::class);
    }

    public function motherQualification() {
        return $this->belongsTo(MotherQualification::class);
    }

    public function fatherQualification() {
        return $this->belongsTo(FatherQualification::class);
    }


    public function attendances() {
        return $this->hasMany(Attendance::class);
    }
    public function marks() {
        return $this->hasMany(Mark::class);
    }
    public function fees() {
        return $this->hasMany(Fee::class);
    }
    use SoftDeletes;
}