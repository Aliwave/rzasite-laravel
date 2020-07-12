<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\MainInfo;
use App\ContactInfo;
use App\MainPage;

class GalleryController extends Controller
{
    public function index()
    {
        $image = new Image;
        $data = $image->orderBy('year','asc')->get();
        $maindata = MainInfo::find(1);
        $contactdata = ContactInfo::find(1);
        $mainlogo = MainPage::find(1);
        $years = $data->unique('year');
        $images = $data->where('year', '2019');
        return view('gallery',[
            'contactdata'=> $contactdata,
            'data'=> $maindata,
            'years'=>$years,
            'images'=>$images,
            'selectyear'=>'2019',
            'mainlogo' => $mainlogo
        ]);

    }

    public function yearchange(Request $req)
    {
        $image = new Image;
        $data = $image->all();
        $maindata = MainInfo::find(1);
        $contactdata = ContactInfo::find(1);
        $years = $data->unique('year');
        $images = $data->where('year', $req->year);
        return view('gallery',[
            'contactdata'=> $contactdata,
            'data'=> $maindata,
            'years'=>$years,
            'images'=>$images,
            'selectyear'=>$req->year
        ]);

    }

}
