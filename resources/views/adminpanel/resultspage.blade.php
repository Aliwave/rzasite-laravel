@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Результаты@endsection
@section('content')
<div class="container-fluid adminpanel resultspage">
<style>
    .resultspage .row{
        margin-bottom:7px;
    }
</style>
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
    <div class="mt-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#students">Индивидуальный зачет</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#teams">Командный зачет</a>
            </li>
        </ul>

        <!— Tab panes —>
        <div class="tab-content">
            <div id="students" class="container-fluid tab-pane active"><br>
                <h3>Занесение результатов индивидуального зачета</h3>
                <form method="POST" action="{{route('adminSelfResSubmit')}}">
                  @csrf
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Класс</th>
                        <th scope="col">Математика</th>
                        <th scope="col">Физика</th>
                        <th scope="col">Информатика</th>
                        <th scopre="col">Прибытие</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                        <tr>
                          <td>{{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif</td>
                          <td>{{$student->Class}}</td>
                          <td><input type="text" class="form-control" name="mathscore[]" 
                          @if(empty($student->TurnoutTime) || ($nomination->mathself == 'false' && $nomination->math10self == 'false' && 
                          $nomination->math11self == 'false' && $nomination->fullself == 'false' && $nomination->full10self == 'false' && $nomination->full11self)) 
                            readonly 
                          @endif 
                          placeholder="математика" value="@if(!empty($student->studentsteam->MathSelfScore)) {{$student->studentsteam->MathSelfScore}} @endif"></td>
                          <td><input type="text" class="form-control" name="phscore[]" 
                          @if(empty($student->TurnoutTime) || ($nomination->phself == 'false' && $nomination->ph10self == 'false' && 
                          $nomination->ph11self == 'false' && $nomination->fullself == 'false' && $nomination->full10self == 'false' && $nomination->full11self)) 
                            readonly 
                          @endif placeholder="физика" value="@if(!empty($student->studentsteam->PhSelfScore)) {{$student->studentsteam->PhSelfScore}} @endif"></td>
                          <td><input type="text" class="form-control" name="infscore[]" 
                          @if(empty($student->TurnoutTime) || ($nomination->infself == 'false' && $nomination->inf10self == 'false' && 
                          $nomination->inf11self == 'false' && $nomination->fullself == 'false' && $nomination->full10self == 'false' && $nomination->full11self)) 
                            readonly 
                          @endif placeholder="информатика" value="@if(!empty($student->studentsteam->InfSelfScore)) {{$student->studentsteam->InfSelfScore}} @endif"></td>
                          <td style="text-align:center;">@if(!empty($student->TurnoutTime)) Да @else Нет @endif</td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" style="margin-bottom:5px;">Внести результаты</button>
                </form>
                <a href="{{route('adminWinnerSelf')}}"><button class="btn btn-primary">Подведение итогов личного зачета</button></a>
            </div>


            <div id="teams" class="container-fluid tab-pane fade"><br>
                <h3>Занесение результатов командного зачета</h3>
                <form method="POST" action="{{route('adminTeamResSubmit')}}">
                  @csrf
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Название команды</th>
                        <th scope="col">ФИО руководителя</th>
                        <th scope="col">Математика</th>
                        <th scope="col">Физика</th>
                        <th scope="col">Информатика</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($teams as $team)
                        <tr>
                          <td>Команда {{$team->TeamID}}</td>
                          <td>{{$team->teacher->LastName}} {{$team->teacher->FirstName}} @if(!empty($team->teacher->Patronymic)) {{$team->teacher->Patronymic}} @endif</td>
                          <td><input type="text" class="form-control" name="mathscore[]" placeholder="математика" value="@if(!empty($team->MathTeamScore)) {{$team->MathTeamScore}} @endif" @if($nomination->fullteam == 'false' && $nomination->mathteam == 'false') readonly @endif></td>
                          <td><input type="text" class="form-control" name="phscore[]" placeholder="физика" value="@if(!empty($team->PhTeamScore)) {{$team->PhTeamScore}} @endif" @if($nomination->fullteam == 'false' && $nomination->phteam == 'false') readonly @endif></td>
                          <td><input type="text" class="form-control" name="infscore[]" placeholder="информатика" value="@if(!empty($team->InfTeamScore)) {{$team->InfTeamScore}} @endif" @if($nomination->fullteam == 'false' && $nomination->infteam == 'false') readonly @endif></td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" style="margin-bottom:5px;">Внести результаты</button>
                    
                </form>
                <a href="{{route('adminWinnerTeam')}}"><button class="btn btn-primary">Подведение итогов командного зачета</button></a>
            </div>
        </div>
    </div>
</div>
@endsection