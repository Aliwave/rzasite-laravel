@extends('layouts.app')

@section('page-title')Контакты@endsection

@section('content')
<div class="container">
    {!!html_entity_decode($contactdata->content)!!}
    
</div>


@endsection