@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-4 ">
            <h1 class="fw-bold"> Place Order </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow-lg" style="border-radius:15px;">
                <div class="text-center">
                    <img src = "assets/headerlogo.png" class="img-fluid pt-4 ">
                    <h3 class="fw-bold"> Order Form </h3><hr>
                </div>  

                <!-- form starts here -->
                   
                <div class="card-body">
                    <form action="/p" method="post">
                        @csrf

                        <div class="row">
                            <h5><strong>Date: </strong>{{ now()->toDateString('Y-m-d') }}</h5>
                        </div>   
                    
                        <div class="row">
                            <h5><strong>Customer Name: </strong> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </h5>
                        </div>
                        
                        <hr>
                        <!-- order type -->
                        <div class="row">
                            <h5 class="fw-bold">Order Type:</h5>
                            <div class="col-12">
                                <input type="radio" name="ordertype" value="Pick-up" checked="true" class="ms-3">
                                <label for="pickup" class="form-label fw-bold h6">Pick-up</label>
                            </div>
                            <div class="col-12">
                                <input type="radio" name="ordertype" value="Delivery" class="ms-3">
                                <label for="delivery" class="form-label fw-bold h6">Delivery </label>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label fw-bold h5">Delivery Address: </label>
                            </div>
                            <div class="col-12">
                                <input type="text" name="address" class="form-control border-dark bg-white">
                            </div>
                        </div>
                        <hr>

                        <!-- FOODS -->
                        <div class="row">
                            <div class="col-4">
                                <h2 class="text-center fw-bold">Food</h2>
                            </div>
                            <div class="col-4 ">
                                <h2 class="text-center fw-bold">Quantity</h2>
                            </div>
                            <div class="col-4 ">
                                <h2 class="text-center fw-bold">Price</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 pt-4">
                                <!-- sinigang -->
                                <input type="checkbox" name="foodName[]" value="Sinigang" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Sinigang</label>
                                <!-- sisig --><br>
                                <input type="checkbox" name="foodName[]" value="Sisig" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Sisig</label>
                                <!-- Adobo --><br>
                                <input type="checkbox" name="foodName[]" value="Adobo" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Adobo</label>
                                <!-- Lechon Kawali --><br>
                                <input type="checkbox" name="foodName[]" value="Lechon Kawali" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Lechon Kawali</label>
                                <!-- Bulalo --><br>
                                <input type="checkbox" name="foodName[]" value="Bulalo" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Bulalo</label>
                                <!-- buko juice --><br>
                                <input type="checkbox" name="foodName[]" value="Buko Juice" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Buko Juice</label>
                                <!-- Calamansi Juice --><br>
                                <input type="checkbox" name="foodName[]" value="Calamansi Juice" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Calamansi Juice</label>
                                <!-- Coke --><br>
                                <input type="checkbox" name="foodName[]" value="Coke" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Coke in Can</label>
                                <!-- halohalo --><br>
                                <input type="checkbox" name="foodName[]" value="Halo-halo" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ps-2 mb-3">Halo-halo</label>
                                <!-- Buko Pandan --><br>
                                <input type="checkbox" name="foodName[]" value="Buko Pandan" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2 mb-3">Buko Pandan</label>
                                <!-- Mais Con Yelo --><br>
                                <input type="checkbox" name="foodName[]" value="Mais Con Yelo" class="ms-1">
                                <label for="foodName" class="form-label fw-bold h4 ms-2">Mais Con Yelo</label>
                            </div>
                            <div class="col-4 pt-3">
                                <!-- sinigang -->
                                <input type="number" name="foodQty1" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- sisig -->
                                <input type="number" name="foodQty2" class="form-control bg-white border-dark w-50 ms-5 mb-1"  min="0">
                                <!-- Adobo -->
                                <input type="number" name="foodQty3" class="form-control bg-white border-dark w-50 ms-5 mb-1"  min="0">
                                <!-- Lechon Kawali -->
                                <input type="number" name="foodQty4" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Bulalo -->
                                <input type="number" name="foodQty5" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Buko Juice -->
                                <input type="number" name="foodQty6" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Calamansi Juice -->
                                <input type="number" name="foodQty7" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Coke -->
                                <input type="number" name="foodQty8" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Halo-Halo-->
                                <input type="number" name="foodQty9" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Buko Pandan -->
                                <input type="number" name="foodQty10" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                <!-- Mais Con Yelo -->
                                <input type="number" name="foodQty11" class="form-control bg-white border-dark w-50 ms-5 mb-1" min="0">
                                
                            </div>
                            <div class="col-4 pt-4 text-end">
                                <!-- sinigang -->
                                <p class="h4 fw-bold pb-2">&#8369 299.00</p>
                                <!-- sisig -->
                                <p class="h4 fw-bold pb-2">&#8369 200.00</p>
                                <!-- adobo -->
                                <p class="h4 fw-bold pb-2">&#8369 200.00</p>
                                <!-- lechon kawali -->
                                <p class="h4 fw-bold pb-2">&#8369 250.00</p>
                                <!-- Bulalo -->
                                <p class="h4 fw-bold pb-2">&#8369 150.00</p>
                                <!-- buko juice -->
                                <p class="h4 fw-bold pb-2">&#8369 120.00</p>
                                <!-- calamansi juice -->
                                <p class="h4 fw-bold pb-2">&#8369 90.00</p>
                                <!-- coke -->
                                <p class="h4 fw-bold pb-2">&#8369 50.00</p>
                                <!-- halohalo -->
                                <p class="h4 fw-bold pb-2">&#8369 120.00</p>
                                <!-- buko pandan -->
                                <p class="h4 fw-bold pb-2">&#8369 100.00</p>
                                <!-- mais con yelo-->
                                <p class="h4 fw-bold pb-2">&#8369 120.00</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-2">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-lg btn-transparent text-dark border-dark fw-bold w-30" style="background-color:#F4C553;">
                                    Place Order
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