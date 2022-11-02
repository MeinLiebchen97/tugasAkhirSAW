@extends('layouts.main')

@section('container')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-md-15 mx-auto col-lg-8">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('SigninError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <form action="/signup" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" autofocus placeholder="Name" required value="{{ old('name') }}"><label for="name">Name</label>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div> 
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}"><label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div> 
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="email" name = "email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}"><label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="password" name = "password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required><label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
            </div>
            {{-- <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div> --}}
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
          <hr class="my-4">
          <small class="d-block text-center mt-3">Already registered? <a href="/signin">Sign In</a></small>
        </form>
      </div>
    </div>
  </div>
@endsection