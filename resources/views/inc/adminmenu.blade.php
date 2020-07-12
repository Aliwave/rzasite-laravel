<style type="text/css">
    .main-participate-butt {
        background-color:#bbb;
    }
</style>
<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="{{route('adminPanel')}}">Основная информация</a> </li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminMainPage')}}">Главная</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminRulesPage')}}">Правила</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminTasksPage')}}">Задания</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminResultsPage')}}">Итоги</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminOlyPlaces')}}">Места</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminGalleryPage')}}">Галерея</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminContactsPage')}}">Контакты</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('olylive')}}">Live</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('adminOlyroomsPage')}}">Кабинеты</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('persPage')}}">Согласие(уч)</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('stpersPage')}}">Согласие(ст)</a></li>
    <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Выйти из учетной записи
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
</ul>