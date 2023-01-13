@extends('layouts.main')

@section('container')
    <article>
    <h3> {{ $post->title }} </h3>
    <h5> {{ $post->slug }} </h5>
    {!! $post->body !!}
    </article>
    <a type="button" class="btn btn-outline-danger" href="/news">Back To News</a>
    
@endsection