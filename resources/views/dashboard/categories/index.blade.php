@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-6">
  <a href="/dashboard/categories/create"><button type="button" class="btn btn-info mb-3">Create New category</button></a>
    <table class="table table-striped table-sm text-center">
      <thead>
        <tr clas>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col" class="text-center">Action</th>
          
        </tr>
      </thead>
      <tbody>

@foreach($categories as $category)

<tr>
  <td>{{ $loop->iteration }}</td>
  <td>{{ $category->name }}</td>
  
  <td>
    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-warning mx-1"><span data-feather="more-vertical"></span></a>
    <a href="/dashboard/categories/{{ $category->slug }}/edit  " class="badge bg-success"><span data-feather="plus"></span></a>
    
    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline mx-3">
      @method('delete')
      @csrf
      <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x"></span></button>
    </form>
  </td>
  
  
</tr>

@endforeach

      </tbody>
    </table>
  </div>
@endsection