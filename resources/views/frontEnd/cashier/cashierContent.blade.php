@extends('frontEnd.master')
@section('title')
    @endsection
@section('mainContent')
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-md-offset-4 col-md-offset-3">
            <h1 class="text-center">Checkout</h1>
            <br>


            <form action="{{url('/charge')}}" method="post" id="payment-form">
                {{ csrf_field() }}
                <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- a Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <button>Submit Payment</button>
            </form>
        </div>
    </div>
    <br>
    @endsection
@section('js')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset('frontEnd/stripe/js/stripe.js')}}"></script>
    @endsection





