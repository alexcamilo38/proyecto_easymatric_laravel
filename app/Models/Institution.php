<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }

    public function students(){
        return $this->hasMany('App\Models\Student');
    }

    protected $fillable = [
        'name_institution',
        'email_institution',
        'phone_institution',
        'address_institution',
        'description_institution',
       
    ];
}
