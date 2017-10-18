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
                        <form action="/charge" method="post" id="payment-form">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="card-number">Card Number</label>
                                    <input type="text" id="card-number" class="form-control" requied>
                                </div>

                                <div class="col-xs-12">
                                    <label for="card-cvc">Card CVC</label>
                                    <input type="text" id="card-cvc" class="form-control" requied>
                                </div>

                                <div class="col-xs-12">
                                    <label for="card-name">Card Holder Name</label>
                                    <input type="text" id="card-name" class="form-control" requied>
                                </div>

                            </div>
                            <button>Submit Payment</button>
                        </form>
                </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ URL::to('js/credit.js') }}"></script>
@endsection