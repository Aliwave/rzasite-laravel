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
            .diptext2 {
                text-align:center;
                margin-top:20px;
            }
            .name{
                text-align:center;
                padding-bottom:10px;
            }
            .school{
                text-align:center;
                margin-bottom:10px;
            }
            .separate {
                page-break-before: always;
            }
            .separate:last-of-type{
                page-break-before: auto;
            }

        </style>
    </head>
    <body>
    @if(!empty($teachers))
        @foreach($teachers as $teacherdata)
            <div class="maindata">
                <p class="vyatsu">
                    Федеральное государственное бюджетное образовательно учредждение<br>
                    высшего образования<br>
                    “Вятский государственный университет”<br>
                    Факультет компьютерных и физико-математических наук
                </p>
                <p class="diptext2">
                    Уважаем{{$teacherdata->Gender}}
                </p>
                <h1 class="name">
                    {{$teacherdata->LastName}} {{$teacherdata->FirstName}} @if(!empty($teacherdata->Patronymic)) {{$teacherdata->Patronymic}} @endif
                </h1>
                <p class="diptext1">
                    учитель {{$teacherdata->Subject}}
                </p>
                <p class="school">
                    {{$teacherdata->FullNameSchool}}
                </p>
                <p class="diptext">
                    Оргкомитет Областной олимпиады<br>
                    по математике, физике и информатике <br>
                    “Реальность. Задача. Алгоритм”<br>
                    выражает Вам благодарность<br>
                    за высокий уровень подготовки<br>
                    Ваших учеников к участию<br>
                    в олимпиаде, прошедшей {{$maindata->maindatestartstring}} {{$maindata->year}}<br>
                    в Вятском государственном университете
                </p>
                <p class="dean">
                    Председатель жюри олимпиады<br>
                    декан факультета компьютерных<br>
                    и физико-математических наук Н. А. Бушмелева<br>
                </p>
            </div>
            <div class="separate"></div>
        @endforeach
    @else
        <div class="maindata">
            <p class="vyatsu">
                Федеральное государственное бюджетное образовательно учредждение<br>
                высшего образования<br>
                “Вятский государственный университет”<br>
                Факультет компьютерных и физико-математических наук
            </p>
            <p class="diptext2">
                Уважаем{{$teacherdata->Gender}}
            </p>
            <h1 class="name">
                {{$teacherdata->LastName}} {{$teacherdata->FirstName}} @if(!empty($teacherdata->Patronymic)) {{$teacherdata->Patronymic}} @endif
            </h1>
            <p class="diptext1">
                учитель {{$teacherdata->Subject}}
            </p>
            <p class="school">
                {{$teacherdata->FullNameSchool}}
            </p>
            <p class="diptext">
                Оргкомитет Областной олимпиады<br>
                по математике, физике и информатике <br>
                “Реальность. Задача. Алгоритм”<br>
                выражает Вам благодарность<br>
                за высокий уровень подготовки<br>
                Ваших учеников к участию<br>
                в олимпиаде, прошедшей {{$maindata->maindatestartstring}} {{$maindata->year}}<br>
                в Вятском государственном университете
            </p>
            <p class="dean">
                Председатель жюри олимпиады<br>
                декан факультета компьютерных<br>
                и физико-математических наук Н. А. Бушмелева<br>
            </p>
        </div>
        <div class="separate"></div>
    @endif
    </body>
</html>