<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Task;
        $data->olycount = 'I';
        $data->year = '2013';
        $data->mathtask = 'RZA2013mathtasks.pdf';
        $data->phtask = 'RZA2013phtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'II';
        $data->year = '2014';
        $data->mathtask = 'RZA2014mathtasks.pdf';
        $data->phtask = 'RZA2014phtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'III';
        $data->year = '2015';
        $data->mathtask = 'RZA2015mathtasks.pdf';
        $data->phtask = 'RZA2015phtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'IV';
        $data->year = '2016';
        $data->mathtask = 'RZA2016mathtasks.pdf';
        $data->phtask = 'RZA2016phtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'V';
        $data->year = '2017';
        $data->mathtask = 'RZA2017mathtasks.pdf';
        $data->phtask = 'RZA2017phtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'VI';
        $data->year = '2018';
        $data->mathtask = 'RZA2014mathtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'VII';
        $data->year = '2019';
        $data->mathtask = 'RZA2019mathtasks.pdf';
        $data->save();
        $data = new Task;
        $data->olycount = 'VIII';
        $data->year = '2020';
        $data->mathtask = 'RZA2020mathtasks.pdf';
        $data->phtask = 'RZA2020phtasks.pdf';
        $data->save();
    }
}
