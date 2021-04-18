@extends('layouts.app')

@section('content')


<div class="flex_container">
			<a href="ProductView.php"><img class="productview" src="Img\BlackJoggers.jpg"></a>
        </div>
		<div class="flex_container_productdetails">
			
				<div class="productdetails" name="name">{{$product->productname}}<br><div>
				<hr>
				<div class="productdetails" name="price"> &pound{{$product->price}}<br><div>
					<input  name="id" type="hidden"value="{{$product->id}}">
				
				</div>
				<button name="add"> <a href="{{route('product.addToCart',['id'=>$product->id])}}">Add to cart</a></button><br>
				<button name="favourite"><i class="far fa-heart"></i></button>
				</div>
			
		</div>

@endsection 