@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Контактная информация@endsection
@section('content')
<div class="container-fluid adminpanel">
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
    <div id="maindata" class="container tab-pane active"><br>
        <h4>Контактная информация</h4>
        <form method="POST" action="{{route('contactsInfoSubmit')}}">
                @csrf
                <textarea id="summernote" name="editordata" >@if(!empty($contactdata)){{$contactdata->content}}@endif</textarea>
                <button type="submit" class="btn btn-primary">Внести изменения</button>
        </form>
    </div>
    <div id="teachers" class="container tab-pane fade"><br>
        <h4>Изменение информации об учителях</h4>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="students" class="container tab-pane fade"><br>
        <h4>Изменение информации об учениках</h4>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>
@endsection