<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Year;
use App\Models\Fee;

class Month extends Model
{
    use HasFactory;

    protected $fillable = [
        'month',
        'year_id',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }
    use SoftDeletes;
}
