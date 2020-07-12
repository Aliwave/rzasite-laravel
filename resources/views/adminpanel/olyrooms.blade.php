@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Кабинеты@endsection
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
    <h4>Кабинеты</h4>
    <p>Добавление нового кабинета</p>
    <form class="form-inline" method="POST" action="{{route('addOlyRoom')}}">
        @csrf
        <div class="form-group mb-2">
            <label for="roomnumber" class="col-form-label">Номер кабинета:  </label>
            <input type="text" class="form-control" id="roomnumber" name="roomnumber">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="peoplecounttotal" class="col-form-label">Вместимость:</label>
            <input type="text" class="form-control" id="peoplecounttotal" name="peoplecounttotal">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Добавить кабинет</button>
    </form>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Номер кабинета</th>
            <th scope="col">Вместимость</th>
            <th score="col">Свободных мест</th>
            <th scope="col">Удаление</th>
          </tr>
        </thead>
        <tbody>
            @if(!empty($olyrooms))
                @foreach($olyrooms as $olyroom)
                    <tr>
                      <td>{{$olyroom->roomnumber}}</td>
                      <td>{{$olyroom->peoplecounttotal}}</td>
                      <td>{{$olyroom->freecountcurrent}}</td>
                      <td><a href="{{route('deleteOlyRoom',$olyroom->roomnumber)}}"><button class="btn btn-primary">Удаление</button></a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection