@extends('layouts.app')

@section('content')
 <!--HOME PAGE (AFTER THE USER LOGGED IN)-->
 <div class="container">
     @if(Auth::check())
        <div class="row justify-content-center">
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="assets/AnimatedGraphics.mp4" width="1280px;" height="720px;" allow='autoplay'></iframe>
            </div>
        </div>
        
        <div class="row justify-content-center">    
            <div class="col-md-4 pt-3">
                <br><br><br><br>
                <div class="card bg-transparent" style="border:0px;">
                    <div class="card-body">
                        <h1 class="card-title"><strong>Your Best Filipino Food in Town.</strong></h1>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        <a href="menu" class="btn btn-transparent" style="background-color:#F4C553;"><strong>View Menu</strong></a>
                        <a href="placeorder" class="btn btn-transparent" style="background-color:#F4C553;"><strong>Place Order</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 pt-3">
                <div class="card bg-transparent" style="border:0px;">
                    <div class="card-body">
                        <img src="assets/sinigang.png" width="550px;" height="442px;">
                    </div>
                </div>
            </div>
        </div>
    @endif
</div> 
@endsection
