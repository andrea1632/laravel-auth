@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col">
                <h3>{{$post->title}}</h3>
                <img src="{{$post->image}}" alt="">
                <p>{{$post->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection