<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
class FatherQualification extends Model
{
    public function qualification()
    {
        return $this->hasMany(Student::class);
    }

    use HasFactory;
    protected $fillable = ['name'];
    use SoftDeletes;
}
