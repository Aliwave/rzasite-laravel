@extends('layouts.adminapp')

@section('page-title')Изменение данных участника@endsection
@section('page-header')Изменение данных участника@endsection
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Изменение данных участника') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('changeInfoStudent',$userdata->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">{{ __('Фамилия') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{$studentdata->LastName}}" required autocomplete="LastName" autofocus>

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
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{$studentdata->FirstName}}" required autocomplete="FirstName">

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
                                <input id="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror" name="patronymic" value="@if(!empty($studentdata->Patronymic)) {{$studentdata->Patronymic}} @endif" required autocomplete="patronymic">
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
                                    <input type="radio" id="maleradio" name="gender" class="custom-control-input" value="male"  @if($studentdata->Gender == 'male')checked @endif>
                                    <label class="custom-control-label" for="maleradio">мужской</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="femaleradio" name="gender" class="custom-control-input" value="female" @if($studentdata->Gender == 'female') checked @endif>
                                    <label class="custom-control-label" for="femaleradio">женский</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Класс') }}</label>

                            <div class="col-md-6">
                                <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{$studentdata->Class}}" required autocomplete="class">

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Населенный пункт') }}</label>

                            <div class="col-md-6">
                                <select name="city" class="custom-select my-1 mr-sm-2" id="citystudent">
                                    @if(!empty($cities))
                                        @foreach($cities as $city)
                                            <option value="{{$city->City}}" @if($city->City == $teacherdata->City) selected @endif>{{$city->City}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row  align-items-center">
                            <label for="fullnameschool" class="col-md-4 col-form-label text-md-right">{{ __('Полное название образовательного учреждения') }}</label>

                            <div class="col-md-6">
                                <select name="fullnameschool" class="custom-select my-1 mr-sm-2" id="fullnameschoolstudent">
                                    @if(!empty($schools))
                                        @foreach($schools as $school)
                                            <option value="{{$school->FullNameSchool}}" @if($school->FullNameSchool == $teacherdata->FullNameSchool) selected @endif>{{$school->FullNameSchool}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                
                            </div>
                        </div>

                        <div class="form-group row  align-items-center">
                            <label for="teacher" class="col-md-4 col-form-label text-md-right">{{ __('Преподаватель') }}</label>

                            <div class="col-md-6">
                                <select name="teacher" class="custom-select my-1 mr-sm-2" id="teacher">
                                    @if(!empty($teachers))
                                        @foreach($teachers as $teacher)
                                            <option value="{{$teacher->TeacherID}}" @if($teacher->TeacherID == $teacherdata->TeacherID) selected @endif>{{$teacher->LastName}} {{$teacher->FirstName}} {{$teacher->Patronymic}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Мобильный телефон') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="city">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>-->
                            
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail почта') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$userdata->email}}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Изменить данные') }}
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