@extends('admin.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <hr/>
            <div class="well continer">
                {!! Form::open(['url'=>'product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editProductForm']) !!}
                <div class="form-group ">
                    <label for="productName" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-10 {{ $errors->has('productName') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="productName" value="{{$productById->productName}}">
                        <input type="hidden" value="{{$productById->id}}" name="productId">
                        @if ($errors->has('categoryName'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('productName') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="categoryId" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="categoryId">
                            <option>Select Category Name</option>
                            @foreach($category as $category)
                                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="imputEmail" class="col-sm-2 control-label">Manufecturer Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="manufacturerId">
                            <option>Select Manufecturer Name</option>
                            @foreach($manufectures as $manufectur)
                                <option value="{{$manufectur->id}}">{{$manufectur->manufacturerName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="productPrice" class="col-sm-2 control-label">Product Price</label>
                    <div class="col-sm-10 {{ $errors->has('productPrice') ? ' has-error' : '' }}">
                        <input type="number" class="form-control" name="productPrice" value="{{$productById->productPrice}}">
                        @if ($errors->has('productPrice'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('productPrice') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <label for="imputEmail" class="col-sm-2 control-label">Product Quantity</label>
                    <div class="col-sm-10 {{ $errors->has('productQuantity') ? ' has-error' : '' }}">
                        <input type="number" class="form-control" name="productQuantity" value="{{$productById->productQuantity}}">

                        @if ($errors->has('productQuantity'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('productQuantity') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('productShortDescriptoin') ? ' has-error' : '' }}">
                    <label for="productShortDescriptoin" class="col-sm-3 control-label">Product Short Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="productShortDescriptoin" rows="8">{{$productById->productShortDescriptoin}}</textarea>
                        @if ($errors->has('productShortDescriptoin'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('productShortDescriptoin') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('productDescriptoin') ? ' has-error' : '' }}">
                    <label for="productLongDescriptoin" class="col-sm-2 control-label">Product Long Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="productLongDescriptoin" rows="8">{{$productById->productLongDescriptoin}}</textarea>
                        @if ($errors->has('productLongDescriptoin'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('productLongDescriptoin') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('productImage') ? ' has-error' : '' }}">
                    <label for="productImage" class="col-sm-2 control-label">Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="productImage" accept="image" >
                        <img src="{{asset($productById->productImage)}}" height="150" width="150" alt="">
                        @if ($errors->has('productImage'))
                            <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('productImage') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="imputEmail" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publicationStatus">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success btn-block">Update Product Info</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script>
        //document.forms['editProductForm'].elements['publication_status'].value={{$productById->publication_status}};
        document.forms['editProductForm'].elements['publicationStatus'].value={{$productById->publication_status}};
        document.forms['editProductForm'].elements['categoryId'].value={{$productById->categoryId}};
        document.forms['editProductForm'].elements['manufacturerId'].value={{$productById->manufacturerId}};

    </script>
@endsection