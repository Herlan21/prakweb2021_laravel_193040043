@extends('layouts.main')
 
@section('container')


    <h1>{{ $post->title }}</h1>
    
    {!! $post->body !!}

    <p>{{ $post->body}}</p>


<a href="/posts">Back to Posts</a>

    @endsection