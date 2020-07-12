@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header') Live @endsection
@section('content')
<div class="container-fluid adminpanel resultspage">
<style>
    .resultspage .row{
        margin-bottom:7px;
    }
</style>
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
        <h3>Участники</h3>
        <form action="{{route('olylivesearch')}}" method="post" class="form-inline">
            @csrf
            <div class="form-group mb-1">
                <input type="text" readonly class="form-control-plaintext" value="Поиск">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" value="@if(!empty($sear)){{$sear}}@endif" name="searchnum" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Поиск</button>
        </form>
        <form method="POST" action="{{route('olylivechange')}}">
        <!--<button style="margin-bottom:5px;" type="submit" class="btn btn-primary">Внести изменения</button>-->
          @csrf

          <div id="tableplace">
            <div id="tableoly">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">№</th>
                        <th scope="col">ФИО ученика</th>
                        <th scope="col" style="width:20%;">ФИО руководителя</th>
                        <th scope="col">Команда</th>
                        <th scope="col">Кабинет</th>
                        <th scope="col">Пропуск</th>
                        <th scope="col">Прибытие</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(!empty($students))
                      @foreach($students as $student)
                        <tr>
                          <td>{{$student->StudentID}}</td>
                          <td>{{$student->LastName}} {{$student->FirstName}} @if(!empty($student->Patronymic)) {{$student->Patronymic}} @endif</td>
                          <td>{{$student->teacher->LastName}} {{$student->teacher->FirstName}} @if(!empty($student->teacher->Patronymic)) {{$student->teacher->Patronymic}} @endif</td>
                          <td>@if(!empty($student->studentsteam->TeamID))Команда {{$student->studentsteam->TeamID}} @else Без команды @endif</td>
                          <td>
                            <select data-st="{{$student->StudentID}}" data-old="@if(!empty($student->roomnumber)){{$student->roomnumber}}@endif" name="roomnumber" id="" class="custom-select roomclass" data-sear="@if(!empty($sear)){{$sear}}@endif" >
                                @if(!empty($student->TurnoutTime))
                                    @if(!empty($olyrooms))
                                        @foreach($olyrooms as $olyroom)
                                            <option value="{{$olyroom->roomnumber}}" @if($student->roomnumber == $olyroom->roomnumber) selected @endif>{{$olyroom->roomnumber}} / {{$olyroom->freecountcurrent}}</option>
                                        @endforeach
                                    @endif
                                @else
                                    <option disabled>Нет</option>
                                @endif
                            </select>
                          </td>
                          <td><a href="{{route('studentpassadmin',$student->StudentID)}}" target="_blank" class="btn btn-primary">Печать</a></td>
                          <td>
                            @if(empty($student->TurnoutTime))
                                <a href="{{$student->CodeGenQR}}" data-sear="@if(!empty($sear)){{$sear}}@endif" data-toggle="modal" data-target="#confirm" class="btn btn-warning needconfirm">Подтвердить</a>
                            @else
                                <a href="{{$student->CodeGenQR}}" data-sear="@if(!empty($sear)){{$sear}}@endif" data-toggle="modal" data-target="#confirm" data-toggle="modal" class="btn btn-primary">Подтверждено</a>
                            @endif
                          </td>
                        </tr>
                      @endforeach

                    </tbody>
                
                
                </table>
 
                 {{$students->links()}}
                @endif
                <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                 crossorigin="anonymous"></script>
                <script>

                         $(".roomclass").change(function(){
                    var st = $(this).data('st');
                    var old = $(this).data('old');
                    var sear = $(this).data('sear');
                    var roomnumber = $(this).val();
                    var data = {
                      "_token": $('meta[name="csrf-token"]').attr('content'),
                      st: st,
                      old:old,
                      roomnumber:roomnumber,
                      searchnum:sear
                    }
                    $.post('/adminpanel/live/change', data, function(response) {
                        $('#tableplace div').remove();
                        var $newEl = $(response).find('#tableplace #tableoly');
                        $('#tableplace').append($newEl);
                      })
                    });
                </script>
            </div>
        </div>
        </form>
        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Результат</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection