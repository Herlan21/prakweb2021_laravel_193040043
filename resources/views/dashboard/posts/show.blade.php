@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

           <a href="/dashboard/posts" class="btn btn-warning"><span data-feather="arrow-left"></span> Back To My Post</a>
           <a href="/dashboar/posts/{{ $post->slug }}/edit" class="btn btn-success"><span data-feather="plus"></span> Edit</a>
           
           <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline mx-3">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x"></span>Delete</button>
            </form>
                

            <img
                src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}"
                class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>
@endsection