<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainInfo;
use App\ContactInfo;
use App\OlyRule;
use App\MainPage;
use App\Student;
use App\Teacher;
use Carbon\Carbon;
use App\OlyRoom;
use App\Nomination;
use Auth;
use App\TeachersTeam;
use App\Task;

class PageController extends Controller
{ 
    public function mainpage(){
        $data = MainInfo::find(1);
        $mainlogo = MainPage::find(1);
        $mainimage = MainPage::find(2);
        $firstroundimage = MainPage::find(3);
        $secondroundimage = MainPage::find(4);
        $thirdroundimage = MainPage::find(5);
        $facultylogo = MainPage::find(6);
        $contactdata = ContactInfo::find(1);
        return view('main',[
            'contactdata'=> $contactdata,
            'data'=> $data,
            'mainlogo' => $mainlogo,
            'mainimage' => $mainimage,
            'firstroundimage' => $firstroundimage,
            'secondroundimage'=> $secondroundimage,
            'thirdroundimage' => $thirdroundimage,
            'facultylogo' => $facultylogo
        ]);
    }

    public function rulespage() {
        $olyrules = OlyRule::find(1);
        return view('rules',[
            'olyrules' => $olyrules
        ]);
    }

    public function Perspage() {
        $olyrules = OlyRule::find(2);
        return view('pers',[
            'olyrules' => $olyrules
        ]);
    }

    public function StPerspage() {
        $olyrules = OlyRule::find(3);
        return view('stpers',[
            'olyrules' => $olyrules
        ]);
    }

    public function taskspage(){
        $mainlogo = MainPage::find(1);
        $data = new MainInfo();
        $tasks = Task::orderBy('year','asc')->get();
        return view('tasks',[
            'tasks' => $tasks
        ]);
    }

    public function contactspage(){
        $contactdata = ContactInfo::find(1);
        return view('contacts',[
            'contactdata'=> $contactdata,
        ]);

    }

    public function timeConfirm($teacherid, $studentid){
        $maindata = MainInfo::first();
        $admin = false;
        $empty = false;
        if(Auth::user() != null){
            if(Auth::user()->isAdmin()){
                $admin = true;
            }
        }
        $student = Student::find($studentid);
        if($maindata->showresults == 'false' && $admin == true){
            if($student->TeacherID == $teacherid){
                if($student->roomnumber == null){
                    $teacherdata = Teacher::where([
                        ['City',$student->teacher->City],
                        ['FullNameSchool',$student->teacher->FullNameSchool]
                    ])->get();
                    $teacherid = array();
                    foreach($teacherdata as $teacheru){
                        array_push($teacherid, $teacheru->TeacherID);
                    }
                    $studentdata = Student::all()
                                        ->where('roomnumber','<>',null)
                                        ->whereIn('TeacherID',$teacherid);
                    $rooms = OlyRoom::all();
                    $countfromschool = array();
                    $countfree = array();
                    foreach($rooms as $room){
                        if($room->freecountcurrent != 0){
                            $count = $studentdata->where('roomnumber',$room->roomnumber)->count();
                            $countfromschool[$room->roomnumber] = $count;
                            $countfree[$room->roomnumber] = $room->freecountcurrent;
                        }
                    }
                    if(count($countfree) == 0){
                        $empty = true;
                    }else{
                        asort($countfromschool);
                        arsort($countfree);
                        $indexroom = array();
                        $freeindexroom = array_keys($countfromschool);
                        $schoolindexroom = array_keys($countfree);
                        foreach($countfromschool as $roombumber => $countpeople){
                            $indf = array_search($roombumber, $freeindexroom);
                            $inds = array_search($roombumber, $schoolindexroom);
                            $indexroom[$roombumber] = $indf + $inds;
                        }
                        asort($indexroom);
                        $needroom = array_key_first($indexroom);
                        $olyroom = OlyRoom::find($needroom);
                        $olyroom->freecountcurrent = $olyroom->freecountcurrent-1;
                        $olyroom->save();
                        $student->roomnumber = $needroom;
                        $time = Carbon::now()->toDateTimeString();
                        $student->TurnoutTime = $time;
                        $student->save();
                    }
                }else{
                    $time = $student->TurnoutTime;
                    $needroom = $student->roomnumber; 
                }
            }
            if($empty == false){
                return 
                view('studentprofile.timeConfirm',[
                    'time' => $time,
                    'room' => $needroom
                ]);
            }else{
                return view('studentprofile.timeConfirm',[
                    'text' => "Все кабинеты заполнены! Обратитесь к организаторам!"
                ]);
            }
            
        }else{
            return view('studentprofile.timeConfirm',[
                'text' => "Включен режим результатов.
                Данная информация не актуальна."
            ]);
        }
        if($admin == false){
            if($maindata->showresults == 'false' && $student->TurnoutTime != null){
                
                return view('studentprofile.timeConfirm',[
                    'room' => $student->roomnumber,
                    'time' => $student->TurnoutTime
                ]);
            }
            if($student->TurnoutTime != null && $maindata->showresults == 'true'){
                $student = Student::find($studentid);
                $team = TeachersTeam::all()->where('TeamID','==',$student->studentsteam->TeamID);
                $teacher = Teacher::find($teacherid);
                $nomination = Nomination::first();
                return view('studentprofile.timeConfirm',[
                    'student' => $student,
                    'teacher' => $teacher,
                    'team' => $team,
                    'nomination' => $nomination
                ]);
            }
            if($student->TurnoutTime == null && $maindata->showresults == 'true'){
                return view('studentprofile.timeConfirm',[
                    'text' => 'Отсутствует подтверждение прибытия на олимпиаду.  Если вы участвовали - обратитесь к организаторам.'
                ]);
            }
            if($student->TurnoutTime == null && $maindata->showresults != 'true'){
                return view('studentprofile.timeConfirm',[
                    'text' => 'Время не подтверждено, обратитесь к организаторам со сканером на входе'
                ]);
            }
        }
    }

    public function timeConfirmPost(Request $req, $teacherid, $studentid){
        $key = env('LOCAL_CONFIRM_KEY');
        $empty = false;
        if($req->specifykey == $key){
            $student = Student::find($studentid);
            if($student->TeacherID == $teacherid){
                if($student->roomnumber == null){
                    $teacherdata = Teacher::where([
                        ['City',$student->teacher->City],
                        ['FullNameSchool',$student->teacher->FullNameSchool]
                    ])->get();
                    $teacherid = array();
                    foreach($teacherdata as $teacheru){
                        array_push($teacherid, $teacheru->TeacherID);
                    }
                    $studentdata = Student::all()
                                        ->where('roomnumber','<>',null)
                                        ->whereIn('TeacherID',$teacherid);
                    $rooms = OlyRoom::all();
                    $countfromschool = array();
                    $countfree = array();
                    foreach($rooms as $room){
                        if($room->freecountcurrent != 0){
                        $count = $studentdata->where('roomnumber',$room->roomnumber)->count();
                        $countfromschool[$room->roomnumber] = $count;
                        $countfree[$room->roomnumber] = $room->freecountcurrent;
                        }
                    }
                    if(count($countfree) == 0){
                        $empty = true;
                    }else{
                        asort($countfromschool);
                        arsort($countfree);
                        $indexroom = array();
                        $freeindexroom = array_keys($countfromschool);
                        $schoolindexroom = array_keys($countfree);
                        foreach($countfromschool as $roombumber => $countpeople){
                            $indf = array_search($roombumber, $freeindexroom);
                            $inds = array_search($roombumber, $schoolindexroom);
                            $indexroom[$roombumber] = $indf + $inds;
                        }
                        asort($indexroom);
                        $needroom = array_key_first($indexroom);
                        $olyroom = OlyRoom::find($needroom);
                        $olyroom->freecountcurrent = $olyroom->freecountcurrent-1;
                        $olyroom->save();
                        $student->roomnumber = $needroom;
                        $time = Carbon::now()->toDateTimeString();
                        $student->TurnoutTime = $time;
                        $student->save();
                    }
                }else{
                    $time = $student->TurnoutTime;
                    $needroom = $student->roomnumber; 
                }
            }
            if($empty == false){
                $resultstring = $student->LastName. " ".$student->FirstName." ".$student->Patronymic."\n".
                "Кабинет:".$needroom."\n".
                "Время:".$time;
            }else{
                $resultstring = "Все кабинеты заполнены! Обратитесь к организаторам!";
            }
            
            return $resultstring;
        }
    }

    public function backAdmin(){
        if(session()->get('admin')!= null && session()->get('admin')==Auth::user()->find(1)->password){
            Auth::loginUsingId(1);
            session()->forget('admin');
            return redirect()->route('adminPanel');
        }else{
            abort(404);
        }
        
    }
}
