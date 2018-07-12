@extends('frontEnd.master')

@section('title')
    Checkout
@endsection
@section('mainContent')
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="well lead text-center text">You have to login to complete your valuable order.If you are not registered then please registere first
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6  well">
        <div class="card card-login mx-auto mt-5">
            <h3 class="text-center">Register Form</h3>
            <div class="card-body">

                {!! Form::open(['url'=>'/checkout/sign-up','login','method'=>'POST','class'=>'form-horizontal']) !!}

                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">First Name</label>
                    <input class="form-control" name="firstname" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter First Name">
                    @if ($errors->has('firstname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input class="form-control" name="lastname" id="exampleInputPassword1" type="text" placeholder="Enter Last Name">
                    @if ($errors->has('lastname'))
                        <span class="help-block">
                             <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea name="address" placeholder="Enter Address" class="form-control" rows="4"></textarea>
                    @if ($errors->has('address'))
                        <span class="help-block">
                             <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                    <label for="exampleInputPassword1">Phone</label>
                    <input class="form-control" min="01" name="phonenumber" id="exampleInputPassword1" type="number" placeholder="Enter Phone Number">
                    @if ($errors->has('number'))
                        <span class="help-block">
                             <strong>{{ $errors->first('number') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('districtname') ? ' has-error' : '' }}">
                    <label for="sel1">Dist. Name :</label>
                    <select class="form-control" id="sel1" name="districtname">
                        <option >---Select District----</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Rajsahi">Rajsahi</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Savar">Savar</option>
                    </select>
                    <br>
                    @if ($errors->has('districtname'))
                        <span class="help-block">
                             <strong>{{ $errors->first('districtname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"></label>
                    <input class="btn btn-success btn-block" id="exampleInputPassword1" name="btn" type="submit" value="Register">
                </div>

                {!! Form::close() !!}
            </div>
        </div>
        </div>

        <!--   Login Here   -->
        <div class="col-md-6 well">
            <div class="card card-login mx-auto mt-5">
                <h3 class="text-center">Login Form</h3>
                <div class="card-body">
                {!! Form::open(['url'=>'/customer/login','login','method'=>'POST','class'=>'form-horizontal']) !!}
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input class="btn btn-success btn-block" id="exampleInputPassword1" name="btn" type="submit" value="Login">
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- //contact -->