<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page-title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/admstyles.css">
</head>
<body>
    <div class="wrapper">
        @include('inc.newadminmenu')
        <div class="main">
        <nav class="navbar navbar-expand navbar-light bg-white">
        <h1>@yield('page-header')</h1>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
						    <a class="nav-link d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                  <button class="btn btn-primary">На сайт</button>
                </a>
						    <div class="dropdown-menu dropdown-menu-right">
						    	<a class="dropdown-item" href="{{route('main')}}">Главная</a>
                  <a class="dropdown-item" href="{{route('rules')}}">Правила</a>
						    	<a class="dropdown-item" href="{{route('tasks')}}">Задания</a>
                  <a class="dropdown-item" href="{{route('gallery')}}">Галерея</a>
                  <a class="dropdown-item" href="{{route('contacts')}}">Контакты</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('pers')}}">Согласие учителей</a>
                  <a class="dropdown-item" href="{{route('stpers')}}">Согласие учеников</a>
						    </div>
						</li>
						<li class="nav-item">
              <a class="nav-link d-none d-sm-inline-block" href="{{ route('logout') }}" data-toggle="dropdown" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <button class="btn btn-danger">Выйти</button>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form> 
              </a>
						</li>
						
					</ul>
				</div>
			</nav>
            <main class="content">
                @yield('content')
            </main>
            
        
    </div>
    <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
     <script src="{{asset('/js/admall.js')}}"></script>
</body>
</html>