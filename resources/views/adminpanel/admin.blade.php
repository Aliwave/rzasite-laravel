@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Основная информация@endsection
@section('content')
<div class="container-fluid adminpanel">
    <div class="mt-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#maindata">Проведение олимпиады</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#teachers">Изменение информации об учителях</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#students">Изменение информации об учениках</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#deletedata">Очистка данных</a>
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
            <div id="maindata" class="container-fluid tab-pane active"><br>
                <h4>Основная информация</h4>
                <form method="POST" action="{{route('mainInfoSubmit')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="maindatestart" class="col-md-4 col-form-label text-md-right">Дата проведения</label>
                            <div class="col-md-6">
                                <input id="maindatestart" type="date" class="form-control @error('maindatestart') is-invalid @enderror" name="maindatestart" value="{{$maindata->maindatestart}}" required autofocus>

                                @error('maindatestart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="regdatestart" class="col-md-4 col-form-label text-md-right">Дата начала регистрации</label>

                            <div class="col-md-6">
                                <input id="regdatestart" type="date" class="form-control @error('regdatestart') is-invalid @enderror" value="{{$maindata->regdatestart}}" name="regdatestart" required>

                                @error('regdatestart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="regdateend" class="col-md-4 col-form-label text-md-right">Дата окончания регистрации</label>

                            <div class="col-md-6">
                                <input id="regdateend" type="date" class="form-control @error('regdateend') is-invalid @enderror" name="regdateend" value="{{$maindata->regdateend}}" required>

                                @error('regdateend')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="regtimeend" class="col-md-4 col-form-label text-md-right">Время окончания регистрации</label>

                            <div class="col-md-6">
                                <input id="regtimeend" type="text" class="form-control @error('regtimeend') is-invalid @enderror" name="regtimeend" value="{{$maindata->regtimeend}}" required>

                                @error('regtimeend')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">Место проведения</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{$maindata->place}}" required>

                                @error('place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teamsize" class="col-md-4 col-form-label text-md-right">Размер команды</label>

                            <div class="col-md-6">
                                <input id="teamsize" type="text" class="form-control @error('teamsize') is-invalid @enderror" name="teamsize" value="{{$maindata->teamsize}}" required autofocus>

                                @error('teamsize')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teachertabletitle" class="col-md-4 col-form-label text-md-right">Тема стола учителей</label>

                            <div class="col-md-6">
                                <input id="teachertabletitle" type="text" class="form-control @error('teachertabletitle') is-invalid @enderror" name="teachertabletitle" value="{{$maindata->teachertabletitle}}" required autofocus>

                                @error('teamsize')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <style type="text/css">
                            .spoiler_body {display:none;}
                            .spoiler_links {cursor:pointer;}
                        </style>
                        <div class="spoiler col-md-8 offset-md-4">
                            <a href="" class="text-md-right spoiler_link">Общий командный зачет</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="fullteam" class="custom-control-input" id="fullteam" @if($nomination->fullteam == 'true') checked @endif>
                                            <label class="custom-control-label" for="fullteam">Общий командный зачет</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="spoiler col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Командный зачет по физике</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="phteam" class="custom-control-input" id="phteam" @if($nomination->phteam == 'true') checked @endif>
                                            <label class="custom-control-label" for="phteam">Командный зачет по физике</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="spoiler  col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Командный зачет по математике</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="mathteam" class="custom-control-input" id="mathteam" @if($nomination->mathteam == 'true') checked @endif>
                                            <label class="custom-control-label" for="mathteam">Командный зачет по математике</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="spoiler  col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Командный зачет по информатике</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="infteam" class="custom-control-input" id="infteam" @if($nomination->infteam == 'true') checked @endif>
                                            <label class="custom-control-label" for="infteam">Командный зачет по информатике</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="spoiler  col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Общий личный зачет</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="fullself" class="custom-control-input" id="fullself" @if($nomination->fullself == 'true') checked @endif>
                                            <label class="custom-control-label" for="fullself">Общий личный зачет</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="full10self" class="custom-control-input" id="full10self" @if($nomination->full10self == 'true') checked @endif>
                                            <label class="custom-control-label" for="full10self">Общий личный зачет 10 класс</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="full11self" class="custom-control-input" id="full11self" @if($nomination->full11self == 'true') checked @endif>
                                            <label class="custom-control-label" for="full11self">Общий личный зачет 11 класс</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="spoiler  col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Личный зачет по физике</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="phself" class="custom-control-input" id="phself" @if($nomination->phself == 'true') checked @endif>
                                            <label class="custom-control-label" for="phself">Личный зачет по физике</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="ph10self" class="custom-control-input" id="ph10self" @if($nomination->ph10self == 'true') checked @endif>
                                            <label class="custom-control-label" for="ph10self">Личный зачет по физике 10 класс</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="ph11self" class="custom-control-input" id="ph11self" @if($nomination->ph11self == 'true') checked @endif>
                                            <label class="custom-control-label" for="ph11self">Личный зачет по физике 11 класс</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="spoiler  col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Личный зачет по информатике</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="infself" class="custom-control-input" id="infself" @if($nomination->infself == 'true') checked @endif>
                                            <label class="custom-control-label" for="infself">Личный зачет по информатике</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="inf10self" class="custom-control-input" id="inf10self" @if($nomination->inf10self == 'true') checked @endif>
                                            <label class="custom-control-label" for="inf10self">Личный зачет по информатике 10 класс</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="inf11self" class="custom-control-input" id="inf11self" @if($nomination->inf11self == 'true') checked @endif>
                                            <label class="custom-control-label" for="inf11self">Личный зачет по информатике 11 класс</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="spoiler  col-md-8 offset-md-4">
                            <a href="" class="spoiler_link">Личный зачет по математике</a>
                            <div class="spoiler_body">
                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="mathself" class="custom-control-input" id="mathself" @if($nomination->mathself == 'true') checked @endif>
                                            <label class="custom-control-label" for="mathself">Личный зачет по математике</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="math10self" class="custom-control-input" id="math10self" @if($nomination->math10self == 'true') checked @endif>
                                            <label class="custom-control-label" for="math10self">Личный зачет по математике 10 класс</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-check">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="true" name="math11self" class="custom-control-input" id="math11self" @if($nomination->math11self == 'true') checked @endif>
                                            <label class="custom-control-label" for="math11self">Личный зачет по математике 11 класс</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" value="true" name="showresults" class="custom-control-input" id="showresultsSwitch" @if($maindata->showresults == 'true') checked @endif>
                                        <label class="custom-control-label" for="showresultsSwitch">Показать итоги</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" value="true" name="regenable" class="custom-control-input" id="regSwitch" @if($maindata->regenable == 'true') checked @endif>
                                        <label class="custom-control-label" for="regSwitch">Регистрация открыта</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" value="true" name="loginenable" class="custom-control-input" id="loginSwitch" @if($maindata->loginenable == 'true') checked @endif>
                                        <label class="custom-control-label" for="loginSwitch">Авторизация открыта</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Сохранить
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            <div id="teachers" class="container-fluid tab-pane"><br>
                <h4>Изменение информации об учителях</h4>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Город</th>
                        <th scope="col">Школа</th>
                        <th scope="col">Предмет</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Изменить</th>
                        <th scope="col">Личный кабинет</th>
                        <th scope="col">Удалить</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                              <td>{{$teacher->LastName}} {{$teacher->FirstName}} @if(!empty($teacher->Patronymic)){{$teacher->Patronymic}}@endif</th>
                              <td>{{$teacher->City}}</td>
                              <td>{{$teacher->FullNameSchool}}</td>
                              <td>{{$teacher->Subject}}</td>
                              <td>{{$teacher->Phone}}</td>
                              <td><a href="{{route('showTeacher',$teacher->TeacherID)}}"><button class="btn btn-primary">Изменить</button></a></td>
                              <td><a href="{{route('adminTeacherLK',$teacher->TeacherID)}}"><button class="btn btn-primary">Личный кабинет</button></a></td>
                              <td><a href="{{route('deleteTeacher',$teacher->TeacherID)}}"><button class="btn btn-danger">Удалить</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            
            <div id="students" class="container-fluid tab-pane fade"><br>
                <h4>Изменение информации об учениках</h4>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ФИО</th>
                        <th scope="col">Город</th>
                        <th scope="col">Школа</th>
                        <th scope="col">ФИО учителя</th>
                        <th scope="col">Изменить</th>
                        <th scope="col">Личный кабинет</th>
                        <th scope="col">Удалить</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                              <td>{{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)){{$student->Patronymic}}@endif</th>
                              <td>{{$student->teacher->City}}</td>
                              <td>{{$student->teacher->FullNameSchool}}</td>
                              <td>{{$student->teacher->LastName}} {{$student->teacher->FirstName}} @if(!empty($student->teacher->Patronymic)){{$student->teacher->Patronymic}}@endif</td>
                              <td><a href="{{route('showStudent',$student->StudentID)}}"><button class="btn btn-primary">Изменить</button></a></td>
                              <td><a href="{{route('adminStudentLK',$student->StudentID)}}"><button class="btn btn-primary">Личный кабинет</button></a></td>
                              <td><a href="{{route('deleteStudent',$student->StudentID)}}"><button class="btn btn-danger">Удалить</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="deletedata" class="container-fluid tab-pane fade"><br>
                <h4>Очистка данных</h4>
                <a href="{{route('deleteAllData')}}"><button class="btn btn-danger">Очистить данных учителей, учеников и результатов</button></a>

            </div>
        </div>
    </div>
</div>
@endsection