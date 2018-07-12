@extends('frontEnd.profile.profilelayout')
@section('mainContent')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <div class="panel panel-default text-center">
                    <div class="panel-heading ">Update Profile</div>

                    <div class="panel-body">
                        {!! Form::open(['url'=>'update/information','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editProductForm']) !!}

                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="firstname" value="{{$profiles->firstname}}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="lastname" value="{{$profiles->lastname}}" required autofocus>

                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{$profiles->email}}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <textarea name="address" class="form-control">{{$profiles->address}}</textarea>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                                <label for="phonenumber" class="col-md-4 control-label">phone number</label>

                                <div class="col-md-6">
                                    <input id="phonenumber" type="number" class="form-control" name="phonenumber" value="{{$profiles->phonenumber}}" required autofocus>

                                    @if ($errors->has('phonenumber'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-sm-4 control-label">Product Image</label>
                                <div class="col-sm-6">
                                    <img src="{{asset($profilepicture->image)}}" height="150" width="150" alt="">
                                    <input type="file" name="image" accept="image" >
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Profile
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection