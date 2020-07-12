@extends('layouts.app')

@section('page-title')Регистрация участник - Олимпиада РЗА@endsection
@section('content')

<div class="container">
    @include('inc.authvar')
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Регистрация участника') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('regformStudent') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">{{ __('Фамилия') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ old('FirstName') }}" required autocomplete="FirstName">

                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="patronymic" class="col-md-4 col-form-label text-md-right">{{ __('Отчество') }}</label>

                            <div class="col-md-6">
                                <input id="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror" name="patronymic" value="{{ old('patronymic') }}" autocomplete="patronymic">

                                @error('patronymic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Пол') }}</label>
                            <div class="col-md-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="maleradio" name="gender" class="custom-control-input" value="male"  checked>
                                    <label class="custom-control-label" for="maleradio">мужской</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="femaleradio" name="gender" class="custom-control-input" value="female">
                                    <label class="custom-control-label" for="femaleradio">женский</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Класс') }}</label>

                            <div class="col-md-6">
                                <select name="class" class="custom-select my-1 mr-sm-2" id="class">
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Населенный пункт') }}</label>

                            <div class="col-md-6">
                                <select name="city" class="custom-select my-1 mr-sm-2" required id="citystudent">
                                    <option value='' selected disabled>Выберите населенный пункт</option>
                                    @if(!empty($cities))
                                        @foreach($cities as $city)
                                            <option value="{{$city->City}}">{{$city->City}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  align-items-center">
                            <label for="fullnameschool" class="col-md-4 col-form-label text-md-right">{{ __('Название образовательного учреждения') }}</label>

                            <div class="col-md-6">
                                <select name="fullnameschool" class="custom-select my-1 mr-sm-2" required id="fullnameschoolstudent">
                                    <option value='' selected disabled>Выберите школу</option>
                                    @if(!empty($schools))
                                        @foreach($schools as $school)
                                            <option value="{{$school->FullNameSchool}}">{{$school->ShortNameSchool}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('fullnameschool')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  align-items-center">
                            <label for="teacher" class="col-md-4 col-form-label text-md-right">{{ __('Преподаватель') }}</label>

                            <div class="col-md-6">
                                <select name="teacher" class="custom-select my-1 mr-sm-2" required id="teacher">
                                    <option value='' selected disabled>Выберите преподавателя</option>
                                    @if(!empty($teachers))
                                        @foreach($teachers as $teacher)
                                            <option value="{{$teacher->TeacherID}}">{{$teacher->LastName}} {{$teacher->FirstName}} {{$teacher->Patronymic}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('teacher')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail почта') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Подтвердить пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <p class="text-center"> 
                            Нажимая на кнопку "Зарегистрироваться", я соглашаюсь с условиями <br>
                            <a href="{{route('stpers')}}" target="_blank">Политики конфиденциальности</a>
                        </p>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Зарегистрироваться') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection