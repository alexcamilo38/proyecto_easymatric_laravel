<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function module(){
        return $this->belongsTo('App\Models\Module');
    }

    public function teacher(){
        return $this->belongsTo('App\Models\Teacher');
    }

    public function grades(){
        return $this->hasMany('App\Models\Grade');
    }
    protected $fillable = [
        'name_subject',
        'description_subject',
        'duration',
        'module_id',
        'teacher_id',
       
    ];
}
