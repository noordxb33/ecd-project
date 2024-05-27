<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Classes;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'subject_id', 'midterm_marks', 'final_marks','Grade'];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
    public function grades() {
        return $this->belongsTo(Grade::class);
    }

  
    use SoftDeletes;
}