<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
class Fee extends Model
{
    use HasFactory;
 
    protected $fillable = ['student_id', 'month_id', 'year', 'amount'];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function month() {
        return $this->belongsTo(Month::class);
    }
    use SoftDeletes;
}