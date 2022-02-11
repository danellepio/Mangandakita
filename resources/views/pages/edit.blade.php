@extends('layouts.app')

@section('content')

<!--USER'S ACCOUNT FOR EDIT CREDENTIALS-->
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-5 pt-5">
            <div class="card shadow-lg" style="border-radius:15px;">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="fw-bold">Edit Account</h2>
                        <hr>
                        <div class="card-body">
                            <!-- edit form --> 
                            <form method="POST" action="/account/{{Auth::user()->username}}">
                                @csrf
                                @method('PATCH')

                                <div class="row mb-2">
                                    <label for="username" class="col-md-4 col-form-label text-md-end fw-bold">Username: </label>

                                    <div class="col-md-7">
                                        <input id="username" 
                                                type="text" 
                                                class="form-control @error('username') is-invalid @enderror" 
                                                name="username" 
                                                value = "{{ Auth::user()->username }}"
                                                autocomplete="username" autofocus style="background-color:white;">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-end fw-bold">First Name: </label>

                                    <div class="col-md-7">
                                        <input id="firstname"
                                                type="text" 
                                                class="form-control @error('firstname') is-invalid @enderror" 
                                                name="firstname" 
                                                value=" {{ Auth::user()->firstname }}"
                                                autocomplete="firstname" autofocus style="background-color:white;">

                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-end fw-bold">Last Name: </label>

                                    <div class="col-md-7">
                                        <input id="lastname" 
                                                type="text" 
                                                class="form-control @error('lastname') is-invalid @enderror" 
                                                name="lastname" 
                                                value=" {{ Auth::user()->lastname }}"
                                                autocomplete="lastname" autofocus style="background-color:white;">
                                        
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <label for="contact" class="col-md-4 col-form-label text-md-end fw-bold">Contact No: </label>

                                    <div class="col-md-7">
                                        <input id="contact" 
                                                type="text" 
                                                class="form-control @error('contact') is-invalid @enderror" 
                                                name="contact" 
                                                value=" {{ Auth::user()->contact }}"
                                                autocomplete="contact" autofocus style="background-color:white;">

                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr>
                            
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-transparent" style=" background-color:#F4C553; color:white; border-color:#aaaaaa;">
                                            Update Account
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
