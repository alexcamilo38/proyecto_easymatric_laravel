<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }

    public function subject(){
        return $this->belongsTo('App\Models\Subject');
    }

    protected $fillable = [
        'grade',
        'evaluation_type',
        'registration_date',
        'subject_id',
        'student_id',
      
    ];

}
