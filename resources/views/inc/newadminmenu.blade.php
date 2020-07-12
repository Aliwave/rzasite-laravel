@section('sideadminmenu')
<nav id="sidebar" class="sidebar">
			<div class="sidebar-content ">
				<a class="sidebar-brand" href="{{route('adminPanel')}}">
                <img src="{{asset('storage/mainpage/img/mainlogo.png')}}"
             alt="Logo" class="mainlogo" style="height:24px; width:24px;">
          <span class="align-middle">Admin - RZA</span>
        </a>
        
				<ul class="sidebar-nav" style="height:100vh">

                    <li class="sidebar-header">
						Проведение олимпиады
					</li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('adminPanel')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round" class="feather feather-sliders align-middle"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" 
                            x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                            Основная информация
                        </a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('olylive')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-middle"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Live</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminOlyroomsPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin align-middle">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        Кабинеты</a>
                    </li>
                    <li class="sidebar-header">
						Подведение результатов
					</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminResultsPage')}}">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square align-middle"><polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        Итоги</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminOlyPlaces')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square align-middle"><polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        Места</a></li>
                    
					<li class="sidebar-header">
						Страницы
					</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminMainPage')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle"><rect x="3" y="3" 
                        width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        Главная</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminRulesPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-list align-middle"><line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line>
                        <line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                        Правила</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminTasksPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-list align-middle"><line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line>
                        <line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                        Задания</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminGalleryPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid align-middle"><rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7">
                        </rect></svg>
                        Галерея</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('adminContactsPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 align-middle">
                        <circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle>
                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        Контакты</a></li>
                    <li class="sidebar-header">
						Документы
					</li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('persPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open align-middle"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z">
                        </path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        Согласие учителя</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('stpersPage')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open align-middle"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z">
                        </path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        Согласие ученики</a></li>
                    
				</ul>

			</div>
		</nav>
		