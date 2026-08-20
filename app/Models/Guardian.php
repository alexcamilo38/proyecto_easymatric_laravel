<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    
    public function students(){
    return $this->hasMany('App\Models\Student');
}

   protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'second_last_name',
        'document',
        'phone',
        'email',
       
    ];
}
