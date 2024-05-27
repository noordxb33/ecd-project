<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Batch;
use App\Models\Teachers;
use App\Models\Subject;
use Illuminate\Database\Eloquent\SoftDeletes;


class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['class_name', 'teacher_id','batch_id'];

    public function batches()
    {
        return $this->belongsTo(Batch::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }
    public function subjects(){
        return $this->hasMany(Subject::class);
    }
    use SoftDeletes;
}