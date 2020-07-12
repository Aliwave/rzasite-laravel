<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Student;
use App\User;
use Auth;
use App\MainPage;
use App\MainInfo;
use App\Teacher;
use PDF;
use App\Nomination;
use App\TeachersTeam;
use App\StudentsTeam;


class StudentProfileController extends Controller
{
    public function index(){

        if (Auth::check()==true) {
            $info = MainInfo::first();
            $user = Auth::user()->id;
            $studentdata = Student::find($user);
            $teacherdata = Teacher::find($studentdata->TeacherID);
            $qrcode = base64_encode(QrCode::format('png')->size(250)
            ->errorCorrection('H')->generate($studentdata->CodeGenQR));
            return
            view('studentprofile.profile',[
                'qrcode' => $qrcode,
                'maindata' => $info,
                'studentdata' => $studentdata,
                'teacherdata' => $teacherdata
            ]);

        }else{
            return redirect()->route('main');
        }
    }

    public function indexbyID($id){
        if(Auth::check() == true && Auth::user()->isAdmin() == true){
            session()->put('admin', Auth::user()->password);
            Auth::loginUsingId($id);
            $info = MainInfo::first();
            $user = Auth::user()->id;
            $studentdata = Student::find($user);
            $teacherdata = Teacher::find($studentdata->TeacherID);
            $qrcode = base64_encode(QrCode::format('png')->size(250)
            ->errorCorrection('H')->generate($studentdata->CodeGenQR));
            return
            view('studentprofile.profile',[
                'qrcode' => $qrcode,
                'maindata' => $info,
                'studentdata' => $studentdata,
                'teacherdata' => $teacherdata
            ]);
        }
    }

    public function pdfStudentPass(){
        if(Auth::check() == true){
            $user = Auth::user()->id;
            $maindata = MainInfo::first();
            $studentdata = Student::find($user);
            $studentdata->CodeGenQR = base64_encode(QrCode::format('png')->size(250)->errorCorrection('H')->generate($studentdata->CodeGenQR));
            $pdf = PDF::loadView('ticketbase',[
                'studentdata' => [$studentdata],
                'maindata' => $maindata
            ])->setPaper('a4', 'portait')->setWarnings(true);
            return $pdf->stream();
        }
    }

    public function pdfStudentReward(){
        if(Auth::check() == true){
            $user = Auth::user()->id;
            $studentdata = Student::find($user);
            $studentres = $studentdata->studentsteam;
            $maindata = MainInfo::first();
            $nomination = Nomination::first();
            $studentres = $studentdata->studentsteam;
            $res = array();
            $win = false;
            if($studentres->SummSelfPlace <= 3 && $studentres->SummSelfPlace != null){
                $res['SummSelfPlace'] = $studentres->SummSelfPlace;
                $win = true;
            }
            if($studentres->SummSelf10Place <= 3 && $studentres->SummSelf10Place != null){
                $res['SummSelf10Place'] = $studentres->SummSelf10Place;
                $win = true;
            }
            if($studentres->SummSelf11Place <= 3 && $studentres->SummSelf11Place != null){
                $res['SummSelf11Place'] = $studentres->SummSelf11Place;
                $win = true;
            }
            if($studentres->PhSelfPlace <= 3 && $studentres->PhSelfPlace != null){
                $res['PhSelfPlace'] = $studentres->PhSelfPlace;
                $win = true;
            }
            if($studentres->PhSelf10Place <= 3 && $studentres->PhSelf10Place != null){
                $res['PhSelf10Place'] = $studentres->PhSelf10Place;
                $win = true;
            }
            if($studentres->PhSelf11Place <= 3 && $studentres->PhSelf11Place != null){
                $res['PhSelf11Place'] = $studentres->PhSelf11Place;
                $win = true;
            }
            if($studentres->MathSelfPlace <= 3 && $studentres->MathSelfPlace != null){
                $res['MathSelfPlace'] = $studentres->MathSelfPlace;
                $win = true;
            }
            if($studentres->MathSelf10Place <= 3 && $studentres->MathSelf10Place != null){
                $res['MathSelf10Place'] = $studentres->MathSelf10Place;
                $win = true;
            }
            if($studentres->MathSelf11Place <= 3 && $studentres->MathSelf11Place != null){
                $res['MathSelf11Place'] = $studentres->MathSelf11Place;
                $win = true;
            }
            if($studentres->InfSelfPlace <= 3 && $studentres->InfSelfPlace != null){
                $res['InfSelfPlace'] = $studentres->InfSelfPlace;
                $win = true;
            }
            if($studentres->InfSelf10Place <= 3 && $studentres->InfSelf10Place != null){
                $res['InfSelf10Place'] = $studentres->InfSelf10Place;
                $win = true;
            }
            if($studentres->InfSelf11Place <= 3 && $studentres->InfSelf11Place != null){
                $res['InfSelf11Place'] = $studentres->InfSelf11Place;
                $win = true;
            }
            if($nomination->fullteam != 'false' || 
            $nomination->phteam != 'false' ||
            $nomination->mathteam != 'false' ||
            $nomination->infteam != 'false'){
                $team = TeachersTeam::find($studentres->TeamID);
                if($team != null){
                    if($team->SummTeamPlace <= 3 && $team->SummTeamPlace != null){
                        $res['SummTeamPlace'] = $team->SummTeamPlace;
                        $win = true;
                    }
                    if($team->PhTeamPlace <= 3 && $team->PhTeamPlace != null){
                        $res['PhTeamPlace'] = $team->PhTeamPlace;
                        $win = true;
                    }
                    if($team->MathTeamPlace <= 3 && $team->MathTeamPlace != null){
                        $res['MathTeamPlace'] = $team->MathTeamPlace;
                        $win = true;
                    }
                    if($team->InfTeamPlace <= 3 && $team->InfTeamPlace != null){
                        $res['InfTeamPlace'] = $team->InfTeamPlace;
                        $win = true;
                    }
                }
            }
            if($win == true){
                //return dd($res);
                $pdf = PDF::loadView('diploms.studentwin',[
                    'winarray' => $res,
                    'studentdata' => $studentdata,
                    'maindata' => $maindata
                ])->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream();
            }else{
               $pdf = PDF::loadView('diploms.studentparticipate',[
                   'studentdata' => $studentdata,
                   'maindata' => $maindata
               ])->setPaper('a4', 'landscape')->setWarnings(false);
                return $pdf->stream();
            }
        }
    }
}
