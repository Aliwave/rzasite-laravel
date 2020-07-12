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
                margin-top:20px;
                margin-bottom:20px;

            }
            .diptext {
                text-align:center;
                margin-bottom:170px;
            }
            .diptext1 {
                text-align:center;
            }
            .name{
                text-align:center;
                margin-top:20px;
                padding-bottom:20px;
            }
            .schoolclass{
                text-align:center;
                margin-top:0px;
                margin-bottom:0px;

            }
            .school{
                text-align:center;
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
                        <h2 class="main">СЕРТИФИКАТ</h2>
                        <p class="diptext1">подтверждает, что учитель {{$teacherdata->Subject}}</p>
                    <h1 class="name">
                        {{$teacherdata->LastName}} {{$teacherdata->FirstName}} @if(!empty($teacherdata->Patronymic)) {{$teacherdata->Patronymic}} @endif
                    </h1>
                    <p class="school">
                        {{$teacherdata->FullNameSchool}}
                    </p>

                    <p class="diptext">
                        принял{{$teacherdata->Gender}} участие в круглом столе ВятГУ<br>
                        "{{$maindata->teachertabletitle}}"<br>
                        ({{$maindata->maindatestartstring}} {{$maindata->year}})<br>
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
                    <h2 class="main">СЕРТИФИКАТ</h2>
                    <p class="diptext1">подтверждает, что учитель {{$teacherdata->Subject}}</p>
                <h1 class="name">
                    {{$teacherdata->LastName}} {{$teacherdata->FirstName}} @if(!empty($teacherdata->Patronymic)) {{$teacherdata->Patronymic}} @endif
                </h1>
                <p class="school">
                    {{$teacherdata->FullNameSchool}}
                </p>

                <p class="diptext">
                    принял{{$teacherdata->Gender}} участие в круглом столе ВятГУ<br>
                    "{{$maindata->teachertabletitle}}"<br>
                    ({{$maindata->maindatestartstring}} {{$maindata->year}})<br>
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