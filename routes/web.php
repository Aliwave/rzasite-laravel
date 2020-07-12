<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Главная //
Route::get(
    '/', 
    'PageController@mainpage')
->name('main');

Route::get(
    '/rules', 
    'PageController@rulespage')
->name('rules');

Route::get(
    '/pers', 
    'PageController@Perspage')
->name('pers');

Route::get(
    '/stpers', 
    'PageController@StPerspage')
->name('stpers');

Route::get(
    '/contacts', 
    'PageController@contactspage'
)->name('contacts');

Route::get(
    '/tasks', 
    'PageController@taskspage'
)->name('tasks');

Route::get(
    '/gallery', 
    'GalleryController@index')
->name('gallery');

Route::post(
    '/gallery',
    'GalleryController@yearchange')
->name('galleryChange');

Route::get(
    '/resources',
    function(){
        return view('resources');
    }
)->name('resources');

//Route::post('/gallery','GalleryController@index')->name('galleryChangeYear');

//  Регистрация //

Route::get(
    '/register/teacher',
    'Auth\TeacherRegisterController@index'
)->name('registerTeacher');

Route::post(
    '/register/teacher',
    'Auth\TeacherRegisterController@register')
->name('regformTeacher');

Route::post(
    '/register/teacher/cities',
    'AjaxController@getCities'
);

Route::post(
    '/register/teacher/school',
    'AjaxController@getTeacherSchool'
);

Route::post(
    '/register/teacher/fullschool',
    'AjaxController@getTeacherFullSchool'
);

Route::get(
    '/register/student',
    'Auth\StudentRegisterController@index')
->name('registerStudent');

Route::post(
    '/register/student/schools',
    'AjaxController@getSchool'
);
Route::post(
    '/register/student/teacher',
    'AjaxController@getTeacher'
);
Route::post(
    '/register/student',
    'Auth\StudentRegisterController@register'
)->name('regformStudent');
Auth::routes();
//Auth::routes([]);
// Личный кабинет //
Route::get(
    '/profile', 
    'TeacherProfileController@index'
)->name('teacherMainProfile')->middleware(['auth','can:teacher']);//->middleware('verified');

Route::get(
    '/profile/addteam',
    'TeacherProfileController@newTeam'
)->name('teacherAddTeam')->middleware(['auth','can:teacher']);

Route::get(
    '/profile/updateteam/{id}',
    'TeacherProfileController@showTeam'
)->name('teacherteamUpdate')->middleware(['auth','can:teacher']);

Route::post(
    '/profile/updateteam/{id}',
    'TeacherProfileController@addnewStudenttoTeam'
)->name('addnewStudentToTeam')->middleware(['auth','can:teacher']);

Route::get(
    '/profile/deleteteam/{id}',
    'TeacherProfileController@deleteTeam'
)->name('deleteTeam')->middleware(['auth','can:teacher']);

Route::get(
    '/phofile/deleteStudent/{id}',
    'TeacherProfileController@deleteStudent'
)->name('deleteStudentfromTeam')->middleware(['auth','can:teacher']);

Route::get(
    '/profile/allpass',
    'TeacherProfileController@pdfAllStudentPass'
)->name('allStudentPass')->middleware(['auth','can:teacher']);

Route::get(
    '/profile/thanks',
    'TeacherProfileController@pdfThanks'
)->name('pdfThanksTeacher')->middleware(['auth','can:teacher']);

Route::get(
    '/profile/participate',
    'TeacherProfileController@pdfTableParticipate'
)->name('pdfParticipateTeacher')->middleware(['auth','can:teacher']);

Route::get(
    '/profile/student', 
    'StudentProfileController@index'
)->name('studentMainProfile')->middleware(['auth','can:student']);

Route::get(
    '/profile/student/pass',
    'StudentProfileController@pdfStudentPass'
)->name('StudentPass')->middleware(['auth','can:student']);

Route::get(
    '/profile/student/diplom',
    'StudentProfileController@pdfStudentReward'
)->name('StudentDiplom')->middleware(['auth','can:student']);

Route::get(
    '/profile/{id}',
    'TeacherProfileController@indexbyID'
)->name('adminTeacherLK')->middleware(['auth','can:admin']);

Route::get(
    '/profile/student/{id}',
    'StudentProfileController@indexbyID'
)->name('adminStudentLK')->middleware(['auth','can:admin']);

Route::get(
    '/adminback',
    'PageController@backAdmin'
)->name('adminback')->middleware('auth');

// Админ-панель //
Route::group([
    'prefix' => '/adminpanel',
    'middleware' => ['auth','can:admin']
    ], function(){
    Route::get(
        '/info', 
        'Adminpanel\MainInfoController@index')
    ->name('adminPanel');

    Route::get(
        '/info/teacher/{id}',
        'Adminpanel\MainInfoController@showTeacher'
    )->name('showTeacher');

    Route::post(
        '/info/teacher/{id}',
        'Adminpanel\MainInfoController@changeInfoTeacher'
    )->name('changeInfoTeacher');

    Route::get(
        '/info/teacher/{id}/delete',
        'Adminpanel\MainInfoController@deleteTeacher'
    )->name('deleteTeacher');

    Route::get(
        '/info/student/{id}',
        'Adminpanel\MainInfoController@showStudent'
    )->name('showStudent');

    Route::get(
        '/info/deleteAllData',
        'Adminpanel\MainInfoController@deleteData'
    )->name('deleteAllData');

    Route::post(
        '/info/student/{id}',
        'Adminpanel\MainInfoController@changeInfoStudent'
    )->name('changeInfoStudent');

    Route::get(
        'info/student/{id}/delete',
        'Adminpanel\MainInfoController@deleteStudent'
    )->name('deleteStudent');

    Route::post(
        '/info/submit', 
        'Adminpanel\MainInfoController@submit')
    ->name('mainInfoSubmit');

    Route::get(
        '/contacts',
        'AdminPanel\ContactsController@index')
    ->name('adminContactsPage');

    Route::post(
        '/contacts/submit',
        'AdminPanel\ContactsController@submit')
    ->name('contactsInfoSubmit');

    Route::get(
        '/main',
        'AdminPanel\MainPageController@index')
    ->name('adminMainPage');

    Route::post(
        '/main/submit',
        'AdminPanel\MainPageController@submit')
    ->name('mainpageSubmit');

    Route::get(
        '/results',
        'AdminPanel\ResultsPageController@index'
    )->name('adminResultsPage');

    Route::post(
        '/results/self',
        'AdminPanel\ResultsPageController@submitResStudent'
    )->name('adminSelfResSubmit');

    Route::post(
        '/results/teams',
        'AdminPanel\ResultsPageController@submitResTeams'
    )->name('adminTeamResSubmit');

    Route::get(
        '/results/teams',
        'AdminPanel\ResultsPageController@winnerTeam'
    )->name('adminWinnerTeam');

    Route::get(
        '/results/self',
        'AdminPanel\ResultsPageController@winnerSelf'
    )->name('adminWinnerSelf');

    Route::get(
        '/olyplaces',
        'AdminPanel\OlyPlaceController@index'
    )->name('adminOlyPlaces');

    Route::post(
        '/olyplaces/student',
        'AdminPanel\OlyPlaceController@changePlaceStudent'
    )->name('adminChangeStudentPlaces');

    Route::post(
        '/olyplaces/team',
        'AdminPanel\OlyPlaceController@changePlaceTeam'
    )->name('adminChangeTeamPlaces');

    Route::get(
        '/olyplaces/pdfThanks',
        'AdminPanel\OlyPlaceController@pdfTeacherThanks'
    )->name('adminpdfTeacherThanks');

    Route::get(
        '/olyplaces/pdfParticipate',
        'AdminPanel\OlyPlaceController@pdfTeacherParticipate'
    )->name('adminpdfTeacherParticipate');

    Route::get(
        '/olyplaces/pdfWinners',
        'AdminPanel\OlyPlaceController@pdfStudentWin'
    )->name('adminpdfStudentWin');

    Route::get(
        '/olyplaces/pdfStudentParticipate',
        'AdminPanel\OlyPlaceController@pdfStudentParticipate'
    )->name('adminpdfStudentParticipate');

    Route::get(
        '/rules',
        'AdminPanel\OlyRulesController@index')
    ->name('adminRulesPage');

    Route::post(
        '/rules/submit',
        'AdminPanel\OlyRulesController@submit')
    ->name('rulesSubmit');

    Route::get(
        '/pers',
        'AdminPanel\OlyRulesController@indexPers')
    ->name('persPage');

    Route::post(
        '/pers/submit',
        'AdminPanel\OlyRulesController@submitPers')
    ->name('persSubmit');

    Route::get(
        '/stpers',
        'AdminPanel\OlyRulesController@indexStPers')
    ->name('stpersPage');

    Route::post(
        '/stpers/submit',
        'AdminPanel\OlyRulesController@submitStPers')
    ->name('stpersSubmit');

    Route::get(
        '/tasks',
        'AdminPanel\TasksController@index'
    )->name('adminTasksPage');

    Route::post(
        '/tasks',
        'AdminPanel\TasksController@addTask'
    )->name('adminAddTask');

    Route::get(
        '/tasks/{id}/delete',
        'AdminPanel\TasksController@deleteTask'
    )->name('adminDeleteTask');


    Route::get(
        '/gallery',
        'AdminPanel\ImageController@index'
    )->name('adminGalleryPage');

    Route::post(
        '/gallery/store', 
        'Adminpanel\ImageController@storeImage'
    )->name('galleryStore');

    Route::get(
        '/gallery/delete/{year}', 
        'Adminpanel\ImageController@deleteYear'
    )->name('galleryDelete');

    Route::get(
        '/olyrooms',
        'AdminPanel\OlyRoomsController@showOlyRooms'
    )->name('adminOlyroomsPage');

    Route::post(
        '/olyrooms/add',
        'AdminPanel\OlyRoomsController@addOlyRoom'
    )->name('addOlyRoom');

    Route::get(
        '/olyrooms/delete/{roomnumber}',
        'AdminPanel\OlyRoomsController@deleteOlyRoom'
    )->name('deleteOlyRoom');

    Route::get(
        '/live',
        'AdminPanel\OlyLiveController@index'
    )->name('olylive');

    Route::match(
        ['get', 'post'],
        '/live/search',
        'AdminPanel\OlyLiveController@search'
    )->name('olylivesearch');

    Route::post(
        '/live/change',
        'AdminPanel\OlyLiveController@change'
    )->name('olylivechange');

    Route::get(
        '/live/print/{id}',
        'AdminPanel\OlyLiveController@pdfStudentPassAdmin'
    )->name('studentpassadmin');

});

// Подтверждение времени //

Route::get(
    '/time/{teacherid}/{studentid}',
    'PageController@timeConfirm'
);

Route::post(
    '/time/{teacherid}/{studentid}',
    'PageController@timeConfirmPost'
);

Route::get('/home', 'HomeController@index')->name('home');//->middleware('verified');