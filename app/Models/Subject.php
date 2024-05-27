<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name','class_id'];
    public function grade() {
        return $this->belongsTo(Classes::class);
    }
    use SoftDeletes;
}