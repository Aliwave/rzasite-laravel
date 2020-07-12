@extends('layouts.app')

@section('page-title')Ajax - Олимпиада РЗА@endsection

@section('content')
<div class="container">
    <h1 class="sidepagetitle">Test</h1>
    <form action="" method="post">
        <div class="form-group row  align-items-center">
            <div class="col-md-6">
                <select name="city" class="custom-select my-1 mr-sm-2" id="city">
                    @if(!empty($datacity))
                        @foreach($datacity as $city)
                            <option value="{{$city['id']}}">{{$city['title']}}@if(!empty($city['area'])), {{$city['area']}}@endif</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row  align-items-center">
            <div class="col-md-6">
            <select name="datashortschool" class="custom-select my-1 mr-sm-2" id="city">
                    @if(!empty($datashortschool))
                        @foreach($datashortschool as $shortschool)
                            <option value="{{$shortschool['title']}}">{{$shortschool['title']}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group row  align-items-center">
            <div class="col-md-6">
            <select name="datafullschool" class="custom-select my-1 mr-sm-2" id="city">
                    @if(!empty($datafullschool))
                        @foreach($datafullschool as $fullschool)
                            <option value="{{$fullschool['title']}}">{{$fullschool['title']}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </form>
    <a href="{{route('showPdf')}}" class="btn btn-primary">TestPdf</a>
</div>

@endsection