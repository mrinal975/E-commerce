@extends('admin.master')
@section('title')
    Edit Manufacturer
@endsection
@section('content')
    <br>
    <div class="row">
        <h1></h1>
        <div class="col-lg-12">
            <hr/>
            <div class="well">
                {!! Form::open(['url'=>'manufacturer/update','method'=>'POST','class'=>'form-horizontal','name'=>'editManufacturer']) !!}
                <div class="form-group ">
                    <label for="imputEmail" class="col-sm-4 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="manufacturerName" value="{{$manufactureById->manufacturerName}}">
                        <input type="hidden" class="form-control" name="id" value="{{$manufactureById->id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="imputEmail" class="col-sm-4 control-label">Category Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="manufacturerDescription" rows="8" >{{$manufactureById->manufacturerDescription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="imputEmail" class="col-sm-4 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publicationStatus">
                            <option value="1">Publication</option>
                            <option value="0">Unpublication</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success btn-block">Update Category Info</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script>
        document.forms['editManufacturer'].elements['publication_status'].value={{$manufactureById->publication_status}};
    </script>
@endsection