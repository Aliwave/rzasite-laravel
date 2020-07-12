<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OlyRoom;
use App\Student;

class OlyRoomsController extends Controller
{
    public function showOlyRooms(){
        $olyrooms = OlyRoom::all();
        return view('adminpanel.olyrooms',[
            'olyrooms' => $olyrooms
        ]);
    }

    public function addOlyRoom(Request $req){
        $this->validate($req,[
            'roomnumber' => 'unique:olyrooms|numeric',
            'peoplecounttotal' => 'numeric'
        ]);
        $olyroom = new OlyRoom();
        $olyroom->roomnumber = $req->input('roomnumber');
        $olyroom->freecountcurrent = $req->input('peoplecounttotal');
        $olyroom->peoplecounttotal = $req->input('peoplecounttotal');
        $olyroom->save();
        return redirect()->route('adminOlyroomsPage')->with('success', 'Кабинет успешно добавлен.');
    }

    public function deleteOlyRoom($roomnumber){
        OlyRoom::find($roomnumber)->delete();
        return redirect()->route('adminOlyroomsPage')->with('success', 'Кабинет успешно удален.');
    }
}
