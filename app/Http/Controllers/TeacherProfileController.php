<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\StudentsTeam;
use App\TeachersTeam;
use App\Nomination;
use App\User;
use Auth;
//use App\MainPage;
use App\MainInfo;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;

class TeacherProfileController extends Controller
{
    public function index(){

        if (Auth::check()==true) {
            //$logo = MainPage::find(1);
            $nomination = Nomination::find(1);
            $maindata = MainInfo::find(1);
            $check = false;
            if($nomination->fullteam == 'true' or
            $nomination->phteam == 'true' or
            $nomination->mathteam == 'true' or
            $nomination->infteam == 'true'){
                $check = true;
            }
            $user = Auth::user()->id;
            $teacherdata = Teacher::find($user);
            $i = 1;
            $studentdata = Student::all()->where('TeacherID',$teacherdata->TeacherID);
            $teams = TeachersTeam::all()->where('TeacherID',$teacherdata->TeacherID);
            return 
            view('teacherprofile.profile',[
                'studentdata' => $studentdata,
                'teacherdata' => $teacherdata,
                'teamcheck' => $check,
                'maindata' => $maindata,
                'teams' => $teams,
            ]);

        }else{
            return redirect()->route('main');
        }
    }

    public function indexbyID($id){
        if(Auth::check() == true && Auth::user()->isAdmin() == true){
            session()->put('admin', Auth::user()->password);
            Auth::loginUsingId($id);
            $nomination = Nomination::find(1);
            $maindata = MainInfo::find(1);
            $check = false;
            if($nomination->fullteam == 'true' or
            $nomination->phteam == 'true' or
            $nomination->mathteam == 'true' or
            $nomination->infteam == 'true'){
                $check = true;
            }
            $teacherdata = Teacher::find($id);
            $i = 1;
            $studentdata = Student::all()->where('TeacherID',$teacherdata->TeacherID);
            $teams = TeachersTeam::all()->where('TeacherID',$teacherdata->TeacherID);
            return 
            view('teacherprofile.profile',[
                'studentdata' => $studentdata,
                'teacherdata' => $teacherdata,
                'teamcheck' => $check,
                'maindata' => $maindata,
                'teams' => $teams,
            ]);
        }
    }

    public function newTeam(){
        if (Auth::check()==true) {
            $team = new TeachersTeam();
            $user = Auth::user()->id;
            $teacher = Teacher::find($user);
            $team->TeacherID = $teacher->TeacherID;
            $team->save();
            return redirect()->route('teacherMainProfile');
        }else{
            return redirect()->route('main');
        }
    }
    public function showTeam($id){
        if (Auth::check()==true) {
            $teamsize = MainInfo::find(1)->teamsize;
            $team = TeachersTeam::find($id);
            $user = Auth::user()->id;
            $teacher = Teacher::find($user);
            $students = Student::all()->where('TeacherID',$teacher->TeacherID);
            $studentstoadd = array();
            foreach($students as $student){
                if($student->studentsteam->TeamID == null){
                    array_push($studentstoadd,$student);
                }
            }
            return 
            view('teacherprofile.teamChange',[
                'teacherdata' => $teacher,
                'team' => $team,
                'teamsize' => $teamsize,
                'studentstoadd' => $studentstoadd
            ]);
        }else{
            return redirect()->route('main');
        }
    }

    public function deleteTeam($id){
        $team = TeachersTeam::find($id);
        $team->delete();
        $students = StudentsTeam::all()->where('TeamID','==',$id);
        foreach($students as $student){
            $student->TeamID = null;
            $student->save();
        }
        return redirect()->route('teacherMainProfile')->with('success','Команда успешно удалена');
    }

    public function deleteStudent($studentid){
        $student = StudentsTeam::find($studentid);
        $student->TeamID = null;
        $student->save();
        return back();
    }

    public function addnewStudenttoTeam($id, Request $req){
        $student = StudentsTeam::find($req->input('studentid'));
        $student->TeamID = $id;
        $student->save();
        return
        back();
    }

    public function pdfAllStudentPass(){
        if(Auth::check() == true){
            $user = Auth::user()->id;
            $teacherdata = Teacher::find($user);
            $maindata = MainInfo::first();
            $studentdata = Student::all()->where('TeacherID',$teacherdata->TeacherID);
            foreach($studentdata as $student){
                $student->CodeGenQR = base64_encode(QrCode::format('png')->size(250)->errorCorrection('H')->generate($student->CodeGenQR));
            }
            $pdf = PDF::loadView('ticketbase',[
                'studentdata' => $studentdata,
                'maindata' => $maindata
            ])->setPaper('a4', 'portait')->setWarnings(true);
            return $pdf->stream();
        }
    }

    public function pdfThanks(){
        if(Auth::check() == true){
            $user = Auth::user()->id;
            $teacherdata = Teacher::find($user);
            $maindata = MainInfo::find(1);
            if($teacherdata->Gender == 'male'){
                $teacherdata->Gender = 'ый';
            }else{
                $teacherdata->Gender = 'ая'; 
            }
            if($teacherdata->Subject == 'math'){
                $teacherdata->Subject = 'математики';
            }elseif($teacherdata->Subject == 'informatics'){
                $teacherdata->Subject = 'информатики';
            }else{
                $teacherdata->Subject = 'физики';
            }
            $pdf = PDF::loadView('diploms.teacherthanks',[
                'maindata' => $maindata,
                'teacherdata' => $teacherdata
            ])->setPaper('a4', 'landscape')->setWarnings(true);
            return $pdf->stream();
        }
    }

    public function pdfTableParticipate(){
        if(Auth::check() == true){
            $user = Auth::user()->id;
            $teacherdata = Teacher::find($user);
            $maindata = MainInfo::find(1);
            if($teacherdata->Gender == 'male'){
                $teacherdata->Gender = '';
            }else{
                $teacherdata->Gender = 'а'; 
            }
            if($teacherdata->Subject == 'math'){
                $teacherdata->Subject = 'математики';
            }elseif($teacherdata->Subject == 'informatics'){
                $teacherdata->Subject = 'информатики';
            }else{
                $teacherdata->Subject = 'физики';
            }
            $pdf = PDF::loadView('diploms.teacherparticipate',[
                'maindata' => $maindata,
                'teacherdata' => $teacherdata
            ])->setPaper('a4', 'landscape')->setWarnings(true);
            return $pdf->stream();
        }
    }
}
