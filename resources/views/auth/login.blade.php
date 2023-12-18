@extends('layouts.auth')

@section('title')
    Galih Store | Login
@endsection

@section('content')
<div class="page-content page-auth">
    <section class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row d-flex align-items-center row-login">
          <div class="col-lg-6 text-center d-none d-sm-block">
            <img
              src="/images/login_placeholder.png"
              class="w-50 mb-4 mb-lg-none"
              alt=""
            />
          </div>
          <div class="col-12 col-lg-6">
            <h2>
              Belanja kebutuhan utama,<br />
              menjadi lebih mudah
            </h2>
            <form class="mt-3" method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label> Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <button 
              type="submit" 
              class="btn btn-block btn-success mt-4"
                >Sign In to My Account
              </button>
              <a href="{{ Route ('register')}}" class="btn btn-block btn-signup mt-2"
                >Sign Up</a
              >
              @if (Route::has('password.request'))
                  <a class="btn btn-block btn-signup mt-2" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
              
            </form>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection
