@section('header')
<header>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('main')}}">
    <img src="{{asset('storage/mainpage/img/mainlogo.png')}}"
     alt="Logo" class="mainlogo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
     aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav ml-auto main-nav">
        @if(!empty(Session::get('admin')) && Auth::User()->find(1)->password == Session::get('admin'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('adminback') }}">Админ</a>
        </li>
        @endif

        <li class="nav-item">
          <a class="nav-link" href="{{ route('rules') }}">Правила</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('tasks')}}">Задания</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('gallery')}}">Галерея</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
        </li>
        <li class="nav-item">
        @if(Auth::User() !== null)
          @if(Auth::User()->isAdmin())
            <a class="nav-link main-participate-butt" href="{{route('adminPanel')}}">Админ панель</a>
          @endif
          @if(Auth::User()->isTeacher())
            <a class="nav-link main-participate-butt" href="{{route('teacherMainProfile')}}">Личный кабинет</a>
          @endif
          @if(Auth::User()->isStudent())
            <a class="nav-link main-participate-butt" href="{{route('studentMainProfile')}}">Личный кабинет</a>
          @endif
        @else
            <a class="nav-link main-participate-butt" href="{{route('login')}}">Вход / Регистрация</a>
        @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>