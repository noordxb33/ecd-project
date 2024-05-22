<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Subject;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['name','grade_disc','grade_status'];

    public function students(){
        return $this->hasMany(Student::class);
    }
    public function subjects(){
        return $this->hasMany(Subject::class);
    }
    use SoftDeletes;
}
