@extends('layouts.index')

@section('title')
    Laravel shopping cart
@endsection

@section('content')

    @foreach($products->chunk(3) as $productChunk)
    <div class="row" style="margin-top:5%">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail"> {{-- style="background-color:black;">  --}}
                <img src="{{$product->imagePath}}"/>
            <div class="caption">
                <h3 class="title">{{ $product->title}}</h3>
                <p class="description">{{ $product->description }}</p>
                
                <div class="clearfix">
                    <div class="pull-left price">${{ $product->price }}</div>
                    <p><a href="{{ route('product.addToCart', ['id' => $product->id ]) }}" class="btn btn-danger pull-right" role="button">Add to Cart</a></p>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
@endsection