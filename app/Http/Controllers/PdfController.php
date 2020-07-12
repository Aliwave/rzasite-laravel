<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OlyRule;
use App\MainPage;
use App\ContactInfo;
use App\MainInfo;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use App\Student;

class PdfController extends Controller
{
    public function showPdf(){
        $pdf = PDF::loadView('diploms.studentwin')->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }

    public function teacherThanks(){
        $pdf = PDF::loadView('diploms.teacherthanks')->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }

    public function studentParticipate(){
        $pdf = PDF::loadView('diploms.studentparticipate')->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }

    public function studentWin(){
        $pdf = PDF::loadView('diploms.studentwin')->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }

    public function teacherParticipate(){
        $pdf = PDF::loadView('diploms.teacherparticipate')->setPaper('a4', 'landscape')->setWarnings(true);
        return $pdf->stream();
    }

    public function pdfQRPage(){
        $studentdata = Student::all();
        foreach($studentdata as $student){
            $student->CodeGenQR = base64_encode(QrCode::format('png')->size(250)->errorCorrection('H')->generate($student->CodeGenQR));
        }
        $pdf = PDF::loadView('ticketbase',[
            'studentdata' => $studentdata
        ])->setPaper('a4', 'portait')->setWarnings(true);
        return $pdf->stream();
    }
}
