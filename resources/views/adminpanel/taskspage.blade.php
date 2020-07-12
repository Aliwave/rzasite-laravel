@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Задания@endsection
@section('content')
<div class="container-fluid adminpanel">
    <h3>Задания</h3>
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
    <style type="text/css">
        .spoiler_body {display:none;}
        .spoiler_links {cursor:pointer;}
    </style>
    <div class="spoiler">
        <a href="" class="spoiler_link">Добавить задания</a>
            <div class="spoiler_body">
                <div class="form-group">
                    <form class="form-group" method="POST" enctype="multipart/form-data" action="{{route('adminAddTask')}}">
                        @csrf
                        <div class="form-group">
                            <label for="number">Номер олимпиады для отображения</label>
                            <input type="text" class="form-control" id="number" name="number">
                        </div>
                        <div class="form-group">
                            <label for="year">Год проведения</label>
                            <input type="text" class="form-control" id="year" name="year">
                        </div>
                        <div>
                            <label for="math">Математика</label><br>
                            <input type="file" name="math" id="math">
                        </div>
                        <div>
                            <label for="ph">Физика</label><br>
                            <input type="file" name="ph" id="ph">
                        </div>
                        <div>
                            <label for="inf">Информатика</label><br>
                            <input type="file" name="inf" id="inf">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Загрузить</button>
                    </form>
                </div>
            </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">№ Олимпиада</th>
            <th scope="col">Год</th>
            <th scope="col">Математика</th>
            <th scope="col">Физика</th>
            <th scope="col">Информатика</th>
            <th scope="col">Удалить</th>
          </tr>
        </thead>
        <tbody>
            @if(!empty($tasks))
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->olycount}}</td>
                        <td>{{$task->year}}</td>
                        <td>
                            @if(!empty($task->mathtask)) 
                                <a href="{{asset('storage/tasks/'.$task->year.'/'.$task->mathtask)}}">{{$task->mathtask}}</a> 
                            @else
                                Задания не загружены
                            @endif
                        </td>
                        <td>
                            @if(!empty($task->phtask)) 
                                <a href="{{asset('storage/tasks/'.$task->year.'/'.$task->phtask)}}">{{$task->phtask}}</a> 
                            @else
                                Задания не загружены
                            @endif
                        </td>
                        <td>
                            @if(!empty($task->inftask)) 
                                <a href="{{asset('storage/tasks/'.$task->year.'/'.$task->inftask)}}">{{$task->inftask}}</a> 
                                @else
                                Задания не загружены
                            @endif
                        </td>
                        <td><a href="{{route('adminDeleteTask',$task->id)}}"><button class="btn btn-danger">Удалить</button></a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection