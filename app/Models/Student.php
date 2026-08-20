<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function userSystem(){
        return $this->belongsTo('App\Models\UserSystem');
    }

    public function institution(){
        return $this->belongsTo('App\Models\Institution');
    }

    public function guardian(){
        return $this->belongsTo('App\Models\Guardian');
    }

    public function enrollments(){
        return $this->hasMany('App\Models\Enrollment');
    }

    public function grades(){
        return $this->hasMany('App\Models\Grade');
    }

    protected $fillable = [
        'user_system_id',
        'guardian_id',
        'institution_id',
       
    ];
}
