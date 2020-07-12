@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Галерея@endsection
@section('content')
<div class="container-fluid adminpanel">
    <h4>Галерея</h4>
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
        @if ($paths = Session::get('paths'))
            @foreach($paths as $el)
                <li>{{$el}}</li>
            @endforeach
        @endif
        </div>
    @endif
    
    
    <form action="{{ route('galleryStore') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="yearinput">Введите год проведения олимпиады</label>
            <input type="text" name="year" class="form-control" id="yearinput">
        </div>
        <div class="field__wrapper">
            <input type="file" name="images[]" id="field__file-2" class="field field__file" multiple>
            <label class="field__file-wrapper" for="field__file-2">
              <div class="field__file-fake">Файлы не выбраны</div>
              <div class="field__file-button field__file-upl">Выбрать</div>
              <button type="submit" class="btn field__file-button">Загрузить</button>
            </label>
        </div>
    </form>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Год</th>
            <th scope="col">Количество фотографий</th>
            <th scope="col">Удалить</th>
          </tr>
        </thead>
        <tbody>
            @if(!empty($galleries))
                @foreach($galleries as $gallery)
                    <tr>
                        <td>{{$gallery->year}}</td>
                        <td>{{$gallery->count}}</td>
                        <td><a href="{{route('galleryDelete',$gallery->year)}}"><button class="btn btn-danger">Удалить</button></a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection