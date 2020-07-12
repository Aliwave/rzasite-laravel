@extends('layouts.adminapp')

@section('page-title')Админ-панель@endsection
@section('page-header')Главная страница@endsection
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
                <h4>Главное изображение и задачи</h4>
                <form method="POST" enctype="multipart/form-data" action="{{route('mainpageSubmit')}}">
                    @csrf
                    <div>
                        <label for="mainlogo">Логотип олимпиады</label><br>
                        <img src="@if(!empty($mainlogo)){{asset('storage/mainpage/img/'.$mainlogo->imagename)}}@endif" width="70" alt="">
                        <input type="file" name="mainlogo" id="mainlogo">
                    </div>
                    
                    <div>
                        <label for="mainimage">Изображение на главной</label><br>
                        <img src="@if(!empty($mainimage)){{asset('storage/mainpage/img/'.$mainimage->imagename)}}@endif" width="200" alt="">
                        <input type="file" name="mainimage" id="mainimage">
                    </div>

                    <div>
                        
                        <label for="firstroundimage">Изображение 1 этапа</label><br>
                        <img src="@if(!empty($firstroundimage)){{asset('storage/mainpage/img/'.$firstroundimage->imagename)}}@endif" width="200" alt="">
                        <input type="file" name="firstroundimage" id="firstroundimage"> 
                    </div>
                    
                    <div>
                        <label for="secondroundimage">Изображение 2 этапа</label><br>
                        <img src="@if(!empty($secondroundimage)){{asset('storage/mainpage/img/'.$secondroundimage->imagename)}}@endif" width="200" alt="">
                        <input type="file" name="secondroundimage" id="secondroundimage">
                    </div>
                   
                    <div>
                        <label for="thirdroundimage"> Изображение 3 этапа</label><br>
                        <img src="@if(!empty($thirdroundimage)){{asset('storage/mainpage/img/'.$thirdroundimage->imagename)}}@endif" width="200" alt="">
                        <input type="file" name="thirdroundimage" id="thirdroundimage">
                    </div>
                    
                    <div>
                        <label for="facultylogo">Логотип факультета</label><br>
                        <img class="card-img" src="@if(!empty($facultylogo)){{asset('storage/mainpage/img/'.$facultylogo->imagename)}}@endif" width="200" alt="">
                        <input type="file" name="facultylogo" id="facultylogo">
                    </div>

                    <div>
                        <label for="pdfInfLetter">Информационное письмо</label><br>
                        <input type="file" name="pdfInfLetter" id="pdfInfLetter">
                    </div>

                    <div>
                        <label for="pdfStatement">Положение об олимпиаде</label><br>
                        <input type="file" name="pdfStatement" id="pdfStatement">
                    </div>
                    Редактирование задач
                    <textarea id="summernote" name="editordata" >@if(!empty($mainlogo)){{$mainlogo->tasks}}@endif</textarea>
                    <button type="submit" class="btn btn-primary">Внести изменения</button>
                </form>
</div>
@endsection