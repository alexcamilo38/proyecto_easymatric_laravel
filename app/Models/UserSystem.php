<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSystem extends Model
{
    use HasFactory;

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function teacher(){
        return $this->hasOne('App\Models\Teacher');
    }

    public function student(){
        return $this->hasOne('App\Models\Student');
    }

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'second_last_name',
        'document',
        'phone',
        'email',
        'password',
        'rol_id',
       
    ];
}
 