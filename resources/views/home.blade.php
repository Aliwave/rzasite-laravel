@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mild-separate"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Успешный вход</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы успешно вошли на сайт!<br>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a class="btn btn-primary" href="{{ route('main') }}">
                        На главную
                    </a>
                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Выйти
                    </a>

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
