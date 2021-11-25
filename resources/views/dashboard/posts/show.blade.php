@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

           <a href="/dashboard/posts" class="btn btn-warning"><span data-feather="arrow-left"></span> Back To My Post</a>
           <a href="" class="btn btn-success"><span data-feather="plus"></span> Edit</a>
           <a href="" class="btn btn-danger"><span data-feather="x"></span> Delete</a>
                in
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}</a>
            </p>

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