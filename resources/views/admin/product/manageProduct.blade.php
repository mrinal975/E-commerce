@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <hr/>
    <h2 class="text-center text-success">{{Session::get('message')}}</h2>

    <table class="table vcctable-hover table-bordered">
        <tr>
            <thead>
            <tr>
                <th class="text-center">Productt Name</th>
                <th class="text-center">Category Name</th>
                <th class="text-center">Manufacturer Name</th>
                <th class="text-center">Product Price</th>
                <th class="text-center">Product Quantity</th>
                <th class="text-center">Publication Status</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="text-center">{{$product->productName}}</td>
                    <td class="text-center">{{$product->categoryName}}</td>
                    <td class="text-center">{{$product->manufacturerName}}</td>
                    <td class="text-center">TK.{{$product->productPrice}}</td>
                    <td class="text-center">{{$product->productQuantity}}</td>
                    <td class="text-center">{{$product->publication_status==1 ? 'Publish':'Unpublish'}}</td>
                    <td>
                        <a href="{{url('product/view/'.$product->id)}}" title="View Product" class="btn btn-success">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('product/edit/'.$product->id)}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('product/delete/'.$product->id)}}" title="Delete Product" onclick="return confirm('Are you sure to delete');" class="btn btn-danger" >
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </tr>
    </table>
@endsection