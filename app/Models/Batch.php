<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use Illuminate\Database\Eloquent\SoftDeletes;
class Batch extends Model
{
    use HasFactory;

    protected $fillable = ['batch_name', 'batch_status','class_id'];

    public function occupations()
    {
        return $this->hasMany(Classes::class);
    }
   
    use SoftDeletes;
}

