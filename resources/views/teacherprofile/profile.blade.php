@extends('layouts.app')

@section('page-title')Учитель - личный кабинет@endsection

@section('content')
<main class="profile">
    <div class="container">
        <h1 class="sidepagetitle">Учитель</h1>
        <h5>ФИО: {{$teacherdata->LastName}} {{$teacherdata->FirstName}} @if(!empty($teacherdata->Patronymic)){{$teacherdata->Patronymic}}@endif</h5>
        <h5>Школа: {{$teacherdata->FullNameSchool}}</h5>
        <div class="mt-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#students">Список учеников</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($teamcheck != true) disabled @endif" data-toggle="tab" href="#teams">Список команд</a>
                </li>
            </ul>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
    
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
            @endif
        <!— Tab panes —>
        <div class="tab-content">
            <div id="students" class="container tab-pane active"><br>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th score="col">Класс</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(!empty($studentdata))
                            @foreach($studentdata as $student)
                                <tr>
                                    <td>{{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)){{$student->Patronymic}}@endif</td>
                                    <td>{{$student->Class}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>Учащихся нет</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                @if($maindata->showresults == 'false')
                    @if(!empty($studentdata))
                        <a href="{{route('allStudentPass')}}" class="btn btn-primary">Распечатать пропуски</a>
                    @endif
                @endif
                @if($maindata->showresults == 'true')
                    <a href="{{route('pdfThanksTeacher')}}" class="btn btn-primary">Распечатать благодарность</a>
                    @if($teacherdata->teachertable == 'true')
                        <a href="{{route('pdfParticipateTeacher')}}" class="btn btn-primary">Распечатать благодарность за участие в круглом столе</a>
                    @endif
                @endif
                
            </div>

            
            <div id="teams" class="container tab-pane fade"><br>
            <p>Кол-во участников в команде: {{$maindata->teamsize}}</p>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Название</th>
                    <th scope="col">Кол-во участников</th>
                    <th scole="col" class="hidePhone">Список участников</th>
                    <th scope="col">Изменить</th>
                  </tr>
                </thead>
                <tbody>
                        @if(!empty($teams))
                            @foreach($teams as $team)
                                <tr>
                                  <td>Команда {{$team->TeamID}}</th>
                                  <td>
                                        {{$team->students->count()}} из {{$maindata->teamsize}}
                                  </td>
                                  <td class="hidePhone">
                                        @if(!empty($team->students))
                                            <select class="custom-select" name="" id="">
                                            @foreach($team->students as $student)
                                                <option value="">{{$student->student->LastName}} {{$student->student->FirstName}} 
                                                    @if(!empty($student->student->Patronymic)) 
                                                        {{$student->student->Patronymic}} 
                                                    @endif</option>
                                            @endforeach
                                            </select>
                                            
                                        @else
                                            Участников нет
                                        @endif
                                  </td>
                                  <td><a href="{{route('teacherteamUpdate',$team->TeamID)}}"><button class="btn btn-primary">Изменить</button></a></td>
                                </tr>
                            @endforeach
                        @endif
                        <tr>
                          <td></th>
                          <td></td>
                          <td class="hidePhone"></td>
                          <td><a href="{{route('teacherAddTeam')}}"><button class="btn btn-primary">Добавить</button></a></td>
                        </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
        <a href="{{ route('logout') }}" class="btn btn-danger" style="margin-top:10px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Выйти из учетной записи
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</main>
@endsection