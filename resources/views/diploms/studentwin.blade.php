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
                @foreach($studentdata->winarray as $nomi => $place)
                    <div class="diplom">
                    <p class="vyatsu">
                        Федеральное государственное бюджетное образовательно учредждение<br>
                        высшего образования<br>
                        “Вятский государственный университет”<br>
                        Факультет компьютерных и физико-математических наук
                    </p>
                        <h2 class="main">ДИПЛОМ<br>
                        @if($place == 1)
                            I
                        @elseif($place == 2)
                            II
                        @elseif($place==3)
                            III
                        @endif СТЕПЕНИ</h2>
                    <p class="diptext">
                        за @if($place == 1)
                                победу
                            @else
                                высокие результаты
                            @endif
                        в @if($nomi == 'SummSelfPlace')
                            общем личном зачете
                          @elseif($nomi == 'SummSelf10Place')
                            общем личном зачете среди 10 классов
                          @elseif($nomi == 'SummSelf11Place')
                            общем личном зачете среди 11 классов
                          @elseif($nomi == 'PhSelfPlace')
                            личном зачете по физике
                          @elseif($nomi == 'PhSelf10Place')
                            личном зачете по физике среди 10 классов
                          @elseif($nomi == 'PhSelf11Place')
                            личном зачете по физике среди 11 классов
                          @elseif($nomi == 'MathSelfPlace')
                            личном зачете по математике
                          @elseif($nomi == 'MathSelf10Place')
                            личном зачете по математике среди 10 классов
                          @elseif($nomi == 'MathSelf11Place')
                            личном зачете по математике среди 11 классов
                          @elseif($nomi == 'InfSelfPlace')
                            личном зачете по информатике
                          @elseif($nomi == 'InfSelf10Place')
                            личном зачете по информатике среди 10 классов
                          @elseif($nomi == 'InfSelf11Place')
                            личном зачете по информатике среди 11 классов
                          @elseif($nomi == 'SummTeamPlace')
                            командном зачете
                          @elseif($nomi == 'PhTeamPlace')
                            командном зачете по физике
                          @elseif($nomi == 'MathTeamPlace')
                            командном зачете по математике
                          @elseif($nomi == 'InfTeamPlace')
                            командном зачете по информатике
                          @endif<br>
                        областной олимпиады<br>
                        “Реальность. Задача. Алгоритм”<br>
                        для учеников 10-11 классов<br>
                        общеобразовательных школ, лицеев и гимназий<br>
                        г. Кирова и Кировской области {{$maindata->maindatestartstring}} {{$maindata->year}}
                        награждается
                    </p>
                    <h1 class="name">{{$studentdata->LastName}} {{$studentdata->FirstName}} 
                    @if(!empty($studentdata->Patronymic)) {{$studentdata->Patronymic}} @endif</h1>
                    <p class="school">{{$studentdata->teacher->FullNameSchool}}
                    </p>
                    <p class="schoolclass">{{$studentdata->Class}} класс</p>
                    <p class="dean">
                        Председатель жюри олимпиады<br>
                        декан факультета компьютерных<br>
                        и физико-математических наук Н. А. Бушмелева<br>
                    </p>
                    </div>
                    <div class="separate"></div>
                @endforeach
            @endforeach
        @else
            @foreach($winarray as $nomi => $place)
            <div class="diplom">
                <p class="vyatsu">
                    Федеральное государственное бюджетное образовательно учредждение<br>
                    высшего образования<br>
                    “Вятский государственный университет”<br>
                    Факультет компьютерных и физико-математических наук
                </p>
                    <h2 class="main">ДИПЛОМ<br>
                    @if($place == 1)
                        I
                    @elseif($place == 2)
                        II
                    @elseif($place==3)
                        III
                    @endif СТЕПЕНИ</h2>
                <p class="diptext">
                    за @if($place == 1)
                            победу
                        @else
                            высокие результаты
                        @endif
                    в @if($nomi == 'SummSelfPlace')
                        общем личном зачете
                      @elseif($nomi == 'SummSelf10Place')
                        общем личном зачете среди 10 классов
                      @elseif($nomi == 'SummSelf11Place')
                        общем личном зачете среди 11 классов
                      @elseif($nomi == 'PhSelfPlace')
                        личном зачете по физике
                      @elseif($nomi == 'PhSelf10Place')
                        личном зачете по физике среди 10 классов
                      @elseif($nomi == 'PhSelf11Place')
                        личном зачете по физике среди 11 классов
                      @elseif($nomi == 'MathSelfPlace')
                        личном зачете по математике
                      @elseif($nomi == 'MathSelf10Place')
                        личном зачете по математике среди 10 классов
                      @elseif($nomi == 'MathSelf11Place')
                        личном зачете по математике среди 11 классов
                      @elseif($nomi == 'InfSelfPlace')
                        личном зачете по информатике
                      @elseif($nomi == 'InfSelf10Place')
                        личном зачете по информатике среди 10 классов
                      @elseif($nomi == 'InfSelf11Place')
                        личном зачете по информатике среди 11 классов
                      @elseif($nomi == 'SummTeamPlace')
                        командном зачете
                      @elseif($nomi == 'PhTeamPlace')
                        командном зачете по физике
                      @elseif($nomi == 'MathTeamPlace')
                        командном зачете по математике
                      @elseif($nomi == 'InfTeamPlace')
                        командном зачете по информатике
                      @endif<br>
                    областной олимпиады<br>
                    “Реальность. Задача. Алгоритм”<br>
                    для учеников 10-11 классов<br>
                    общеобразовательных школ, лицеев и гимназий<br>
                    г. Кирова и Кировской области {{$maindata->maindatestartstring}} {{$maindata->year}}
                    награждается
                </p>
                <h1 class="name">{{$studentdata->LastName}} {{$studentdata->FirstName}} @if(!empty($studentdata->Patronymic)) {{$studentdata->Patronymic}} @endif</h1>
                <p class="school">{{$studentdata->teacher->FullNameSchool}}
                </p>
                <p class="schoolclass">{{$studentdata->Class}} класс</p>
                <p class="dean">
                    Председатель жюри олимпиады<br>
                    декан факультета компьютерных<br>
                    и физико-математических наук Н. А. Бушмелева<br>
                </p>
                </div>
                <div class="separate"></div>
            @endforeach
        @endif
    </body>
</html>