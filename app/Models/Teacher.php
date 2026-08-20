<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function userSystem(){
        return $this->belongsTo('App\Models\UserSystem');
    }

    public function institution(){
        return $this->belongsTo('App\Models\Institution');
    }

    public function modules(){
        return $this->hasMany('App\Models\Module');
    }

    public function subjects(){
        return $this->hasMany('App\Models\Subject');
    }

    protected $fillable = [
        'user_system_id',
        'institution_id',

    ];

}
