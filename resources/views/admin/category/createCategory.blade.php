@extends('admin.master')
@section('title')
    Create Category
@endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Add Category</h3>
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>

            <div class="well">
            {!! Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal']) !!}
                <div class="form-group ">

                    <label for="imputEmail" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="categoryName">

                        @if ($errors->has('categoryName'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('categoryName') }}</strong>
                                    </span>
                        @endif

                    </div>
                </div>
                <div class="form-group {{ $errors->has('categoryDescriptoin') ? ' has-error' : '' }}">
                    <label for="imputEmail" class="col-sm-4 control-label">Category Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="categoryDescriptoin" rows="8"></textarea>
                        @if ($errors->has('categoryDescriptoin'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('categoryDescriptoin') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="imputEmail" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublish</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                       <button type="submit" class="btn btn-success btn-block">Save Category Info</button>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection