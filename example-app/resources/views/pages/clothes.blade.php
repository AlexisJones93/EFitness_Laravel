@extends('layouts.app')

@section('content')
<div class="container-md">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">

@if(count($product)>0)
    @foreach($product as $item)

    
        <img class="bd-placeholder-img" src="{{asset('css/BlackJoggers.jpg')}}">
        <h4><a href="/clothes/{{$item->id}}">{{$item->productname}}</a></h4>
        &pound{{$item->price}}
        <button name="favourite"><i class="far fa-heart"></i></button>
      </div>
      <div class="col-lg-4">
    
@endforeach

    @else
    <p> no clothes </p>
@endif
</div><!-- /.col-lg-4 -->
</div><!-- /.row -->
<div class="row">
  <div class="col-lg-4 mt-3">
    {{$product->links("pagination::bootstrap-4")}}
  </div>
</div>
@endsection 

