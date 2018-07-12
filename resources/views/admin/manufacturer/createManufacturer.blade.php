@extends('admin.master')
@section('title')
    Create Manufacturer
    @endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <hr/>
            <div class="well">
                {!! Form::open(['url'=>'manufacturer/save','method'=>'POST','class'=>'form-horizontal']) !!}
                <div class="form-group ">

                    <label for="imputEmail" class="col-sm-4 control-label">Manufacturer Name</label>
                    <div class="col-sm-10 {{ $errors->has('manufacturerName') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="manufacturerName">

                        @if ($errors->has('manufacturerName'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('manufacturerName') }}</strong>
                                    </span>
                        @endif

                    </div>
                </div>
                <div class="form-group {{ $errors->has('manufacturerDescription') ? ' has-error' : '' }}">
                    <label for="imputEmail" class="col-sm-4 control-label">Manufacturer Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="manufacturerDescription" rows="8"></textarea>
                        @if ($errors->has('categoryDescriptoin'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('manufacturerDescription') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="imputEmail" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publicationStatus">
                            <option value="1">Published</option>
                            <option value="0">Unpubish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success btn-block">Save Manufacturer Info</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection