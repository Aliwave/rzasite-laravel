<?php

use Illuminate\Database\Seeder;
use App\ContactInfo;

class ContactInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactinfo = new ContactInfo();
        $contactinfo->content = '<h1 class="sidepagetitle">Контакты</h1>
        <p>Координатор олимпиады, зам. председателя оргкомитета:</p>
        <p><b>Чупраков Дмитрий Вячеславович</b>,
            кандидат физико-математических наук, доцент кафедры
            фундаментальной математики ВятГУ
        </p>
        <p>
            сот. тел.: <b><a href="tel:89058711879">8-905-871-18-79</a> </b>
        </p>
        <p>
        e-mail: <a href="mailto:chupdiv@yandex.ru"><b>chupdiv@yandex.ru</b></a>
        </p>
        <p>Деканат факультета компьютерных и физико-математических наук: 
            <b><a href="tel:8332208961">(8332) 208-961</a></b> 
        </p>';
        $contactinfo->save();
    }
}
