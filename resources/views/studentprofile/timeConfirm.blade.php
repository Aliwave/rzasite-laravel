@extends('layouts.app')

@section('page-title')Подтверждение времени@endsection

@section('content')
<div class="container">
<div class="mild-separate"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(!empty($room))
                        Время подтверждено! 
                    @elseif(!empty($text))
                        Пока пусто :(
                    @else
                        Итоги
                    @endif
                </div>
                <div class="card-body">
                @if(!empty($room))
                    <h2>Кабинет: {{$room}}</h2>
                    <h2>Время: {{$time}}</h2>
                @elseif(!empty($text))
                    <h2>{{$text}}</h2>
                @else
                    <h3>{{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif</h3>
                    <h4>{{$teacher->FullNameSchool}}</h4>
                    <a href="{{ route('StudentDiplom') }}" class="btn btn-primary">
                        Распечатать диплом
                    </a>
                    <h3>Результаты:</h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Зачет</th>
                                <th scope="col">Кол-во баллов</th>
                                <th scope="col">Место</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($team[0]))
                                @if($nomination->fullteam == 'true')
                                    @if(!empty($team[0]->SummTeamScore))
                                        <tr>
                                            <th scope="row">Командный зачет</th>
                                            <td>{{$team[0]->SummTeamScore}}</td>
                                            <td>{{$team[0]->SummTeamPlace}}</td>
                                        </tr>
                                    @endif
                                @endif
                                @if($nomination->phteam == 'true')
                                    @if(!empty($team[0]->PhTeamScore))
                                        <tr>
                                            <th scope="row">Командный зачет по физике</th>
                                            <td>{{$team[0]->PhTeamScore}}</td>
                                            <td>{{$team[0]->PhTeamPlace}}</td>
                                        </tr>
                                    @endif
                                @endif
                                @if($nomination->mathteam == 'true')
                                    @if(!empty($team[0]->MathTeamScore))
                                        <tr>
                                            <th scope="row">Командный зачет по математике</th>
                                            <td>{{$team[0]->MathTeamScore}}</td>
                                            <td>{{$team[0]->MathTeamPlace}}</td>
                                        </tr>
                                    @endif
                                @endif
                                @if($nomination->infteam == 'true')
                                    @if(!empty($team[0]->InfTeamScore))
                                        <tr>
                                            <th scope="row">Командный зачет по информатике</th>
                                            <td>{{$team[0]->InfTeamScore}}</td>
                                            <td>{{$team[0]->InfTeamPlace}}</td>
                                        </tr>
                                    @endif
                                @endif
                            @endif
                            @if($nomination->fullself == 'true')
                                @if(!empty($student->studentsteam->SummSelfScore))
                                    <tr>
                                        <th scope="row">Личный зачет</th>
                                        <td>{{$student->studentsteam->SummSelfScore}}</td>
                                        <td>{{$student->studentsteam->SummSelfPlace}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->full10self == 'true')
                                @if(!empty($student->studentsteam->SummSelf10Score))
                                    <tr>
                                        <th scope="row">Личный зачет среди 10 классов</th>
                                        <td>{{$student->studentsteam->SummSelf10Score}}</td>
                                        <td>{{$student->studentsteam->SummSelf10Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->full11self == 'true')
                                @if(!empty($student->studentsteam->SummSelf11Score))
                                    <tr>
                                        <th scope="row">Личный зачет среди 11 классов</th>
                                        <td>{{$student->studentsteam->SummSelf11Score}}</td>
                                        <td>{{$student->studentsteam->SummSelf11Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->phself == 'true')
                                @if(!empty($student->studentsteam->PhSelfScore))
                                    <tr>
                                        <th scope="row">Личный зачет классов по физике</th>
                                        <td>{{$student->studentsteam->PhSelfScore}}</td>
                                        <td>{{$student->studentsteam->PhSelfPlace}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->ph10self == 'true')
                                @if(!empty($student->studentsteam->PhSelf10Score))
                                    <tr>
                                        <th scope="row">Личный зачет по физике среди 10 классов</th>
                                        <td>{{$student->studentsteam->PhSelf10Score}}</td>
                                        <td>{{$student->studentsteam->PhSelf10Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->ph11self == 'true')
                                @if(!empty($student->studentsteam->PhSelf11Score))
                                    <tr>
                                        <th scope="row">Личный зачет по физике среди 11 классов</th>
                                        <td>{{$student->studentsteam->PhSelf11Score}}</td>
                                        <td>{{$student->studentsteam->PhSelf11Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->infself == 'true')
                                @if(!empty($student->studentsteam->InfSelfScore))
                                    <tr>
                                        <th scope="row">Личный зачет по информатике</th>
                                        <td>{{$student->studentsteam->InfSelfScore}}</td>
                                        <td>{{$student->studentsteam->InfSelfPlace}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->inf10self == 'true')
                                @if(!empty($student->studentsteam->InfSelf10Score))
                                    <tr>
                                        <th scope="row">Личный зачет по информатике среди 10 классов</th>
                                        <td>{{$student->studentsteam->InfSelf10Score}}</td>
                                        <td>{{$student->studentsteam->InfSelf10Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->inf11self == 'true')
                                @if(!empty($student->studentsteam->InfSelf11Score))
                                    <tr>
                                        <th scope="row">Личный зачет по информатике среди 11 классов</th>
                                        <td>{{$student->studentsteam->InfSelf11Score}}</td>
                                        <td>{{$student->studentsteam->InfSelf11Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->mathself == 'true')
                                @if(!empty($student->studentsteam->MathSelfScore))
                                    <tr>
                                        <th scope="row">Личный зачет по математике</th>
                                        <td>{{$student->studentsteam->MathSelfScore}}</td>
                                        <td>{{$student->studentsteam->MathSelfPlace}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->math10self == 'true')
                                @if(!empty($student->studentsteam->MathSelf10Score))
                                    <tr>
                                        <th scope="row">Личный зачет по математике среди 10 классов</th>
                                        <td>{{$student->studentsteam->MathSelf10Score}}</td>
                                        <td>{{$student->studentsteam->MathSelf10Place}}</td>
                                    </tr>
                                @endif
                            @endif
                            @if($nomination->math11self == 'true')
                                @if(!empty($student->studentsteam->MathSelf11Score))
                                    <tr>
                                        <th scope="row">Личный зачет по математике среди 11 классов</th>
                                        <td>{{$student->studentsteam->MathSelf11Score}}</td>
                                        <td>{{$student->studentsteam->MathSelf11Place}}</td>
                                    </tr>
                                @endif
                            @endif
                        </tbody>
                    </table>
                @endif                    
                </div>
            </div>
        </div>
    </div>
    
    
</div>


@endsection