@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Согласие (ученики)@endsection
@section('content')
<div class="container-fluid adminpanel">

    <h3>Редактирование правил на обработку перс. данных (ученики)</h3>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
    @endif
    <form method="post" action="{{route('stpersSubmit')}}">
        @csrf
        <textarea id="summernote" name="editordata" >
            @if(!empty($stpers)){{$stpers->content}}@endif
        </textarea>
        <button type="submit" class="btn btn-primary">Внести изменения</button>
    </for>
</div>
@endsection