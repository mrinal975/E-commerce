@extends('admin.master')
@section('title')
    View Product
@endsection
@section('content')
    <hr/>
    <h2 class="text-center text-success">{{Session::get('message')}}</h2>

    <table class="table table-hover table-bordered">
    <tr>
        <th>Product Id</th>
        <th>{{$productById->id}}</th>
    </tr>
        <tr>
            <th>Product Name</th>
            <th>{{$productById->productName}}</th>
        </tr>
        <tr>
            <th>Category Name</th>
            <th>{{$productById->categoryName}}</th>
        </tr>
        <tr>
            <th>Manufcturer Name</th>
            <th>{{$productById->manufacturerName}}</th>
        </tr>
        <tr>
            <th>Product Price</th>
            <th>{{$productById->productPrice}}</th>
        </tr>
        <tr>
            <th>Product Quantity</th>
            <th>{{$productById->productQuantity}}</th>
        </tr>
        <tr>
            <th>Product Short Description</th>
            <th>{!! $productById->productShortDescriptoin !!}</th>
        </tr>
        <tr>
            <th>Product Long Description</th>
            <th>{!! $productById->productLongDescriptoin !!}</th>
        </tr>
        <tr>
            <th>Product Image</th>
            <th><img src="{{asset($productById->productImage)}}" alt="{{$productById->productImage}}" height="200" width="200"></th>

        </tr>
        <tr>
            <th>Product Status</th>
            <th>{{$productById->publication_status=1? 'published':'Unpublished'}}</th>
        </tr>
    </table>
@endsection