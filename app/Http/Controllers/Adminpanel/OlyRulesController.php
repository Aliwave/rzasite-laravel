<?php

namespace App\Http\Controllers\AdminPanel;

use App\MainInfo;
use App\Nomination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactInfo;
use App\OlyRule;

class OlyRulesController extends Controller
{
    public function index(){
        $olyrules = OlyRule::find(1);
        return view('adminpanel.rulespage',[
            'olyrules' => $olyrules
        ]);
    }
    public function submit(Request $req){
        $olyrules = OlyRule::find(1);
        $olyrules->content = $req->input('editordata');
        $olyrules->save();
        return back()
        ->with('success','Данные изменены.');
    }

    public function indexPers(){
        $pers = OlyRule::find(2);
        return view('adminpanel.perspage',[
            'pers' => $pers
        ]);
    }
    public function submitPers(Request $req){
        $pers = OlyRule::find(2);
        $pers->content = $req->input('editordata');
        $pers->save();
        return back()
        ->with('success','Данные изменены.');
    }

    public function indexStPers(){
        $stpers = OlyRule::find(3);
        return view('adminpanel.stperspage',[
            'stpers' => $stpers
        ]);
    }
    public function submitStPers(Request $req){
        $stpers = OlyRule::find(3);
        $stpers->content = $req->input('editordata');
        $stpers->save();
        return back()
        ->with('success','Данные изменены.');
    }
}
