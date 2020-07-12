<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $primaryKey = 'TeacherID';
    public $incrementing = false;
    public $timestamps = false;
    public function user(){
        return $this->belongsTo('App\User','TeacherID');
    }
    public function teams(){
        return $this->hasMany('App\TeachersTeam','TeacherID');
    }
}
