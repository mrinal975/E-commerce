@extends('frontEnd.master')

@section('title')
    Shipping
@endsection
@section('mainContent')
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="well lead text-center text">You have to give us product payment information to complete your valuable order
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12  well">
            <div class="card card-login mx-auto mt-5">
                <h3 class="text-center">Payment Form</h3>
                <div class="card-body">

                    {!! Form::open(['url'=>'/checkout/save-payment','method'=>'POST','name'=>'paymentForm']) !!}

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="paymentType" value="cashOnDelivery">Cash on Delivery
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="paymentType" value="bkash">Bkash
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="paymentType" value="paypal">Paypal
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block" id="exampleInputPassword1" name="btn" type="submit" value="Submit order">
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- //contact -->