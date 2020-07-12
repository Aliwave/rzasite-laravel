<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\OlyRoom;
use App\StudentsTeam;
use App\TeachersTeam;
use App\Nomination;
use App\MainInfo;
use Carbon\Carbon;

class AjaxController extends Controller
{
    public function getCities(Request $req){
        $request_params = array(
            'country_id' => '1', 
            'region_id' => '1130218', 
            'q' => $req->city,
            'access_token' => env('VK_API_KEY'),
            'v' => '5.103'
        ); 
        $get_params = http_build_query($request_params); 
        $array = json_decode(file_get_contents('https://api.vk.com/method/database.getCities?'. $get_params), true); 
        $array = $array['response']['items'];
        $array = array_filter($array,function ($element) {
            return $element["region"] == 'Кировская область';
        } );
        return $array;
    }

    public function getTeacherSchool(Request $req){
        $request_params = array(
            'q' => $req->shortnameschool,
            'city_id' => $req->cityid, 
            'access_token' => env('VK_API_KEY'), 
            'v' => '5.103'
        ); 
        $get_params = http_build_query($request_params); 
        $array = json_decode(file_get_contents('https://api.vk.com/method/database.getSchools?'. $get_params), true);
        return $array;
    }

    public function getTeacherFullSchool(Request $req){
        $request_params = array(
            'apikey' => env('YANDEX_API_KEY'),
            'text' => $req->shortnameschool.', '.$req->cityname,
            'type' => 'biz',
            'lang' => 'ru_RU',
            'results' => 1
        ); 
        $get_params = http_build_query($request_params); 
        $array = json_decode(file_get_contents('https://search-maps.yandex.ru/v1/?'. $get_params), true);
        return $array;
        ;
    }

    public function getSchool(Request $req){
        $data = new Teacher;
        $school = $data->where('City',$req['city'])->get();
        $school = $school->unique('FullNameSchool');
        return 
        view('auth.registerStudent',[
            'schools'=>$school
        ]);
    }

    public function getTeacher(Request $req){
        $data = new Teacher;
        $teacher = $data->where([
            ['City',$req['city']],
            ['FullNameSchool',$req['fullnameschool']]
        ])->get();
        //$teacher = $data->->get();
        return 
        view('auth.registerStudent',[
            'teachers'=>$teacher
        ]);
    }   
}
