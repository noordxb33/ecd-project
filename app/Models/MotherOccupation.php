<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
class MotherOccupation extends Model
{
    use HasFactory;
 

    public function occupations()
    {
        return $this->hasMany(Student::class);
    }
    protected $fillable = ['name'];
    use SoftDeletes;
}

