<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }

    public function module(){
        return $this->belongsTo('App\Models\Module');
    }

    public function requirement(){
        return $this->belongsTo('App\Models\Requirement');
    }

    protected $fillable = [
        'enrollment_date',
        'status',
        'student_id',
        'module_id',
        'requirement_id',
           
    ];
}
