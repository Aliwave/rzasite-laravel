<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactInfo;

class ContactsController extends Controller
{
    public function index(){
        $contactinfo = ContactInfo::find(1);
        return view('adminpanel.contactspage',[
            'contactdata'=> $contactinfo
        ]);
    }
    public function submit(Request $req){
        $contactinfo = ContactInfo::find(1);
        $contactinfo->content = $req->input('editordata');
        $contactinfo->save();
        return back()->with('success','Данные изменены.');
    }
}
