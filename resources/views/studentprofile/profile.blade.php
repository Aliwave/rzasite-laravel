@extends('layouts.app')

@section('page-title')Студент - Личный кабинет@endsection

@section('content')
    <div class="profile">
        <div class="container">
            <h1 class="sidepagetitle">Личный кабинет ученика</h1>
            <img src="data:image/png;base64, {{$qrcode}} ">
            <p>Ваш QR-код для прохода на олимпиаду</p>
            @if($maindata->showresults == 'false')
                <a href="{{route('StudentPass')}}" class="btn btn-primary">Распечатать пропуск</a>
            @endif
            @if(!empty($studentdata->TurnoutTime) and $maindata->showresults == 'true')
                <a href="{{ route('StudentDiplom') }}" class="btn btn-primary">
                    Распечатать диплом
                </a>
            @elseif(!empty($studentdata->TurnoutTime) and $maindata->showresults == 'false')
                <p>Результаты не опубликованы, пожалуйста, подождите.</p>
            @else
                <p>Прибытие на олимпиаду не было подтверждено, результаты недоступны. 
                    Если вы участвовали - обратитесь к организаторам.</p>
            @endif
            <p>Номер пропуска: {{$studentdata->StudentID}}</p>
            <p>ФИО участника: {{$studentdata->LastName}} {{$studentdata->FirstName}} 
                @if(!empty($studentdata->Patronymic)){{$studentdata->Patronymic}}@endif</p>
            <p>Школа: {{$teacherdata->FullNameSchool}}</p>
            @if(!empty($studentdata->studentsteam->TeamID)) <p>Команда №{{$studentdata->studentsteam->TeamID}}</p> @endif
            <p>Учитель: {{$teacherdata->LastName}} {{$teacherdata->FirstName}} 
                @if(!empty($teacherdata->Patronymic)){{$teacherdata->Patronymic}}@endif</p>
            <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
                Выйти из учетной записи
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection