@extends('layouts.app')

@section('content')

@if(Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach ($products as $product)
                    <li class="list-group-item">
                        <span class="badge">{{$product['qty']}}</span>
                        <strong>{{$product['item']['productname']}}</strong>
                        <span class="label label-success">&pound{{$product['price']}}</span>

                        <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle"  data-toggle="dropdown">Quantity</button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Reduce by 1</a></li>
                                    <li><a href="#">Remove All</a></li>
                                </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: &pound{{$totalPrice}}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
           <a  href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
           <h2>No Items in Cart</h2>
        </div>
    </div>
@endif
@endsection