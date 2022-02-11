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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-2">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-end">First Name: </label>

                                    <div class="col-md-7">
                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"  autocomplete="firstname" autofocus style="background-color:white;">

                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-end">Last Name: </label>

                                    <div class="col-md-7">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}"  autocomplete="lastname" autofocus style="background-color:white;">

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-2">
                                    <label for="contact" class="col-md-4 col-form-label text-md-end">Contact No: </label>

                                    <div class="col-md-7">
                                        <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}"  autocomplete="contact" autofocus style="background-color:white;">

                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-2">
                                    <label for="username" class="col-md-4 col-form-label text-md-end">Username: </label>

                                    <div class="col-md-7">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" autofocus style="background-color:white;">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address: </label>

                                    <div class="col-md-7">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" style="background-color:white;">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Password: </label>

                                    <div class="col-md-7">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" style="background-color:white;">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password:') }}</label>
        
                                    <div class="col-md-7">
                                        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" style="background-color:white;">
                                    </div>
                                </div>
                            
                                <div class="row pt-5">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-transparent" style="width:150px; background-color:#F4C553; color:white; border-color:#aaaaaa;">
                                            {{ __('Sign Up') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card shadow-lg" style="border-radius:0px 0px 15px 15px;">
                <div class="card-body">
                    <div class="text-center">
                        <a>Already have an account? </a> <a href="login" style="color:#163A1E;"><b>Login</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
