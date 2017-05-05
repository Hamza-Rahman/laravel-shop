@extends('layouts.master')

@section('title')
	Laravel index
@endsection

@section('content')
@foreach($products->chunk(3) as $productChunk)   
	<div class="row">
		@foreach($productChunk as $product)
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{$product->imagePath}}" alt="herry poter">
			      <div class="caption">
			        <h3>Herry potter</h3>
			        <p class="description">{{$product->description}}</p>
			        <div class="clearfix">
			        	<div class="price pull-left">$ {{$product->price}}</div>
			        	<a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
			        </div>
			      </div>
			    </div>
			  </div>
		@endforeach   
		</div>
	@endforeach
@endsection