@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Редактирование мест@endsection
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
    @if($maindata->showresults == 'true')
      <p>Ученикам:</p>
      <a href="{{route('adminpdfStudentWin')}}" class="btn btn-primary">
        Распечатать дипломы
      </a>
      <a href="{{route('adminpdfStudentParticipate')}}" class="btn btn-primary">
        Распечатать сертификаты об участии
      </a>
      <p>Учителям:</p>
      <a href="{{route('adminpdfTeacherThanks')}}" class="btn btn-primary">
        Распечатать благодарности
      </a>
      <a href="{{route('adminpdfTeacherParticipate')}}" class="btn btn-primary">
        Распечатать сертификаты об участии в круглом столе
      </a>
    @endif
    <div class="mt-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#fulltab">Общий</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#mathtab">Математика</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#phtab">Физика</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#inftab">Информатика</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#teams">Командный зачет</a>
            </li>
        </ul>

        <!— Tab panes —>
        <div class="tab-content">
            <div id="fulltab" class="container-fluid tab-pane active"><br>
                <h3>Редактирование мест личного зачета</h3>
                <form method="POST" action="{{route('adminChangeStudentPlaces')}}">
                  @csrf
                  <table id="data-table" class="table olyplaces">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Класс</th>
                        <th scope="col">Общий<br>Баллы</th>
                        <th scope="col">Общий<br>Места</th>
                        <th scope="col">Общий10<br>Баллы</th>
                        <th scope="col">Общий10<br>Места</th>
                        <th scope="col">Общий11<br>Баллы</th>
                        <th scope="col">Общий11<br>Места</th>
                        <th score="col">Прибытие</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                        <tr>
                          <td>
                            {{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif
                            <input type="hidden" name="studentid[]" value="{{$student->StudentID}}">
                          </td>
                          <td>{{$student->Class}}</td>
                          <td>@if(!empty($student->studentsteam->SummSelfScore) && $nomination->fullself == 'true') {{$student->studentsteam->SummSelfScore}} @else &mdash; @endif</td>
                          <td><input type="text" class="form-control" name="fullplace[]" placeholder="общий" value="@if(!empty($student->studentsteam->SummSelfPlace)) {{$student->studentsteam->SummSelfPlace}} @endif" @if(empty($student->TurnoutTime) || $nomination->fullself == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->SummSelf10Score) && $nomination->full10self == 'true') {{$student->studentsteam->SummSelf10Score}} @else &mdash; @endif</td>
                          <td><input type="text" class="form-control" name="full10place[]" placeholder="общий10" value="@if(!empty($student->studentsteam->SummSelf10Place)) {{$student->studentsteam->SummSelf10Place}} @endif" @if(($student->Class != 10) || empty($student->TurnoutTime) || $nomination->full10self == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->SummSelf11Score) && $nomination->full11self == 'true') {{$student->studentsteam->SummSelf11Score}} @else &mdash; @endif</td>
                          <td><input type="text" class="form-control" name="full11place[]" placeholder="общий11" value="@if(!empty($student->studentsteam->SummSelf11Place)) {{$student->studentsteam->SummSelf11Place}} @endif" @if(($student->Class != 11) || empty($student->TurnoutTime) || $nomination->full11self == 'false') readonly @endif></td>
                          <td style="text-align:center;">@if(!empty($student->TurnoutTime)) Да @else Нет @endif</td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Внести результаты</button>
                </form>
            </div>

            <div id="mathtab" class="container-fluid tab-pane"><br>
                <h3>Редактирование мест личного зачета по математике</h3>
                <form method="POST" action="{{route('adminChangeStudentPlaces')}}">
                  @csrf
                  <table id="math-table" class="table olyplaces">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Класс</th>
                        <th scope="col">Математика<br>Баллы</th>
                        <th scope="col">Математика<br>Места</th>
                        <th scope="col">Математика10<br>Баллы</th>
                        <th scope="col">Математика10<br>Места</th>
                        <th scope="col">Математика11<br>Баллы</th>
                        <th scope="col">Математика11<br>Места</th>
                        <th score="col">Прибытие</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                        <tr>
                          <td>
                            {{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif
                            <input type="hidden" name="studentid[]" value="{{$student->StudentID}}">
                          </td>
                          <td>{{$student->Class}}</td>
                          <td>@if(!empty($student->studentsteam->MathSelfScore) && $nomination->mathself == 'true') {{$student->studentsteam->MathSelfScore}} @endif</td>
                          <td><input type="text" class="form-control" name="mathplace[]" placeholder="математика" value="@if(!empty($student->studentsteam->MathSelfPlace)) {{$student->studentsteam->MathSelfPlace}} @endif" @if(empty($student->TurnoutTime) || $nomination->mathself == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->MathSelf10Score) && $nomination->math10self == 'true') {{$student->studentsteam->MathSelf10Score}} @endif</td>
                          <td><input type="text" class="form-control" name="math10place[]" placeholder="математика10" value="@if(!empty($student->studentsteam->MathSelf10Place)) {{$student->studentsteam->MathSelf10Place}} @endif" @if(($student->Class != 10) || empty($student->TurnoutTime) || $nomination->math10self == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->MathSelf11Score) && $nomination->math11self == 'true') {{$student->studentsteam->MathSelf11Score}} @endif</td>
                          <td><input type="text" class="form-control" name="math11place[]" placeholder="математика11" value="@if(!empty($student->studentsteam->MathSelf11Place)) {{$student->studentsteam->MathSelf11Place}} @endif" @if(($student->Class != 11) || empty($student->TurnoutTime) || $nomination->math11self == 'false') readonly @endif></td>
                          <td style="text-align:center;">@if(!empty($student->TurnoutTime)) Да @else Нет @endif</td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Внести результаты</button>
                </form>
            </div>

            <div id="phtab" class="container-fluid tab-pane"><br>
                <h3>Редактирование мест личного зачета по физике</h3>
                <form method="POST" action="{{route('adminChangeStudentPlaces')}}">
                  @csrf
                  <table id="ph-table" class="table olyplaces">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Класс</th>
                        <th scope="col">Физика<br>Баллы</th>
                        <th scope="col">Физика<br>Места</th>
                        <th scope="col">Физика10<br>Баллы</th>
                        <th scope="col">Физика10<br>Места</th>
                        <th scope="col">Физика11<br>Баллы</th>
                        <th scope="col">Физика11<br>Места</th>
                        <th score="col">Прибытие</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                        <tr>
                          <td>
                            {{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif
                            <input type="hidden" name="studentid[]" value="{{$student->StudentID}}">
                          </td>
                          <td>{{$student->Class}}</td>
                          <td>@if(!empty($student->studentsteam->PhSelfScore) && $nomination->phself == 'true') {{$student->studentsteam->PhSelfScore}} @endif</td>
                          <td><input type="text" class="form-control" name="phplace[]" placeholder="физика" value="@if(!empty($student->studentsteam->PhSelfPlace)) {{$student->studentsteam->PhSelfPlace}} @endif" @if(empty($student->TurnoutTime) || $nomination->phself == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->PhSelf10Score) && $nomination->ph10self == 'true') {{$student->studentsteam->PhSelf10Score}} @endif</td>
                          <td><input type="text" class="form-control" name="ph10place[]" placeholder="физика10" value="@if(!empty($student->studentsteam->PhSelf10Place)) {{$student->studentsteam->PhSelf10Place}} @endif" @if(($student->Class != 10) || empty($student->TurnoutTime) || $nomination->ph10self == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->PhSelf11Score) && $nomination->ph11self == 'true') {{$student->studentsteam->PhSelf11Score}} @endif</td>
                          <td><input type="text" class="form-control" name="ph11place[]" placeholder="физика11" value="@if(!empty($student->studentsteam->PhSelf11Place)) {{$student->studentsteam->PhSelf11Place}} @endif" @if(($student->Class != 11) || empty($student->TurnoutTime) || $nomination->ph11self == 'false') readonly @endif></td>
                          <td style="text-align:center;">@if(!empty($student->TurnoutTime)) Да @else Нет @endif</td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Внести результаты</button>
                </form>
            </div>

            <div id="inftab" class="container-fluid tab-pane"><br>
                <h3>Редактирование мест личного зачета по информатике</h3>
                <form method="POST" action="{{route('adminChangeStudentPlaces')}}">
                  @csrf
                  <table id="inf-table" class="table olyplaces">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Класс</th>
                        <th scope="col">Информатика<br>Баллы</th>
                        <th scope="col">Информатика<br>Места</th>
                        <th scope="col">Информатика10<br>Баллы</th>
                        <th scope="col">Информатика10<br>Места</th>
                        <th scope="col">Информатика11<br>Баллы</th>
                        <th scope="col">Информатика11<br>Места</th>
                        <th score="col">Прибытие</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $student)
                        <tr>
                          <td>
                            {{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif
                            <input type="hidden" name="studentid[]" value="{{$student->StudentID}}">
                          </td>
                          <td>{{$student->Class}}</td>
                          <td>@if(!empty($student->studentsteam->InfSelfScore) && $nomination->infself == 'true') {{$student->studentsteam->InfSelfScore}} @endif</td>
                          <td><input type="text" class="form-control" name="infplace[]" placeholder="информатика" value="@if(!empty($student->studentsteam->InfSelfPlace)) {{$student->studentsteam->InfSelfPlace}} @endif" @if(empty($student->TurnoutTime) || $nomination->infself == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->InfSelf10Score) && $nomination->inf10self == 'true') {{$student->studentsteam->InfSelf10Score}} @endif</td>
                          <td><input type="text" class="form-control" name="inf10place[]" placeholder="информатика10" value="@if(!empty($student->studentsteam->InfSelf10Place)) {{$student->studentsteam->InfSelf10Place}} @endif" @if(($student->Class != 10) || empty($student->TurnoutTime) || $nomination->inf10self == 'false') readonly @endif></td>
                          <td>@if(!empty($student->studentsteam->InfSelf11Score) && $nomination->inf11self == 'true') {{$student->studentsteam->InfSelf11Score}} @endif</td>
                          <td><input type="text" class="form-control" name="inf11place[]" placeholder="информатика11" value="@if(!empty($student->studentsteam->InfSelf11Place)) {{$student->studentsteam->InfSelf11Place}} @endif" @if(($student->Class != 11) || empty($student->TurnoutTime) || $nomination->inf11self == 'false') readonly @endif></td>
                          <td style="text-align:center;">@if(!empty($student->TurnoutTime)) Да @else Нет @endif</td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Внести результаты</button>
                </form>
            </div>


            <div id="teams" class="container-fluid tab-pane"><br>
                <h3>Редактирование мест командного зачета</h3>
                <form method="POST" action="{{route('adminChangeTeamPlaces')}}">
                  @csrf
                  <table id="team-table" class="table olyplaces">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Название команды</th>
                        <th scope="col">ФИО руководителя</th>
                        <th scope="col">Общий<br>Баллы</th>
                        <th scope="col">Общий<br>Места</th>
                        <th scope="col">Математика<br>Баллы</th>
                        <th scope="col">Математика<br>Места</th>
                        <th scope="col">Физика<br>Баллы</th>
                        <th scope="col">Физика<br>Места</th>
                        <th scope="col">Информатика<br>Баллы</th>
                        <th scope="col">Информатика<br>Места</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($teams as $team)
                        <tr>
                          <td>
                            Команда {{$team->TeamID}}
                            <input type="hidden" name="teamid[]" value="{{$team->TeamID}}">
                          </td>
                          <td>{{$team->teacher->LastName}} {{$team->teacher->FirstName}} @if(!empty($team->teacher->Patronymic)) {{$team->teacher->Patronymic}} @endif</td>
                          <td>@if(!empty($team->SummTeamScore) && $nomination->fullteam == 'true') {{$team->SummTeamScore}} @else &mdash; @endif</td>
                          <td><input type="text" class="form-control" name="fullplace[]" placeholder="общий" value="@if(!empty($team->SummTeamPlace)) {{$team->SummTeamPlace}} @endif" @if($nomination->fullteam == 'false') readonly @endif></td>
                          <td>@if(!empty($team->MathTeamScore) && $nomination->mathteam == 'true') {{$team->MathTeamScore}} @endif</td>
                          <td><input type="text" class="form-control" name="mathplace[]" placeholder="математика" value="@if(!empty($team->MathTeamPlace)) {{$team->MathTeamPlace}} @endif" @if($nomination->mathteam == 'false') readonly @endif></td>
                          <td>@if(!empty($team->PhTeamScore) && $nomination->phteam == 'true') {{$team->PhTeamScore}} @endif</td>
                          <td><input type="text" class="form-control" name="phplace[]" placeholder="физика" value="@if(!empty($team->PhTeamPlace)) {{$team->PhTeamPlace}} @endif" @if($nomination->phteam == 'false') readonly @endif></td>
                          <td>@if(!empty($team->InfTeamScore) && $nomination->infteam == 'true') {{$team->InfTeamScore}} @endif</td>
                          <td><input type="text" class="form-control" name="infplace[]" placeholder="информатика" value="@if(!empty($team->InfTeamPlace)) {{$team->InfTeamPlace}} @endif" @if($nomination->infteam == 'false') readonly @endif></td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Внести результаты</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection