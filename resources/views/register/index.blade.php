@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            
            <main class="form-registration">
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
                
                <form action="/register" method="post">
                     @csrf

                <div class="form-floating mb-3 mt-4">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                @enderror
                </div>

                <div class="form-floating mb-3 mt-4">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Userame</label>

                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                @enderror
                </div>

                <div class="form-floating mb-3 mt-4">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email Address</label>

                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                @enderror
                </div>

                <div class="form-floating">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                  <label for="password">Password</label>

                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                    </div>
              @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign up</button>
                
              </form>

              <small class="d-block text-center mt-2">
                  Have Account? <a href="/login" class="text-decoration-none">Sign in Now!</a>
              </small>

              <p class="mt-5 mb-3 text-muted text-center"><i class="bi bi-radioactive">
                  </i> Herlan Nurachman 2021</p>
            </main>

        </div>
    </div>
    

@endsection