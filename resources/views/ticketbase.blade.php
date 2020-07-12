<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css">
            
            html {
                margin:0px;
            }
            * {
	            margin: 0;
	            padding: 0;
            }
            body {
                width:100%;
                height:100%;
                margin-left:20px;
                margin-right:20px;
                font-size:20px;
            }
            p{
                line-height:1;
                margin-top:7px;
                margin-bottom:6px;
            }
            .vyatsu{
                text-align:center;
                margin-top:0px;
                font-size:20px;
                position:relative;
            }
            .datemain{
                text-align:right;
                position:absolute;
                top:20;
                right:10;
            }
            table{
                margin:0px;
                padding:0px;
                border-collapse: collapse;
            }
            td,th {
                padding-left:5px;
                padding-right:5px;
            }
            th{
                border-bottom:2px solid black;
            }
            .titleplan{
                text-align:center;
            }
            .tablemain{
                position:relative;
            }
            .qrcode{
                position:absolute;
                top:0;
                left:450;
            }
            .name{
                position:relative;
            }
            .schoolclass{
                position:absolute;
                top:0;
                right:10;
            }
        </style>
    </head>
    <body>
    @foreach($studentdata as $student)
        <div class="pass">
            <p class="vyatsu">
                ФГБОУ ВО "Вятский государственный университет"<br>
                Областная олимпиада "Реальность. Задача Алгоритм."<br>
                Пропуск №{{$student->StudentID}}<br><span class="datemain">{{$maindata->maindatestartstring}} {{$maindata->year}}</span>
            </p>
            <p class="name">Участник: <b>{{$student->LastName}} {{$student->FirstName}} {{$student->Patronymic}}</b> <span class="schoolclass">Класс {{$student->Class}}</span></p>
            <p>Школа: <b>{{$student->teacher->FullNameSchool}}, {{$student->teacher->City}}</b> <span></span></p>
            <div class="tablemain">
                <p class="titleplan">План мероприятия</p>
                <table>
                    <tr>
                        <th></th>
                        <th>Время</th>
                        <th>Место</th>
                    </tr>
                    <tr>
                        <td>Регистрация участников:</td>
                        <td>10:00 - 11:00</td>
                        <td>г. Киров, ул. Ленина, д. 111, фойе</td>
                    </tr>
                    <tr>
                        <td>Математика:</td>
                        <td>11:00 - 12:00</td>
                        <td>каб. 332</td>
                    </tr>
                    <tr>
                        <td>Информатика</td>
                        <td>12:10 - 13:10</td>
                        <td>каб. 332</td>
                    </tr>
                    <tr>
                        <td>Физика:</td>
                        <td>13:20 - 14:20</td>
                        <td>каб. 332</td>
                    </tr>
                    <tr>
                        <td>Эксперимент-шоу:</td>
                        <td>14:30 - 15:10</td>
                        <td>актовый зал</td>
                    </tr>
                    <tr>
                        <td>Закрытие олимпиады:</td>
                        <td>15:10 - 16:30</td>
                        <td>актовый зал</td>
                    </tr>
                </table>
                <div class="qrcode">
                    <p>Ваш QR-code для входа и просмотра результатов:</p>
                    <img src="data:image/png;base64, {{$student->CodeGenQR}}  ">

                </div>
            </div>
            <p>------------------------------------------------------------------------линия среза----------------------------------------------------------</p>
        </div> 
        @endforeach

    </body>
</html>
