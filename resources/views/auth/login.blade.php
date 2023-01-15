@extends('layouts.app')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>Welcome to login</h2>
                            <p style="color: #fff">Don't have an account?</p>
                            <a href="/register" class="btn btn-white btn-outline-white">Sign Up</a>
                        </div>
              </div>
                    <div class="login-wrap p-4 p-lg-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Sign In</h3>
                      </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                  </div>
                        <form  method="POST" action="{{ route('login') }}" class="signin-form">
                            @csrf
                      <div class="form-group mb-3">
                          <label class="label" for="name">Email</label>
                          <input type="email" class="form-control" @error('email') is-invalid @enderror  name="email" placeholder="youremail@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                  <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" autocomplete="current-password" required>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                        <label class="checkbox-wrap checkbox-primary mb-0" for="remember">
                            Remember Me
                                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">Forgot Password</a>
                                    @endif
                                </div>
                </div>
              </form>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>

@endsection
