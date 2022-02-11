@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-5 pt-5">
            <div class="card shadow-lg" style="border-radius:15px 15px 0px 0px;">
                <div class="card-body">
                    <div class="text-center">
                        <a href="/"><img src = "assets/headerlogo.png" class="img-fluid pt-3 pb-3"></a>
                        <hr>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-2">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color:white;">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="current-password" style="background-color:white;">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-4 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="background-color:white;">
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-transparent" style="width:150px; background-color:#F4C553; color:white; border-color:#aaaaaa;">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-lg mt-2" style="border-radius:0px 0px 15px 15px;">
                <div class="card-body">
                    <div class="text-center">
                        <a>Don't have an account? </a> <a href="{{ route('register') }}" style="color:#163A1E;"><b>Sign up</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
