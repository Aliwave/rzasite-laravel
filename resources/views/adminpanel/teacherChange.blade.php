@extends('layouts.adminapp')

@section('page-title')Изменение данных учителя@endsection
@section('page-header')Изменение данных учителя@endsection
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Изменение данных учителя') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('changeInfoTeacher',$userdata->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">{{ __('Фамилия') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ $teacherdata->LastName}}" required autocomplete="LastName" autofocus>

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
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ $teacherdata->FirstName }}" required autocomplete="FirstName">

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
                                <input id="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror" name="patronymic" value="@if(!empty($teacherdata->Patronymic)) {{$teacherdata->Patronymic}} @endif" required autocomplete="patronymic">

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
                                    <input type="radio" id="maleradio" name="gender" class="custom-control-input" value="male" @if(!empty($teacherdata->Gender == 'male')) checked @endif>
                                    <label class="custom-control-label" for="maleradio">мужской</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="femaleradio" name="gender" class="custom-control-input" value="female" @if(!empty($teacherdata->Gender == 'female')) checked @endif>
                                    <label class="custom-control-label" for="femaleradio">женский</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Населенный пункт') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$teacherdata->City}}" required autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <!--<div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <select name="city" class="custom-select my-1 mr-sm-2" id="city">
                                
                                </select>
                            </div>
                            
                        </div>-->

                        <div class="form-group row  align-items-center">
                            <label for="shortnameschool" class="col-md-4 col-form-label text-md-right">{{ __('Образовательное учреждение') }}</label>
                            <div class="col-md-6">
                                <input id="shortnameschool" type="text" class="form-control @error('shortnameschool') is-invalid @enderror" name="shortnameschool" value="{{ $teacherdata->ShortNameSchool }}" required autocomplete="shortnameschool">

                                @error('shortnameschool')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--<div class="col-md-6">
                                <select name="shortnameschool" class="custom-select my-1 mr-sm-2" id="shortnameschool">
                                
                                </select>
                            </div>-->
                        </div>

                        <div class="form-group row  align-items-center">
                            <label for="fullnameschool" class="col-md-4 col-form-label text-md-right">{{ __('Полное название образовательного учреждения') }}</label>
                            <div class="col-md-6">
                                <input id="fullnameschool" type="text" class="form-control @error('fullnameschool') is-invalid @enderror" name="fullnameschool" value="{{ $teacherdata->FullNameSchool }}" required autocomplete="fullnameschool">

                                @error('fullnameschool')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--<div class="col-md-6">
                                <select name="fullnameschool" class="custom-select my-1 mr-sm-2" id="fullnameschool">
                                
                                </select>
                            </div>-->
                        </div>

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Предмет') }}</label>

                            <div class="col-md-6">
                                <!--<input  type="text" class="form-control @error('fullnameschool') is-invalid @enderror" name="fullnameschool" value="{{ old('fullnameschool') }}" required autocomplete="patronymic">-->
                                <select name="subject" id="subject" class="custom-select">
                                    <option value="math" @if($teacherdata->Subject=='math') selected  @endif>математика</option>
                                    <option value="physics" @if($teacherdata->Subject=='physics') selected  @endif >физика</option>
                                    <option value="informatics" @if($teacherdata->Subject=='informatics') selected  @endif >информатика</option>
                                </select>
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Мобильный телефон') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $teacherdata->Phone }}" required autocomplete="city">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail почта') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userdata->email }}" required autocomplete="email">

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
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" value="" name="password" autocomplete="password">

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