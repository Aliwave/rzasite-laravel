<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactInfo;
use App\StudentsTeam;
use App\TeachersTeam;
use App\Student;
use App\Teacher;
use App\Nomination;
use App\MainInfo;
use PDF;

class OlyPlaceController extends Controller
{
    public function index(){
        $nomination = Nomination::first();
        $teacher = Teacher::all();
        $student = Student::all();
        $studentteams = StudentsTeam::all();
        $teams = TeachersTeam::all();
        $maindata = MainInfo::first();
        return 
        view('adminpanel.olyplaces',[
            'teachers' => $teacher,
            'students' => $student,
            'teams' => $teams,
            'studentteams' => $studentteams,
            'nomination' => $nomination,
            'maindata' => $maindata
        ]);

    }

    public function changePlaceStudent(Request $req){
        $studentteams = new StudentsTeam;
        $studentteams = $studentteams->orderbyID($req->studentid);
        $i = 0;
        $fullplace = $req->fullplace;
        $full10place = $req->full10place;
        $full11place = $req->full11place;
        $mathplace = $req->mathplace;
        $math10place = $req->math10place;
        $math11place = $req->math11place;
        $phplace = $req->phplace;
        $ph10place = $req->ph10place;
        $ph11place = $req->ph11place;
        $infplace = $req->infplace;
        $inf10place = $req->inf10place;
        $inf11place = $req->inf11place;
        foreach($studentteams as $studentteam){
            if($studentteam->student->Class == 10){
                if($math10place[$i] != null && $math10place[$i] != 0) $studentteam->MathSelf10Place = $math10place[$i];
                if($math10place[$i] == 0) $studentteam->MathSelf10Place = null;
                if($ph10place[$i] != null && $ph10place[$i] != 0) $studentteam->PhSelf10Place = $ph10place[$i];
                if($ph10place[$i] == 0) $studentteam->PhSelf10Place = null;
                if($inf10place[$i] != null && $inf10place[$i] != 0) $studentteam->InfSelf10Place = $inf10place[$i];
                if($inf10place[$i] == 0) $studentteam->InfSelf10Place = null;
                if($full10place[$i] != null && $full10place[$i] != 0) $studentteam->SummSelf10Place = $full10place[$i];
                if($full10place[$i] == 0) $studentteam->SummSelf10Place = null;
            }else{
                if($math11place[$i] != null && $math11place[$i] != 0) $studentteam->MathSelf11Place = $math11place[$i];
                if($math11place[$i] == 0) $studentteam->MathSelf11Place = null;
                if($ph11place[$i] != null && $ph11place[$i] != 0) $studentteam->PhSelf11Place = $ph11place[$i];
                if($ph11place[$i] == 0) $studentteam->PhSelf11Place = null;
                if($inf11place[$i] != null && $inf11place[$i] != 0) $studentteam->InfSelf11Place = $inf11place[$i];
                if($inf11place[$i] == 0) $studentteam->InfSelf11Place = null;
                if($full11place[$i] != null && $full11place[$i] != 0) $studentteam->SummSelf11Place = $full11place[$i];
                if($full11place[$i] == 0) $studentteam->SummSelf11Place = null;
            }
            if($mathplace[$i] != null && $mathplace[$i] != 0) $studentteam->MathSelfPlace = $mathplace[$i];
            if($mathplace[$i] == 0) $studentteam->MathSelfPlace = null;
            if($phplace[$i] != null && $phplace[$i] != 0) $studentteam->PhSelfPlace = $phplace[$i];
            if($phplace[$i] == 0) $studentteam->PhSelfPlace = null;
            if($infplace[$i] != null && $infplace[$i] != 0) $studentteam->InfSelfPlace = $infplace[$i];
            if($infplace[$i] == 0) $studentteam->InfSelfPlace = null;
            if($fullplace[$i] != null && $fullplace[$i] != 0) $studentteam->SummSelfPlace = $fullplace[$i] ;
            if($fullplace[$i] == 0) $studentteam->SummSelfPlace = null;
            $studentteam->save();
            $i++;
        }
        return //dd($req,$studentteams);
            back()
            ->with('success', 'Данные личного зачета загружены.');
    }
    public function changePlaceTeam(Request $req){
        $teams = new TeachersTeam;
        $teams = $teams->orderbyID($req->teamid);
        $i = 0;
        $fullplace = $req->fullplace;
        $mathplace = $req->mathplace;
        $phplace = $req->phplace;
        $infplace = $req->infplace;
        foreach($teams as $team){
            $team->MathTeamPlace = $mathplace[$i];
            $team->PhTeamPlace = $phplace[$i];
            $team->InfTeamPlace = $infplace[$i];
            $team->SummTeamPlace = $fullplace[$i];
            $team->save();
            $i++;
        }
        return 
            back()
            ->with('success', 'Данные командного зачета загружены.');
    }

    public function pdfTeacherThanks(){
        $teachers = Teacher::all();
        $maindata = MainInfo::find(1);
        foreach($teachers as $teacherdata){
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
        }
        
        $pdf = PDF::loadView('diploms.teacherthanks',[
            'maindata' => $maindata,
            'teachers' => $teachers
        ])->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }
    
    public function pdfTeacherParticipate(){
        $teachers = Teacher::all()->where('teachertable','==','true');
        $maindata = MainInfo::find(1);
        foreach($teachers as $teacherdata){
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
        }
        $pdf = PDF::loadView('diploms.teacherparticipate',[
            'maindata' => $maindata,
            'teachers' => $teachers
        ])->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }

    public function pdfStudentWin(){
        $students = Student::all()->where('TurnoutTime','<>',null);
        foreach($students as $studentdata){
            $studentres = $studentdata->studentsteam;
            $maindata = MainInfo::first();
            $nomination = Nomination::first();
            $studentres = $studentdata->studentsteam;
            $res = array();
            if($studentres->SummSelfPlace <= 3 && $studentres->SummSelfPlace != null){
                $res['SummSelfPlace'] = $studentres->SummSelfPlace;
            }
            if($studentres->SummSelf10Place <= 3 && $studentres->SummSelf10Place != null){
                $res['SummSelf10Place'] = $studentres->SummSelf10Place;
            }
            if($studentres->SummSelf11Place <= 3 && $studentres->SummSelf11Place != null){
                $res['SummSelf11Place'] = $studentres->SummSelf11Place;
            }
            if($studentres->PhSelfPlace <= 3 && $studentres->PhSelfPlace != null){
                $res['PhSelfPlace'] = $studentres->PhSelfPlace;
            }
            if($studentres->PhSelf10Place <= 3 && $studentres->PhSelf10Place != null){
                $res['PhSelf10Place'] = $studentres->PhSelf10Place;
            }
            if($studentres->PhSelf11Place <= 3 && $studentres->PhSelf11Place != null){
                $res['PhSelf11Place'] = $studentres->PhSelf11Place;
            }
            if($studentres->MathSelfPlace <= 3 && $studentres->MathSelfPlace != null){
                $res['MathSelfPlace'] = $studentres->MathSelfPlace;
            }
            if($studentres->MathSelf10Place <= 3 && $studentres->MathSelf10Place != null){
                $res['MathSelf10Place'] = $studentres->MathSelf10Place;
            }
            if($studentres->MathSelf11Place <= 3 && $studentres->MathSelf11Place != null){
                $res['MathSelf11Place'] = $studentres->MathSelf11Place;
            }
            if($studentres->InfSelfPlace <= 3 && $studentres->InfSelfPlace != null){
                $res['InfSelfPlace'] = $studentres->InfSelfPlace;
            }
            if($studentres->InfSelf10Place <= 3 && $studentres->InfSelf10Place != null){
                $res['InfSelf10Place'] = $studentres->InfSelf10Place;
            }
            if($studentres->InfSelf11Place <= 3 && $studentres->InfSelf11Place != null){
                $res['InfSelf11Place'] = $studentres->InfSelf11Place;
            }
            if($nomination->fullteam != 'false' || 
            $nomination->phteam != 'false' ||
            $nomination->mathteam != 'false' ||
            $nomination->infteam != 'false'){
                $team = TeachersTeam::find($studentres->TeamID);
                if($team != null){
                    if($team->SummTeamPlace <= 3 && $team->SummTeamPlace != null){
                        $res['SummTeamPlace'] = $team->SummTeamPlace;
                    }
                    if($team->PhTeamPlace <= 3 && $team->PhTeamPlace != null){
                        $res['PhTeamPlace'] = $team->PhTeamPlace;
                    }
                    if($team->MathTeamPlace <= 3 && $team->MathTeamPlace != null){
                        $res['MathTeamPlace'] = $team->MathTeamPlace;
                    }
                    if($team->InfTeamPlace <= 3 && $team->InfTeamPlace != null){
                        $res['InfTeamPlace'] = $team->InfTeamPlace;
                    }
                }
            }
            $studentdata->winarray = $res;
        }
        $pdf = PDF::loadView('diploms.studentwin',[
            'students' => $students,
            'maindata' => $maindata
        ])->setPaper('a4', 'landscape')->setWarnings(false);
         return $pdf->stream();
            
    }

    public function pdfStudentParticipate(){
        $students = Student::all()->where('TurnoutTime','<>',null);
        foreach($students as $studentdata){
            $studentres = $studentdata->studentsteam;
            $maindata = MainInfo::first();
            $nomination = Nomination::first();
            $studentres = $studentdata->studentsteam;
            $res = array();
            $win = false;
            if($studentres->SummSelfPlace <= 3 && $studentres->SummSelfPlace != null){
                $win = true;
            }
            if($studentres->SummSelf10Place <= 3 && $studentres->SummSelf10Place != null){
                $win = true;
            }
            if($studentres->SummSelf11Place <= 3 && $studentres->SummSelf11Place != null){
                $win = true;
            }
            if($studentres->PhSelfPlace <= 3 && $studentres->PhSelfPlace != null){
                $win = true;
            }
            if($studentres->PhSelf10Place <= 3 && $studentres->PhSelf10Place != null){
                $win = true;
            }
            if($studentres->PhSelf11Place <= 3 && $studentres->PhSelf11Place != null){
                $win = true;
            }
            if($studentres->MathSelfPlace <= 3 && $studentres->MathSelfPlace != null){
                $win = true;
            }
            if($studentres->MathSelf10Place <= 3 && $studentres->MathSelf10Place != null){
                $win = true;
            }
            if($studentres->MathSelf11Place <= 3 && $studentres->MathSelf11Place != null){
                $win = true;
            }
            if($studentres->InfSelfPlace <= 3 && $studentres->InfSelfPlace != null){
                $win = true;
            }
            if($studentres->InfSelf10Place <= 3 && $studentres->InfSelf10Place != null){
                $win = true;
            }
            if($studentres->InfSelf11Place <= 3 && $studentres->InfSelf11Place != null){
                $win = true;
            }
            if($nomination->fullteam != 'false' || 
            $nomination->phteam != 'false' ||
            $nomination->mathteam != 'false' ||
            $nomination->infteam != 'false'){
                $team = TeachersTeam::find($studentres->TeamID);
                if($team != null){
                    if($team->SummTeamPlace <= 3 && $team->SummTeamPlace != null){
                        $win = true;
                    }
                    if($team->PhTeamPlace <= 3 && $team->PhTeamPlace != null){
                        $win = true;
                    }
                    if($team->MathTeamPlace <= 3 && $team->MathTeamPlace != null){
                        $win = true;
                    }
                    if($team->InfTeamPlace <= 3 && $team->InfTeamPlace != null){
                        $win = true;
                    }
                }
            }
            $studentdata->win = $win;
        }
        $pdf = PDF::loadView('diploms.studentparticipate',[
            'students' => $students,
            'maindata' => $maindata
        ])->setPaper('a4', 'landscape')->setWarnings(false);
         return $pdf->stream();
    }
}
