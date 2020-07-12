@extends('layouts.app')

@section('page-title')Согласие на обработку - Олимпиада РЗА@endsection

@section('content')
    <div class="container">
        <div class="rules">
            {!!html_entity_decode($olyrules->content)!!}
        </div>
    </div>

@endsection