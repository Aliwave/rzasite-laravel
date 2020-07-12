@extends('layouts.app')

@section('page-title')Команда@endsection

@section('content')
<main class="profile">
    <div class="container">
        <h1 class="sidepagetitle">Изменение команды №{{$team->TeamID}}</h1>
        <a href="{{route('teacherMainProfile')}}">Назад</a>
        <h5>Руководитель: {{$teacherdata->LastName}} {{$teacherdata->FirstName}} 
            @if(!empty($teacherdata->Patronymic)){{$teacherdata->Patronymic}}@endif</h5>
        <h5>Школа: {{$teacherdata->FullNameSchool}}</h5>
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
        <p>Кол-во участников в команде: {{$teamsize}}</p>
        <a href="{{route('deleteTeam',$team->TeamID)}}" ><button class="btn btn-danger" style="margin-bottom:5px;">Удалить команду</button></a>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ФИО</th>
                <th scope="col">Действия</th>
              </tr>
            </thead>@php $i = 0 @endphp
            <tbody>
                    @if(!empty($team->students))
                        @foreach($team->students as $student)
                            <tr>
                              <td>{{$student->student->LastName}} {{$student->student->FirstName}} 
                                  @if(!empty($student->student->Patronymic)) 
                                  {{$student->student->Patronymic}} 
                                  @endif</td>
                              <td><a href="{{route('deleteStudentfromTeam',$student->student->StudentID)}}">
                                  <button class="btn btn-danger">Удалить</button>
                                </a></td>
                              @php $i++ @endphp
                            </tr>
                        @endforeach
                    @endif
                    @if($i < $teamsize)
                        @if(!empty($studentstoadd))
                        <form action="{{route('addnewStudentToTeam',$team->TeamID)}}" method="post">
                            @csrf
                            <tr>
                              <td>
                                    <select class="custom-select" name="studentid" id="studentid">
                                        @foreach($studentstoadd as $student)
                                            <option value="{{$student->StudentID}}">{{$student->LastName}} {{$student->FirstName}} 
                                                @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif</option>
                                        @endforeach
                                    </select>
                              </td>
                              <td><button type="submit" class="btn btn-primary">Добавить</button></td>
                            </tr>
                        </form>
                        @else
                        <tr>
                              <td>
                                    Учеников для добавления нет
                              </td>
                              <td></td>
                            </tr>
                        @endif
                    @endif
            </tbody>
        </table>
    </div>
</main>
@endsection