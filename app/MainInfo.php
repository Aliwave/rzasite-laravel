<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainInfo extends Model
{
    protected $table = 'maininfo';
    public function makedate($temp){
        $date = strtotime($temp);
        $month_name = array( 01 => 'января', 02 => 'февраля', 03 => 'марта', 
        04 => 'апреля', 05 => 'мая', 06 => 'июня', 
        7 => 'июля', 8 => 'августа', 9 => 'сентября', 
        10 => 'октября', 11 => 'ноября', 12 => 'декабря' 
                   );            
        $day   = date( 'j',$date );
        $year  = date( 'Y',$date );
        $month = $month_name[ date( 'n',$date ) ]; 

        $resdate = "$day $month";
        return $resdate;
    }
    public function getyear($temp){
        $date = strtotime($temp);
        $year  = date( 'Y',$date );
        return $year;
    }
}
