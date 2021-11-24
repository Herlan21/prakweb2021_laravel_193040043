@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create"><button type="button" class="btn btn-info mb-3">Create New Post</button></a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>

@foreach($posts as $post)

<tr>
  <td>{{ $loop->iteration }}</td>
  <td>{{ $post->title }}</td>
  <td>{{ $post->category->name }}</td>
  <td>
    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-warning"><span data-feather="more-vertical"></span></a>
    <a href="" class="badge bg-success"><span data-feather="plus"></span></a>
    <a href="" class="badge bg-danger"><span data-feather="x"></span></a>
  </td>
  
  
</tr>

@endforeach

      </tbody>
    </table>
  </div>
@endsection