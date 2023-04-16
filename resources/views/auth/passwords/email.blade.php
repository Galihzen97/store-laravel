@extends('layouts.auth')

@section('title')
    Galih Store | Reset Password
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
              Masukan email anda,<br />
              untuk mereset password anda !
            </h2>
            <form action="" class="mt-3">
              <div class="form-group">
                <label> Email</label>
                <input type="email" class="form-control" />
              </div>
             
              <a href="{{ Route ('dashboard')}}" class="btn btn-block btn-success mt-4"
                >Send Password Reset Link</a
              >
              
              
            </form>
          </div>
        </div>
      </div>
    </section>
</div>


<div style="display: none" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
