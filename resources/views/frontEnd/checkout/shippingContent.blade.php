@extends('frontEnd.master')

@section('title')
    Shipping
@endsection
@section('mainContent')
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="well lead text-center text">Hellow <b>{{$customerById->firstname }}</b> You have to give us product shipping information to complete your valuable order.
                If your product billing information & shipping information are same then just press on save shipping info button
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12  well">
            <div class="card card-login mx-auto mt-5">
                <h3 class="text-center">Shipping Form</h3>
                <div class="card-body">

                    {!! Form::open(['url'=>'/checkout/save-shipping','method'=>'POST','name'=>'shippingform']) !!}

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input class="form-control" name="fulname" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="{{$customerById->firstname.$customerById->lastname}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" value="{{$customerById->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea name="address" class="form-control" rows="4">{{$customerById->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input class="form-control" name="phonenumber" id="exampleInputPassword1" type="number" value="{{$customerById->phonenumber}}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Dist. Name :</label>
                        <select class="form-control" id="sel1" name="districtname">
                            <option >Select District</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Rajsahi">Rajsahi</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Savar">Savar</option>
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input class="btn btn-success btn-block" id="exampleInputPassword1" name="btn" type="submit" value="Save Information">
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        //values=
        document.forms['shippingform'].elements['districtname'].value='{{$customerById->districtname}}';
    </script>

@endsection
<!-- //contact -->