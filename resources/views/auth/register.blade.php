@extends('layouts.app')

@section('content')
<div class="box2 w-50 h-50 m-auto">
    <div class="form-signup">
        <div class="head">
            <span class="title">Registration</span>
            <img src="/images/logo2.png" alt="">
        </div>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-field">
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Username">
                <i class="fa-solid fa-user icon"></i>
            </div>
            <div class="input-field">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-field">
                <input class="eleven col-6" type="number" placeholder="Phone#" maxlength="11" required >
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-field">
                <input type="number" placeholder="HouseHold" required>
                <i class="fa-solid fa-house"></i>
            </div>
            <div class="input-field">
                <input id="password" type="password" class="password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a Password">
                <i class="fa-solid fa-lock icon"></i>
                <i class="fa-solid fa-eye-slash showHidePw"></i>
            </div>
            <div class="input-field">
                <input id="password-confirm" type="password" class="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                <i class="fa-solid fa-lock icon"></i>
                <i class="fa-solid fa-eye-slash showHidePw"></i>
            </div>
            <div class="checkbox-text">
                <div class="checkbox-content">
                    <input class="" type="checkbox" name="remember" id="signCheck" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text" for="signCheck">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <div class="form-signIn text-center">
              <button type="submit" class="button btn justify-content-center btn">Register</button>
            </div>    
        </form>
        <div class="login-signup">
            <span class="text">Already a member?
                <a href="{{ route('login') }}" class="text login-link">Login</a>
            </span>
        </div>
    </div>
    </div>
@endsection
