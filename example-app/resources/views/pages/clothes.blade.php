@extends('layouts.app')

@section('content')
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">

@if(count($product)>0)
    @foreach($product as $item)

    <form action="" method="post">
        <img class="bd-placeholder-img" src="{{asset('css/BlackJoggers.jpg')}}">
        <h4><a href="/users/{{$item->id}}">{{$item->productname}}</a></h4>
        &pound{{$item->price}}
        <button name="favourite"><i class="far fa-heart"></i></button>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
    </form> 
@endforeach
{{$product->links()}}
    @else
    <p> no clothes </p>
@endif
</div><!-- /.col-lg-4 -->
</div><!-- /.row -->
@endsection 

