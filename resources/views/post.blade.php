@extends('layouts.main')
 
@section('container')


    <h1>{{ $post->title }}</h1>

    <p>By. Herlan Nurachman in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}

    <p>{{ $post->body}}</p>


<a href="/posts">Back to Posts</a>

    @endsection