<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Student;
use App\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\StudentsTeam;
use Illuminate\Support\Facades\URL;
use App\MainInfo;

class StudentRegisterController extends Controller
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
        return //dd($data);
        Validator::make($data, [
            'LastName' => 'required|string|max:100',
            'FirstName' => 'required|string|max:100',
            'patronymic' => 'string|max:100',
            'gender' => 'required',
            'class' => 'required|numeric',
            'email' => 'required|string|email|max:255|unique:users',
            'city' => 'required',
            'fullnameschool' => 'required',
            'teacher' => 'required',
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
            $user->role = User::ROLE_STUDENT;
            $user->save();
            $student = new Student();
            $studentid = DB::table('users')->where('email', $data['email'])->value('id');
            $student->StudentID = $studentid;
            $student->LastName = $data['LastName'];
            $student->FirstName = $data['FirstName'];
            $student->Patronymic = $data['patronymic'];
            $student->Gender = $data['gender'];
            $student->Class = $data['class'];
            $student->CodeGenQR = URL::to('/').'/time/'.$data['teacher'].'/'.$studentid;
            $student->TeacherID = $data['teacher'];
            //$student->City = $data['city'];
            //$student->ShortNameSchool = $data['shortnameschool'];
            //$student->FullNameSchool = $data['fullnameschool'];
            //$student->Phone = $data['phone'];
            $student->save();
            $studentstat = new StudentsTeam;
            $studentstat->StudentID = $studentid;
            $studentstat->save();
            return //dd($data);
            $user;
        }
        
    }

    public function index(){
        $maindata = MainInfo::first();
        if($maindata->regenable == 'false'){
            return redirect()->route('main')
            ->with('success','Регистрация в данный момент закрыта');
        }else{
            $data = new Teacher();
            $data = $data->all();
            $cities = $data->unique('City');
            return 
            view('auth.registerStudent',[
                'cities' => $cities,
            ]);
        }
        
    }
}
