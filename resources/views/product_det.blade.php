@extends('layouts.app')
@section('content')	
    <div class="container" style="margin-top:20px;text-align: center;">
        <header>
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
        </header>
        <main>
            <div class="product-image">
            @php
                $imgUrl = asset('img/'.$product->image);
            @endphp
                <img src="{{$imgUrl}}" alt="Product Image">
            </div>
            <div class="product-details">
                <h4>Product Details</h4>
                <p><strong>Price:</strong> ${{$product->price}}</p>
                <p><strong>Availability:</strong> In Stock</p>                
                <p>Snack &amp; Munchies</p>                
                <a  type="button" href="{{route('product.purchase',$product->id)}}" class="btn btn-info">Buy now using Stripe</a>
            </div>
        </main>
        
    </div>
    @endsection
