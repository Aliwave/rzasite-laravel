<?php

use Illuminate\Database\Seeder;
use App\Nomination;

class NominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomination = new Nomination();
        $nomination->fullteam = 'true';

        $nomination->phteam = 'true';

        $nomination->mathteam = 'true';

        $nomination->infteam = 'true';

        $nomination->fullself = 'true';
        $nomination->full10self = 'true';
        $nomination->full11self = 'true';

        $nomination->phself = 'true';
        $nomination->ph10self = 'true';
        $nomination->ph11self = 'true';

        $nomination->infself = 'true';
        $nomination->inf10self = 'true';
        $nomination->inf11self = 'true';

        $nomination->mathself = 'true';
        $nomination->math10self = 'true';
        $nomination->math11self = 'true';
        
        $nomination->save();

        $nomination = new Nomination();
        $nomination->fullteam = 'Общий командный зачет';
//
        $nomination->phteam = 'Командный зачет по физике';
//
        $nomination->mathteam = 'Командный зачет по математике';
//
        $nomination->infteam = 'Командный зачет по информатике';
//
        $nomination->fullself = 'Общий личный зачет';
        $nomination->full10self = 'Общий личный зачет 10 класс';
        $nomination->full11self = 'Общий личный зачет 11 класс';
//
        $nomination->phself = 'Личный зачет по физике';
        $nomination->ph10self = 'Личный зачет по физике 10 класс';
        $nomination->ph11self = 'Личный зачет по физике 11 класс';
//
        $nomination->infself = 'Личный зачет по информатике';
        $nomination->inf10self = 'Личный зачет по информатике 10 класс';
        $nomination->inf11self = 'Личный зачет по информатике 11 класс';
//
        $nomination->mathself = 'Личный зачет по математике';
        $nomination->math10self = 'Личный зачет по математике 10 класс';
        $nomination->math11self = 'Личный зачет по математике 11 класс';
        
        $nomination->save();
    }
}
