@extends('layouts.app')

@section('page-title')Олимпиада РЗА@endsection

@section('content')
    <div class="container">
        <section class="main-info">
            <div class="main-info-block">
                <div class="main-info-text">
                    <div class="oly-pre-title">Областная олимпиада для старшеклассников</div>
                    <h1 class="oly-title">Реальность. Задача. Алгоритм</h1>
                    <a href="{{route('registerTeacher')}}" class="main-info-regbutt">@if($data->regenable == 'true') Регистрация до {{$data->regdateendstring}}! @else Олимпиада окончена! @endif</a>
                </div>
                <div class="main-info-img">
                    <img src="{{asset('storage/mainpage/img/'.$mainimage->imagename)}}" alt="">
                </div>
            </div>
            <div class="maindatecontainer">
                <div class="textdate-block">
                    <div class="textdate">Дата проведения:</div>
                </div>
                <div class="maindate-block">
                    <div class="maindate">{{$data->maindatestartstring}}</div>
                </div>
            </div>
        </section>

        <div class="separate"></div>
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
        <section class="main-tasks">
        {!!html_entity_decode($mainlogo->tasks)!!}
        </section>
        

        <div class="separate"></div>

        <section class="subjects">
            <h2>Предметы олимпиады:</h2>
            <div class="subject-items">
                <div class="subject">
                    <img src="{{asset('storage/img/linmath.svg')}}" alt="">
                    <span class="subject-name">Математика</span>
                </div>
                <div class="subject">
                    <img src="{{asset('storage/img/lincomp.svg')}}" alt="">
                    <span class="subject-name">Информатика</span>
                </div>
                <div class="subject">
                    <img src="{{asset('storage/img/atom.svg')}}" alt="">
                    <span class="subject-name">Физика</span>
                </div>
            </div>
        </section>

        <div class="separate"></div>

        <section class="main-rounds">
            <h2>Этапы проведения олимпиады:</h2>
            <div class="round">
                <div class="round-desc">
                    <h3>Этап I</h3>
                    <p>подача и регистрация заявок на участие
                    в олимпиаде проводится:
                    с {{$data->regdatestartstring}} 
                    по {{$data->regdateendstring}} {{$data->year}} г. включительно</p>
                </div>
                <img src="{{asset('storage/mainpage/img/'.$firstroundimage->imagename)}}" alt="">
            </div>
                
            <div class="separate"></div>

            <div class="round sec-round">
                <img src="{{asset('storage/mainpage/img/'.$secondroundimage->imagename)}}" alt="">
                <div class="round-desc">
                        <h3>Этап II</h3>
                    <p>Выполнение участниками заданий олимпиады
                    (задачи, тесты, физический эксперимент)
                    проводится {{$data->maindatestartstring}} {{$data->year}} года по адресу
                    {{$data->place}}</p>
                </div>
            </div>
            
            <div class="separate"></div>

            <div class="round">
                <div class="round-desc">
                    <h3>Этап III</h3>
                    <p>Проверка и оценка письменных работ,
                    объявление результатов Олимпиады.
                    Осуществляется жюри в течение двух недель 
                    с момента окончания олимпиады.</p>
                </div>
                <img src="{{asset('storage/mainpage/img/'.$thirdroundimage->imagename)}}" alt="">
            </div>
        </section>

        <div class="separate"></div>

        <section class="organizer">
            <h2>Организатор:</h2>
            <img class="organizelogo" src="{{asset('storage/mainpage/img/'.$facultylogo->imagename)}}" alt="">
            <h3>
                Факультет компьютерных и физико-математических наук ВятГУ
            </h3>
        </section>
    </div>
@endsection