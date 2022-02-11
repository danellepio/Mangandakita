@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="row">
        <div class="col-4">
            <h1><strong> Menu </strong></h1>
        </div>
    </div><hr>
    <div class="row justify-content-evenly">
        
        <div class="row">
            <div class="col-12" style="text-align:center;">
                <h2 style="font-family:Kunstler Script; font-size:80px;"><strong>Main Cuisine</strong></h2>
            </div>
        </div>
        <hr>
        <!-- sinigang -->
        <div class="col-4">
            <div class="card bg-transparent text-center" style="border:0px;">
                <img src="assets/sinigang.png" width="300px;" height="300px;" style="margin:0 auto;">
                <!--<img src="assets/sinigang.png" width="326px;" height="280px;"> -->
                    
                <div class="card-body">
                    <h3><strong>Sinigang</strong></h3>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱299.00</strong></h5>
                </div>
            </div>
        </div>

        <div class="col-4">
            <!-- sisig -->
            <div class="card bg-transparent text-center" style="border:0px;">
                <img src="assets/sisig.png" width="300px;" height="300px;" style="margin:0 auto;">
                <!--<img src="assets/sisig.png" width="390px;" height="292px;">-->

                <div class="card-body">
                    <h4><strong>Sisig</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱200.00</strong></h5>
                </div>
            </div>
        </div>

        <div class="col-4">
            <!-- Adobo -->
            <div class="card bg-transparent text-center" style="border:0px;">
                <img src="assets/adobo.png" width="300px;" height="300px;" style="margin:0 auto;">

                <div class="card-body">
                    <h4><strong>Adobo</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱200.00</strong></h5>
                </div>
            </div>
        </div>

        <div class="col-4">
            <!-- Lechon Kawali -->
            <div class="card bg-transparent text-center" style="border:0px;">
                <img src="assets/lechonkawali.png" width="300px;" height="300px;" style="margin:0 auto;">

                <div class="card-body">
                    <h4><strong>Lechon Kawali</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱250.00</strong></h5>
                </div>
            </div>
        </div>

        <div class="col-4">
            <!-- Bulalo -->
            <div class="card bg-transparent text-center" style="border:0px;">
                <img src="assets/bulalo.png" width="300px;" height="300px;" style="margin:0 auto;">

                <div class="card-body">
                    <h4><strong>Bulalo</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱150.00</strong></h5>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-evenly">
        <hr>
        <div class="row ">
            <div class="col-12" style="text-align:center;">
                <h2 style="font-family:Kunstler Script; font-size:80px;"><strong>Drinks</strong></h2>
            </div>
        </div>
        <hr>
        <!-- buko juice -->
        <div class="col-4 pt-3">
            <div class="card bg-transparent text-center" style="border:0px;">
            
                <img src="assets/bukojuice.png" width="300px;" height="300px;" style="margin:0 auto;">
                <!--<img src="assets/bukojuice.png" width="370px;" height="384px;">-->

                <div class="card-body">
                    <h4><strong>Buko Juice</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱120.00</strong></h5>
                </div>
            </div>
        </div>

        <!-- Calamansi Juice -->
        <div class="col-4 pt-3">
            <div class="card bg-transparent text-center" style="border:0px;">
            
                <img src="assets/calamansijuice.png" width="250px;" height="300px;" style="margin:0 auto;">
                <!--<img src="assets/bukojuice.png" width="370px;" height="384px;">-->

                <div class="card-body">
                    <h4><strong>Calamansi Juice</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱90.00</strong></h5>
                </div>
            </div>
        </div>

        <!-- Coke -->
        <div class="col-4 pt-3">
            <div class="card bg-transparent text-center" style="border:0px;">
            
                <img src="assets/coke.png" width="300px;" height="300px;" style="margin:0 auto;">
                <!--<img src="assets/bukojuice.png" width="370px;" height="384px;">-->

                <div class="card-body">
                    <h4><strong>Coke in Can</strong></h4>
                    <hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <h5><strong>₱50.00</strong></h5>
                </div>
            </div>
        </div>

    </div>
    
    <div class="row justify-content-evenly">
        <hr>
        <div class="row ">
                <div class="col-12" style="text-align:center;">
                    <h2 style="font-family:Kunstler Script; font-size:80px;"><strong>Desserts</strong></h2>
                </div>
            </div>
            <hr>
            <div class="col-4 pt-3">
                <!-- halo halo -->
                <div class="card bg-transparent text-center" style="border:0px;">
                    <img src="assets/halohalo.png" width="300px;" height="300px;" style="margin:0 auto;">
                    <!--<img src="assets/halohalo.png" width="331px;" height="320px;">-->

                    <div class="card-body">
                        <h4><strong>Halo-Halo</strong></h4>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        <h5><strong>₱120.00</strong></h5>
                    </div>
                </div>
            </div>

            <div class="col-4 pt-3">
                <!-- buko pandan -->
                <div class="card bg-transparent text-center" style="border:0px;">
                    <img src="assets/bukopandan.png" width="270px;" height="300px;" style="margin:0 auto;">
                    <!--<img src="assets/halohalo.png" width="331px;" height="320px;">-->

                    <div class="card-body">
                        <h4><strong>Buko Pandan</strong></h4>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        <h5><strong>₱100.00</strong></h5>
                    </div>
                </div>
            </div>

            <div class="col-4 pt-3">
                <!-- Mais Con Yelo -->
                <div class="card bg-transparent text-center" style="border:0px;">
                    <img src="assets/maisconyelo.png" width="270px;" height="300px;" style="margin:0 auto;">
                    <!--<img src="assets/halohalo.png" width="331px;" height="320px;">-->

                    <div class="card-body">
                        <h4><strong>Mais Con Yelo</strong></h4>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                        <h5><strong>₱120.00</strong></h5>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>
</div>
@endsection
