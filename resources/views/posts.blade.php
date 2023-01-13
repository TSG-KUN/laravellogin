@extends('layouts.main')
@include('stuffs.navbar')

@section('container')
    <h1> News </h1>
    <br>
    <article class="mb-5">
        @foreach ($posts as $post)
            <h3> 
                <a href="/news/{{ $post->id}} "> {{ $post->title }} </a>
            </h3>
            <h5> {{ $post->slug}}</h5>
            <p> {{ $post->excerpt}}</p>
        @endforeach
    </article>
@endsection