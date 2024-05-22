<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Gender;
use App\Models\Classes;
class Teachers extends Model
{
    
    use HasFactory;
    protected $fillable = ['name', 'lastname', 'gender_id', 'date_of_birth','start_date','end_date'];

    public function clases()
    {
        return $this->hasMansy(Classes::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    use SoftDeletes;
}
