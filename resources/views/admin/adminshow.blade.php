@extends('layouts.app')

@section('content')
<div class="container py-4">
    @if(Auth::check())
        @if(Auth::user()->usertype == 1)
        
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card shadow-lg" style="border-radius:15px;">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="/"><img src = "/assets/headerlogo.png" class="img-fluid pt-3 pb-3"></a>
                            <h3 class="fw-bold"> Order Details </h3>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($orders as $orderKey => $orderValue)
                                    @foreach($orderValue as $orderVal)
                                    @endforeach

                                    <div class="row pb-2">
                                        <div class="col-5">
                                            <h4 class="fw-bold text-start">Order ID:</h4>
                                            <h4 class="fw-bold text-start">Order Status:</h4>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="fw-bold text-end">{{ $orderVal->user_id }}</h4>
                                            <h4 class="fw-bold text-end">{{ $orderVal->orderstatus }}</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row pb-2">
                                        <div class="col-3">
                                            <h4><strong>Name:</strong></h4>
                                            <h4><strong>Order Type:</strong></h4>
                                            <h4><strong>Address:</strong></h4>
                                        </div>
                                        <div class="col-9">
                                            <h4 class="text-end">{{ $orderVal->user->firstname }} {{ $orderVal->user->lastname }}</h4>
                                            <h4 class="text-end">{{ $orderVal->ordertype }}</h4>
                                            <h4 class="text-end">{{ $orderVal->address }}</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="fw-bold">Orders: </h4>
                                    <div class="row ps-5">
                                        @foreach($orderValue as $orderVal)
                                        <div class="col-4">
                                            <h3><strong>{{ $orderVal->food }}</strong></h3>
                                        </div>
                                        <div class="col-3 text-start">
                                            <h3>(x{{ $orderVal->quantity }})</h3>
                                        </div>
                                        <div class="col-5 text-end">
                                            <h3 class="fw-bold">&#8369 {{ $orderVal->price }} </h3>
                                        </div>
                                        @endforeach
                                    </div>
                                    <hr>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <h1 class="fw-bold ">Total: </h1>
                                    </div>
                                    <div class="col-6 text-end">
                                        <h1 class="fw-bold">&#8369 {{ $total[0]}}</h1>  
                                    </div>
                                </div>
                                <hr>    
                            </div>
                            
                            <div class="row text-center justify-content-center">
                                <form action="/adminorders/{{ $orderKey }}" method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <h1 class="fw-bold text-start pb-3"> Actions: </h1>

                                    <div class="form-check">
                                        <div class="col-4 ps-4">
                                            <input class="form-check-input" type="radio" name="ordertype" value="To Deliver" checked="true">
                                            <label for="To Deliver" class="form-label fw-bold h3">To Deliver</label>
                                        </div>
                                        <div class="col-4 ps-4">
                                            <input class="form-check-input" type="radio" name="ordertype" value="Delivered">
                                            <label for="Delivered" class="form-label fw-bold h3">Delivered </label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center pt-3">
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-success fw-bold w-100 mt-3" style="border-color:black;">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- start -->
           
            <!-- end -->

            
        @else
            <div class="row">
                <div class="col-12">
                    <h1 class="d-5">You are not authorized to access this page.</h1>
                </div>
            </div>
        @endif
    @else
        <div class="row">
            <div class="col-12">
                You are not authorized to access this page.
            </div>
        </div>
    @endif
</div>
@endsection