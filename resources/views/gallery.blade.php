@extends('layouts.app')

@section('page-title')Галерея - Олимпиада РЗА@endsection

@section('content')
    <div class="album">
        <div class="container">
            <div class="gallerytitle">
                <h1 class="sidepagetitle">Галерея</h1>
                <form class="form-inline" action="{{route('galleryChange')}}" method="POST">
                    @csrf
                    <select name="year" class="custom-select my-1 mr-sm-2" id="galleryselectyear">
                        @foreach($years as $year)
                            <option value="{{$year->year}}" @if($year->year == $selectyear) selected @endif>{{$year->year}}</option>
                        @endforeach
                    </select>
                <form>
            </div>
            <div class="photos">
                <div class="row">
                    @foreach($images as $image)
                    <div class="col-lg-4 col-sm-6">
                        <div class="card mb-4 shadow-sm">
                            <a data-fancybox="gallery" href="{{asset('storage/img/gallery/'.$image->year.'/'.$image->imagename)}}">
                                <img class="card-img" width="100%" height="225"
                                src="{{asset('storage/img/gallery/'.$image->year.'/'.$image->imagename)}}" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
 
@endsection