<?php

use Illuminate\Database\Seeder;
use App\MainInfo;

class MainInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maininfo = new MainInfo();
        $maininfo->maindatestart = '2020-09-18';
        $maininfo->maindatestartstring = '18 сентября';
        $maininfo->regdatestart = '2020-07-08';
        $maininfo->regdateend = '2020-08-07';
        $maininfo->regdatestartstring = $maininfo->makedate('2020-07-08');
        $maininfo->regdateendstring = $maininfo->makedate('2020-08-07');
        $maininfo->year = $maininfo->getyear('2020-09-18');
        $maininfo->regtimeend = '12:00';
        $maininfo->regtimeendstring = '12:00';
        $maininfo->teamsize = 3;
        $maininfo->place = 'г. Киров, ул. Ленина, 112 (14 корпус ВятГУ)';
        $maininfo->regenable = 'true';
        $maininfo->loginenable = 'true';
        $maininfo->teachertabletitle = '';
        $maininfo->showresults = 'false';
        $maininfo->save();
    }
}
