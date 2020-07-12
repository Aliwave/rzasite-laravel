<?php

use Illuminate\Database\Seeder;
use App\MainPage;

class MainPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new MainPage;
        $data->imagename = 'mainlogo.png';
        $data->tasks = '<h2>Задачи олимпиады:</h2>
        <ul class="main-tasks-list">
            <li>формирование интереса старшеклассников к точным наукам</li>
            <li>стимулирование творческой и научно-исследовательской деятельности учащихся</li>
            <li>выявление наиболее одаренных учащихся в области математики, физики, и информатики</li>
            <li>развитие связей и укрепление сотрудничества ВятГУ с общеобразовательными учреждениями Кировской области</li>
            <li>интеллектуальная и психологическая подготовка старшеклассников к сдаче ЕГЭ по математике, физике и информатике</li>
        </ul>';
        $data->save();
        $data = new MainPage;
        $data->imagename = 'mainimage.jpg';
        $data->save();
        $data = new MainPage;
        $data->imagename = 'firstroundimage.jpg';
        $data->save();
        $data = new MainPage;
        $data->imagename = 'secondroundimage.jpg';
        $data->save();
        $data = new MainPage;
        $data->imagename = 'thirdroundimage.jpg';
        $data->save();
        $data = new MainPage;
        $data->imagename = 'facultylogo.jpg';
        $data->save();
    }
}
