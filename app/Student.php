<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $primaryKey = 'StudentID';
    public $timestamps = false;
    //public $incrementing = false;
    public function studentsteam(){
        return $this->hasOne('App\StudentsTeam','StudentID');
    }
    public function teacher(){
        return $this->belongsTo('App\Teacher','TeacherID','TeacherID');
    }
    public function user(){
        return $this->belongsTo('App\User','StudentID');
    }
}
