@extends('layouts.index')

@section('title')
    Laravel shopping cart

@endsection
@section('content')
<link href="{{ URL::asset('public/css/credit.css') }}" rel="stylesheet">

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total }}</h4>
                <form action="{{ route('checkout') }}" method="post" id="checkout-form">

                
                </form>
        </div>
    </div>

@endsection