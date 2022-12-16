@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="my-container">
        <div class="row">
                @foreach ($comics as $comic)
                <div class="col">
                    <div class="img-comic">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </div>
                    <h4>
                        {{$comic['series']}}
                    </h4>
                </div>  
                @endforeach
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary text-uppercase strong">loard more</button>
        </div>
    </div>
</div>
@endsection