<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable                                     //implements MustVerifyEmail
{
    const ROLE_STUDENT = 'student';
    const ROLE_TEACHER = 'teacher';
    const ROLE_ADMIN = 'admin';
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','role'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isAdmin() : bool {
        return $this->role === self::ROLE_ADMIN;
    }
    public function isTeacher() : bool {
        return $this->role === self::ROLE_TEACHER;
    }
    public function isStudent() : bool {
        return $this->role === self::ROLE_STUDENT;
    }
}
