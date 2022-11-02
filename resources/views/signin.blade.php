@extends('layouts.main')

@section('container')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-md-10 mx-auto col-lg-5">

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

        <form action="/signin" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
            @csrf
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="floatingPassword">Password</label>
            </div>
            {{-- <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div> --}}
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
          <hr class="my-4">
          <small class="d-block text-center mt-3">Haven't signed up? <a href="/signup">Sign Up Now!</a></small>
        </form>
      </div>
    </div>
  </div>
@endsection