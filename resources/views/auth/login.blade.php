@extends('layouts.app')

@section('content')

<div class="box1">
    <div class="error-container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif 
            
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if ($message = Session::get('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong input.... Please check your details!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="form-login w-50 h-50 m-auto">
      <div class="head">
          <span class="title">Login</span>
          <img src="/images/logo2.png" alt="">
      </div>
      <div class="hyper">
        <a class="text-danger" href="https://accounts.google.com/v3/signin/identifier?dsh=S-1291644835%3A1669617702201356&authuser=0&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dgmail%2Bsign%2Bup%26rlz%3D1C1UEAD_enPH1032PH1032%26oq%3Dgmail%26aqs%3Dchrome.2.35i39j69i59j0i433i512j0i131i433i512j0i67j0i131i433i512j69i61l2.3308j0j4%26sourceid%3Dchrome%26ie%3DUTF-8&ec=GAlAAQ&hl=en&flowName=GlifWebSignIn&flowEntry=AddSession"><i class="fa-brands fa-google"></i></a>
         <a class="text-primary" href="https://www.facebook.com/"><i class="fa-brands fa-facebook "></i></a>
         <a  href="https://appleid.apple.com/sign-in"><i class="fa-brands fa-twitter"></i>  </a>
         <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
     </div>
     <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-field">
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            <i class="fa-solid fa-user icon"></i>
        </div>
        <div class="input-field">
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            <i class="fa-solid fa-lock icon"></i>
            <i class="fa-solid fa-eye-slash showHidePw"></i>
        </div>

        <div class="checkbox-text">
            <div class="checkbox-content">
                <input class="" type="checkbox" name="remember" id="logCheck" {{ old('remember') ? 'checked' : '' }}>
                <label class="text" for="logCheck">
                    {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                            <a class="text" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
        </div>
          <div class="form-signIn text-center">
          <button type="submit" class="button btn justify-content-center btn">
            {{ __('Login') }}
        </button>
        </div>
      </form>
      <div class="login-signup">
        <span class="text">Not a member?
            <a href="{{ route('register') }}" class="text signup-link">Sign up</a>
        </span>
    </div>
  </div>
  </div>
  {{-- <div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 
        
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Please check the form below for errors</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
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

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> --}}

@endsection
