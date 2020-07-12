<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css">
            body {
                background: url('/storage/img/diplom3.png') no-repeat ;
                width:100%;
                height:100%;
                margin:0px;
            }
            html {
                margin:0px;
            }
            * {
	            margin: 0;
	            padding: 0;
            }
            .vyatsu{
                text-align:center;
                margin-top:30px;
            }
            .dean{
                text-align:right;
                margin-right:15px;
            }
            .main{
                text-align:center;
                margin-top:10px;
                margin-bottom:10px;

            }
            .diptext {
                text-align:center;
            }
            .diptext1 {
                text-align:center;
            }
            .name{
                text-align:center;
                margin-top:10px;
                padding-bottom:10px;
            }
            .schoolclass{
                text-align:center;
                margin-top:0px;
                margin-bottom:0px;

            }
            .school{
                text-align:center;
            }
            .separate{
                page-break-before: always;
            }
            .separate:last-of-type{
                page-break-before:auto;
            }

        </style>
    </head>
    <body>
        @if(!empty($students))
            @foreach($students as $studentdata)
                @if($studentdata->win == false)
                    <p class="vyatsu">
                        Федеральное государственное бюджетное образовательно учредждение<br>
                        высшего образования<br>
                        “Вятский государственный университет”<br>
                        Факультет компьютерных и физико-математических наук
                    </p>
                    <h2 class="main">
                        СЕРТИФИКАТ<br>
                        УЧАСТНИКА
                    </h2>
                    <p class="diptext1">
                        подтверждает, что
                    </p>
                    <h1 class="name">
                        {{$studentdata->LastName}} {{$studentdata->FirstName}} @if(!empty($studentdata->Patronymic)) {{$studentdata->Patronymic}} @endif
                    </h1>
                    <p class="school">
                        {{$studentdata->teacher->FullNameSchool}}
                    </p>
                    <p class="diptext">
                        принял участие в областной олимпиаде <br>
                        “Реальность. Задача. Алгоритм”<br>
                        для учеников 10-11 классов <br>
                        общеобразовательных школ, лицеев и гимназий<br>
                        г. Кирова и Кировской области<br>
                        ({{$maindata->maindatestartstring}} {{$maindata->year}})
                    </p>


                    <p class="dean">
                        Председатель жюри олимпиады<br>
                        декан факультета компьютерных<br>
                        и физико-математических наук Н. А. Бушмелева<br>
                    </p>
                    <div class="separate"></div>
                @endif
            @endforeach
        @else
            <p class="vyatsu">
                Федеральное государственное бюджетное образовательно учредждение<br>
                высшего образования<br>
                “Вятский государственный университет”<br>
                Факультет компьютерных и физико-математических наук
            </p>
            <h2 class="main">
                СЕРТИФИКАТ<br>
                УЧАСТНИКА
            </h2>
            <p class="diptext1">
                подтверждает, что
            </p>
            <h1 class="name">
                {{$studentdata->LastName}} {{$studentdata->FirstName}} @if(!empty($studentdata->Patronymic)) {{$studentdata->Patronymic}} @endif
            </h1>
            <p class="school">
                {{$studentdata->teacher->FullNameSchool}}
            </p>
            <p class="diptext">
                принял участие в областной олимпиаде <br>
                “Реальность. Задача. Алгоритм”<br>
                для учеников 10-11 классов <br>
                общеобразовательных школ, лицеев и гимназий<br>
                г. Кирова и Кировской области<br>
                ({{$maindata->maindatestartstring}} {{$maindata->year}})
            </p>
            
            
            <p class="dean">
                Председатель жюри олимпиады<br>
                декан факультета компьютерных<br>
                и физико-математических наук Н. А. Бушмелева<br>
            </p>
            <div class="separate"></div>
        @endif
    </body>
</html>