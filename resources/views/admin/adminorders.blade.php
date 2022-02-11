@extends('layouts.app')

@section('content')
<div class="container py-4">
    @if(Auth::check())
        @if(Auth::user()->usertype == 1)
        
            <!-- start-->

            @if(count($orders)<0)
                <h1> You have no orders. </h1>
            @else
            
                <div class="card shadow-lg bg-white" style="border-radius:15px 15px 0px 0px;">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row justify-content-center">
                                <img src = "/assets/headerlogo.png" class="w-25 pt-3 mb-3">
                                <h3 class="fw-bold"> View Orders </h3><hr>

                                <div class="row pb-4 align-items-center justify-content-between">

                                    <div class="col-4 border border-end">

                                    <!-- search bar -->
                                        <form action="/adminorders/search" method="POST">
                                            @csrf
                                            
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-white" name="searchKey" placeholder="Search Name">

                                                <button type="submit" class="btn btn-default ms-5" style="background-color:#F4C553;">
                                                    Search
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- filter ordertype -->
                                    <div class="col-4 text-center border border-end">
                                        <form action="/adminorders/filterordertype" method="POST">
                                            @csrf

                                            <input type="radio" name="ordertype" value="Pick-up" class="ms-3">
                                            <label for="Pick-up" class="form-label fw-bold h6">Pick-up</label>

                                            <input type="radio" name="ordertype" value="Delivery" class="ms-3 fw-bold">
                                            <label for="Delivery" class="form-label fw-bold h6">Delivery</label>
                                            
                                            <button type="submit" class="btn btn-default ms-5" style="background-color:#F4C553;">
                                                Filter
                                            </button>
                                        </form>
                                    </div>

                                    <!-- filter -->
                                    <div class="col-4 text-end border border-end">
                                        <form action="/adminorders/filter" method="POST">
                                            @csrf

                                            <input type="radio" name="status" value="Pending" class="">
                                            <label for="Pending" class="form-label fw-bold h6">Pending </label>

                                            <input type="radio" name="status" value="To Deliver" class=" fw-bold">
                                            <label for="To Deliver" class="form-label fw-bold h6">To Deliver</label>

                                            <input type="radio" name="status" value="Delivered" class="">
                                            <label for="Delivered" class="form-label fw-bold h6">Delivered </label>         
                                            
                                            <button type="submit" class="btn btn-default ms-5" style="background-color:#F4C553;">
                                                Filter
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <hr>
                            </div>

                            <div class="row align-items-center">
                                <!-- searchkey display -->
                                <div class="col text-start">
                                    <h4 class="text-start fw-bold"> Search Key: </h4> 
                                    <h3 class="text-start ms-3 mb-5"> {{ $searchKey ?? 'None'}} </h3>
                                </div>
                                <!-- ----- -->
                                <!-- filter display -->
                                <div class="col text-start">
                                    <h4 class="text-start fw-bold "> Filter: </h4> 
                                    <h3 class="text-start ms-3 mb-5"> {{ $filter ?? 'None'}} </h3>
                                </div>
                                <!-- ----- -->
                            </div>
                            <div class="card-body">
                                <table class="table align-middle fw-bold table-bordered">
                                    <thead class="thead-dark border border-2 border-dark align-middle" style="background-color:#ED9F4A">
                                        <tr class="h4"> 
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Order Type</th>
                                            <th scope="col">Delivery Address</th>
                                            <th scope="col">Food Ordered</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Admin Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $orderKey => $orderValue)
                                            @foreach ($orderValue as $orderVal)
                                            @endforeach

                                            <tr>     
                                                <td class="fw-bold h1"> {{ $orderKey }} </td>
                                                <td class="fw-bold h5"> {{ $orderVal->user->firstname }} {{ $orderVal->user->lastname }} </td>
                                                <td class="fw-bold h5"> {{ $orderVal->ordertype }} </td>
                                                <td class="fw-bold h5 text-start"> {{ $orderVal->address }} </td>
                                                <td> 
                                                    @foreach ($orderValue as $orderVal)
                                                        <h5><strong>{{ $orderVal->food }}</strong>
                                                        (x{{ $orderVal->quantity}}) </h5>
                                                    @endforeach
                                                </td>
                                                <td class="fw-bold h5"> {{ $orderVal->orderstatus }} </td>
                                                <td> 
                                                    <a href="/adminorders/{{ $orderKey }}">
                                                        <button class="btn btn-lg btn-default text-dark fw-bold w-30" 
                                                                style="background-color:#F4C553;"> View </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>     
        
                <!-- end -->
            @endif
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

