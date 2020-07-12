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
use App\OlyRoom;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\MainInfo;

class OlyLiveController extends Controller
{
    public function index(){
        $students = Student::paginate(20);
        $sear = null;
        $olyrooms = OlyRoom::all();
        return view('adminpanel.live',[
            'students' => $students,
            'olyrooms' => $olyrooms,
            'sear' => $sear
        ]);
    }

    public function change(Request $req){
        $students = Student::find($req->st);
        $students->roomnumber = $req->roomnumber;
        $olyroom = OlyRoom::find($req->old);
        $olyroom->freecountcurrent = $olyroom->freecountcurrent+1;
        $olyroom->save();
        $olyroom = OlyRoom::find($req->roomnumber);
        $olyroom->freecountcurrent = $olyroom->freecountcurrent-1;
        $olyroom->save();
        $students->save();
        if($req->searchnum != null){
            $sear = $req->searchnum;
            $students = new Student;
            $students = $students->where('StudentID','like',"%{$req->searchnum}%")
                                ->orWhere('FirstName','like',"%{$req->searchnum}%")
                                ->orWhere('LastName','like',"%{$req->searchnum}%")
                                ->orWhere('Patronymic','like',"%{$req->searchnum}%")
                                ->paginate(20);
            $olyrooms = OlyRoom::all();
            return view('adminpanel.live',[
                'students' => $students,
                'olyrooms' => $olyrooms,
                'sear' => $sear
            ]);
        }else{
            $sear = null;
            $students = Student::paginate(20);
            $olyrooms = OlyRoom::all();
            return view('adminpanel.live',[
                'students' => $students,
                'olyrooms' => $olyrooms,
                'sear' => $sear
            ]);
        }
    }

    public function search(Request $req){
        if($req->searchnum != null){
            $sear = $req->searchnum;
            $students = new Student;
            $students = $students->where('StudentID','like',"%{$req->searchnum}%")
                                ->orWhere('FirstName','like',"%{$req->searchnum}%")
                                ->orWhere('LastName','like',"%{$req->searchnum}%")
                                ->orWhere('Patronymic','like',"%{$req->searchnum}%")
                                ->paginate(20);
            $olyrooms = OlyRoom::all();
            return view('adminpanel.live',[
                'students' => $students,
                'olyrooms' => $olyrooms,
                'sear' => $sear
            ]);
        }else{
            $sear = null;
            $students = Student::paginate(20);
            $olyrooms = OlyRoom::all();
            return view('adminpanel.live',[
                'students' => $students,
                'olyrooms' => $olyrooms,
                'sear' => $sear
            ]);
        }
    }

    public function pdfStudentPassAdmin($id){
        $maindata = MainInfo::first();
        $studentdata = Student::find($id);
        $studentdata->CodeGenQR = base64_encode(QrCode::format('png')->size(250)->errorCorrection('H')->generate($studentdata->CodeGenQR));
        $pdf = PDF::loadView('ticketbase',[
            'studentdata' => [$studentdata],
            'maindata' => $maindata
        ])->setPaper('a4', 'portait')->setWarnings(true);
        return $pdf->stream();
    }
}
