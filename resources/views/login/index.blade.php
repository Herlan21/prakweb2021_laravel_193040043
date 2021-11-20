@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">

          @if(session()->has('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            @endif

            <main class="form-signin">
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
              
              <form action="/login" method="post">
                @csrf

                <div class="form-floating mb-3 mt-4">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                  <label for="email">Email address</label>
                  
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>


                <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
            
                {{-- <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                
              </form>
              <small class="d-block text-center mt-2">
                  Don't Have Account? <a href="/register" class="text-decoration-none">Sign Up Now!</a>
              </small>
              <p class="mt-5 mb-3 text-muted text-center"><i class="bi bi-radioactive"></i> Herlan Nurachman 2021</p>
            </main>
        </div>
    </div>
    

@endsection