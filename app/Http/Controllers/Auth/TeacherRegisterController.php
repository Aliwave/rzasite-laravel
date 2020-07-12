<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\MainInfo;

class TeacherRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'LastName' => 'required|string|max:100',
            'FirstName' => 'required|string|max:100',
            'patronymic' => 'string|max:100',
            'gender' => 'required',
            'city' => 'required|string|max:200',
            'shortnameschool' => 'required|string|max:200',
            'fullnameschool' => 'required|string|max:255',
            'subject' => 'required|string',
            'teachertable' => 'required',
            'phone' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $maindata = MainInfo::first();
        if($maindata->regenable == 'false'){
            return redirect()->route('main')->with('success','Регистрация в данный момент закрыта');
        }else{
            $user = new User();
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->role = User::ROLE_TEACHER;
            $user->save();
            $teacher = new Teacher();
            $teacher->TeacherID = DB::table('users')->where('email', $data['email'])->value('id');
            $teacher->LastName = $data['LastName'];
            $teacher->FirstName = $data['FirstName'];
            $teacher->Patronymic = $data['patronymic'];
            $teacher->Gender = $data['gender'];
            $teacher->City = $data['city'];
            $teacher->ShortNameSchool = $data['shortnameschool'];
            $teacher->FullNameSchool = $data['fullnameschool'];
            $teacher->Subject = $data['subject'];
            $teacher->Phone = $data['phone'];
            $teacher->teachertable = $data['teachertable'];
            $teacher->save();
            return $user;
        }
        
    }

    public function index(){
        $maindata = MainInfo::first();
        if($maindata->regenable == 'false'){
            return redirect()->route('main')->with('success','Регистрация в данный момент закрыта');
        }else{
            return view('auth.registerTeacher');
        }
    }
    
}
