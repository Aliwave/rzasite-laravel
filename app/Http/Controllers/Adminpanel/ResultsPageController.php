<?php

namespace App\Http\Controllers\AdminPanel;

use App\MainInfo;
use App\Nomination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactInfo;
use App\StudentsTeam;
use App\TeachersTeam;
use App\Teacher;
use App\Student;

class ResultsPageController extends Controller
{
    public function index(){
        $teacher = Teacher::all();
        $student = Student::all();
        $studentteams = StudentsTeam::all();
        $teams = TeachersTeam::all();
        $nomination = Nomination::first();
        return 
        view('adminpanel.resultspage',[
            'teachers' => $teacher,
            'students' => $student,
            'teams' => $teams,
            'studentteams' => $studentteams,
            'nomination' => $nomination
        ]);
    }

    public function submitResStudent(Request $req){
        $studentteams = StudentsTeam::all();
        $nomination = Nomination::first();
        $i = 0;
        $matharray = $req->mathscore;
        $pharray = $req->phscore;
        $infarray = $req->infscore;
        foreach($studentteams as $studentteam){
            if($studentteam->student->Class == 10){
                if($nomination->math10self == 'true'){
                    if($matharray[$i] != null){
                        $studentteam->MathSelf10Score = $matharray[$i];
                    }else{
                        $studentteam->MathSelf10Score = null;
                    }
                }
                if($nomination->ph10self == 'true'){
                    if($pharray[$i] != null){
                    $studentteam->PhSelf10Score = $pharray[$i];
                    }else{
                        $studentteam->PhSelf10Score = null;
                    }
                }
                if($nomination->inf10self == 'true'){
                    if($infarray[$i] != null){
                        $studentteam->InfSelf10Score = $infarray[$i];
                    }else{
                        $studentteam->InfSelf10Score = null;
                    }
                }
                if($nomination->full10self == 'true'){
                    if($matharray[$i] != null || $pharray[$i] != null || $infarray[$i] != null){
                        $studentteam->SummSelf10Score = $matharray[$i] + $pharray[$i] + $infarray[$i];
                    }else{
                        $studentteam->SummSelf10Score = null;
                    }
                } 
            }else{
                if($nomination->math11self == 'true'){
                    if($matharray[$i] != null){
                        $studentteam->MathSelf11Score = $matharray[$i];
                    }else{
                        $studentteam->MathSelf11Score = null;
                    }
                }
                if($nomination->ph11self == 'true'){
                    if($pharray[$i] != null){
                        $studentteam->PhSelf11Score = $pharray[$i];
                    }else{
                        $studentteam->PhSelf11Score = null;
                    }
                }
                if($nomination->inf11self == 'true'){
                    if($infarray[$i] != null){
                        $studentteam->InfSelf11Score = $infarray[$i];
                    }else{
                        $studentteam->InfSelf11Score = null;
                    }
                }
                if($nomination->full11self == 'true'){
                    if($matharray[$i] != null || $pharray[$i] != null || $infarray[$i] != null){
                        $studentteam->SummSelf11Score = $matharray[$i] + $pharray[$i] + $infarray[$i];
                    }else{
                        $studentteam->SummSelf11Score = null;
                    }
                }
            }
            if($nomination->fullself == 'true'){
                if($matharray[$i] != null || $pharray[$i] != null || $infarray[$i] != null){
                    $studentteam->SummSelfScore = $matharray[$i] + $pharray[$i] + $infarray[$i];
                }else{
                    $studentteam->SummSelfScore = null;
                }
            }
            if($pharray[$i] != null){
                $studentteam->PhSelfScore = $pharray[$i];
            }else{
                $studentteam->PhSelfScore = null;
            }
            if($matharray[$i] != null){
                $studentteam->MathSelfScore = $matharray[$i];
            }else{
                $studentteam->MathSelfScore = null;
            }
            if($infarray[$i] != null){
                $studentteam->InfSelfScore = $infarray[$i];
            }else{
                $studentteam->InfSelfScore = null;
            }
            $studentteam->save();
            $i++;
        }
        return 
            back()
            ->with('success', 'Данные личного зачета загружены.');
    }

    public function submitResTeams(Request $req){
        $studentteams = TeachersTeam::all();
        $nomination = Nomination::first();
        $i = 0;
        $matharray = $req->mathscore;
        $pharray = $req->phscore;
        $infarray = $req->infscore;
        foreach($studentteams as $studentteam){
            if($nomination->mathteam == 'true'){
                if($matharray[$i] != null){
                    $studentteam->MathTeamScore = $matharray[$i];
                }else{
                    $studentteam->MathTeamScore = null;
                }
            }
            if($nomination->phteam == 'true'){
                if($pharray[$i] != null){
                    $studentteam->PhTeamScore = $pharray[$i];
                }else{
                    $studentteam->PhTeamScore = null;
                }
                
            }
            if($nomination->infteam == 'true'){
                if($infarray[$i] != null){
                    $studentteam->InfTeamScore = $infarray[$i];
                }else{
                    $studentteam->InfTeamScore = null;
                }
                
            }
            if($nomination->fullteam == 'true'){
                if($matharray[$i] != null || $pharray[$i] != null || $infarray[$i] != null){
                    $studentteam->SummTeamScore = $matharray[$i] + $pharray[$i] + $infarray[$i];
                }else{
                    $studentteam->SummTeamScore = null;
                }
            }
            $studentteam->save();
            $i++;
        }
        return
            back()
            ->with('success', 'Данные командного зачета загружены.');
    }

    public function winnerTeam(){
        $st = new TeachersTeam();
        $st->winner();
        return back()
        ->with('success', 'Обработка результатов командного зачета завершена.');
    }
    public function winnerSelf(){
        $st = new StudentsTeam();
        $st->winner();
        return back()
        ->with('success', 'Обработка результатов личного зачета завершена.');
    }
}
