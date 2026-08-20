<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    public function enrollments(){
    return $this->hasMany('App\Models\Enrollment');
}

    protected $fillable = [
        'identification_photo',
        'parent_identification_photo',
        'document_photo',
        'health_photo',
        'vaccine_copy',
        'sisben_score',
        'birth_certificate',
        'development_record',
        'behavior_certificate',
        'previous_study_certificate',
       
    ];
}
