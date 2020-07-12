<?php

namespace App\Http\Controllers\AdminPanel;

use App\MainInfo;
use App\Nomination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactInfo;
use App\Teacher;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Student;
use Illuminate\Support\Facades\URL;

class MainInfoController extends Controller
{
    public function index(){
        $contactdata = ContactInfo::find(1);
        $maininfo = MainInfo::find(1);
        $nomination = Nomination::find(1);
        $teacher = Teacher::all();
        $student = Student::all();
        return view('adminpanel.admin',[
            'maindata'=> $maininfo,
            'contactdata' => $contactdata,
            'nomination' => $nomination,
            'teachers' => $teacher,
            'students' => $student
        ]);
    }
    public function submit(Request $req){
        $this->validate($req,[
            'maindatestart' => 'required|date',
            'regdatestart' => 'required|date',
            'regdateend' => 'required|date',
            'regtimeend' => 'string',
            'teamsize'=>'numeric|required',
            'place' => 'string',
            'teachertabletitle' => 'string',
            'regenable' => 'string|nullable',
            'loginenable' => 'string|nullable',
            'showresults' => 'string|nullable',
            'fullteam' => 'string|nullable',
            'full10team' => 'string|nullable',
            'full11team' => 'string|nullable',
            'phteam' => 'string|nullable',
            'ph10team' => 'string|nullable',
            'ph11team' => 'string|nullable',
            'mathteam' => 'string|nullable',
            'math10team' => 'string|nullable',
            'math11team' => 'string|nullable',
            'infteam' => 'string|nullable',
            'inf10team' => 'string|nullable',
            'inf11team' => 'string|nullable',
            'fullself' => 'string|nullable',
            'full10self' => 'string|nullable',
            'full11self' => 'string|nullable',
            'phself' => 'string|nullable',
            'ph10self' => 'string|nullable',
            'ph11self' => 'string|nullable',
            'infself' => 'string|nullable',
            'inf10self' => 'string|nullable',
            'inf11self' => 'string|nullable',
            'mathself' => 'string|nullable',
            'math10self' => 'string|nullable',
            'math11self' => 'string|nullable',
        ]);
        $maininfo = MainInfo::find(1);
        $maininfo->maindatestart = $req->input('maindatestart');
        $maininfo->maindatestartstring = $maininfo->makedate($req->input('maindatestart'));
        $maininfo->regdatestart = $req->input('regdatestart');
        $maininfo->regdateend = $req->input('regdateend');
        $maininfo->regdatestartstring = $maininfo->makedate($req->input('regdatestart'));
        $maininfo->regdateendstring = $maininfo->makedate($req->input('regdateend'));
        $maininfo->year = $maininfo->getyear($req->input('maindatestart'));
        $maininfo->regtimeend = $req->input('regtimeend');
        $maininfo->teamsize = $req->input('teamsize');
        $maininfo->regtimeendstring = $req->input('regtimeend');
        $maininfo->teachertabletitle = $req->input('teachertabletitle');
        $maininfo->place = $req->input('place');
        if($req->input('showresults') != null){
            $maininfo->showresults = $req->input('showresults');
        }else{
            $maininfo->showresults = 'false';
        }
        if($req->input('regenable') != null){
            $maininfo->regenable = $req->input('regenable');
        }else{
            $maininfo->regenable = 'false';
        }
        if($req->input('loginenable') != null){
            $maininfo->loginenable = $req->input('loginenable');
        }else{
            $maininfo->loginenable = 'false';
        }
        $maininfo->save();
        $nomination = Nomination::find(1);
        if($req->input('fullteam') != null){
            $nomination->fullteam = $req->input('fullteam');
        }else{
            $nomination->fullteam = 'false';
        }
        if($req->input('phteam') != null){
            $nomination->phteam = $req->input('phteam');
        }else{
            $nomination->phteam = 'false';
        }
        if($req->input('mathteam') != null){
            $nomination->mathteam = $req->input('mathteam');
        }else{
            $nomination->mathteam = 'false';
        }
        if($req->input('infteam') != null){
            $nomination->infteam = $req->input('infteam');
        }else{
            $nomination->infteam = 'false';
        }
        if($req->input('fullself') != null){
            $nomination->fullself = $req->input('fullself');
        }else{
            $nomination->fullself = 'false';
        }
        if($req->input('full10self') != null){
            $nomination->full10self = $req->input('full10self');
        }else{
            $nomination->full10self = 'false';
        }
        if($req->input('full11self') != null){
            $nomination->full11self = $req->input('full11self');
        }else{
            $nomination->full11self = 'false';
        }
        if($req->input('phself') != null){
            $nomination->phself = $req->input('phself');
        }else{
            $nomination->phself = 'false';
        }
        if($req->input('ph10self') != null){
            $nomination->ph10self = $req->input('ph10self');
        }else{
            $nomination->ph10self = 'false';
        }
        if($req->input('ph11self') != null){
            $nomination->ph11self = $req->input('ph11self');
        }else{
            $nomination->ph11self = 'false';
        }
        if($req->input('infself') != null){
            $nomination->infself = $req->input('infself');
        }else{
            $nomination->infself = 'false';
        }
        if($req->input('inf10self') != null){
            $nomination->inf10self = $req->input('inf10self');
        }else{
            $nomination->inf10self = 'false';
        }
        if($req->input('inf11self') != null){
            $nomination->inf11self = $req->input('inf11self');
        }else{
            $nomination->inf11self = 'false';
        }
        if($req->input('mathself') != null){
            $nomination->mathself = $req->input('mathself');
        }else{
            $nomination->mathself = 'false';
        }
        if($req->input('math10self') != null){
            $nomination->math10self = $req->input('math10self');
        }else{
            $nomination->math10self = 'false';
        }
        if($req->input('math11self') != null){
            $nomination->math11self = $req->input('math11self');
        }else{
            $nomination->math11self = 'false';
        }
        $nomination->save();
        

        return back()->with('success','Данные изменены.');
    }

    public function showTeacher($id){
        $teacher = Teacher::find($id);
        $user = User::find($id);
        return view('adminpanel.teacherChange',[
            'teacherdata' => $teacher,
            'userdata' => $user
        ]);
    }

    public function changeInfoTeacher($id, Request $req){
        $this->validate($req,[
            'LastName' => 'required|string|max:100',
            'FirstName' => 'required|string|max:100',
            'patronymic' => 'required|string|max:100',
            'gender' => 'required',
            'city' => 'required|string|max:200',
            'shortnameschool' => 'required|string|max:200',
            'fullnameschool' => 'required|string|max:255',
            'subject' => 'required|string',
            'phone' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);
        $user = User::find($id);
        $user->email = $req->input('email');
        if($req->input('password')==null){
            $user->password = Hash::make($req->input('password'));
        }
        $user->save();
        $teacher = Teacher::find($id);
        $teacher->LastName = $req->input('LastName');
        $teacher->FirstName = $req->input('FirstName');
        $teacher->Patronymic = $req->input('patronymic');
        $teacher->Gender = $req->input('gender');
        $teacher->City = $req->input('city');
        $teacher->ShortNameSchool = $req->input('shortnameschool');
        $teacher->FullNameSchool = $req->input('fullnameschool');
        $teacher->Subject = $req->input('subject');
        $teacher->Phone = $req->input('phone');
        $teacher->save();
        return redirect()->route('adminPanel');
    }

    public function deleteTeacher($id){
        $teacher = User::find($id);
        $students = Student::all()->where('TeacherID','==',$id);
        foreach($students as $student){
            $student->studentsteam->delete();
            $student->delete();
        }
        $teacher->delete();
        return redirect()->route('adminPanel')->with('success','Учетная запись учителя удалена.');
    }

    public function showStudent($id){
        $student = Student::find($id);
        $user = User::find($id);
        $newteacher = new Teacher();
        $allteacher = Teacher::all();
        $teacherdata = Teacher::find($student->teacher->TeacherID);
        $city = $allteacher->unique('City');
        $school = $newteacher->where('City',$teacherdata->City)->get();
        $school = $school->unique('FullNameSchool');
        $teacher = $newteacher->where([
            ['City',$teacherdata->City],
            ['FullNameSchool',$teacherdata->FullNameSchool]
        ])->get();
        return //dd($teacher);
        view('adminpanel.studentChange',[
            'studentdata' => $student,
            'userdata' => $user,
            'teacherdata' => $teacherdata,
            'allteacherdata' => $allteacher,
            'cities' => $city,
            'schools' => $school,
            'teachers' => $teacher
        ]);
    }

    public function changeInfoStudent($id, Request $req){
        $this->validate($req,[
            'LastName' => 'required|string|max:100',
            'FirstName' => 'required|string|max:100',
            'patronymic' => 'string|max:100',
            'gender' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);
        $user = User::find($id);
        $user->email = $req->input('email');
        if($req->input('password')==null){
            $user->password = Hash::make($req->input('password'));
        }
        $user->save();
        $student = Student::find($id);
        $student->LastName = $req->input('LastName');
        $student->FirstName = $req->input('FirstName');
        $student->Patronymic = $req->input('patronymic');
        $student->TeacherID = $req->input('teacher');
        $student->Gender = $req->input('gender');
        $student->Class = $req->input('class');
        $student->CodeGenQR = URL::to('/').'/time/'.$req->input('teacher').'/'.$id;
        $student->save();
        return //dd($req->all());
        redirect()->route('adminPanel');
    }

    public function deleteStudent($id){
        $teacher = User::find($id);
        $teacher->delete();
        return redirect()->route('adminPanel')->with('success','Учетная запись ученика удалена.');
    }

    public function deleteData(){
        $users = User::all()->where('role','<>','admin');
        foreach($users as $user){
            $user->delete();
        }
        //Student::truncate();
        //Teacher::truncate();
        return back()->with('success','Данные очищены.');
    }
}
