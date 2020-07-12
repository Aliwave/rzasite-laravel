@extends('layouts.app')

@section('page-title')Задания - Олимпиада РЗА@endsection

@section('content')
<div class="container">
    <h1 class="sidepagetitle">Задачи прошлых лет
олимпиады «Реальность. Задача. Алгоритм»</h1>
<table class="table">
        <tbody>
            @if(!empty($tasks))
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->olycount}} Областная олимпиада РЗА</td>
                        <td>{{$task->year}}</td>
                        <td>
                            @if(!empty($task->mathtask)) 
                                <a href="{{asset('storage/tasks/'.$task->year.'/'.$task->mathtask)}}">Математика</a> 
                            @else
                                Математика
                            @endif
                        </td>
                        <td>
                            @if(!empty($task->phtask)) 
                                <a href="{{asset('storage/tasks/'.$task->year.'/'.$task->phtask)}}">Физика</a> 
                            @else
                                Физика
                            @endif
                        </td>
                        <td>
                            @if(!empty($task->inftask)) 
                                <a href="{{asset('storage/tasks/'.$task->year.'/'.$task->inftask)}}">Информатика</a> 
                            @else
                                Информатика
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection